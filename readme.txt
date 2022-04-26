run migratins after docker-comose up 
docker-compose exec php php artisan migrate
docker-compose exec php sh 
    cd ../core
    php artisan migrate


you may topup using 
:81/top-up/{bankId}

you may inquiry with : 
:80/api/inquiry