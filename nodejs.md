# nodejs

## npm 

* 通过 config 配置指向国内镜像源 (临时)
`npm config set registry http://registry.cnpmjs.org `//配置指向源
`npm info express`  //下载安装第三方包

* 通过 npm 命令指定下载源  (临时)
`npm --registry http://registry.cnpmjs.org info express`

* 在配置文件 ~/.npmrc 文件写入源地址 (永久)
`nano ~/.npmrc `  //打开配置文件
`registry =https://registry.npm.taobao.org `  //写入配置文件