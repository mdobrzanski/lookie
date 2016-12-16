-- usuń 
DROP DATABASE IF EXISTS `Oleksiejczuk_Abakus`;

-- stwórzy nową bazę danych o nazwie abakus
CREATE DATABASE IF NOT EXISTS `Oleksiejczuk_Abakus` DEFAULT CHARACTER SET utf8 ;

-- stwórz tabelę produktów
CREATE TABLE `Oleksiejczuk_Abakus`.`dane_Oleksiejczuk` (
  `id` INT NOT NULL,
  `name` NVARCHAR(32) NOT NULL,
  `descr` NVARCHAR(512) NOT NULL,
  `price` DECIMAL(6, 2) NOT NULL,
  `unit` NVARCHAR(6) NOT NULL,
  `category` NVARCHAR(32) NOT NULL,
  PRIMARY KEY (`id`)
);


-- uzupełnij bazę danymi
INSERT INTO `Oleksiejczuk_Abakus`.`dane_Oleksiejczuk` (`id`, `name`, `descr`, `price`, `unit`, `category`) VALUES ('1', 'Truskawki', 'Dorodne truskawki z polskich upraw', '7.30', 'kg', 'owoce');
INSERT INTO `Oleksiejczuk_Abakus`.`dane_Oleksiejczuk` (`id`, `name`, `descr`, `price`, `unit`, `category`) VALUES ('2', 'Kalafior', 'Świeże kalafiory.', '5.50', 'szt.', 'warzywa');
INSERT INTO `Oleksiejczuk_Abakus`.`dane_Oleksiejczuk` (`id`, `name`, `descr`, `price`, `unit`, `category`) VALUES ('3', 'Pomidory', 'Dojrzałe i soczyste.', '4.55', 'kg', 'warzywa');
