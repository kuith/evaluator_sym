-- ENGINE=InnoDb---->Esto es para poder crer relaciones entre las bases de datos;

CREATE DATABASE IF NOT EXISTS evaluator_sym_db;
USE evaluator_sym_db;

CREATE TABLE users(
id          int(255) auto_increment not null,
_role       varchar(20),
name        varchar(255),
password    varchar(255),
CONSTRAINT  pk_users PRIMARY KEY(id)
)ENGINE=InnoDb;

CREATE TABLE courses(
id          int(255) auto_increment not null,
name        varchar(255),
CONSTRAINT  pk_courses PRIMARY KEY(id)
)ENGINE=InnoDb;

CREATE TABLE students(
id          int(255) auto_increment not null,
id_course   int(255) not null,
name        varchar(255),
CONSTRAINT  pk_students PRIMARY KEY(id),
CONSTRAINT  fk_students_courses foreign key(id_course) references courses(id)
)ENGINE=InnoDb;

CREATE TABLE partials(
id          int(255) auto_increment not null,
id_course   int(255) not null,
weight      int(5),
CONSTRAINT  pk_partials PRIMARY KEY(id),
CONSTRAINT  fk_partials_courses foreign key(id_course) references courses(id)
)ENGINE=InnoDb;

CREATE TABLE marks(
id          int(255) auto_increment not null,
id_course   int(255) not null,
id_student  int(255) not null,
id_partial  int(255) not null,
grade       float,
CONSTRAINT  pk_marks PRIMARY KEY(id),
CONSTRAINT  fk_marks_courses foreign key(id_course) references courses(id),
CONSTRAINT  fk_marks_students foreign key(id_student) references students(id),
CONSTRAINT  fk_marks_partials foreign key(id_partial) references partials(id)
)ENGINE=InnoDb;


