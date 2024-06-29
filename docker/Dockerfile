# Descarga la imagen más reciente de Node.js desde Docker Hub.
FROM node:latest

# Instala PHP y otros paquetes necesarios.

# Actualiza la lista de paquetes.
# Instala PHP.
# Instala la extensión XML para PHP.
# Instala Git.
# Limpia la caché de apt.
# Elimina la lista de paquetes para reducir el tamaño de la imagen.
RUN apt-get update && \                            
    apt-get install -y php && \                    
    apt-get install -y php-xml && \                
    apt-get install -y git && \                    
    apt-get clean && \                             
    rm -rf /var/lib/apt/lists/*                    

# Crea el directorio de aplicación.
WORKDIR /usr/src/master/app

# Instalar dependencias de la aplicación.
RUN npm --prefix /usr/src/master/app install package.json

# Expone el puerto en el que la aplicación se ejecuta.
EXPOSE 3000

# Ejecuta la aplicación.

# Ejecuta el comando para iniciar la aplicación con npm.
CMD ["npm", "run", "start"]                        
