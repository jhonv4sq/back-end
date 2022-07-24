## Prueba tecnica fullstack 

**Este proyecto fue desarrollado en dos partes el Back End utilizando el Frameword de PHP [Laravel](https://laravel.com/ "Laravel") y el Front End con la librería de Javascript [Vue.Js](https://vuejs.org/ "Vue.Js") teniendo como base de datos [Sqlite3](https://www.sqlite.org/index.html "Sqlite3")**

------------

Aqui puedes ver el [Front end](https://github.com/jhonv4sq/front-end "Front end")

------------



## Primeros pasos para descargar y poner en funcionamiento el proyecto 

#### 1. Descarga
##### Para descargar los archivos del proyecto desde este repositorio deberás introducir por consola este comando
```bash
git clone https://github.com/jhonv4sq/front-end.git
```

------------


#### 2. Instalación 
##### Debes tener en cuenta que este proyecto esta desarrollado en Laravel por lo cual para comenzar con la instalación y se adapte a tu pc deberás entrar desde consola al proyecto e introducir los siguientes comandos para que funcione bien laravel.
```bash
composer install
```
```bash
composer update
```
###### Este paso es opcional pero aunque no estemos utilizando `npm` para el Back End es bueno tenerlo actualizado con las propiedades del proyecto para evitar alguna falla 
```bash
npm install
```
```bash
npm update
```
```bash
npm run dev
```

------------

#### 3. Configuración  
##### En la capeta principal del proyecto nos encontraremos un archivo llamado `.env.example` debemos crear un archivo y llamarlo `.env`, todo el contenido del archivo `.env.example` tenemos que copiarlo y pegarlo dentro del archivo que hemos creado `.env`
[![Captura-de-pantalla-2022-07-24-231427.png](https://i.postimg.cc/YSxTLkC1/Captura-de-pantalla-2022-07-24-231427.png)](https://postimg.cc/2qV0gsv6)
###### Ahora debemos crear una key en el archivo `.env` para esto debemos introducir el siguiente comando por consola 
```bash
php artisan key:generate
```
###### Y limpiamos la cache con  
```bash
php artisan config:cache
```
------------
#### 4. Base de datos
[![Captura-de-pantalla-2022-07-24-232630.png](https://i.postimg.cc/YSn0N5XW/Captura-de-pantalla-2022-07-24-232630.png)](https://postimg.cc/FfShNBXr)
##### Ya de por si contamos con una base de datos SQLITE en los archivos del proyecto nada mas tenemos que ejecutar el siguiente comando para hacer las migraciones 
```bash
php artisan migrate:fresh --seed
```
#### Estructura de la base de datos 
[![Captura-de-pantalla-2022-07-24-233031.png](https://i.postimg.cc/vZx0dynQ/Captura-de-pantalla-2022-07-24-233031.png)](https://postimg.cc/4YZ6zrwM)

------------


#### 5. Ponemos en marcha el proyecto 
##### Después de haber hecho todos los pasos anteriores ya solo queda escribir en la consola de comando 
```bash
php artisan serve
```
##### Ya con esto nuestro proyecto corriendo en el puerto 8000,   http://127.0.0.1:8000

## Test 

**Si introducimos el comando **
```bash
php artisan test
```
**Podremos realizar un test de las funciones del Back End **
[![Captura-de-pantalla-2022-07-24-234256.png](https://i.postimg.cc/FRCP4HTH/Captura-de-pantalla-2022-07-24-234256.png)](https://postimg.cc/LYfkk2dc)
