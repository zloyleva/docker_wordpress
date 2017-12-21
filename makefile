docker_name = dockerwordpress_web_1
docker_image = dockerwordpress_web

help: #prints list of commands
	@cat ./makefile | grep : | grep -v "grep"

install_wordpress: #update vendors
	@sudo docker exec -it $(docker_name) bash -c 'wget -c http://wordpress.org/latest.tar.gz && tar -xzvf latest.tar.gz && rsync -av wordpress/* ./public/ && rm latest.tar.gz && rm -rf wordpress/ && cp ./wp-config.php ./public/wp-config.php && cp .htaccess ./public/.htaccess'

install: #start docker container #
	@sudo docker-compose up -d && sudo docker exec -it $(docker_name) bash -c 'php composer.phar update && chmod -R 777 . && php composer.phar dump-autoload '

start: #start docker container #
	@sudo docker-compose up -d

stop: #stop docker container
	@sudo docker-compose down

remove: #remove docker image
	@sudo docker-compose down; sudo docker rmi -f $(docker_image)

composer_update: #update vendors
	@sudo docker exec -it $(docker_name) bash -c 'php composer.phar update && chmod -R 777 . && php composer.phar dump-autoload'

composer_dump: #update vendors
	@sudo docker exec -it $(docker_name) bash -c 'php composer.phar dump-autoload'

chmod: #allow RW to all
	@sudo chmod -R 777 .

mix_dev: #run mix in dev mode
	@sudo docker exec -it $(docker_name) bash -c 'npm run dev && chmod -R 777 .'

mix_prod: #run mix in prod mode
	@sudo docker exec -it $(docker_name) bash -c 'npm run production && chmod -R 777 .'

mix_watch: #run mix in watch
	@sudo docker exec -it $(docker_name) bash -c 'npm run watch && chmod -R 777 .'

connect: #connect to container bash
	@sudo docker exec -it $(docker_name) bash

