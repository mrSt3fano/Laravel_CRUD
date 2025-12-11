<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Sobre el proyecto hecho en Laravel

Esta aplicación funciona como un Sistema de Gestión de Inventario con 3 usuarios registrados, 2 tienen permiso de administrador y el usuario normal solo tiene acceso a los productos pero no admite modificaciones, el cual tiene las siguientes funcionalidades:
    CRUD:
        Create: Crea registros nuevos en una base de datos MySQL
        Read: Lee los productos registrados
        Update: Actualiza cada producto
        Delete: Elimina cada producto

## Requisitos

Tener instalado Git, configurar nombre y correo por consola por primera y unica vez
Tener instalado VS Code
Tener instalado XAMPP u otra base de datos 
Tener un navegador web
Tener instalado una terminal(sirve cmd, gitbash, )

## Instalación y Configuración

Sigue estos pasos para poner la aplicación en marcha en tu entorno local.

### 1. Si es tu primer repositorio
    Crea un nuevo repositorio en GitHub y obtén la url

### 2. Crear carpeta
    Crea una carpeta, luego haz click en la ruta de la carpeta y reemplázala escribiendo cmd

### 3. Acceder a VS Code
    Cuando se abra la terminal escribe 'code .'

### 4. Clonar el Repositorio
    Asegúrate de acceder a la carpeta correcta del proyecto
    
    Usa 'ctrl j' para abrir la terminal

```bash
cd ruta-de-proyecto
git clone [URL_DE_REPOSITORIO]
```

    Asegúrese de estar en la rama 'rama1', sino puede ejecutar

```bash
git switch [NOMBRE_DE_RAMA]
```


### 5. Configurar archivo .env
    Aqui establezca los valores de su base de datos

    DB_CONNECTION=mysql
    # DB_HOST=127.0.0.1
    # DB_PORT=3306
    # DB_DATABASE=
    # DB_USERNAME=root
    # DB_PASSWORD=


## Ejecutar

En la terminal escribe 'php artisan serve' para ejecutar el proyecto, accede a la URL

## Instalar dependencias

Si hay algún error con las dependencias, puedes instalarlas usando 'composer install'

## Cuando ingresas puedes usar las siguientes credenciales

Rol de Gerente:
stefano13soto@gmail.com
password

Rol de Administrador:
venera2@gmail.com
password

Rol de Usuario:
abcdefg888hijklmn@gmail.com
password

## Registro de usuario

El nivel de acceso a nuevos usuarios es de usuario normal, si desea cambiar un rol puede hacerlo por
el XAMPP, usando el comando 'php artisan tinker'

### 1. Modificar con php artisan tinker
    ejecute lo siguiente en la linea de comandos una a la vez:

        -use App\Models\User;           //  importa el modelo User
        -$usern = User::find(a)         //  reemplace 'a' por el id del usuario que aparece en el XAMPP
        -$usern->rol=n;                //   reemplace 'n' por 1->gerente, 2->administrador, 3->usuario
        -$usern->save();                //  guarda los cambios
        -echo $usern                   //   imprime el nuevo usuario
        -exit                           // salir
