docker_name = dockerwordpress_web_1
docker_image = dockerwordpress_web

help: #prints list of commands
	@cat ./makefile | grep : | grep -v "grep"

install: #start docker container #
	@sudo docker-compose up -d && sudo docker exec -it $(docker_name) bash -c 'chmod -R 777 .'

install_wordpress: #update vendors
	@sudo docker exec -it $(docker_name) bash -c 'wget -c http://wordpress.org/latest.tar.gz && tar -xzvf latest.tar.gz && rsync -av wordpress/* ./public/ && rm latest.tar.gz && rm -rf wordpress/ && cp ./wp-config.php ./public/wp-config.php && cp .htaccess ./public/.htaccess && chmod -R 777 .'

copy_theme: # Copy Theme to project
	@sudo docker exec -it $(docker_name) bash -c 'cp -r ./materials/LearnTheme/ ./public/wp-content/themes/LearnTheme/ && chmod -R 777 .'

lara_mix: #create Laravel Mix and install all dependencies
	@sudo docker exec -it $(docker_name) bash -c 'cp ./.npm-init.js ~/.npm-init.js && npm set init.author.name "zloyleva" && npm init -y && npm install laravel-mix --save-dev && npm i jquery && npm i bootstrap@3 && chmod -R 777 .'

start: #start docker container #
	@sudo docker-compose up -d

stop: #stop docker container
	@sudo docker-compose down

remove: #remove docker image
	@sudo docker-compose down; sudo docker rmi -f $(docker_image)

chmod: #allow RW to all
	@sudo chmod -R 777 .

# ------ JS and CSS section ------

mix_dev: #run mix in dev mode
	@sudo docker exec -it $(docker_name) bash -c 'npm run dev && chmod -R 777 .'

mix_prod: #run mix in prod mode
	@sudo docker exec -it $(docker_name) bash -c 'npm run production && chmod -R 777 .'

mix_watch: #run mix in watch
	@sudo docker exec -it $(docker_name) bash -c 'npm run watch && chmod -R 777 .'

connect: #connect to container bash
	@sudo docker exec -it $(docker_name) bash

