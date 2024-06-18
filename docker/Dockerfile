# Download the latest node.js image from the docker hub.
FROM node:latest

# Install PHP and other necessary packages
RUN apt-get update && \
    apt-get install -y php && \
    apt-get install -y php-xml && \
    apt-get install -y git && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

# Create app directory.
WORKDIR /usr/src/master/app

# Expose the port that the app runs on
EXPOSE 3000

# Execute app.
CMD ["npm", "run", "start"]