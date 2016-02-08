CREATE TABLE IF NOT EXISTS Artist (
    id int NOT NULL auto_increment PRIMARY KEY,
    name varchar(80) NOT NULL,
    biography varchar(400) NOT NULL default '',
    avatar varchar(80) NOT NULL default 'defaultimage.jpg',
    email varchar(80) NOT NULL,
    CONSTRAINT fk_PerEmail FOREIGN KEY (email)
    REFERENCES User(email)
    ON DELETE CASCADE ON UPDATE CASCADE
);




