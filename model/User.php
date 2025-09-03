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
			$this->name = $t;
			$this->mail = $pa;
			$this->password = $c;
	}

	public function getId() : int { return $this->id; }
	public function setId($i) : void { $this->id = $i; }
	public function getTitle() : int { return $this->title; }
	public function setTitle($t) : void { $this->title = $t; }
	public function getPostedAt() : int { return $this->posted_at; }
	public function setPostedAt($pa) : void { $this->posted_at = $pa; }
	public function getPassword() : int { return $this->password; }
	public function setPassword($p) : void { $this->password = $p; }

}
