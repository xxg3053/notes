# sublime基本设置

## sublime text3 install package control

* 使用Ctrl+`快捷键或者通过View->Show Console菜单打开命令行，粘贴如下代码：
> `import urllib.request,os; pf = 'Package Control.sublime-package'; ipp = sublime.installed_packages_path(); urllib.request.install_opener( urllib.request.build_opener( urllib.request.ProxyHandler()) ); open(os.path.join(ipp, pf), 'wb').write(urllib.request.urlopen( 'http://sublime.wbond.net/' + pf.replace(' ','%20')).read())`

* 安装皮肤 
 `ctrl + shift + p install pageckage`
 `Material`

#### 插件

* Material 皮肤

* markdown

* emmet (zen coding)

* less

* sass

* angularjs

* jade  html模板

* expressComplete

* nodejs

* color highlighter  显示颜色
 
* color picker   拾取颜色

* DocBlockr 自动补全注释
