# Maven
Maven是基于项目对象模型（POM)，可以通过一小段描述信息来管理项目的构建、报告和文档的软件项目管理工具

* [中央仓库](http://search.maven.org/)
* [镜像仓库](http://mvnrepository.com/)

* [视频](http://www.imooc.com/learn/443)

## 目录结构

	src
		-main
			-java
				-package
		-test
			-java
				-package
		-resources

## pom.xml  （项目根目录）
pom.xml 是maven重要组成部分

	<modelVersion> maven 版本
	<groupId> 项目包名
	<artifactId> 模块名(项目名)
	<version> 项目版本 snapshot快照

	<dependencies> 依赖
		<dependency>
		   <groupId>junit</groupId>
		   <artifactId>junit</artifactId>
		   <version>4.10</version>
		</dependency>


## 命令

	`mvn -v`
	`cd 项目目录`
	`mvn compile`  编译
	`mvn test` 	   执行测试
	`mvn package`  打包
	`mvn clean`    删除target
	`mvn install`  安装jar包到本地仓库

	`mvn archetype:generate ` 使用 archetype 插件创建基本项目目录

## 本地仓库
conf/setting.xml 里面的localrepo...

## eclipse
jdk里面的jre
eclipse运行在独立的jre上
两套jre的区别：？

## 生命周期
完整的项目构建过程：
	**清理、编译、测试、打包、集成测试、验证、部署**

* clean  
* compile
* test
* package
* install
* site 生成项目站点
	* pre-site 生成站点前的工作
	* site 生成项目站点文档
	* post-site 生成项目站点后完成的工作
	* site-deploy 发布生成的站点到服务器上

### 插件
 在pom.xml中添加：
 <plugins></plugins>


