

CREATE TABLE PERSONA
(
    ci varchar(20) NOT NULL,
    nombre_completo varchar(255) NOT NULL,
    fecha_de_nacimiento date NOT NULL,
    departamento char(2) NOT NULL,
    primary key(ci)
);


INSERT INTO PERSONA (ci, nombre_completo, fecha_de_nacimiento, departamento) VALUES
('1234', 'Richar Molina Lopez', '1998-07-21', '02'),
('1235', 'Julia Gutierrez Alanoca', '1996-08-22', '05'),
('1236', 'Jhon Quispe Mamani', '1990-03-02', '03'),
('1237', 'Ramiro Quispe Quispe', '1998-08-24', '05'),
('1238', 'Gery Gutierrez Falga', '1995-04-02', '01'),
('1239', 'Diana Luque Flores', '1996-05-18', '02'),
('1240', 'Juana Miranda Rodriguez', '1988-06-27', '03'),
('1241', 'Ruben Tapia Mamani', '1980-01-11', '01'),
('1242', 'Ruben Fernandez Tapia', '1999-01-04', '04'),
('1243', 'Orlando Maidana Ticona', '1994-10-25', '07'),
('1244', 'Yerson Mamani Mamani', '1994-08-06', '07'),
('1245', 'Ruben Chiri Quispe', '1995-11-03', '05'),
('1246', 'Juaquin Herrera Marques', '1993-12-07', '07'),
('1247', 'Vladimir Maidana Acarapi', '1996-01-08', '02'),
('1248', 'Ana Rocha Llanos', '1996-01-03', '05'),
('1249', 'Ursula Salazar Mamani', '1993-12-12', '07'),
('1250', 'Pablo Villa Rocabado', '1996-11-11', '02');


INSERT INTO persona (ci, nombre_completo, fecha_de_nacimiento, departamento) VALUES ('8358429', 'Jorge Ariel Rosa Humiri', '2022-10-26', '01');


CREATE TABLE ACCESO
(
    ci varchar(20) NOT NULL,
    usuario varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    rol varchar(30) NOT NULL,
    primary key(ci),
    FOREIGN KEY(ci) REFERENCES PERSONA(ci)
);


INSERT INTO acceso (ci, usuario, password, rol) VALUES ('8358429', 'jrosah', '123456', 'DIRECTOR');

insert into ACCESO (ci, usuario, password, rol) values ('1234', 'ecamble0', 'rcBdhk3j', 'DIRECTOR');
insert into ACCESO (ci, usuario, password, rol) values ('1235', 'eoakwood1', 'qDEtwRCno', 'DOCENTE');
insert into ACCESO (ci, usuario, password, rol) values ('1236', 'cthome2', '6RWNNHr', 'ESTUDIANTE');
insert into ACCESO (ci, usuario, password, rol) values ('1237', 'zjohncey3', 'xU6vPB3EF', 'ESTUDIANTE');
insert into ACCESO (ci, usuario, password, rol) values ('1238', 'aturbitt4', 'b34Aa6VNqWO', 'ESTUDIANTE');
insert into ACCESO (ci, usuario, password, rol) values ('1239', 'pruffli5', '5WLFEZ5VsVr', 'ESTUDIANTE');
insert into ACCESO (ci, usuario, password, rol) values ('1240', 'ptarling6', 'Kh7yDpngiT', 'ESTUDIANTE');
insert into ACCESO (ci, usuario, password, rol) values ('1241', 'cathowe7', 'ThrYD1307', 'ESTUDIANTE');
insert into ACCESO (ci, usuario, password, rol) values ('1242', 'vbunworth8', 'r3GWRH0hL', 'ESTUDIANTE');
insert into ACCESO (ci, usuario, password, rol) values ('1243', 'wgodier9', 'WSlz5Hb8g5e', 'ESTUDIANTE');
insert into ACCESO (ci, usuario, password, rol) values ('1244', 'cfeifera', 'Sin9VO', 'ESTUDIANTE');
insert into ACCESO (ci, usuario, password, rol) values ('1245', 'cmcmeylerb', 'RsenYiSef', 'ESTUDIANTE');
insert into ACCESO (ci, usuario, password, rol) values ('1246', 'knorcliffec', 'sp0EC8ZD', 'ESTUDIANTE');
insert into ACCESO (ci, usuario, password, rol) values ('1247', 'everrilld', '5OqeBw1', 'ESTUDIANTE');
insert into ACCESO (ci, usuario, password, rol) values ('1248', 'hargonte', '3EGw8t', 'ESTUDIANTE');
insert into ACCESO (ci, usuario, password, rol) values ('1249', 'cruggenf', '87YCayLoT', 'ESTUDIANTE');
insert into ACCESO (ci, usuario, password, rol) values ('1250', 'mklineg', '0d5zIWmHV', 'ESTUDIANTE');



