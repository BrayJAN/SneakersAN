    CREATE DATABASE sneakersAN;
    USE sneakersAN;

    CREATE TABLE usuarios (
    id_usu INT(10) AUTO_INCREMENT,
    nombre_usu VARCHAR(100),
    correo_usu VARCHAR(25),
    usuario_usu VARCHAR(25),
    contraseña_usu VARCHAR(80),
    direccion_usu VARCHAR(150),
    cp_usu INT(4),
    ciudad_usu VARCHAR(25),
    pais_usu VARCHAR(25),
    telefono_usu VARCHAR(11),
    tarjetacred_usu VARCHAR(20),
    PRIMARY KEY (id_usu)
    ); 

    CREATE TABLE productos (
    id_prod INT(10) AUTO_INCREMENT,
    nombre_prod VARCHAR(30),
    nestrellas_prod INT,
    talla_prod FLOAT,
    precio_prod FLOAT,
    PRIMARY KEY (id_prod)
    );

    INSERT INTO productos VALUES (null, 'Air Yeezy 2', 5, 27, 123000);
    INSERT INTO productos VALUES (null, 'Nke Dunk Low', 3, 27, 13000);
    INSERT INTO productos VALUES (null, 'Air Mag', 5, 27, 869000);

    CREATE TABLE compra (
    id_compra INT(100) AUTO_INCREMENT,
    id_usu_usuarios INT(10),
    id_prod_productos INT(10),
    paqueteria_compra VARCHAR(30),
    entrega_compra VARCHAR(15),
    nro_rastreo_compra INT,
    nro_pedido_compra INT,
    pago_compra VARCHAR(25),
    subtotal_compra FLOAT,
    desc_compra BIT,
    iva_compra FLOAT,
    total_compra FLOAT,
    PRIMARY KEY (id_compra),
    FOREIGN KEY (id_usu_usuarios) REFERENCES usuarios (id_usu),
    FOREIGN KEY (id_prod_productos) REFERENCES productos (id_prod)
    );

    CREATE TABLE admins(
    id_admin INT(100) AUTO_INCREMENT,
    user_admin VARCHAR(25),
    contra_admin VARCHAR(80),
    PRIMARY KEY (id_admin)
    );


    INSERT INTO usuarios (id_usu, nombre_usu, correo_usu, usuario_usu, contraseña_usu, direccion_usu, cp_usu, ciudad_usu, pais_usu, telefono_usu)
    VALUES (null, 'Moisés García', 'moi@moises.com', 'moi6', 'moisesgj', 'Lomas de México', 54150, 'Tlalnepantla', 'México', 552477908);

    INSERT INTO productos (id_prod, nombre_prod, precio_prod) VALUES (null, 'Yeezy', 2600);

    INSERT INTO admins (user_admin, contra_admin)
    VALUES ('bray', 'clau');





    SET SQL_SAFE_UPDATES = 0;

    DELETE FROM compra;
    DELETE FROM usuarios;

    ALTER TABLE usuarios AUTO_INCREMENT = 0;
    ALTER TABLE compra AUTO_INCREMENT = 0;

    SELECT * FROM compra;

    SELECT * FROM usuarios;

    SELECT * FROM productos;

    SELECT id_compra, usuario_usu, nombre_prod FROM usuarios, productos, compra
    WHERE compra.id_usu_usuarios=usuarios.id_usu AND compra.id_prod_productos=productos.id_prod;