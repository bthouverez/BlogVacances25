<?php

// DTO User

class User {
	private int $id;
	private string $name;
	private string $mail;
	private string $password;

	public function __construct(
		int $i = 1, 
		string $n = "", 
		string $m = "", 
		string $p = "") {
			$this->id = $i;
			$this->name = $n;
			$this->mail = $m;
			$this->password = $p;
	}

	public function getId() : int { return $this->id; }
	public function setId($i) : void { $this->id = $i; }
	public function getName() : int { return $this->name; }
	public function setName($n) : void { $this->name = $n; }
	public function getMail() : int { return $this->mail; }
	public function setMail($m) : void { $this->mail = $m; }
	public function getPassword() : int { return $this->password; }
	public function setPassword($p) : void { $this->password = $p; }

}
