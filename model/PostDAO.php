<?php
require_once('Post.php');

class PostDAO {

	# attributs
	private PDO $bdd;

	# constructeur
	public function __construct() {
		try {
			$this->bdd = new PDO('mysql:host=localhost;dbname=blogvacances;charset=utf8', 'bthouverez', '321654');
		} catch(Exception $e) {
			die($e->getMessage());
		}
	}

	# getAll
	public function getAll() : array {
		$sql = 'SELECT * FROM Posts ORDER BY posted_at DESC';
		$res = $this->bdd->query($sql);

		$ret = [];
		$tab = $res->fetchAll();
		foreach($tab as $row) {
			$ret[] = new Post(
				$row['id'], $row['title'], $row['posted_at'], $row['content'],
				$row['picture'], $row['user_id']
			);
		}
		return $ret;
	}

	# getById
	public function getById($i) : ?Post {
		$sql = 'SELECT * FROM Posts WHERE id = ?';
		$res = $this->bdd->prepare($sql);
		$res->execute([$i]);

		$row = $res->fetch();
		if($row) {
			 return new Post(
				$row['id'], $row['title'], $row['posted_at'], $row['content'],
				$row['picture'], $row['user_id']
			);
		}
	}

	# getByUserId
	public function getByUserId($i) : array {
		$res = [];
		$sql = 'SELECT * FROM Posts WHERE user_id = ?';
		$res = $this->bdd->prepare($sql);
		$res->execute([$i]);

		$tab = $res->fetchAll();
		foreach($tab as $row) {
			$res[] = new Post(
				$row['id'], $row['title'], $row['posted_at'], $row['content'],
				$row['picture'], $row['user_id']
			);
		}
		return $res;
	}




	public function add(Post $p) : ?int {

		$sql = 'INSERT INTO Posts(title, content, posted_at, picture, user_id) 
		VALUES(:title, :content, NOW(), :picture, :user_id)';
		$res = $this->bdd->prepare($sql);
		$res->execute([
			'title' => $p->getTitle(),
			'content' => $p->getContent(),
			'picture' => $p->getPicture(),
			'user_id' => $p->getAuthor()->getId()]);
		return 1;

	}

	public function delete(int $i) : bool {

	}


}