CREATE DATABASE IF NOT EXISTS catalogoLaravel;
USE catalogoLaravel;

CREATE TABLE usuarios(
    id              int(255) auto_increment not null,
    rol             varchar(20),
    nombres         varchar(255),
    apellidos       varchar(255),
    correo          varchar(255),
    contrasenia     varchar(255),
    fecha_creacion  datetime,
    fecha_editado   datetime,
    token           varchar(255),
    CONSTRAINT pk_usuarios PRIMARY KEY(id)
)ENGINE=InnoDB;


CREATE TABLE productos(
    id              int(255) auto_increment not null,
    usuario_id      int(255) not null,
    nombre          varchar(255),
    descripcion     text,
    precio          int (255),
    estado          int(10),
    imagen          varchar(255),
    imagen_ruta     varchar(255),
    fecha_creacion  datetime,
    fecha_editado   datetime,
    CONSTRAINT pk_productos PRIMARY KEY(id),
    CONSTRAINT fk_productos_usuarios FOREIGN KEY(usuario_id) REFERENCES usuarios(id)
)ENGINE=InnoDB;


CREATE TABLE carrito(
    id              int(255) auto_increment not null,
    usuario_id      int(255) not null,
    fecha_creacion  datetime,
    CONSTRAINT pk_carrito PRIMARY KEY(id),
    CONSTRAINT fk_carrito_usuarios FOREIGN KEY(usuario_id) REFERENCES usuarios(id)
)ENGINE=InnoDB;

CREATE TABLE carrito_detalle(
    id              int(255) auto_increment not null,
    carrito_id      int(255) not null,
    producto_id     int(255) not null,
    cantidad        int(255),
    CONSTRAINT pk_carrito_detalle PRIMARY KEY(id),
    CONSTRAINT fk_carrito_detalle_carrito FOREIGN KEY(carrito_id) REFERENCES carrito(id),
    CONSTRAINT fk_carrito_detalle_productos FOREIGN KEY(producto_id) REFERENCES productos(id)
)ENGINE=InnoDB;


