# 📊 Diagramas ER del Sistema UVGStore

## 🎯 Descripción

Este directorio contiene los diagramas Entidad-Relación (ER) del sistema UVGStore generados en PlantUML. Los diagramas muestran la estructura completa de la base de datos y las relaciones entre las diferentes entidades del sistema.

## 📁 Archivos de Diagramas

### 1. **diagrama_er_uvgstore.puml** - Diagrama ER Completo
- **Descripción:** Diagrama ER detallado con todas las entidades, atributos y relaciones
- **Incluye:** Notas explicativas, constraints, índices y documentación completa
- **Uso:** Documentación técnica completa y presentaciones detalladas

### 2. **diagrama_er_simple.puml** - Diagrama ER Simplificado
- **Descripción:** Versión simplificada del diagrama ER
- **Incluye:** Entidades principales y relaciones básicas
- **Uso:** Vista rápida de la estructura de datos

### 3. **diagrama_conceptual.puml** - Modelo Conceptual
- **Descripción:** Diagrama conceptual agrupado por módulos de negocio
- **Incluye:** Agrupación lógica de entidades por funcionalidad
- **Uso:** Presentaciones ejecutivas y documentación de alto nivel

## 🏗️ Estructura de la Base de Datos

### **Entidades Principales:**

#### **Gestión de Usuarios**
- **ROLES** - Roles del sistema (Admin/Cliente)
- **USERS** - Usuarios del sistema
- **ESTADOS** - Estados de usuarios, productos y órdenes

#### **Catálogo de Productos**
- **CATEGORIAS** - Categorías de productos
- **PRODUCTOS** - Productos del catálogo

#### **Sistema de Compras**
- **CART_ITEMS** - Items del carrito de compras
- **ORDENS** - Órdenes de compra
- **DETALLES** - Detalles de órdenes

## 🔗 Relaciones Principales

### **Relaciones 1:N (Uno a Muchos)**
- `ROLES` → `USERS` (Un rol puede tener muchos usuarios)
- `ESTADOS` → `USERS` (Un estado puede aplicarse a muchos usuarios)
- `ESTADOS` → `PRODUCTOS` (Un estado puede aplicarse a muchos productos)
- `ESTADOS` → `ORDENS` (Un estado puede aplicarse a muchas órdenes)
- `CATEGORIAS` → `PRODUCTOS` (Una categoría puede tener muchos productos)
- `USERS` → `CART_ITEMS` (Un usuario puede tener muchos items en el carrito)
- `PRODUCTOS` → `CART_ITEMS` (Un producto puede estar en muchos carritos)
- `USERS` → `ORDENS` (Un usuario puede realizar muchas órdenes)
- `ORDENS` → `DETALLES` (Una orden puede tener muchos detalles)
- `USERS` → `DETALLES` (Un usuario puede tener muchos detalles de compra)
- `PRODUCTOS` → `DETALLES` (Un producto puede aparecer en muchos detalles)

## 🛠️ Cómo Usar los Diagramas

### **Opción 1: PlantUML Online**
1. Visita [PlantUML Online Server](http://www.plantuml.com/plantuml/uml/)
2. Copia el contenido del archivo `.puml`
3. Pega en el editor
4. Genera el diagrama

### **Opción 2: VS Code con PlantUML Extension**
1. Instala la extensión "PlantUML" en VS Code
2. Abre el archivo `.puml`
3. Usa `Ctrl+Shift+P` → "PlantUML: Preview Current Diagram"

### **Opción 3: IntelliJ IDEA**
1. Instala el plugin PlantUML
2. Abre el archivo `.puml`
3. Usa `Ctrl+Shift+A` → "PlantUML"

### **Opción 4: Generar Imágenes**
```bash
# Instalar PlantUML
npm install -g node-plantuml

# Generar PNG
puml generate diagrama_er_uvgstore.puml --png

# Generar SVG
puml generate diagrama_er_uvgstore.puml --svg
```

## 📊 Características de los Diagramas

### **Colores y Estilo**
- **Azul (#2E86AB):** Entidades principales
- **Gris (#6C757D):** Atributos secundarios
- **Fondo claro:** Mejor legibilidad

### **Símbolos Utilizados**
- `*` - Atributo obligatorio (NOT NULL)
- `<<PK>>` - Clave Primaria
- `<<FK>>` - Clave Foránea
- `<<UNIQUE>>` - Restricción única
- `||--o{` - Relación uno a muchos

### **Información Incluida**
- ✅ Nombres de tablas y columnas
- ✅ Tipos de datos
- ✅ Claves primarias y foráneas
- ✅ Restricciones de unicidad
- ✅ Relaciones entre entidades
- ✅ Notas explicativas
- ✅ Constraints y índices

## 🔍 Detalles Técnicos

### **Tipos de Datos Utilizados**
- `BIGINT` - Identificadores (PK, FK)
- `VARCHAR(255)` - Texto variable
- `INTEGER` - Números enteros
- `DECIMAL(10,2)` - Números decimales para precios
- `DOUBLE` - Números de punto flotante
- `TIMESTAMP` - Fechas y horas

### **Constraints Implementados**
- **Foreign Keys:** Integridad referencial
- **Unique:** Email único por usuario
- **Composite Unique:** (user_id, producto_id) en cart_items
- **Cascade Delete:** Eliminación en cascada

### **Índices Automáticos**
- Claves primarias (automático)
- Claves foráneas (automático)
- Campos únicos (automático)

## 📈 Métricas del Diagrama

| Métrica | Valor |
|---------|-------|
| **Entidades** | 8 |
| **Relaciones** | 11 |
| **Atributos** | 35+ |
| **Foreign Keys** | 12 |
| **Constraints** | 3 |

## 🎯 Casos de Uso del Diagrama

### **Para Desarrolladores**
- Entender la estructura de datos
- Planificar nuevas funcionalidades
- Optimizar consultas
- Documentar cambios en BD

### **Para Administradores de BD**
- Planificar índices
- Optimizar performance
- Backup y recovery
- Monitoreo de integridad

### **Para Stakeholders**
- Entender el alcance del sistema
- Planificar integraciones
- Evaluar complejidad técnica
- Tomar decisiones de negocio

## 🔄 Actualizaciones

Los diagramas se actualizan cuando:
- Se agregan nuevas entidades
- Se modifican relaciones existentes
- Se cambian tipos de datos
- Se agregan nuevos constraints

## 📞 Soporte

Para preguntas sobre los diagramas o la estructura de la base de datos:
- **Email:** [tu-email@ejemplo.com]
- **GitHub:** [tu-usuario](https://github.com/tu-usuario)

---

*Diagramas generados con PlantUML para el proyecto UVGStore*  
*Última actualización: Octubre 2024*


