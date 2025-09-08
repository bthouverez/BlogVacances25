<?php
require_once('UserDAO.php');

// DTO Post

class Post {
	private int $id;
	private string $title;
	private DateTime $posted_at;
	private string $content;
	private string $picture;
	private User $author;

	public function __construct(
		int $i = 1, 
		string $t = "", 
		string $pa = "", 
		string $c = "", 
		string $p = "",
		int $u = 0) {
			$this->id = $i;
			$this->title = $t;
			$this->posted_at = new DateTime($pa);
			$this->content = $c;
			$this->picture = $p;
			# $this->user_id = $u;
			$dao = new UserDAO();
			$this->author = $dao->getById($u);
	}

	public function getId() : int { return $this->id; }
	public function setId($i) : void { $this->id = $i; }
	public function getTitle() : int { return $this->title; }
	public function setTitle($t) : void { $this->title = $t; }
	public function getPostedAt() : DateTime { return $this->posted_at; }
	public function setPostedAt($pa) : void { $this->posted_at = $pa; }
	public function getContent() : int { return $this->content; }
	public function setContent($c) : void { $this->content = $c; }
	public function getPicture() : int { return $this->picture; }
	public function setPicture($p) : void { $this->picture = $p; }
	public function getUser() : User { return $this->author; }
	public function setUser($u) : void { $this->author = $u; }

}