CREATE TABLE INSCRIPCION
(
    CIestudiante varchar(20) NOT NULL,
    sigla varchar(10) NOT NULL,
    nota1 int,
    nota2 int,
    nota3 int,
    nota_final int,
    primary key(CIestudiante, sigla),
    FOREIGN KEY(CIestudiante) REFERENCES PERSONA(ci)
);

insert into INSCRIPCION (CIestudiante, sigla, nota1, nota2, nota3, nota_final) values ('1234', 'INF-113', 51, 47, 48, 48);
insert into INSCRIPCION (CIestudiante, sigla, nota1, nota2, nota3, nota_final) values ('1235', 'INF-121', 97, 10, 60, 55);
insert into INSCRIPCION (CIestudiante, sigla, nota1, nota2, nota3, nota_final) values ('1236', 'INF-113', 78, 61, 17, 52);
insert into INSCRIPCION (CIestudiante, sigla, nota1, nota2, nota3, nota_final) values ('1237', 'INF-121', 74, 90, 26, 63);
insert into INSCRIPCION (CIestudiante, sigla, nota1, nota2, nota3, nota_final) values ('1238', 'INF-121', 43, 43, 22, 36);
insert into INSCRIPCION (CIestudiante, sigla, nota1, nota2, nota3, nota_final) values ('1239', 'INF-111', 86, 18, 3, 35);
insert into INSCRIPCION (CIestudiante, sigla, nota1, nota2, nota3, nota_final) values ('1240', 'INF-111', 2, 5, 52, 19);
insert into INSCRIPCION (CIestudiante, sigla, nota1, nota2, nota3, nota_final) values ('1241', 'INF-113', 12, 36, 44, 30);
insert into INSCRIPCION (CIestudiante, sigla, nota1, nota2, nota3, nota_final) values ('1242', 'INF-121', 23, 98, 26, 49);
insert into INSCRIPCION (CIestudiante, sigla, nota1, nota2, nota3, nota_final) values ('1243', 'INF-121', 54, 31, 40, 41);
insert into INSCRIPCION (CIestudiante, sigla, nota1, nota2, nota3, nota_final) values ('1244', 'INF-121', 20, 73, 73, 55);
insert into INSCRIPCION (CIestudiante, sigla, nota1, nota2, nota3, nota_final) values ('1245', 'INF-121', 66, 62, 81, 69);
insert into INSCRIPCION (CIestudiante, sigla, nota1, nota2, nota3, nota_final) values ('1246', 'INF-113', 69, 82, 80, 77);
insert into INSCRIPCION (CIestudiante, sigla, nota1, nota2, nota3, nota_final) values ('1247', 'INF-113', 22, 95, 40, 52);
insert into INSCRIPCION (CIestudiante, sigla, nota1, nota2, nota3, nota_final) values ('1248', 'INF-113', 97, 100, 57, 84);
insert into INSCRIPCION (CIestudiante, sigla, nota1, nota2, nota3, nota_final) values ('1249', 'INF-121', 6, 24, 21, 17);
insert into INSCRIPCION (CIestudiante, sigla, nota1, nota2, nota3, nota_final) values ('1250', 'INF-121', 82, 82, 3, 55);


