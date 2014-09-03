<?php
/**
 * Copyright (c) 2014 Robin Appelman <icewind@owncloud.com>
 * This file is licensed under the Licensed under the MIT license:
 * http://opensource.org/licenses/MIT
 */

namespace Icewind\SMB;

use Icewind\SMB\Exception\AlreadyExistsException;
use Icewind\SMB\Exception\Exception;
use Icewind\SMB\Exception\ForbiddenException;
use Icewind\SMB\Exception\InvalidTypeException;
use Icewind\SMB\Exception\NotEmptyException;
use Icewind\SMB\Exception\NotFoundException;

/**
 * Low level wrapper for libsmbclient-php for error handling
 */
class NativeState {
	/**
	 * @var resource
	 */
	protected $state;

	protected $handlerSet = false;

	protected $connected = false;

	protected function handleError() {
		$error = smbclient_state_errno($this->state);
		switch ($error) {
			// see error.h
			case 0;
				return;
			case 1:
				throw new ForbiddenException();
			case 2:
				throw new NotFoundException();
			case 17:
				throw new AlreadyExistsException();
			case 20:
				throw new InvalidTypeException();
			case 21:
				throw new InvalidTypeException();
			case 39:
				throw new NotEmptyException();
			default:
				throw new Exception('Unknown error (' . $error . ')');
		}
	}

	protected function testResult($result) {
		if ($result === false or $result === null) {
			$this->handleError();
		}
	}

	/**
	 * @param string $workGroup
	 * @param string $user
	 * @param string $password
	 * @return bool
	 */
	public function init($workGroup, $user, $password) {
		if ($this->connected) {
			return true;
		}
		$this->state = smbclient_state_new();
		$result = @smbclient_state_init($this->state, $workGroup, $user, $password);

		$this->testResult($result);
		$this->connected = true;
		return $result;
	}

	/**
	 * @param string $uri
	 * @return resource
	 */
	public function opendir($uri) {
		$result = @smbclient_opendir($this->state, $uri);

		$this->testResult($result);
		return $result;
	}

	/**
	 * @param resource $dir
	 * @return array
	 */
	public function readdir($dir) {
		$result = @smbclient_readdir($this->state, $dir);

		$this->testResult($result);
		return $result;
	}

	/**
	 * @param $dir
	 * @return bool
	 */
	public function closedir($dir) {
		$result = smbclient_closedir($this->state, $dir);

		$this->testResult($result);
		return $result;
	}

	/**
	 * @param string $old
	 * @param string $new
	 * @return bool
	 */
	public function rename($old, $new) {
		$result = @smbclient_rename($this->state, $old, $this->state, $new);

		$this->testResult($result);
		return $result;
	}

	/**
	 * @param string $uri
	 * @return bool
	 */
	public function unlink($uri) {
		$result = @smbclient_unlink($this->state, $uri);

		$this->testResult($result);
		return $result;
	}

	/**
	 * @param string $uri
	 * @param int $mask
	 * @return bool
	 */
	public function mkdir($uri, $mask = 0777) {
		$result = @smbclient_mkdir($this->state, $uri, $mask);

		$this->testResult($result);
		return $result;
	}

	/**
	 * @param string $uri
	 * @return bool
	 */
	public function rmdir($uri) {
		$result = @smbclient_rmdir($this->state, $uri);

		$this->testResult($result);
		return $result;
	}

	/**
	 * @param string $uri
	 * @return array
	 */
	public function stat($uri) {
		$result = @smbclient_stat($this->state, $uri);

		$this->testResult($result);
		return $result;
	}

	/**
	 * @param resource $file
	 * @return array
	 */
	public function fstat($file) {
		$result = @smbclient_fstat($this->state, $file);

		$this->testResult($result);
		return $result;
	}

	/**
	 * @param string $uri
	 * @param string $mode
	 * @param int $mask
	 * @return resource
	 */
	public function open($uri, $mode, $mask = 0666) {
		$result = @smbclient_open($this->state, $uri, $mode, $mask);

		$this->testResult($result);
		return $result;
	}

	/**
	 * @param string $uri
	 * @param int $mask
	 * @return resource
	 */
	public function create($uri, $mask = 0666) {
		$result = @smbclient_creat($this->state, $uri, $mask);

		$this->testResult($result);
		return $result;
	}

	/**
	 * @param resource $file
	 * @param int $bytes
	 * @return string
	 */
	public function read($file, $bytes) {
		$result = @smbclient_read($this->state, $file, $bytes);

		$this->testResult($result);
		return $result;
	}

	/**
	 * @param resource $file
	 * @param string $data
	 * @param int $length
	 * @return int
	 */
	public function write($file, $data, $length = null) {
		$result = @smbclient_write($this->state, $file, $data, $length);

		$this->testResult($result);
		return $result;
	}

	/**
	 * @param resource $file
	 * @param int $offset
	 * @param int $whence SEEK_SET | SEEK_CUR | SEEK_END
	 * @return int
	 */
	public function lseek($file, $offset, $whence = SEEK_SET) {
		$result = @smbclient_lseek($this->state, $file, $offset, $whence);

		$this->testResult($result);
		return $result;
	}

	/**
	 * @param resource $file
	 * @param int $size
	 * @return bool
	 */
	public function ftruncate($file, $size) {
		$result = @smbclient_ftruncate($this->state, $file, $size);

		$this->testResult($result);
		return $result;
	}

	public function close($file) {
		$result = @smbclient_close($this->state, $file);

		$this->testResult($result);
		return $result;
	}

	/**
	 * @param string $uri
	 * @param string $key
	 * @return string
	 */
	public function getxattr($uri, $key) {
		$result = @smbclient_getxattr($this->state, $uri, $key);

		$this->testResult($result);
		return $result;
	}

	/**
	 * @param string $uri
	 * @param string $key
	 * @param string $value
	 * @param int $flags
	 * @return mixed
	 */
	public function setxattr($uri, $key, $value, $flags = 0) {
		$result = @smbclient_setxattr($this->state, $uri, $key, $value, $flags);

		$this->testResult($result);
		return $result;
	}

	public function __destruct() {
		if ($this->connected) {
			smbclient_state_free($this->state);
		}
	}
}
