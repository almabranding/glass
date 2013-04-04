<?php

// Always provide a TRAILING SLASH (/) AFTER A PATH
$hosting=(strstr($_SERVER['HTTP_HOST'],'localhost'))?'http://localhost:8888/glass/':'http://borndevelopments.com/glass/';
define('URL', $hosting.'/');
define('LIBS', 'libs/');

define('DB_TYPE', 'DB_TYPE');
define('DB_HOST', 'DB_HOST');
define('DB_NAME', 'DB_NAME');
define('DB_USER', 'DB_USER');
define('DB_PASS', 'DB_PASS');

// The sitewide hashkey, do not change this because its used for passwords!
// This is for other hash keys... Not sure yet
define('HASH_GENERAL_KEY', 'MixitUp200');

// This is for database passwords only
define('HASH_PASSWORD_KEY', 'catsFLYhigh2000miles');

define('UPLOAD', 'uploads/images/');