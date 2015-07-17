# php

1.将PHP的压缩包zip解压到一个目录下，推荐：“C:/PHP”。 下载非nts版本,即线程安全版本
2.将PHP目录（C:/PHP）下的 php.ini-dist 文件重命名为 php.ini，PHP的配置文件就是它，修改以下几个地方，修改好后把 php.ini 文件复制到 C：\WINDOWS\ 目录里： 
>	extension_dir="C:\php\ext" ，指向php文件夹下放置“php_*.dll”文件的路径。PHP4和PHP5的路径在这里有所区别。 
	doc_root="D:\PHP" ，指向前面apache设置的首页位置； 
	default_charset="gb2312" ，修改默认字符集，这里，如果前面有分号“;”，去掉这个分号； 
	register_globals=Off 改为 register_globals=On ，使传递全局变量有效； 
	extension=php_dba.dll 如果前面有分号，取消分号，以下同； 
	extension=php_dbase.dll 
	extension=php_gd2.dll  GD库做图，一般用于图形验证码； 
	extension=php_mysql.dll  用于连接MYSQL数据库； 
	magic_quotes_gpc = On  如果是 Off，一定要打开为 On，这是防止sql攻击的重要的一步！5.0版本已经默认 On 了。

3.将PHP目录下的 php5ts.dll 文件拷贝到 C:\WINDOWS\system32 目录。 
4.打开Apache目录下conf目录中的httpd.conf文件，查找#LoadModule，在其末尾处大概是128行的地方 
*php5apache2_2.dll 对应的是apache2.2版本，请对应相应版本*
 >       添加： 
        LoadModule php5_module "D:/php/php5/php5apache2_2.dll" 
        PHPIniDir "D:/php/php5" 
        AddType application/x-httpd-php .php
        AddType application/x-httpd-php .htm 
        AddType application/x-httpd-php .html 

 注意：第一行的目录路径要更新为当前版本的apache动态链接库，比如这里我使用的是apache2.2.8版本和php5.2.5，那这个文件必须是php5apache2_2.dll，而不能是php5apache.dll、php5apache2.dll等。第二行为php脚步的后缀。 
    php4版中，需要添加一行 AddType mod_php4.c，而在php5中，就不需要这样的一行 AddType mod_php5.c了，php5已经集成，否则 apache 启动不了。