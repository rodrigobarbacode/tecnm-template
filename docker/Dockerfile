# Download the latest node.js image from the docker hub.
FROM node:latest

# Install PHP and other necessary packages
RUN apt-get update && \
    apt-get install -y php && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

# Create app directory.
WORKDIR /usr/src/app

# Install app dependencies
COPY ./app/package*.json ./
RUN npm install

# Copy the rest of the application code (except node_modules)
COPY . .

# Expose the port that the app runs on
EXPOSE 3000

# Execute app.
CMD ["npm", "run", "start"]