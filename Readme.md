<p align="center"><img src="https://github.com/zloyleva/docker_wordpress/blob/master/docker-wordpress.png"></p>

# Wordpress + Docker
This is easy project for very fast develop sites on WordPress

## Getting Started

Install curl

```
$ sudo apt-get update
$ sudo apt-get install curl
``` 

Install Docker

[Docker install link](https://docs.docker.com/engine/installation/linux/docker-ce/ubuntu/#install-from-a-package)

Install Docker-Compose

[Docker-Compose link](https://docs.docker.com/compose/install/#install-compose)

## Create Docker Image

```
$ make install
```

## Install WordPress

```
$ make install_wordpress
```

## Copy WordPress theme

```
$ make copy_theme
```

## JS Dependencies
jQuery
Bootstrap
```
npm install jquery
npm install bootstrap@3
```