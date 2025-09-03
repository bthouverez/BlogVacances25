<?php

require_once('User.php');

class UserDAO {

	private PDO $bdd;

	public function __construct() {
		try {
			$this->bdd = new PDO('mysql:host=localhost;dbname=blogvacances;charset=utf8', 'bthouverez', '321654');
		} catch(Exception $e) {
			die($e->getMessage());
		}
	}

	public function getAll() : array {
		// Requete
		$sql = "SELECT * FROM users";
		$res = $this->bdd->query($sql);
		$ret = [];

		// Parcours le résultat de la requête - les données brutes de la bdd

		$all = $res->fetchAll();

		foreach($all as $tab) {
			// on transforme ces données en objet PHP DTO
			// en créant un nouveau DTO vide et en remplissant les données
			$user = new User();
			$user->setId($tab['id']);
			$user->setName($tab['name']);
			$user->setMail($tab['mail']);
			$user->setPassword($tab['password']);
			
			// on ajoute ce nouvel objet dans un tableau
			$ret[] = $user;
		}

		// Renvoyer le tableau
		return $ret;
	}

	public function getById($i) : User {

	}

	public function add(User $u) : int {

	}

	public function delete(int $i) : bool {

	}
}