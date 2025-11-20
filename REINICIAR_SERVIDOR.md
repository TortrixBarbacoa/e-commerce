# 🔄 Reiniciar Servidor para Habilitar SQLite

## ✅ Extensiones SQLite Habilitadas

He habilitado las extensiones SQLite en el archivo `php.ini` de Laragon:
- `extension=pdo_sqlite`
- `extension=sqlite3`

## 🔄 Pasos para Aplicar los Cambios

**IMPORTANTE:** El servidor web necesita reiniciarse para que las extensiones se carguen.

### Opción 1: Usando Laragon (Recomendado)

1. **Abre Laragon** (icono en la bandeja del sistema o escritorio)
2. **Haz clic derecho en Laragon**
3. **Selecciona "Stop All"** (detener todos los servicios)
4. **Espera unos segundos**
5. **Haz clic derecho nuevamente**
6. **Selecciona "Start All"** (iniciar todos los servicios)

### Opción 2: Reiniciar solo Apache/Nginx

1. **Abre Laragon**
2. **Haz clic derecho en Laragon**
3. **Selecciona "Stop"** → **Apache** (o Nginx si usas Nginx)
4. **Espera unos segundos**
5. **Haz clic derecho nuevamente**
6. **Selecciona "Start"** → **Apache** (o Nginx)

### Opción 3: Si usas php artisan serve

Si estás usando `php artisan serve`, simplemente:
1. **Detén el servidor** (Ctrl+C en la terminal)
2. **Vuelve a iniciarlo:**
   ```bash
   php artisan serve
   ```

## ✅ Verificar que Funciona

Después de reiniciar, recarga tu página web. El error "could not find driver" debería desaparecer.

Si el error persiste:
1. Verifica que el archivo `.env` tenga `DB_CONNECTION=sqlite`
2. Limpia la caché:
   ```bash
   php artisan config:clear
   php artisan cache:clear
   ```
3. Verifica que el archivo `database/database.sqlite` exista


