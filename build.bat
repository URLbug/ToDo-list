docker compose up -d

docker compose run composer install

docker compose run npm install
docker compose run npm run build

docker compose run artisan migrate

docker compose run artisan db:seed

echo ""
echo ""
echo ""
echo "Сайт был успешно запущен!"
echo "Перейдите пожалуйста по данной ссылке: http://localhost:8080/"