
### Pre-requisitos 📋

_Que cosas necesitas para instalar el software y como instalarlas_

```
1. Composer
2. PHP >= "^7.1.3"
3. instaldo xamp o wamp
4. composer
5. git
```
### Instalación 🔧

_Una serie de pasos que te dice lo que debes ejecutar para tener un entorno de desarrollo ejecutandose_

_Por defecto, el archivo **.gitignore** no tomará en cuenta la carpeta **"vendor"** de Laravel, y tampoco el archivo **.env** (el cual es muy importante). Por ello, al clonar nuestro proyecto (usando git clone https://github.com/pedromeza/listado.git) debemos hacer unos pequeños ajustes para correr nuestra app. Aquí los enlistaré._

_Una vez clonado nuestro proyecto, abriremos una terminal y nos situaremos en dicha carpeta. Una vez estando ahí ejecutaremos:_

```
composer install
```

_Por defecto, y por razones de seguridad, el archivo **.env** no es tomado en cuenta en el proyecto (ya que cada contribuidor puede tener diferentes contraseñas que no deberíamos saber) así que tenemos que generar uno por nosotros mismos en nuestro editor favorito._

_Una vez creado, procederemos a editarlo. Pero para ahorrarnos tiempo, también abriremos el archivo **.env.example** que contiene un ejemplo de las variables._

```
APP_NAME=Laravel
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret

BROADCAST_DRIVER=log
CACHE_DRIVER=file
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
```
## comandos en consola ⚙️
_Laravel necesita una clave única para nuestros proyectos. La generaremos usando el comando:_

```
php artisan key:generate
```
_Esperaremos un momento y se habrá creado nuestra clave._

_Y, si miramos nuestro archivo **.env**, veremos que tiene la clave dentro de él._

## Crear base de datos
_Crearemos la base de datos mysql y crear una base de datos llamada listado:_

## comandos en consola ⚙️

_Laravel jecutaremos la migracion. la generaremos usando el comando:_

```
php artisan migrate
```

Listo; con esto deberíamos poder correr nuestra proyecto sin problemas.

## Ejecutando las pruebas ⚙️

_Iniciamos el proyecto usando el comando:_

```
php artisan serve
```
