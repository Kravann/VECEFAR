create database farmacia;
-- 5drop database farmacia;
use farmacia;

create table rol(
    rol_id int(1) primary key,
    rol_desc varchar(20)
);

insert into rol value (1,"admin"),(2,"empleado");
select*from rol;

create table empleados(
    emp_id int(4) primary key,
    emp_nom varchar(40),
    emp_ape varchar (40),
    emp_dni int(8),
    emp_tel varchar(12),
    emp_usu varchar(20),
    emp_pass varchar (20),
    rol_id int(1),
    foreign key (rol_id) references rol (rol_id)
);
select*from empleados;
insert into empleados value(100,"fernando","torres",35136932,1131510849,"ftorres","ft123",1);
insert into empleados value(49,"fernando","lemos",37865101,1130615728,"flemos","hola1",1);
insert into empleados value(3,"juan","perez",39465782,1133545498,"jperez","j123",2);

create table laboratorios(
    lab_id int (5) primary key,
    lab_nombre varchar (20)
);
select*from laboratorios;

create table droga(
    droga_id int(4) primary key,
    dro_componentes varchar (60),
    dro_dosis float  
);
select*from droga;
drop table productos;

create table productos(
    prod_id int(6) primary key,
    prod_marca varchar(40),
    prod_stock_actual int(6),
    prod_stock_min int(6),
    prod_cant_comprimidos int(3),
    prod_precio float(5),
    droga_id int(4),
    lab_id int (5), 
    foreign key (lab_id) references laboratorios (lab_id),
    foreign key (droga_id) references droga (droga_id)
);

select * from productos;

create table lotes(
    lote_id int(4) primary key,
    lote_fec_ing date,
    lote_venci date,
    lote_cant int(6),
    prod_id int(4),
    emp_id int(4),
    foreign key (emp_id) references empleados (emp_id),
    foreign key (prod_id) references productos(prod_id)
);