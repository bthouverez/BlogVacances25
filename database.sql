DROP TABLE IF EXISTS posts;
DROP TABLE IF EXISTS users;

CREATE TABLE users (
	id INT PRIMARY KEY AUTO_INCREMENT,
	name VARCHAR(255) NOT NULL,
	mail VARCHAR(255) NOT NULL,
	password VARCHAR(255) NOT NULL
);

CREATE TABLE posts (
	id INT PRIMARY KEY AUTO_INCREMENT,
	title VARCHAR(255) NOT NULL,
	posted_at DATETIME NOT NULL,
	content TEXT NOT NULL,
	picture VARCHAR(255),
	user_id INT,
    FOREIGN KEY (user_id) REFERENCES users(id)
);


INSERT INTO users (id, name, mail, password) VALUES 
(1, 'Alice Dupont', 'alice@example.com', 'hashed_pwd1'),
(2, 'Bob Martin', 'bob@example.com', 'hashed_pwd2'),
(3, 'Charlie Leroy', 'charlie@example.com', 'hashed_pwd3'),
(4, 'Diane Petit', 'diane@example.com', 'hashed_pwd4'),
(5, 'Eric Morel', 'eric@example.com', 'hashed_pwd5');

INSERT INTO posts (id, title, posted_at, content, picture, user_id) VALUES
(1, 'Mon premier post', '2024-11-07 12:26:30', 'Contenu du post 1 écrit par Alice Dupont.', 'image_1.jpg', 1),
(2, 'Mon premier post', '2024-11-05 12:26:30', 'Contenu du post 2 écrit par Alice Dupont.', 'image_2.jpg', 1),
(3, 'Vacances d''été', '2025-02-25 12:26:30', 'Contenu du post 3 écrit par Alice Dupont.', 'image_3.jpg', 1),
(4, 'Nouvelle recette', '2025-04-01 12:26:30', 'Contenu du post 4 écrit par Alice Dupont.', 'image_4.jpg', 1),
(5, 'Carnet de voyage', '2025-04-14 12:26:30', 'Contenu du post 5 écrit par Alice Dupont.', 'image_5.jpg', 1),

(6, 'Astuce du jour', '2024-12-22 12:26:30', 'Contenu du post 6 écrit par Bob Martin.', 'image_6.jpg', 2),
(7, 'Lecture en cours', '2025-03-16 12:26:30', 'Contenu du post 7 écrit par Bob Martin.', 'image_7.jpg', 2),
(8, 'Photo préférée', '2025-01-27 12:26:30', 'Contenu du post 8 écrit par Bob Martin.', 'image_8.jpg', 2),
(9, 'Découverte Flutter', '2024-11-18 12:26:30', 'Contenu du post 9 écrit par Bob Martin.', 'image_9.jpg', 2),
(10, 'Randonnée en montagne', '2024-10-20 12:26:30', 'Contenu du post 10 écrit par Bob Martin.', 'image_10.jpg', 2),
(11, 'Projet Laravel', '2025-05-02 12:26:30', 'Contenu du post 11 écrit par Bob Martin.', 'image_11.jpg', 2),

(12, 'Nouvelle recette', '2025-04-12 12:26:30', 'Contenu du post 12 écrit par Charlie Leroy.', 'image_12.jpg', 3),
(13, 'Sortie du week-end', '2024-10-15 12:26:30', 'Contenu du post 13 écrit par Charlie Leroy.', 'image_13.jpg', 3),
(14, 'Vacances d''été', '2025-02-10 12:26:30', 'Contenu du post 14 écrit par Charlie Leroy.', 'image_14.jpg', 3),
(15, 'Carnet de voyage', '2025-01-05 12:26:30', 'Contenu du post 15 écrit par Charlie Leroy.', 'image_15.jpg', 3),
(16, 'Mon premier post', '2024-09-23 12:26:30', 'Contenu du post 16 écrit par Charlie Leroy.', 'image_16.jpg', 3),

(17, 'Lecture en cours', '2025-01-14 12:26:30', 'Contenu du post 17 écrit par Diane Petit.', 'image_17.jpg', 4),
(18, 'Projet Laravel', '2025-02-20 12:26:30', 'Contenu du post 18 écrit par Diane Petit.', 'image_18.jpg', 4),
(19, 'Astuce du jour', '2024-09-29 12:26:30', 'Contenu du post 19 écrit par Diane Petit.', 'image_19.jpg', 4),
(20, 'Photo préférée', '2025-03-02 12:26:30', 'Contenu du post 20 écrit par Diane Petit.', 'image_20.jpg', 4),
(21, 'Découverte Flutter', '2025-04-28 12:26:30', 'Contenu du post 21 écrit par Diane Petit.', 'image_21.jpg', 4),
(22, 'Randonnée en montagne', '2025-01-21 12:26:30', 'Contenu du post 22 écrit par Diane Petit.', 'image_22.jpg', 4),

(23, 'Nouvelle recette', '2024-11-26 12:26:30', 'Contenu du post 23 écrit par Eric Morel.', 'image_23.jpg', 5),
(24, 'Carnet de voyage', '2025-02-02 12:26:30', 'Contenu du post 24 écrit par Eric Morel.', 'image_24.jpg', 5),
(25, 'Sortie du week-end', '2024-12-09 12:26:30', 'Contenu du post 25 écrit par Eric Morel.', 'image_25.jpg', 5),
(26, 'Lecture en cours', '2025-03-11 12:26:30', 'Contenu du post 26 écrit par Eric Morel.', 'image_26.jpg', 5),
(27, 'Astuce du jour', '2025-04-19 12:26:30', 'Contenu du post 27 écrit par Eric Morel.', 'image_27.jpg', 5);
