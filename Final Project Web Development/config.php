<?php
  //For Server/DB on Freehostia
  $servername="localhost";
  $username="shimeh25_users";
  $password="shime25db";
  $dbname="shimeh25_users";

  error_reporting(E_ALL ^ E_WARNING); 

  $conn=new mysqli($servername, $username, $password, $dbname);

  if($conn->connect_error){
    die("Connection Failed" . $conn->connect_error);
  }
