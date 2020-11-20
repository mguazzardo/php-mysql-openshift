use sample;

create table users (user_id int not null auto_increment, username varchar(200),PRIMARY KEY(user_id));

insert into users values (null, 'joe');
insert into users values (null, 'alice');
insert into users values (null, 'jason');
insert into users values (null, 'woody');
insert into users values (null, 'tom');
insert into users values (null, 'donald');
