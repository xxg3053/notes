# redis
Redis是一个key-value存储系统。和Memcached类似，它支持存储的value类型相对更多，包括string(字符串)、list(链表)、set(集合)、zset(sorted set --有序集合)和hash(哈希类型)。这些数据类型都支持push/pop、add/remove及取交集并集和差集及更丰富的操作，而且这些操作都是原子性的。在此基础上，redis支持各种不同方式的排序。与memcached一样，为了保证效率，数据都是缓存在内存中。区别的是redis会周期性的把更新的数据写入磁盘或者把修改操作写入追加的记录文件，并且在此基础上实现了master-slave。


## 安装

1. [官网下载](http://redis.io/),在github下载zip包，将bin\release下32位或者64位包解压到redis安装目录
2. 启动redis `redis-server.exe redis.conf`
3. 窗口要保持开启 关闭时redis服务会自动关闭
4. 测试 
	* `redis-cli.exe -h 127.0.0.1 -p 6379`
	* `set name kenfo`
	* `get name`

5. java 开发包jedis
