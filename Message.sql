/*
MySql initialization
author:SilverHayasaka
*/
create table message
(
	id      int primary key auto_increment,
	name    varchar(32),
	url     varchar(64),
	title   varchar(128),
	content varchar(512),
	data    datetime
);
insert into message (name, url, title, content, data)
values ('Nanami', '0721@cafe.com', '测试标题', '测试内容', now());
