CREATE DATABASE IF NOT EXISTS card_game;
USE card_game;

CREATE TABLE IF NOT EXISTS users (

    id INT AUTO_INCREMENT PRIMARY KEY,
    login VARCHAR(30) UNIQUE NOT NULL,
    password VARCHAR(100) NOT NULL,
    mail VARCHAR(50) NOT NULL,
    photo VARCHAR(300) NOT NULL

);

CREATE TABLE IF NOT EXISTS cards (

    id INT AUTO_INCREMENT PRIMARY KEY,
    alias VARCHAR(30) UNIQUE NOT NULL,
    attack INT(100) NOT NULL,
    defense INT(100) NOT NULL,
    cost INT(6) NOT NULL

);

INSERT INTO cards (alias, attack, defense, cost) VALUES
('Iron-Man', 85, 90, 4),
('Spider-Man', 75, 80, 3),
('Super-Man', 100, 100, 6),
('Thor', 90, 90, 5),
('Hulk', 90, 75, 4),
('Captain-Marvel', 100, 100, 6),
('Thanos', 100, 100, 6),
('Black-Panther', 70, 60, 2),
('Deadpool', 60, 100, 4),
('Blade', 75, 60, 2),
('Bishop', 90, 50, 4),
('Callisto', 75, 70, 3),
('Magneto', 85, 55, 3),
('Ant-Man', 70, 60, 2),
('Daredevil', 55, 45, 1),
('Black Bolt', 45, 85, 3),
('Domino', 65, 50, 2),
('Elektra', 65, 30, 1),
('Captain-America', 85, 95, 5),
('Black-Widow', 60, 50, 1);