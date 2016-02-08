
CREATE TABLE IF NOT EXISTS Gallery (
    id int NOT NULL auto_increment PRIMARY KEY,
    title varchar(80) NOT NULL default 'Galería sin titulo',
    subtitle varchar(400) NOT NULL default '',
    artistId int NOT NULL,
    CONSTRAINT fk_PerId FOREIGN KEY (artistId)
    REFERENCES Artist(id)
    ON DELETE CASCADE ON UPDATE CASCADE
);
