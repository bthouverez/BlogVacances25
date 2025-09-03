<?php # test.php
require_once('model/UserDAO.php');

$dao = new UserDAO();
$r = $dao->getAll();

var_dump($r);
echo "Coucou";