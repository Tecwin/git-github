<?php
	/*$conn=mysqli_connect("localhost","root","");
	$q1="create database weather";
	$q2=mysqli_query($conn,$q1);
	$conn=mysqli_connect("localhost","root","","weather");
	$q1="create table userinfo (
		name varchar(30) not null,
		userid varchar(30) primary key,
		password varchar(30) not null,
		phno integer not null)";
	mysqli_query($conn,$q1);*/
	$conn=mysqli_connect("localhost","root","","weather");
	$q1="create table searchinfo (
		userid varchar(30) ,
		locat varchar(30) not null,
		date date not null,
		searchat time not null )";
	mysqli_query($conn,$q1);
	?>