use practice;
drop table spam if exist;
create table spam (
    id int(11) auto_increment not null primary key,
    name varchar(40),
    age int(11)
);