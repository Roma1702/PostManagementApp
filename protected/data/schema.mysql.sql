CREATE TABLE tbl_user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
);

CREATE TABLE tbl_post (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    user_id INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES tbl_user(id)
);

INSERT INTO `tbl_user` (`id`, `username`, `password`) VALUES
(6, 'ambar228', 'a4a7da51b635a1aa35ff2676e06be25c'), --password: ambar228
(8, 'roma1702', '351329524e5273bebd28aa2a4536c06f'); --password: roma1702

INSERT INTO `tbl_post` (`id`, `title`, `content`, `user_id`, `created_at`) VALUES
(1, 'PHP', 'blablabla', 6, '2023-07-06 14:40:39'),
(2, 'C#', 'hohohoho', 6, '2023-07-06 14:41:25');