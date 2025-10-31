# 🛒 UVGStore - Sistema E-commerce Completo

![Laravel](https://img.shields.io/badge/Laravel-10-red.svg)
![PHP](https://img.shields.io/badge/PHP-8.1+-blue.svg)
![Tailwind](https://img.shields.io/badge/Tailwind-CSS-38B2AC.svg)
![MySQL](https://img.shields.io/badge/MySQL-8.0+-orange.svg)

## 📋 Descripción del Proyecto

**UVGStore** es un sistema de comercio electrónico completo desarrollado con Laravel 10, diseñado para demostrar las capacidades técnicas más avanzadas de desarrollo web. El proyecto incluye todas las funcionalidades esenciales de un e-commerce moderno, desde la gestión de usuarios hasta el procesamiento de órdenes.

## 🚀 Características Principales

### ✅ **Funcionalidades Implementadas**
- 🔐 **Sistema de Autenticación Completo** - Registro, login y roles diferenciados
- 🛍️ **Catálogo de Productos** - Gestión completa con categorías dinámicas
- 🔍 **Búsqueda Avanzada** - Filtros por categoría, precio y texto
- 🛒 **Carrito de Compras** - Funcionalidad completa con persistencia
- 👨‍💼 **Panel de Administración** - Dashboard con métricas y gestión
- 📱 **Diseño Responsivo** - Optimizado para todos los dispositivos
- 🖼️ **Gestión de Imágenes** - Soporte para imágenes locales y externas (Unsplash)

### 🚧 **En Desarrollo**
- 💳 **Sistema de Pagos** - Integración con Stripe/PayPal
- 📧 **Notificaciones** - Email automático con SendGrid
- 📊 **Analytics** - Métricas avanzadas con Google Analytics
- ☁️ **CDN** - Optimización de imágenes con CloudFlare

## 🏗️ Arquitectura Técnica

### **Stack Tecnológico**
- **Backend:** Laravel 10 + PHP 8.1+
- **Frontend:** Blade Templates + Tailwind CSS
- **Base de Datos:** MySQL 8.0+
- **JavaScript:** Vanilla JS + Dropzone.js
- **Build Tool:** Vite
- **Iconos:** Font Awesome

### **Estructura del Proyecto**
```
app/
├── Http/Controllers/     # Controladores de la aplicación
├── Models/              # Modelos Eloquent
├── Providers/           # Service Providers personalizados
resources/
├── views/               # Templates Blade
├── js/                  # JavaScript del frontend
├── css/                 # Estilos CSS
routes/
├── web.php              # Rutas web
database/
├── migrations/          # Migraciones de BD
├── seeders/            # Seeders de datos
```

## 📊 Métricas del Proyecto

| Métrica | Valor |
|---------|-------|
| **Líneas de Código** | 2,500+ |
| **Controladores** | 8 |
| **Modelos** | 4 |
| **Vistas Blade** | 20+ |
| **Rutas** | 25+ |
| **Funcionalidades** | 8 módulos |

## 🛠️ Instalación y Configuración

### **Requisitos del Sistema**
- PHP 8.1 o superior
- MySQL 8.0 o superior
- Composer
- Node.js & NPM
- Servidor web (Apache/Nginx)

### **Pasos de Instalación**

1. **Clonar el repositorio**
```bash
git clone [url-del-repositorio]
cd e-commerce
```

2. **Instalar dependencias PHP**
```bash
composer install
```

3. **Instalar dependencias Node.js**
```bash
npm install
```

4. **Configurar variables de entorno**
```bash
cp .env.example .env
php artisan key:generate
```

5. **Configurar base de datos**
```bash
# Editar .env con credenciales de BD
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ecommerce
DB_USERNAME=root
DB_PASSWORD=
```

6. **Ejecutar migraciones**
```bash
php artisan migrate
php artisan db:seed
```

7. **Compilar assets**
```bash
npm run build
```

8. **Iniciar servidor**
```bash
php artisan serve
```

## 🌐 Rutas Principales

### **Rutas Públicas**
- `/` - Página de inicio
- `/products` - Catálogo de productos
- `/search` - Búsqueda de productos
- `/categoria/{id}` - Productos por categoría
- `/producto/{id}` - Detalle de producto

### **Rutas de Autenticación**
- `/login` - Iniciar sesión
- `/register` - Registrarse
- `/logout` - Cerrar sesión

### **Rutas Protegidas**
- `/cart` - Carrito de compras
- `/checkout` - Proceso de compra
- `/Dashboard/{user}` - Panel de administración

## 🔒 Seguridad

- ✅ Autenticación robusta con Laravel Auth
- ✅ Autorización por roles (Admin/Cliente)
- ✅ Protección CSRF en todos los formularios
- ✅ Validación de entrada con Form Requests
- ✅ Escape automático de datos en vistas

## 📱 Responsive Design

- 📱 **Mobile First** - Diseño optimizado para móviles
- 💻 **Desktop** - Experiencia completa en escritorio
- 🎨 **Tailwind CSS** - Framework utility-first
- ⚡ **Performance** - Carga rápida y optimizada

## 🧪 Testing

```bash
# Ejecutar tests
php artisan test

# Tests específicos
php artisan test --filter=UserTest
```

## 📚 Documentación

- 📋 **[Documentación Completa](DOCUMENTACION_PROYECTO.md)** - Documentación técnica detallada
- 🚀 **[Presentación Kick Off](KICKOFF_PRESENTACION.md)** - Presentación del proyecto
- 🔧 **[API Documentation](docs/api.md)** - Documentación de endpoints

## 🤝 Contribución

1. Fork el proyecto
2. Crea una rama para tu feature (`git checkout -b feature/AmazingFeature`)
3. Commit tus cambios (`git commit -m 'Add some AmazingFeature'`)
4. Push a la rama (`git push origin feature/AmazingFeature`)
5. Abre un Pull Request

## 📄 Licencia

Este proyecto está bajo la Licencia MIT. Ver el archivo `LICENSE` para más detalles.

## 👥 Autores

- **[Tu Nombre]** - *Desarrollo completo* - [GitHub](https://github.com/tu-usuario)

## 🙏 Agradecimientos

- Laravel Framework
- Tailwind CSS
- Font Awesome
- Unsplash (para imágenes de prueba)
- Comunidad de desarrolladores

---

## 📞 Contacto

**Proyecto:** UVGStore  
**Email:** [tu-email@ejemplo.com]  
**GitHub:** [tu-usuario](https://github.com/tu-usuario)

---

*Desarrollado con ❤️ para demostrar las capacidades técnicas más avanzadas de desarrollo web*