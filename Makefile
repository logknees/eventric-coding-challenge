server-build:
	cd laravel-app && docker-compose build

server:
	cd laravel-app && docker-compose up

server-setup:
	docker exec app composer install && docker exec app php artisan key:generate && docker exec app php artisan config:cache

down:
	cd vue-app && docker-compose down && cd .. && cd laravel-app && docker-compose down

serve:
	xdg-open http://localhost:81

shell:
	cd laravel-app && docker-compose exec app bash