# [Mysql 开发技巧](http://www.imooc.com/learn/427)
## 行列转换
> `select a.user_name,kills from user1 a join user_kills b on a.id=b.user_id ` *带有姓名的杀怪记录表*
> `select a.user_name,sum(kills) from user1 a join user_kills b on a.id=b.user_id group by a.user_name` *汇总*
>`select * from (select sum(kills) as '沙僧' from user1 a join user_kills b on a.id=b.user_id and a.user_name='沙僧') a cross join (select sum(kills) as '孙悟空' from user1 a join user_kills b on a.id=b.user_id and a.user_name='孙悟空') b cross join (select sum(kills) as '唐僧' from user1 a join user_kills b on a.id=b.user_id and a.user_name='唐僧') c` *行转列 cross join 笛卡尔积*
>`select sum(case when user_name='孙悟空' then kills end) as '孙悟空' , sum(case when user_name='八戒' then kills end) as '八戒', sum(case when user_name='沙僧' then kills end) as '沙僧' from user1 a join user_kills b on a.id=b.user_id ` *使用case 行转列*

## 列转行
