## About Laravel

Per a executar les migracions:

docker compose run web php artisan migrate:fresh (Nota: web = nom del servei)
docker compose exec laravel-12-crud-example-web-1 php artisan migrate:fresh (usant el nom del contenidor)
docker exec -it 160753fc8b2e php artisan migrate:fresh (usat el id del contenidor)

En el cas de SQLite, però, es pot fer des la CLI local doncs:
- BDD SQLite resideix a l'estructura de directoris de Laravel
- Al docker-compose hem muntat l'arrel del projecte Laravel a /var/www/html del contenidor, pel que la BDD local i la del contenidor és la mateixa
