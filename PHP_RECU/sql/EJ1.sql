drop database if exists Ejercicios1;
create database if not exists Ejercicios1;
use Ejercicios1;

-- drop table Fabricantes, elimina una tabla entera en el caso de que exista
-- delete from Fabricantes where condicion, elimina registros especificos
-- truncate table Fabricantes, elimina todos los regiistros de la tabla
-- default, atributo que da un valor determinado en un campo 
-- not null, no permite valores nulos
-- auto_increment, valores unicos y crecientes
-- zerofill, añade 0 a la izquierda hasta alcanzar la anchura específica de la columna
-- unsigned, la columna almacenará números no negativos desde el 0
-- unique, valores únicos en la tabla
-- foreing key, relaciona datos de dos tablas
-- between, consigue registros entre dos numeros incluyendolos
-- group by, selecciona o rechaza registros grupales
-- order by, ordena los resultados de un select 
-- join, enlaza tablas de marea que evita la repeticion de datos
-- count, evita contar manualmente los registros de una tabla
-- avg(), promedio de una cantidad numerica
-- like 'n%', '%n%', '%n', selecciona registros que comienzan, contienen o acaban por una letra
-- enum, representa una enumeración, son unos valores especificos, tanto numéricos como cadenas de caracteres
-- set, permite tener mas de un valor de una lista de valores permitidos (diferencia entre enum)

drop table if exists fabricantes;
create table fabricantes(
id int unsigned auto_increment not null unique,
nombre varchar(30),
primary key (id)
);

drop table if exists articulos;
create table articulos(
id int auto_increment not null unique,
nombre varchar(30),
precio decimal (10, 2) unsigned,
fabricante_id int(30) unsigned,
primary key (id),
foreign key (fabricante_id) references fabricantes(id)
);

insert into fabricantes (nombre) values 
('Nintendo'), 
('SONY'), 
('HP'), 
('MSI'), 
('ACER'), 
('Apple'), 
('DELL');

insert into articulos (nombre, precio, fabricante_id) values
('Playstation 5', 500, 2),
('GP65 Leopard', 1300, 4),
('GE75 Raider', 2299.99, 4),
('Mac Book Pro', 1600, 6),
('Nintendo Switch', 319.99, 1),
('Nintendo DS', 49.59, 1),
('iMac', 1299.99, 6),
('Acer Nitro 5', 779, 5),
('Envy 15', 1199, 3),
('Portátil E6220', 200, 7),
('PlayStation', null, 2),
('PlayStation 2', null, 2),
('PlayStation 3', 50, 2),
('PlayStation 4', 150, 2);

-- Obtener los nombres de los artículos
select nombre from articulos;

-- Obtener los nombres y los precios de los artículos
select nombre, precio from articulos;

-- Obtener todos los artículos
select * from articulos;

-- Obtener el nombre de los artículos cuyo precio sea menor o igual a 200€
select nombre from articulos where precio <= 200;

-- Obtener todos los datos de los artículos cuyo precio esté entre 60 y 100€ (ambas cantidades incluidas)
select * from articulos where precio between 50 and 100;

-- Contar cuántos artículos tienen un precio superior a 180€
select count(id) from articulos where precio>180;

-- Obtener el nombre y el precio de los artículos cuyo precio sea igual o mayor a 90€ y ordenarlos de menor a mayor por precio y por nombre en orden natural.
select nombre, precio from articulos where precio>=90 order by precio, nombre;

-- Obtener un listado completo de artículos, incluyendo por cada artículo los datos del artículo y de su fabricante
select * from articulos join fabricantes on articulos.fabricante_id=fabricantes.id;

-- Obtener el precio medio de los artículos de cada fabricante, mostrando solo los códigos de fabricante
select fabricante_id, avg(precio) from articulos group by fabricante_id;

-- Obtener los artículos cuyo nombre empieza por “n”
select * from articulos where nombre like 'n%';

-- Obtener los artículos cuyo nombre empieza por “p” o cuyo precio es superior a 2000€ y menor de 2500
select * from articulos where nombre like 'p%' or precio>2000 and precio<2500;

-- Obtener los fabricantes que tienen una “e” en el nombre y no terminan en “o”
select * from fabricantes where nombre like '%e%' and nombre not like '%o';

-- Obtener los artículos que tienen precio nulo
select * from articulos where precio is null;

-- Seleccionar el precio medio de todos los artículos.
select avg(precio) from articulos;

-- Contar cuántos artículos hay
select count(id) from articulos;

-- Contar cuántos fabricantes hay.
select count(id) from fabricantes;
