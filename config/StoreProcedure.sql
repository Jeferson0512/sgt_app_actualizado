DELIMITER $$
CREATE PROCEDURE sp_actualizarPersonalMaestra (
    IN p_codigo VARCHAR(9),
    IN p_codarea VARCHAR(9),
    IN p_codcargo VARCHAR(9),
    IN p_nombres VARCHAR(100),
    IN p_apepat VARCHAR(100),
    IN p_apemat VARCHAR(100),
    IN p_email VARCHAR(200),
    IN p_fecha_nacimiento DATETIME,
    IN p_dni CHAR(8),
    IN p_celular CHAR(9),
    IN p_estado VARCHAR(1),
    IN p_user VARCHAR(100)
)
BEGIN
    UPDATE personal
    SET 
        nombres = p_nombres,
        apepat = p_apepat,
        apemat = p_apemat,
        email = p_email,
        fec_nac = p_fecha_nacimiento,
        dni = p_dni,
        celular = p_celular,
        codarea = p_codarea,
        codcargo = p_codcargo,
        estado = p_estado,
        frupdate = NOW(),               -- Fecha/hora actual
        userupdate = p_user     -- Usuario que ejecuta
    WHERE codigo = p_codigo;
END$$
DELIMITER;

DELIMITER $$
CREATE PROCEDURE sp_actualizarSentidoMaestra (
    IN p_codigo VARCHAR(9),
    IN p_nombre VARCHAR(100),
    IN p_estado VARCHAR(1),
    IN p_user VARCHAR(100)
)
BEGIN
    UPDATE sentido
    SET 
        nombre = p_nombre,
        estado = p_estado,
        frupdate = NOW(),               -- Fecha/hora actual
        userupdate = p_user     -- Usuario que ejecuta
    WHERE codigo = p_codigo;
END$$
DELIMITER;

DELIMITER $$
CREATE PROCEDURE sp_actualizarSistemaMaestra (
    IN p_codigo VARCHAR(9),
    IN p_nombre VARCHAR(100),
    IN p_estado VARCHAR(1),
    IN p_user VARCHAR(100)
)
BEGIN
    UPDATE sistemas
    SET 
        nombre = p_nombre,
        estado = p_estado,
        frupdate = NOW(),               -- Fecha/hora actual
        userupdate = p_user     -- Usuario que ejecuta
    WHERE codigo = p_codigo;
END$$
DELIMITER;

DELIMITER $$
CREATE PROCEDURE sp_actualizarTipoVehiculoMaestra (
    IN p_codigo VARCHAR(9),
    IN p_nombre VARCHAR(100),
    IN p_estado VARCHAR(1),
    IN p_user VARCHAR(100)
)
BEGIN
    UPDATE tipo_vehiculo
    SET 
        nombre = p_nombre,
        estado = p_estado,
        frupdate = NOW(),               -- Fecha/hora actual
        userupdate = p_user     -- Usuario que ejecuta
    WHERE codigo = p_codigo;
END$$
DELIMITER;

DELIMITER $$
CREATE PROCEDURE sp_actualizarTurnoMaestra (
    IN p_codigo VARCHAR(9),
    IN p_nombre VARCHAR(100),
    IN p_estado VARCHAR(1),
    IN p_user VARCHAR(100)
)
BEGIN
    UPDATE turno
    SET 
        nombre = p_nombre,
        estado = p_estado,
        frupdate = NOW(),               -- Fecha/hora actual
        userupdate = p_user     -- Usuario que ejecuta
    WHERE codigo = p_codigo;
END$$
DELIMITER;

DELIMITER $$
CREATE PROCEDURE sp_actualizarUbicacionMaestra (
    IN p_codigo VARCHAR(9),
    IN p_nombre VARCHAR(100),
    IN p_estado VARCHAR(1),
    IN p_user VARCHAR(100)
)
BEGIN
    UPDATE ubicacion
    SET 
        nombre = p_nombre,
        estado = p_estado,
        frupdate = NOW(),               -- Fecha/hora actual
        userupdate = p_user     -- Usuario que ejecuta
    WHERE codigo = p_codigo;
END$$
DELIMITER;

DELIMITER $$
CREATE PROCEDURE sp_actualizarZonaMaestra (
    IN p_codigo VARCHAR(9),
    IN p_nombre VARCHAR(100),
    IN p_codsentido VARCHAR(9),
    IN p_estado VARCHAR(1),
    IN p_user VARCHAR(100)
)
BEGIN
    UPDATE zona
    SET 
        nombre = p_nombre,
        estado = p_estado,
        codsentido = p_codsentido,
        frupdate = NOW(),               -- Fecha/hora actual
        userupdate = p_user     -- Usuario que ejecuta
    WHERE codigo = p_codigo;
END$$
DELIMITER;