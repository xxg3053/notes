# Maven

[中央仓库](http://search.maven.org/)
[备用仓库](http://mvnrepository.com/)

[视频](http://www.imooc.com/learn/443)

	Maven是基于项目对象模型（POM)，可以通过一小段描述信息来管理项目的构建、报告和文档的软件项目管理工具

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

## 
