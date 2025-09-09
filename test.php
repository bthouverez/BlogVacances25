<?php # test.php
require_once('model/UserDAO.php');
require_once('model/PostDAO.php');


$daoUser = new UserDAO();
/*
$r = $daoUser->getAll();

var_dump($r);
*/
/*
$student = $daoUser->getById(3);
var_dump($student);*/
/*
$daoPost = new PostDAO;
$posts = $daoPost->getById(8);
var_dump($posts);*/

echo password_hash("alice@example.com", PASSWORD_DEFAULT);