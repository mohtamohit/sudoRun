<?php 
	
	
	echo 'START';
	$db = mysql_connect(localhost,'monty','111111') or die('fuck off');
	$query = 'create database if not exists ddb';
	mysql_query($query,$db);
	mysql_query('use ddb');
	$query = 'create table blogList(
				blog_id integer unsigned not null auto_increment,
				writer text not null,
				blog_name text not null,
				Competitive_Programming integer not null,
				Machine_Learning integer not null,
				Parallel_Computing integer not null,
				Artificial_Intelligence integer not null,
				Networking integer not null,
				blog_text text not null,
				primary key(blog_id)
			) 
			ENGINE = MyISAM';
	mysql_query($query,$db);

	$query = 'create table userList(
				user_id integer unsigned not null auto_increment,
				name text not null,
				handle text not null,
				password text not null,
				primary key(user_id)
			) 
			ENGINE = MyISAM';
	mysql_query($query,$db);

	$query = 'create table modList(
				mod_id integer unsigned not null auto_increment,
				name text not null,
				handle text not null,
				password text not null,
				primary key(mod_id)
			) 
			ENGINE = MyISAM';
	mysql_query($query,$db);

	$query = 'create table ModPosts(
				blog_id integer unsigned not null auto_increment,
				writer text not null,
				blog_name text not null,
				Competitive_Programming integer not null,
				Machine_Learning integer not null,
				Parallel_Computing integer not null,
				Artificial_Intelligence integer not null,
				Networking integer not null,
				blog_text text not null
			) 
			ENGINE = MyISAM';
	mysql_query($query,$db);

	$query = 'create table Fame(
				blog_id integer,
				fame integer not null
			) 
			ENGINE = MyISAM';
	mysql_query($query,$db);
	
	echo 'SUCCESS';
?>
