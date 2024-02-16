# Indice de contenidos:

1. [Máquina virtual](#virtual)
   
1.1 [Adquirir la ova de la máquina virtual](#virtual_ad)

1.2 [Instalar la máquina virtual](#virtual_inst)

1.3 [Abrir la máquina virtual](#virtual_abrir)

2. [Docker](#docker)
   
 2.1 [Preparar docker](#docker_prep)

 2.2 [Hacer el .env del docker](#docker_env")

3. [Clonar el proyecto](#clonar)
   
 3.1 [SSH](#clonar_ssh)

 3.2 [Git clone](#clonar_git)

 3.3 [Evitar problemas de permisos](#clonar_permisos)

 3.4 [Generar el vendor](#clonar_vendor)

 3.5 [Crear el .env del proyecto](#clonar_env)

 3.6 [Compose up](#clonar_compose)

 3.7 [Instalar npm](#clonar_npm)

 3.8 [Instalar Vite](#clonar_vite)

 3.9 [Instalar git flow](#clonar_flow)

 3.10 [Como podrás observar la cosa sigue sin funcionar](#clonar_arreglo)

 3.11 [Problemas con git](#clonar_problemas)

# **1. Máquina virtual**<a name="virtual"></a>

## **1.1 Adquirir la ova de la máquina virtual**<a name="virtual_ad"></a>
Para conseguir la OVA nos vamos al repositorio que corresponda, como ahora no estoy en el examen toca meterse en Google Drive con la cuenta de educa.madrid.org, una vez en drive seleccionamos a la izquierda "Compartido conmigo" -> "2DAW" y luego descargamos la LocOs23 DAWES OVA, la de 4,2 GB, viene con docker y php instalados, el usuario se llama "usuario" y la contraseña de administrador es "usuario"

![alt text](Captura.PNG)

## **1.2 Instalar la máquina virtual**<a name="virtual_inst"></a>

Cuando tengais la OVA teneis que hacer click derecho -> Abrir con -> virtualbox

![alt text](Captura2.PNG)

Os aparecera el menú de VirtualBox, dejais todo como está excepto que en "Politica de direcciones MAC" abrís el desplegable y elegís generar nuevas MAC para todos los adaptadores. Le dais a importar.

![alt text](Captura3.PNG)

## **1.3 Abrir la máquina virtual**<a name="virtual_abrir"></a>

La abrimos con normalidad y según nos metemos ha de verse algo así:

![alt text](Captura4.PNG)


---

# **2.Docker**<a name="docker"></a>

## **2.1 Preparar docker** <a name="docker_prep"></a>

Abrimos el visual y nos deberiamos encontrar en una carpeta llamada "miPHP", borramos todo lo que halla en ella menos el "docker-compose.yaml"

![alt text](Captura5.PNG)

![alt text](Captura6.PNG)

Luego entramos en el apartado de Docker y borramos todo, los contenedores y las imágenes:

![alt text](Captura7.PNG)

![alt text](Captura8.PNG)

Ahora volvemos  y en la carpeta miPHP el "docker compose.yaml" que teniamos vamos a sustituir su contenido por el siguiente:

```conf
version: '2'

services:
  mariadb:
    image: docker.io/bitnami/mariadb:11.2
    ports:
      - '3306:3306'
    expose:
      - '3306'
    env_file:
      - ".env"
    environment:
      # ALLOW_EMPTY_PASSWORD is recommended only for development.
      - ALLOW_EMPTY_PASSWORD=yes
      - MARIADB_USER=${MARIADB_USER}
      - MARIADB_DATABASE=${MARIADB_DATABASE}
      - MARIADB_PASSWORD=${MARIADB_PASSWORD}
  myapp:
    tty: true
    image: docker.io/bitnami/laravel:10
    labels:
      kompose.service.type: nodeport
    ports:
      - '8000:8000'
    env_file:
      - ".env"
    environment:
      - DB_HOST=mariadb
      - DB_PORT=3306
      - DB_USERNAME=${MARIADB_USER}
      - DB_DATABASE=${MARIADB_DATABASE}
      - DB_PASSWORD=${MARIADB_PASSWORD}
    volumes:
      - './Proyecto-Julian:/app'
    depends_on:
      - mariadb
```

## **2.2 Hacer el .env del docker** <a name="docker_env"></a>

Crearemos en miPHP un archivo llamado ".env" con el siguiente contenido:

``` conf
# MaribaDB - Desarrollo
MARIADB_VERSION=8.0.21
MARIADB_HOST=mariadb
MARIADB_DATABASE=bitnami_myapp
MARIADB_USER=bn_myapp
MARIADB_PASSWORD=secret
```

---

# **3. Clonar el proyecto** <a name="clonar"></a>

## **3.1 SSH**<a name="clonar_ssh"></a>
Para poder clonar nuestro proyecto hay que conectarse por SSH con nuestra cuenta de GitHub, esto lo lograremos con los siguientes pasos:

```bash
ssh-keygen -t rsa -b 4096 -C tucorreo@mail
```

 Ejecutamos el comando "ssh-keygen -t rsa -b 4096 -C tucorreo@mail" para generar la clave pública y la privada. Cuando nos pida donde guardarlo ponemos /home/usuario/.ssh/id_rsa . La passphrase la dejamos vacia dandole a enter.

 ![alt text](Captura9.PNG)

```bash
cd /home/usuario/.ssh/
```

```bash
ssh-add id_rsa
```

 Ahora nos movemos al directorio en cuestión con el comando "cd /home/usuario/.ssh/", despues ejecutamos "ssh-add id_rsa" para añadir la clave privada.

  ![alt text](Captura10.PNG)

 Luego hacemos "cat id_rsa.pub" y copiamos todo lo que nos devuelve.

Ahora nos logeamos en Github y vamos a https://github.com/settings/keys . Entonces pulsamos en New SSH Key.

   ![alt text](Captura11.PNG)

Una vez dentro le ponemos un título y en Key pegamos el tocho de la clave que copiamos antes. Entonces pulsamos en Add Key

![alt text](Captura12.PNG)


  ## **3.2 Git clone**<a name="clonar_git"></a>
   Nos vamos al repositorio de github del proyecto https://github.com/mramiroz/Proyecto-Julian y copiamos la opción SSH para clonarlo.

![alt text](Captura13.PNG)

```bash
git clone git@github.com:mramiroz/Proyecto-Julian.git
```

 En la carpeta miPHP hacemos un "git clone git@github.com:mramiroz/Proyecto-Julian.git", en la opción de que si queremos seguir conectando le decimos que yes.

 ![alt text](Captura14.PNG)

## **3.3 Evitar problemas de permisos**<a name="clonar_permisos"></a>

```bash
sudo chown -R usuario Proyecto-Julian/
```

 Para hacerlo ejecutamos el comando "sudo chown -R usuario Proyecto-Julian/"

 ![alt text](Captura15.PNG)

## **3.4 Generar el vendor**<a name="clonar_vendor"></a>

```bash
docker run --rm -it --volume $(pwd):/app prooph/composer:8.2 install --ignore-platform-reqs
```

   Para conseguir esta hazaña solo hay usar el comando "docker run --rm -it --volume $(pwd):/app prooph/composer:8.2 install --ignore-platform-reqs" en la carpeta del proyecto.

   ![alt text](Captura16.PNG)

## **3.5 Crear el .env del proyecto** <a name="clonar_env"></a>
   Este archivo es importante tenerlo en la carpeta del proyecto, debemos de crearlo, lo llamamos .env y dentro ponemos lo siguiente (si no lo copiamos del .env.example):

```conf
APP_NAME=Laravel
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DISK=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=mailpit
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_HOST=
PUSHER_PORT=443
PUSHER_SCHEME=https
PUSHER_APP_CLUSTER=mt1

VITE_APP_NAME="${APP_NAME}"
VITE_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
VITE_PUSHER_HOST="${PUSHER_HOST}"
VITE_PUSHER_PORT="${PUSHER_PORT}"
VITE_PUSHER_SCHEME="${PUSHER_SCHEME}"
VITE_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

SCOUT_DRIVER=collection
```

   ![alt text](Captura17.PNG)

## **3.6 Compose up**<a name="clonar_compose"></a>

```bash
docker compose up
```
  
 Una vez hecho esto tiramos el comando "docker compose up" desde la carpeta miphp.

![alt text](Captura19.PNG)    

## **3.7 Instalar npm**<a name="clonar_npm"></a>

```bash
sudo apt-get install npm
```

 Como nuestro proyecto utiliza Vite, hemos de instalar npm, hay que ejecutar "sudo apt-get install npm"

 ![alt text](Captura20.PNG)

 ```bash
 sudo apt-get update
 ```

 Además de "sudo apt-get update" 

  ![alt text](Captura21.PNG) 

## **3.8 Instalar Vite**<a name="clonar_vite"></a>

```bash
npm install vite
```

  Hacemos "npm install vite"

  ![alt text](Captura24.PNG) 

```bash
echo fs.inotify.max_user_watches=524288 | sudo tee -a /etc/sysctl.conf && sudo sysctl -p
```

 Ahora nos daría un error por eso tenemos que ejecutar el comando "echo fs.inotify.max_user_watches=524288 | sudo tee -a /etc/sysctl.conf && sudo sysctl -p"

  ![alt text](Captura25.PNG) 

```bash
npm run dev
```

  Con el error subsanado podemos ejecutar "npm run dev", de esta manera veremos nuestra aplicación funcionando en localhots:8000


## **3.9 Instalar git flow**<a name="clonar_flow"></a>


```bash
sudo apt-get install git-flow
```

Ya que usamos git flow toca instalarlo con "sudo apt-get install git-flow".

  ![alt text](Captura22.PNG)

```bash
git flow init
```

Luego hacemos "git flow init", respondemos como se ve en la imagen.

  ![alt text](Captura23.PNG)

## **3.10 Como podrás observar la cosa sigue sin funcionar**<a name="clonar_arreglo"></a>


```bash
composer update
```

Para arreglarlo nos metemos en la terminal del contenedor de docker y ejecutamos "composer update"


![alt text](Captura26.PNG) 


## **3.11 Problemas con git**<a name="clonar_problemas"></a>

```bash
git config --global user.email "you@example.com"
```

```bash
git config --global user.name "Tu Nombre"
```
Tirar estos comandos si hace falta con vuestro datos.

"git config --global user.email "you@example.com""
"git config --global user.name "Tu Nombre""


### **FIN**

