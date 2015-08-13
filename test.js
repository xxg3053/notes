var callback = function(result){
	alert('这个函数执行完了,结果是：'+result)
}

var init = function(a,b,c){
	var c = a+b;
	c(c);
}

init();//执行 