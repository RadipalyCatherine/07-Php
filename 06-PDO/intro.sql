# --------------------- CATEGORIE --------------------- #

CREATE TABLE `categorie` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `nom` varchar(50) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `categorie` (`nom`) 
    VALUES ('Politique'), ('Economie'), ('Sports'), ('Culture');

    