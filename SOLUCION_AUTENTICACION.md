# Solución para el Error de Autenticación MySQL

## Error
```
SQLSTATE[HY000] [2054] The server requested authentication method unknown to the client [auth_gssapi_client]
```

## Causa
El usuario `root` de MySQL fue creado con el método de autenticación `auth_gssapi_client`, que no es compatible con PHP PDO.

## Soluciones

### Solución 1: Usar HeidiSQL (MÁS FÁCIL)

1. **Abre Laragon**
2. **Haz clic en el botón "Database" o "MySQL"** en Laragon
3. Se abrirá **HeidiSQL** automáticamente (puede tener credenciales guardadas)
4. Si no se abre automáticamente, ábrelo manualmente desde:
   - `C:\laragon\bin\heidiSQL\heidisql.exe`
5. **Conéctate a MySQL** (puede que ya esté conectado automáticamente)
6. **Abre el archivo `fix_authentication.sql`** desde HeidiSQL
7. **Ejecuta el script** (presiona F9 o haz clic en "Ejecutar")
8. **Verifica** que no haya errores

### Solución 2: Si HeidiSQL no funciona

Si no puedes conectarte ni con HeidiSQL, necesitas modificar MySQL en modo seguro:

1. **Detén MySQL** desde Laragon
2. **Abre una terminal como Administrador**
3. **Navega a MySQL**:
   ```cmd
   cd C:\laragon\bin\mysql\mysql-8.0.30-winx64\bin
   ```
4. **Inicia MySQL en modo seguro** (sin autenticación):
   ```cmd
   mysqld --skip-grant-tables --console
   ```
5. **Abre otra terminal** (deja la anterior corriendo)
6. **Conéctate a MySQL**:
   ```cmd
   mysql -u root
   ```
7. **Ejecuta estos comandos**:
   ```sql
   USE mysql;
   UPDATE user SET plugin='mysql_native_password', authentication_string='' WHERE user='root';
   FLUSH PRIVILEGES;
   EXIT;
   ```
8. **Detén MySQL** (Ctrl+C en la primera terminal)
9. **Reinicia MySQL** desde Laragon normalmente

### Solución 3: Crear un nuevo usuario

Si ninguna solución anterior funciona, puedes crear un nuevo usuario:

1. Conéctate a MySQL usando cualquiera de los métodos anteriores
2. Ejecuta:
   ```sql
   CREATE USER 'laravel'@'localhost' IDENTIFIED WITH mysql_native_password BY '';
   GRANT ALL PRIVILEGES ON prueba_ecommerce.* TO 'laravel'@'localhost';
   FLUSH PRIVILEGES;
   ```
3. Actualiza tu archivo `.env`:
   ```
   DB_USERNAME=laravel
   DB_PASSWORD=
   ```

## Después de aplicar la solución

1. **Limpia la caché de Laravel**:
   ```bash
   php artisan config:clear
   php artisan cache:clear
   ```

2. **Recarga la página** en tu navegador

3. **Verifica** que el error haya desaparecido

## Nota

El archivo `my.ini` de MySQL ya está configurado correctamente con `default_authentication_plugin=mysql_native_password`, pero el usuario root fue creado antes de esta configuración, por eso necesita ser actualizado manualmente.


