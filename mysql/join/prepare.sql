drop database if exists test_rzlearning;
create database test_rzlearning;

use test_rzlearning;

create table if not exists product (
    id mediumint(8) unsigned not null auto_increment primary key,
    category_id mediumint(8) unsigned not null,
    name char(80) not null
) engine=innodb default charset=utf8;

create table if not exists category (
    category_id mediumint(8) unsigned not null auto_increment primary key,
    category_name char(80) not null
) engine=innodb default charset=utf8;

insert into product (category_id, name) values (1, "mouse");
insert into product (category_id, name) values (1, "keyboard");
insert into product (category_id, name) values (2, "coke");
insert into product (category_id, name) values (2, "snack");
insert into product (category_id, name) values (2, "tea");
insert into product (category_id, name) values (3, "high performace ...");

insert into category (category_id, category_name) values ( 1, "hardware");
insert into category (category_id, category_name) values ( 2, "food");
insert into category (category_id, category_name) values ( 4, "pet");
insert into category (category_id, category_name) values ( 5, "car");

