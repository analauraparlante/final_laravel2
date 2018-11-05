DROP DATABASE IF EXISTS libreria_speaker;
CREATE DATABASE libreria_speaker;
USE libreria_speaker;

CREATE TABLE genero(
	ID_GENERO SMALLINT(2) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	GENERO VARCHAR(25) NOT NULL
	
);

CREATE TABLE libro(
	ID_LIBRO INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	TITULO VARCHAR(45)NOT NULL,
	FKGENERO SMALLINT(2) UNSIGNED,
	AUTOR VARCHAR(200)NOT NULL,
	EDITORIAL VARCHAR(45)NOT NULL,
	PRECIO FLOAT(10,2)NOT NULL,
	DESCRIPCION BLOB,
  ANIO_EDICION INT(4),
	FOREIGN KEY (FKGENERO) REFERENCES genero(ID_GENERO)
	 
);
INSERT INTO genero (ID_GENERO, GENERO)VALUES
(1, 'Aventura'),
(2, 'Autoayuda'),
(3, 'Biografía'),
(4, 'Ciencia Ficción'),
(5, 'Cocina'),
(6, 'Deportes'),
(7, 'Diseño'),
(8, 'Economía/Marketing'),
(9, 'Enciclopedia/Manual'),
(10, 'Entretenimiento'),
(11, 'Ensayo'),
(12, 'Erótico'),
(13, 'Historia'),
(14, 'Hogar'),
(15, 'Infantil'),
(16, 'Investigación'),
(17, 'Novela'),
(18, 'Policial'),
(19, 'Política'),
(20, 'Psicología'),
(21, 'Romántico'),
(22, 'Sociedad'),
(23, 'Teatro'),
(24, 'Terror'),
(25, 'Viajes'),
(26, 'Otros temas/Varios');

INSERT INTO libro (ID_LIBRO, TITULO, FKGENERO, AUTOR, EDITORIAL, PRECIO, DESCRIPCION, ANIO_EDICION)VALUES
(1, 'Ágilmente',11, 'Estanislao Bachrach', 'Sudamerica', 280, 'Un libro que potencia la creatividad a través de un viaje por el interior del cerebro que ayuda a entrenarlo y cuidarlo.',2014),
(2, 'Cien años de soledad',17 ,'Gabriel García Márquez','Alfaguara', 250, 'Es la historia de la familia Buendía a lo largo de seis generaciones en el pueblo ficticio de Macondo.',2007),
(3, 'Asesinato en el Oriente Express', 18, 'Agatha Christie', 'Planeta', 150,'Poirot se encuentra en Estambul. Es pleno invierno y decide tomar el Orient Express. Cuando despierta en su coche-cama, una tormenta de nieve ha detenido el tren y un norteamericano ha sido salvajemente apuñalado. El asesino aún se encuentra en el tren...',2013),
(4, 'Las aventuras de Huck Finn',1,'Mark Twain', 'Everest',90 ,'Huck Finn huirá con su amigo y esclavo, Jim, a lo largo del río Misisipi y con dirección a Ohio, estado donde la esclavitud está abolida, con la intención de escapar del mundo en el que los dos se encuentran en busca de la libertad.',2013),
(5, 'Rosaura a las diez',18,'Marco Denevi','Cántaro',110,'Un sueño que se llama Rosaura ha muerto. Las declaraciones de los testigos intentan reconstruir el crimen.',2006),
(6, 'Los vecinos mueren en las novelas',18,'Sergio Aguirre','Norma',95, 'Un hombre que tiene por costumbre visitar a sus nuevos vecinos llega a la casa de una anciana absolutamente desconocida. El mismo no sabe, hasta que llama a la puerta, que ha decidido matarla.',2005),
(7,'Pura cocina Italiana',5,'Donato De Santis', 'Catapulta children entert',549, '100 recetas con la impronta del cocinero Donato De Santis. Sus platos, sabrosos y variados, dan cuenta de abundantes texturas, aromas y sabores propios del hogar en el que se crió.',2015),
(8, 'Farenheit 451',4,'Ray Bradbury','Minotauro',300,'En la sociedad imaginada por la novela, de carácter distópico, los bomberos tienen la misión de quemar libros ya que, según el gobierno, leer impide ser felices porque llena de angustia.',2007),
(9, 'El diario de Ana Frank',3,'Ana Frank','Debolsillo',160,'Oculta con su familia y otra familia judía, en una buhardilla de unos almacenes de Ámsterdam durante la ocupación nazi de Holanda. Ana Frank con trece años, cuenta en su diario, al que llamó «Kitty», la vida del grupo.',2012),
(10, 'Moby Dick',17, 'Herman Melville', 'Planeta',220,'La inolvidable historia de un hombre determinado a cazar una enorme ballena blanca',2015);