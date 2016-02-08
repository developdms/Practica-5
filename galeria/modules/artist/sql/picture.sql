
CREATE TABLE IF NOT EXISTS Picture (
    id int NOT NULL auto_increment PRIMARY KEY,
    title varchar(80) NOT NULL default 'Imagen sin titulo',
    file varchar(400) NOT NULL,
    galleryId int NOT NULL,
    CONSTRAINT fk_Per_GalleryId FOREIGN KEY (galleryId)
    REFERENCES Gallery(id)
    ON DELETE CASCADE ON UPDATE CASCADE
);
