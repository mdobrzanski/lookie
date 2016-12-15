-- stwórzy nową bazę danych o nazwie abakus
CREATE SCHEMA `Oleksiejczuk_Abakus` DEFAULT CHARACTER SET utf8 ;

-- stwórz tabelę produktów
CREATE TABLE `Oleksiejczuk_Abakus`.`dane_Oleksiejczuk` (
  `id` INT NOT NULL,
  `name` nvarchar(32) NOT NULL,
  `descr` VARCHAR(512) NOT NULL,
  `price` DECIMAL NOT NULL,
  `category` NVARCHAR(32) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `name_UNIQUE` (`name` ASC))
;


-- uzupełnij bazę danymi
INSERT INTO `Oleksiejczuk_Abakus`.`dane_Oleksiejczuk` (`id`, `name`, `descr`, `price`, `category`) VALUES ('1', 'Truskawki', 'Dorodne truskawki z polikich upraw', '7,30', 'owoce');
INSERT INTO `Oleksiejczuk_Abakus`.`dane_Oleksiejczuk` (`id`, `name`, `descr`, `price`, `category`) VALUES ('2', 'Kalafior', 'Świeże kalafiory.', '5.50', 'warzywa');
INSERT INTO `Oleksiejczuk_Abakus`.`dane_Oleksiejczuk` (`id`, `name`, `descr`, `price`, `category`) VALUES ('3', 'Pomidory', 'Dojrzałe i soczyste.', '4,55', 'warzywa');
