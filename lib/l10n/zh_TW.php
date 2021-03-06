<?php
$TRANSLATIONS = array(
"Cannot write into \"config\" directory!" => "無法寫入 config 目錄！",
"This can usually be fixed by giving the webserver write access to the config directory" => "允許網頁伺服器寫入設定目錄通常可以解決這個問題",
"See %s" => "見 %s",
"This can usually be fixed by %sgiving the webserver write access to the config directory%s." => "%s允許網頁伺服器寫入設定目錄%s通常可以解決這個問題",
"Sample configuration detected" => "偵測到範本設定",
"It has been detected that the sample configuration has been copied. This can break your installation and is unsupported. Please read the documentation before performing changes on config.php" => "看來您直接複製了範本設定來使用，這可能會毀掉你的安裝，請閱讀說明文件後對 config.php 進行適當的修改",
"Help" => "說明",
"Personal" => "個人",
"Settings" => "設定",
"Users" => "使用者",
"Admin" => "管理",
"App \\\"%s\\\" can't be installed because it is not compatible with this version of ownCloud." => "無法安裝應用程式 %s 因為它和此版本的 ownCloud 不相容。",
"No app name specified" => "沒有指定應用程式名稱",
"Unknown filetype" => "未知的檔案類型",
"Invalid image" => "無效的圖片",
"web services under your control" => "由您控制的網路服務",
"App directory already exists" => "應用程式目錄已經存在",
"Can't create app folder. Please fix permissions. %s" => "無法建立應用程式目錄，請檢查權限：%s",
"No source specified when installing app" => "沒有指定應用程式安裝來源",
"No href specified when installing app from http" => "從 http 安裝應用程式，找不到 href 屬性",
"No path specified when installing app from local file" => "從本地檔案安裝應用程式時沒有指定路徑",
"Archives of type %s are not supported" => "不支援 %s 格式的壓縮檔",
"Failed to open archive when installing app" => "安裝應用程式時無法開啓壓縮檔",
"App does not provide an info.xml file" => "應用程式沒有提供 info.xml 檔案",
"App can't be installed because of not allowed code in the App" => "無法安裝應用程式因為在當中找到危險的代碼",
"App can't be installed because it is not compatible with this version of ownCloud" => "無法安裝應用程式因為它和此版本的 ownCloud 不相容。",
"App can't be installed because it contains the <shipped>true</shipped> tag which is not allowed for non shipped apps" => "無法安裝應用程式，因為它包含了 <shipped>true</shipped> 標籤，在未發行的應用程式當中這是不允許的",
"App can't be installed because the version in info.xml/version is not the same as the version reported from the app store" => "無法安裝應用程式，因為它在 info.xml/version 宣告的版本與 app store 當中記載的版本不同",
"Application is not enabled" => "應用程式未啟用",
"Authentication error" => "認證錯誤",
"Token expired. Please reload page." => "Token 過期，請重新整理頁面。",
"Unknown user" => "未知的使用者",
"%s enter the database username." => "%s 輸入資料庫使用者名稱。",
"%s enter the database name." => "%s 輸入資料庫名稱。",
"%s you may not use dots in the database name" => "%s 資料庫名稱不能包含小數點",
"MS SQL username and/or password not valid: %s" => "MS SQL 使用者和/或密碼無效：%s",
"You need to enter either an existing account or the administrator." => "您必須輸入一個現有的帳號或管理員帳號。",
"MySQL/MariaDB username and/or password not valid" => "MySQL/MariaDB 使用者或密碼不正確",
"DB Error: \"%s\"" => "資料庫錯誤：\"%s\"",
"Offending command was: \"%s\"" => "有問題的指令是：\"%s\"",
"MySQL/MariaDB user '%s'@'localhost' exists already." => "MySQL/MariaDB 使用者 '%s'@'localhost' 已經存在",
"Drop this user from MySQL/MariaDB" => "自 MySQL/MariaDB 刪除這個使用者",
"MySQL/MariaDB user '%s'@'%%' already exists" => "MySQL/MariaDB 使用者 '%s'@'%%' 已經存在",
"Drop this user from MySQL/MariaDB." => "自 MySQL/MariaDB 刪除這個使用者",
"Oracle connection could not be established" => "無法建立 Oracle 資料庫連線",
"Oracle username and/or password not valid" => "Oracle 用戶名和/或密碼無效",
"Offending command was: \"%s\", name: %s, password: %s" => "有問題的指令是：\"%s\" ，使用者：\"%s\"，密碼：\"%s\"",
"PostgreSQL username and/or password not valid" => "PostgreSQL 用戶名和/或密碼無效",
"Set an admin username." => "設定管理員帳號。",
"Set an admin password." => "設定管理員密碼。",
"Can't create or write into the data directory %s" => "無法建立或寫入資料目錄 %s",
"%s shared »%s« with you" => "%s 與您分享了 %s",
"Sharing %s failed, because the file does not exist" => "分享 %s 失敗，因為檔案不存在",
"You are not allowed to share %s" => "你不被允許分享 %s",
"Sharing %s failed, because the user %s is the item owner" => "分享 %s 失敗，因為 %s 才是此項目的擁有者",
"Sharing %s failed, because the user %s does not exist" => "分享 %s 失敗，因為使用者 %s 不存在",
"Could not find category \"%s\"" => "找不到分類：\"%s\"",
"seconds ago" => "幾秒前",
"_%n minute ago_::_%n minutes ago_" => array("%n 分鐘前"),
"_%n hour ago_::_%n hours ago_" => array("%n 小時前"),
"today" => "今天",
"yesterday" => "昨天",
"_%n day go_::_%n days ago_" => array("%n 天前"),
"last month" => "上個月",
"_%n month ago_::_%n months ago_" => array("%n 個月前"),
"last year" => "去年",
"years ago" => "幾年前",
"A valid username must be provided" => "必須提供一個有效的用戶名",
"A valid password must be provided" => "一定要提供一個有效的密碼",
"The username is already being used" => "這個使用者名稱已經有人使用了",
"No database drivers (sqlite, mysql, or postgresql) installed." => "沒有安裝資料庫驅動程式 (sqlite, mysql, 或 postgresql)"
);
$PLURAL_FORMS = "nplurals=1; plural=0;";
