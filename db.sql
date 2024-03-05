 CREATE DATABASE blog_railijs;
 USE blog_railijs;

 CREATE TABLE posts (
id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
title VARCHAR(255) NOT NULL
); 

INSERT INTO posts
(title)
VALUES
("My First Blog Post"),
("My Second Blog Post");

SELECT * FROM posts; 


 CREATE TABLE categories(
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(255) NOT NULL,
description TEXT   
); 

INSERT INTO categories
(name, description)
VALUES
("sport", ""),
("music", ""),
("food", ""); 

 
ALTER TABLE posts
 ADD category_id INT NOT NULL REFERENCES categories(id); 
 
UPDATE posts
SET category_id = (SELECT id FROM categories WHERE name = 'sport')
WHERE id = 1;

UPDATE posts
SET category_id = (SELECT id FROM categories WHERE name = 'food')
WHERE id = 2;
 
SELECT * FROM posts
JOIN categories
ON posts.category_id = categories.id;   