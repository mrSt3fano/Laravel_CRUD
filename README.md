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
        Create: Crea registros nuevos en una base de datos MySQL|
        Read: Lee los productos registrados|
        Update: Actualiza cada producto|
        Delete: Elimina cada producto

## Requisitos

Tener instalado Git, configurar nombre y correo por consola por primera y unica vez
Tener instalado VS Code
Tener instalado XAMPP u otra base de datos 
Tener un navegador web
Tener instalado una terminal(sirve cmd, gitbash, )

## Instalación y Configuración

Sigue estos pasos para poner la aplicación en marcha en tu entorno local.

### 1. Crea un nuevo repositorio en GitHub y obtén la url
   

### 2. Crea una carpeta, luego haz click en la ruta de la carpeta y reemplázala escribiendo
    cmd

### 3. Acceder a VS Code y cuando se abra la terminal escribe
    code .

### IMPORTANTE debe asegurarse de estar en la carpeta correcta

### 4. Clonar el Repositorio Asegúrate de acceder a la carpeta correcta del proyecto, usa ctrl j para abrir la terminal


```bash
cd ruta-de-proyecto
```

```bash
git clone https://github.com/mrSt3fano/Laravel_CRUD
```

### 5. Asegúrese de estar en la rama 'rama1', sino puede ejecutar

```bash
git switch rama1
```

### 6. Configurar archivo .env


```bash
copy .env.example .env
```

    DB_CONNECTION=mysql
    # DB_HOST=127.0.0.1
    # DB_PORT=3306
    # DB_DATABASE=
    # DB_USERNAME=root
    # DB_PASSWORD=

### 7. Instalar dependencias de laravel

```bash
composer install
```

### 8. Ejecutar clave 


```bash
php artisan key:generate
```
### IMPORTANTE recuerde estar en la carpeta correcta

### 9. Instalar dependencias frontend - RECOMENDADO ejecutar en cmd

```bash
npm install
```


```bash
npm run build
```

## Ejecutar en la terminal para ejecutar el proyecto


```bash
php artisan serve
```


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
