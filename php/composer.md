# Composer

## 安装
`curl -s https://getcomposer.org/installer | php`

项目根目录中建立名为 composer.json 的文件

	{
	    "require": {
	        "slim/slim": "2.*"
	    }
	}

`php composer.phar install`

	<?php
	require 'vendor/autoload.php';
