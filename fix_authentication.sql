-- Script para corregir el método de autenticación de MySQL/MariaDB
-- Ejecuta este script desde HeidiSQL o el cliente MySQL de Laragon
-- 
-- IMPORTANTE: Si no puedes conectarte, intenta estas soluciones:
-- 1. Usa HeidiSQL desde Laragon (puede tener credenciales guardadas)
-- 2. Reinicia MySQL desde Laragon y vuelve a intentar
-- 3. Si nada funciona, necesitarás modificar MySQL en modo seguro

-- Opción 1: Usar ALTER USER (requiere que puedas conectarte)
-- Descomenta estas líneas si puedes conectarte:
-- ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY '';
-- ALTER USER 'root'@'127.0.0.1' IDENTIFIED WITH mysql_native_password BY '';
-- ALTER USER 'root'@'%' IDENTIFIED WITH mysql_native_password BY '';

-- Opción 2: Modificar directamente la tabla mysql.user
-- Esta opción funciona incluso si tienes problemas de autenticación
-- Descomenta estas líneas si ALTER USER no funciona:
UPDATE mysql.user SET plugin='mysql_native_password', authentication_string='' WHERE user='root' AND host='localhost';
UPDATE mysql.user SET plugin='mysql_native_password', authentication_string='' WHERE user='root' AND host='127.0.0.1';
UPDATE mysql.user SET plugin='mysql_native_password', authentication_string='' WHERE user='root' AND host='%';

-- Aplicar cambios
FLUSH PRIVILEGES;

