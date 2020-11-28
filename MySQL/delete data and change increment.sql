use php_prac;

select * from user_data;

delete from user_data where id=4;

alter table user_data auto_increment=4;

select * from user_data;

SELECT auto_increment FROM information_schema.tables WHERE table_schema = 'php_prac' and table_name = 'user_data';
-- \. C:\Apache\Apache24\htdocs\MySQL\delete data and change increment.sql