# CRUD de Productos con Laravel

## 📌 Descripción

Este proyecto consiste en la implementación de un sistema CRUD (Create, Read, Update, Delete) utilizando el framework Laravel.
Permite gestionar productos almacenados en una base de datos MySQL, cumpliendo con los requerimientos del laboratorio.

---

## ⚙️ Tecnologías utilizadas

* Laravel
* PHP
* MySQL (WAMP)
* Blade (motor de vistas)
* HTML

---

## 🗄️ Base de Datos

Tabla: `products`

Campos:

* `id` (Primary Key)
* `description` (string)
* `price` (double)
* `stock` (integer)
* `created_at`
* `updated_at`

---

## 🚀 Instalación y ejecución

1. Clonar o ubicar el proyecto en:

```
C:\wamp64\www\
```

2. Instalar dependencias:

```
composer install
```

3. Configurar archivo `.env` con credenciales de la base de datos:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=lockey
DB_USERNAME=LockEy
DB_PASSWORD=******
```

4. Limpiar configuración:

```
php artisan config:clear
php artisan cache:clear
```

5. Ejecutar migraciones:

```
php artisan migrate:fresh
```

6. Levantar el servidor:

```
php artisan serve
```

7. Acceder al sistema:

```
http://127.0.0.1:8000/products
```

---

## 🔁 Funcionalidades CRUD

### ➕ Crear

* Formulario para registrar nuevos productos

### 📄 Leer

* Lista de productos registrados

### ✏️ Actualizar

* Edición de productos existentes

### ❌ Eliminar

* Eliminación de productos desde la lista

---

## 🧠 Estructura del proyecto

* Modelo: `app/Models/Product.php`
* Controlador: `app/Http/Controllers/ProductController.php`
* Rutas: `routes/web.php`
* Vistas:

  * `resources/views/products/index.blade.php`
  * `resources/views/products/create.blade.php`
  * `resources/views/products/edit.blade.php`

---

## ⚠️ Problemas comunes

### Error: key too long

Solución:

```
Schema::defaultStringLength(191);
```

### Error de conexión

* Verificar que MySQL esté activo en WAMP
* Revisar credenciales en `.env`

---

## 📚 Conclusión

Se logró implementar un CRUD funcional en Laravel, aplicando migraciones, modelos, controladores y vistas para la gestión de productos en una base de datos relacional.

---

## 👨‍💻 Autor

Eduardo González
