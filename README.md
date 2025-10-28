# Lab 08 - Sistema de Gestión de Materiales y Clientes

Este proyecto es un sistema simple de gestión de materiales y clientes desarrollado con PHP utilizando el patrón MVC.

## Requisitos

- PHP 7.4 o superior
- MySQL 5.7 o superior
- Servidor web (Apache) o servidor PHP integrado

## Clonar el Proyecto

Para clonar el proyecto, ejecuta el siguiente comando en tu terminal:

```bash
git clone https://github.com/tu-usuario/demo-lab08.git
cd demo-lab08
```

## Configuración de la Base de Datos

1. Crea una base de datos en MySQL:

```sql
CREATE DATABASE demo_lab08;
USE demo_lab08;
```

2. Crea las tablas necesarias:

```sql
CREATE TABLE materiales (
    codigo INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    precio DECIMAL(10,2) NOT NULL,
    cantidad INT NOT NULL
);

CREATE TABLE clientes (
    dni VARCHAR(8) PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telefono VARCHAR(15) NOT NULL
);
```

3. Configura la conexión a la base de datos:

Abre el archivo `core/DataBase.php` y asegúrate de que los parámetros de conexión sean correctos:

```php
private $host = 'localhost';
private $db = 'demo_lab08';
private $user = 'root';
private $password = '';
```

## Ejecutar el Proyecto

Para ejecutar el proyecto utilizando el servidor integrado de PHP, ejecuta el siguiente comando desde la raíz del proyecto:

```bash
php -S localhost:8500 -t public
```

Luego, abre tu navegador y visita:

```
http://localhost:8500
```

## Estructura del Proyecto

- `/app`: Contiene los controladores, modelos y vistas
  - `/controller`: Controladores de la aplicación
  - `/models`: Modelos para interactuar con la base de datos
  - `/views`: Vistas de la aplicación
- `/core`: Contiene las clases principales del framework
- `/public`: Punto de entrada de la aplicación

## Funcionalidades

- **Página de Inicio**: Muestra la página principal del Lab 08
- **Gestión de Materiales**: CRUD completo para materiales (crear, leer, actualizar, eliminar)
- **Gestión de Clientes**: CRUD completo para clientes (crear, leer, actualizar, eliminar)

## Navegación

- **Home**: Página principal
- **Materiales**: Gestión de materiales
- **Clientes**: Gestión de clientes