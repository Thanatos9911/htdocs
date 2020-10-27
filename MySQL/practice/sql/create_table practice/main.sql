use practice;
drop table spam;
create table spam (
    id int(11) AUTO_INCREMENT not null primary key,
    name varchar(40),
    age int(11)
);

insert into spam (name, age) values ("shiqiao zhou", 12),
("yunyuan zhou", 40),
("ssb",);

select * from spam;