#!/bin/bash

sudo docker compose up -d

sudo docker compose run composer install

sudo docker compose run npm install
sudo docker compose run npm run build

sudo docker compose run artisan migrate

sudo docker compose run artisan db:seed

sudo chmod -R gu+w ./src/storage

sudo chmod -R guo+w ./src/storage

echo ""
echo ""
echo ""
echo "Сайт был успешно запущен!"
echo "Перейдите пожалуйста по данной ссылке: http://localhost:8080/"
