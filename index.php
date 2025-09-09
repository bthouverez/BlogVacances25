<?php

require_once('model/PostDAO.php');
require_once('model/UserDAO.php');
session_start();

$daoPost = new PostDAO;
$daoUser = new UserDAO;

$errorMessage = '';

if(isset($_POST['storePost'])) { # traite une requete HTTP
	$p = new Post;
	$u = $daoUser->getById($_SESSION['user_id']);
	$p->setAuthor($u);
	$p->setTitle($_POST['title']);
	$p->setContent($_POST['content']);
	$daoPost->add($p);  
}

if(isset($_POST['btnConnect'])) {
	if(isset($_POST['username']) AND $_POST['username'] != '') {
		if(isset($_POST['password']) AND $_POST['password'] != '') {
			$message = $daoUser->checkUser($_POST['username'], $_POST['password']);

			if(is_int($message)) {
				$_SESSION['username'] = $_POST['username'];
				$_SESSION['user_id'] = $message;
			} else {
				$errorMessage = $message; 	
			}
		}
	}
}

if(isset($_GET['deco'])) {
	session_destroy();
}

$allPosts = $daoPost->getAll();


# inclusion des vues

if(isset($_SESSION['username'])) {
	include('views/main.php');
} else {
	include('views/connection.php');
}
