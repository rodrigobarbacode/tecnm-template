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
    apt-get clean && \                             
    rm -rf /var/lib/apt/lists/*                    

# Establecer el directorio de trabajo.
WORKDIR /usr/src/app

# Copiar el archivo package.json y package-lock.json.
COPY ../app/package*.json ./

# Instalar las dependencias.
RUN npm install

# Copiar el resto de los archivos.
COPY ../app .

# Correr la aplicación.
CMD ["node", "app.js"]
