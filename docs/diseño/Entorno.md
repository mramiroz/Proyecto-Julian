# Entorno de desarrollo
## 1. Herramientas
### 1.1 Control de versiones

Para hacer el control de versiones hemos usado un repositorio de Git que a su vez está subido en GitHub.
A la hora de hacer cambios estamos usando la metodología de Git flow que consiste en abrir ramas de feature
(git flow feature start nombre_de_feature) para trabajar en ellas, hacemos gits adds y git commits y al terminar con la tarea la cerramos (git
flow feature finish nombre_de_feature). Una vez cerrada la rama sincronizamos la rama de develop local con la remota haciendo primero git pull y luego git push. En caso de conflictos gestionamos el merge manualmente.

### 1.2 Documentación

En el caso de la documentación tenemos un directorio /docs en nuestro repositorio bajo el que tenemos toda la que vamos generando para nuestro proyecto, los formatos suelen ser markdown (md) o pdf. En ocasiones generamos subdirectorios para una mejor organización de la información.

### 1.3 Diagramado


Para el diagramado usamos Plantuml escrito en archivos markdown o Lucidspark según nos convenga.



### 1.4 Prototipado

En cuanto al prototipado hemos optado por hacerlo en alto nivel, por eso hemos elegido usar Figma, una aplicación web que nos permite diseñar las pantallas con relativa falicidad y en un espacio de trabajo compartido.

## 2 Definición del entorno / Automatización
## 2 Definición del entorno / Automatización
### 2.1 **Entornos**
Utilizaremos **git y git flow** para el control de versiones y estar interactuando con **Git Hub** donde estaremos actualizando los avances del proyecto.
Como IDE principal utilizaremos **Visual Studio Code:**  que nos ayuda mucho con la organización de ficheros, en nuestra edición de codigo fuente, en depuraciones y añadir nuestras extenciones.
 
Manejaremos nuestro proyecto a través del **Docker:** con el framework de **Laravel** y **Blade**.

Para gestionar nuestra Base de Datos utilizaremos **Postgress**.
### **2.2 Automatización:**    

Para gestionar nuestra automatización del proyecto, haremos un "git clone" de nuestro repositorio **Git Hub Proyecto**, esto en  nuestra máquina local, seguidamente haremos "docker compose up -d" para que se actualicé y la máquina estará preparada para seguir con el desarrollo.

     
