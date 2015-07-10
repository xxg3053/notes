#github基本操作
> `git init` 添加到版本管理
>
> 新建**.gitignore**文件，写入不需要push的文件 eg:*node_modules bower_components .idea ....*
>
> `git status`查看
>
> `git add -A`
>
> `git rm -r --cached .` 撤销刚刚的git add操作
>
> `git commit -m "first version"`
>
> `git tag 0.1.0`
>
> 在github上创建svg项目
> `git remote add origin https://github.com/kenfo/svg.git`
>
> `git push origin master` 将版本推送到github上
>
> `git push origin 0.1.0` 将tag推送
*********************
>如果是直接通过`git clone https://github.com/xxg3053/xxx.git`下载下来的项目 就不需要 `git remote add origin https://xxxxx`

****************
## git的密码
>在项目界面按`t`进入查找界面 `ESC`退出
>
>在项目的`setting`里面删除项目
