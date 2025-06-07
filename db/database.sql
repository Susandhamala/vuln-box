CREATE TABLE users (
  username TEXT PRIMARY KEY,
  password TEXT,
  email TEXT,
  role TEXT
);

INSERT INTO users VALUES ('admin', 'SuperSecure123', 'admin@bagh.local', 'admin');
INSERT INTO users VALUES ('user123', 'user123', 'user@bagh.local', 'user');

CREATE TABLE comments (
  id INT AUTO_INCREMENT PRIMARY KEY,
  content TEXT
);

CREATE TABLE posts (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title TEXT,
  content TEXT,
  author TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (author) REFERENCES users(username)
); 

CREATE TABLE post_comments (
  post_id INT,
  comment_id INT,
  PRIMARY KEY (post_id, comment_id),
  FOREIGN KEY (post_id) REFERENCES posts(id),
  FOREIGN KEY (comment_id) REFERENCES comments(id)
);