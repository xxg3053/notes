# command

`df -hl` 查看磁盘空间使用情况

`rm -rf 文件夹名`

`cp -r 源文件或目录 目标文件或目录`

`rename xx xx `文件重命名

`ps -a`查看进程

`kill pid` 杀死进程

`rename xx xx `文件重命名

	`screen -S screenName`
	`ctrl+a+d 最小化`
	`screen -ls` 查看
	`screen -r 1038 ` 进去
	`ctrl+a+k` 关掉
	`screen -D  -r ＜session-id>`  状态为Attached的解决办法

## 授权

	sudo chmod 600 ××× （只有所有者有读和写的权限）
	sudo chmod 644 ××× （所有者有读和写的权限，组用户只有读的权限）
	sudo chmod 700 ××× （只有所有者有读和写以及执行的权限）
	sudo chmod 666 ××× （每个人都有读和写的权限）
	sudo chmod 777 ××× （每个人都有读和写以及执行的权限）
