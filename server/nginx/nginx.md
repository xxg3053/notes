# nigix

## [下载](http://nginx.org/en/download.html)

## ubuntu 安裝

`$sudo apt-get install nginx`

* 所有的配置文件都在/etc/nginx
* 日志放在了/var/log/nginx
* 配置/etc/nginx/sites-enabled/default

	server {
	listen       80;
	server_name  localhost;
		location / {
		    proxy_connect_timeout   3;
		    proxy_send_timeout      30;
		    proxy_read_timeout      30;
		    proxy_pass http://localhost:81;
		}
		location /node/ {
		    proxy_connect_timeout   3;
		    proxy_send_timeout      30;
		    proxy_read_timeout      30;
		    proxy_pass http://localhost:3000;
		}
	}

## 命令
`start nginx` //启动
`nginx -s stop` //停止
`nginx -s reload`//重启




