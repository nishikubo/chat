CREATE DATABASE Chat;
USE Chat;

CREATE TABLE chat(
	id int NOT NULL,
	loginid varchar(32) NOT NULL,
	password varchar(16) NOT NULL,
	dispname varchar(32) NOT NULL,
	del_flag boolean,
	lastlogin_date datetime,
	
	PRIMARY KEY(id)
);

insert into chat(id, loginid, password, dispname ,del_flag ,lastlogin_date )
values(1, 'tom','nosushinolife','GOD',false,'2016-12-19 10:00:00'),
		(2, 'mike','apple2016','Taro',false,'2016-12-19 10:05:00'),
		(3, 'mary','c@ndyclash','Yoko',false,'2016-12-19 10:10:00');
