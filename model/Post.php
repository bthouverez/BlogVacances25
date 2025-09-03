<?php

// DTO Post

class Post {
	private int $id;
	private string $title;
	private string $posted_at;
	private string $content;
	private string $picture;
	private int $user_id;

	public function __construct(
		int $i = 1, 
		string $t = "", 
		string $pa = "", 
		string $c = "", 
		string $p = "",
		int $u = 0) {
			$this->id = $i;
			$this->title = $t;
			$this->posted_at = $pa;
			$this->content = $c;
			$this->picture = $p;
			$this->user_id = $u;
	}

	public function getId() : int { return $this->id; }
	public function setId($i) : void { $this->id = $i; }
	public function getTitle() : int { return $this->title; }
	public function setTitle($t) : void { $this->title = $t; }
	public function getPostedAt() : int { return $this->posted_at; }
	public function setPostedAt($pa) : void { $this->posted_at = $pa; }
	public function getContent() : int { return $this->content; }
	public function setContent($c) : void { $this->content = $c; }
	public function getPicture() : int { return $this->picture; }
	public function setPicture($p) : void { $this->picture = $p; }
	public function getUserId() : int { return $this->user_id; }
	public function setUserId($u) : void { $this->user_id = $u; }

}