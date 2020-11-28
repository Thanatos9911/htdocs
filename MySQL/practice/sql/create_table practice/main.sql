use practice;
drop table spam;
create table spam (
    id int(11) AUTO_INCREMENT not null primary key,
    name varchar(40),
    sex char(1),
    age int(11)
);

insert into spam (name, sex, age) values ("yuuki iwai", "m", 12),
("kento yamada", "m", null),
("aoi tatibana", "f", 40),
("satuki kawanabe", "f", null);

-- select * from spam;

insert into spam (id, name, sex, age) value (10, "harai sayaka", "f", 16);

insert into spam (name, sex, age) values ("hana kojima", "f", 12),
("kento yamada", "m", 40),
("kentoya mada", "m",null),
("kenta yamanaka", "m", 15);

select * from spam;

select * from spam where name like "%yamada";

select * from spam where name like "%yama%";

select * from spam where id = 2;
update spam set age = 51 where id = 2;
select * from spam where id = 2;

-- \. C:\Apache\Apache24\htdocs\MySQL\practice\sql\create_table practice\main.sql;