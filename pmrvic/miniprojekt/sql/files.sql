use box;
CREATE TABLE files
(
    id INT NOT NULL AUTO_INCREMENT,
    ownerId INT NOT NULL,
    name VARCHAR(255) NOT NULL UNIQUE,
    size INT NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (ownerId) REFERENCES users(id)
)