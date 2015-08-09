# JBPM

* 底层使用hiberante

## eclipse插件
	
* 安装方式 百度

## 使用设计器设计流程

* 必须有Start和End节点
* node fork state consform

## 测试

* ProcessDefinition 流程模板
* ProcessInstance 流程实例
* Token 流程顺序

>	public static void main(String[] args){
		ProcessDefinition processDefinition = 
			ProcessDefinition.parseXmlResource("helloworld/processdefinition.xml"); //流程模板
		ProcessInstance processInstance = new ProcessInstance(processDefinition); // 流程实例
		Token token = processInstance.getRootToken(); //流程

		System.out.println("1 当前流程所处的节点名称：" + token.getNode().getName()); 
		token.signal(); //流程向下异步

		System.out.println("2 当前流程所处的节点名称：" + token.getNode().getName());
		token.signal();
		//....

		System.out.println("当前流程状态："+token.getProcessInstance().hasEnded());
	}

## 配置

* JbpmConfiguration 配置文件对象
* JbpmConfiguration 单列对象，通过getInstance()实例化
* JbpmConfiguration 最大作用就是创建一个jbpmContext对象，jbpm上下文，数据库操作
* JbpmConfiguration 是线程安全的

## JbpmConfiguration
 
* createJbpmContext()
* getCurrentJbpmContext()
* createSchema() 建表
* dropSechema() 删除表
* getJobExecutor() 得到任务调度服务对象
* startJobExcutor() 开始系统的任务调度服务