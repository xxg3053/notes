# Hybrid App

Mobile App分为三大类：Native App,Hybrid App,Web App。其中Hybrid App介于Native App和Web App之间，它能兼顾Native App的良好用户体验及强大的功能并具有Web App跨平台快速开发的优势。缺点在于依赖于各平台的WebView，WebView的性能好坏直接决定了Hybrid App的性能。

>	KendoUI 2013年面向开发者做了一次有关的Hybrid调查，并将结果整理成了报告The HTML5 vs. Native Debate is Over and the Winner is...，下面来看报告中几个关键的结论：

>	1. 在受访的2309个Mobile开发者中，到2013年8月为止完全使用Native开发的只有8%，而剩余的92%都可以被认为使用的是Hybrid

## 相关技术

* less/sass：css的预处理器。
* bower：管理依赖的JS库。
* grunt：作为项目打包工具。
* [nodejs](#nodejs)
* [Cordova](#cordova)
* [AngularJS](#angularjs)
* [SQLite](#sqlite)

## nodejs

>	JavaScript是一种运行在浏览器的脚本，它简单，轻巧，易于编辑，这种脚本通常用于浏览器的前端编程，但是一位开发者Ryan有一天发现这种前端式的脚本语言可以运行在服务器上的时候，一场席卷全球的风暴就开始了。
Node.js是一个基于Chrome JavaScript运行时建立的平台， 用于方便地搭建响应速度快、易于扩展的网络应用。Node.js 使用事件驱动， 非阻塞I/O 模型而得以轻量和高效，非常适合在分布式设备上运行的数据密集型的实时应用。
V8引擎执行Javascript的速度非常快，性能非常好。
Node是一个Javascript运行环境(runtime)。实际上它是对Google V8引擎进行了封装。V8引 擎执行Javascript的速度非常快，性能非常好。Node对一些特殊用例进行了优化，提供了替代的API，使得V8在非浏览器环境下运行得更好。

## npm

>	npm是node的包管理器，我们在开发nodejs应用程序的过程中，可能需要依赖许许多多的第三方模块以提高开发效率，那么此时，我们就需要npm来辅助安装所需package。

## Cordova 

*(PhoneGap)*
>	PhoneGap是一个用基于HTML，CSS和JavaScript的，创建移动跨平台移动应用程序的快速开发平台。它使开发者能够利用iPhone，Android，Palm，Symbian,WP7,WP8,Bada和Blackberry智能手机的核心功能——包括地理定位，加速器，联系人，声音和振动等，此外PhoneGap拥有丰富的插件，可以调用。
业界很多主流的移动开发框架均源于PhoneGap。较著名的有Worklight、appMobi、WeX5等；其中WeX5为国内打造，完全Apache开源，在融合Phonegap的基础上，做了深度优化，具备接近Native app的性能，同时开发便捷性也较好。

#### phonegap

1. Phonegap是Adobe公司旗下的开源跨平台移动应用软件开发框架,拥有丰富的api接口,轻松访问原生功能
2. 会html css  js就可以开发跨7个平台的移动软件开发框架(written once run everywhere)
3. 几乎原生开发能完成的功能 phonegap都能完成
4. 开发成本低  最多是原生App的五分之一！

## AngularJS

>	AngularJS诞生于2009年，由Misko Hevery 等人创建，后为Google所收购。是一款优秀的前端JS框架，已经被用于Google的多款产品当中。AngularJS有着诸多特性，最为核心的是：MVVM、模块化、自动化双向数据绑定、语义化标签、依赖注入、等等。

1.MVC
2.模块化与依赖注入
3.双向数据绑定
4.指令与 UI 控件

## ionic

>	Ionic 是一个强大的 HTML5 应用程序开发框架，号称 Advanced HTML5 Hybrid Mobile AppFramework 是 AngularJS 移动端解决方案 可以帮助您使用 Web 技术，比如 HTML、 CSS 和Javascript 构建接近原生体验的移动应用程序。 Ionic 主要关注外观和体验，以及和你的应用程序的 UI 交互，特别适合用于基于 Hybird 模式的 HTML5 移动应用程序开发。
Ionic 是一个轻量的手机 UI 库，具有速度快，界面现代化、美观等特点。为了解决其他一些UI 库在手机上运行缓慢的问题。

## SQLite 

*(localStorage有5M的限制)*
>	SQLite 是一个开源的嵌入式关系数据库，实现自包容、零配置、支持事务的SQL数据库引擎。 其特点是高度便携、使用方便、结构紧凑、高效、可靠。 与其他数据库管理系统不同，SQLite 的安装和运行非常简单，在大多数情况下 - 只要确保SQLite的二进制文件存在即可开始创建、连接和使用数据库。如果您正在寻找一个嵌入式数据库项目或解决方案，SQLite是绝对值得考虑

## 移动WebApp开发框架对比

* Sencha Touch
	* 优点
		* 用户体验最接近Native App， 具有整体的UI组件、布局解决方案；
		* 统一的编程代码结构和要求，良好组织的代码易于维护；
		* 继承ExtJS 4的应用程序MVC架构；
		* 完善的API文档，示例；活跃的社区，网上有大量的文档书籍帮助学习.
	* 缺点
		* 兼容性差，仅支持webkit内核的浏览器；
		* 框架比较重量级，学习成本比较高；
		* 商业化使用有版权问题

* jQuery Mobile
	* 优点
		* 跨浏览器兼容性最好，几乎兼容所有的平台和浏览器；
		* 入门简单，语法简洁，编码灵活，一些简单的应用直接用HTML既可实现，无需Javascript；
		* 开源插件与第三方扩展网上资源丰富； 
		* 完善的API文档，示例；活跃的社区，网上有大量的文档书籍帮助学习；
	* 缺点
		* jQuery Mobile对代码没有特定的要求，后期维护难度较大；

* Dojo Mobile
	* 优点
		* Dojo本身有很多优秀的设计，面向对象、MVC、JS模块化加载；
		* 完善的API文档，示例；活跃的社区，网上有大量的文档书籍帮助学习；
	* 缺点
		* Dojo Mobile需要依赖完整的dojo库，压缩之后的代码140k，gzip压缩之后在40k；
		* 兼容性差，仅支持webkit内核的浏览器；
		* 学习成本高；


* Jqmobi（Intel's App Framework）
	* 优点
		* 没有什么突出的优点，感觉是与Sencha非常相似的一个框架；
	* 缺点
		* 兼容性相比Sencha Touch稍好一点，但是也不支持WP IE、Firefox、Opera；

* ionic
	* 优点：
		* 性能优异
		* 基于红的发紫AngularJs
		* 漂亮的UI
		* 强大的命令行(基于更热门的nodejs)
		* 开发团队非常活跃，
		* 相关配套非常齐全：
		    * 相对充足的学习资料，Learn Iconic,The Iconic book
		    * ngcordova，将主流的Cordova API或者Cordova插件封装为AngularJS扩展，使用非常方便。
		    * 开源免费的webfont icon库ionicons,基本满足你icon需求。
		    * 甚至最近开发出的可视化开发工具Ionic Creator
			* 异常活跃的在线社区


* GMU 
	* 好像挂掉了


## coding
*部分代码展示*

#### 目录结构

#### index.html
>		<!DOCTYPE html>
		<html>
		  <head>
		    <meta charset="utf-8">
		    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
		    <title></title>
		    <link href="lib/ionic/css/ionic.css" rel="stylesheet">
		    <link href="css/style.css" rel="stylesheet">
		    <!-- IF using Sass (run gulp sass first), then uncomment below and remove the CSS includes above
		    <link href="css/ionic.app.css" rel="stylesheet">
		    -->
		    <!-- ionic/angularjs js -->
		    <script src="lib/ionic/js/ionic.bundle.js"></script>
		    <script src="js/ng-cordova.js"></script>
		    <!-- cordova script (this will be a 404 during development) -->
		    <script src="cordova.js"></script>
		    <!-- your app's js -->
		    <script src="js/app.js"></script>
		  </head>
		  <body ng-app="starter">
		  <ion-nav-bar class="bar-balanced">
		      <ion-nav-back-button>
		      </ion-nav-back-button>
		    </ion-nav-bar>
		  <ion-nav-view> </ion-nav-view>
		  </body>
		</html>

#### app.js

###### 模块定义
>		angular.module('starter', ['ionic', 'ngCordova'])
		.run(function($ionicPlatform,$cordovaSQLite) {
		  $ionicPlatform.ready(function() {
		    // Hide the accessory bar by default (remove this to show the accessory bar above the keyboard
		    // for form inputs)
		    if(window.cordova && window.cordova.plugins.Keyboard) {
		      cordova.plugins.Keyboard.hideKeyboardAccessoryBar(true);
		    }
		    if(window.StatusBar) {
		      StatusBar.styleDefault();
		    }
		    db = $cordovaSQLite.openDB("my.db");
		    $cordovaSQLite.execute(db, "CREATE TABLE IF NOT EXISTS people (id integer primary key, firstname text, lastname text)");
		  });
		})

###### 路由定义
>		.config(function($stateProvider, $urlRouterProvider,$ionicConfigProvider) {
		    $stateProvider
		    //abstract
		    .state('menus', {
		        url:'/menus',
		        abstract: true,
		        templateUrl: 'html/menus.html'
		    })

###### 控制器定义
>		.controller("dbCtrl", function($scope, $cordovaSQLite,$ionicLoading,$timeout) {
		    $scope.people = {
		        firstname:'first',
		        lastname:'last'
		    }
		    $scope.peoples = [];
		    $scope.myNotice = function(msg, timeout){
		        $ionicLoading.show({template:msg});
		        $timeout(function(){$ionicLoading.hide();}, timeout || 1000);
		        return false;
		    }

####  




