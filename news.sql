SET table_type=InnoDB;
show variables like 'table_type';
SET character_set_client='utf8';
SET character_set_connection='utf8';
SET character_set_database='utf8';
SET character_set_results='utf8';
SET character_set_server='utf8';
SET collation_connection=utf8_general_ci;
SET collation_database=utf8_general_ci;
SET collation_server=utf8_general_ci;
show variables like	'character%';
show variables like	'collation%';
create database news;
use news;
create table category(
category_id int auto_increment primary key,
name char(20) NOT NULL unique
);
create table users(
user_id int auto_increment primary key,
name char(20) not NULL,
password char(32) NOT NULL,
address varchar(50),
avatar varchar(255),
telephone bigint,
resume text,
grade int(11),
email varchar(50) NOT NULL unique
);
create table news(
news_id int auto_increment primary key,
user_id int,
category_id int,
title char(100) not null,
content text,
publish_time datetime,
unix_time text,
clicked int,
attachment char(100),
constraint FK_news_user foreign key (user_id) references users(user_id),
constraint FK_news_category foreign key (category_id) references category(category_id)
);
create table review(
review_id int auto_increment primary key,
news_id int,
content text,
publish_time datetime,
state char(10),
ip char(15),
constraint FK_review_news foreign key (news_id) references news(news_id)
);
DROP TABLE IF EXISTS `fangweima`;
CREATE TABLE fangweima (
  fangweima_id int(11) NOT NULL AUTO_INCREMENT,
  code varchar(32) NOT NULL unique,
  publish_time datetime
);
DROP TABLE IF EXISTS `suggestion`;
CREATE TABLE suggestion (
  suggestion_id int(11) NOT NULL unique AUTO_INCREMENT,
  suggestion_content text,
  attachment char(100),
  add_time datetime
);
create table productcategory(
productcategory_id int auto_increment primary key,
name char(20) NOT NULL unique
);
create table product(
product_id int auto_increment primary key,
user_id int,
productcategory_id int,
product_title char(100) not null,
product_content text,
product_price int,
quantity int,
color varchar(12),
weight varchar(12),
brand varchar(32),
inch varchar(16),
product_url varchar(255),
publish_time datetime,
unix_time text,
clicked int,
attachment char(100),
constraint FK_product_user foreign key (user_id) references users(user_id),
constraint FK_product_productcategory foreign key (productcategory_id) references productcategory(productcategory_id)
);
