FROM nginx:latest

RUN mkdir -p /usr/share/nginx/html/src/css && \
    mkdir -p /usr/share/nginx/html/src/img

COPY ./index.html /usr/share/nginx/html/index.html
COPY ./src/css/style.css /usr/share/nginx/html/src/css/style.css
COPY ./src/img/logo.jpg /usr/share/nginx/html/src/img/logo.jpg

RUN apt-get update && apt-get install -y curl && apt-get clean 

EXPOSE 80