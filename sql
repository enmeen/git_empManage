create table admin(
id int primary key,
name varchar(32) not null,
password varchar(128) not null);

雇员表 emp

create table emp(
id int primary key auto_increment,
name varchar(64) not null,
grade tinyint,
email varchar(64) not null)

添加初始化数据

insert into emp(name,grade,email)values('admin1',1,'admin123@168.com');
insert into emp(name,grade,email)values('admin2',1,'admin123@168.com');
insert into emp(name,grade,email)values('admin3',1,'admin123@168.com');
insert into emp(name,grade,email)values('admin4',1,'admin123@168.com');
insert into emp(name,grade,email)values('admin5',1,'admin123@168.com');
insert into emp(name,grade,email)values('admin6',1,'admin123@168.com');
insert into emp(name,grade,email)values('admin7',1,'admin123@168.com');
insert into emp(name,grade,email)values('admin8',1,'admin123@168.com');
insert into admin values(100,'admin1',md5('admin1'));
insert into admin values(100,'1234',md5('1234'));
insert into admin values(103,'1234','1234');
use  empmanage;
select  * from emp;