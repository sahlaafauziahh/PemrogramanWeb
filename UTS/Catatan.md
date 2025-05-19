cd perkuliahan
cdPemrogramanWeb
mkdir UTS
cd UTS

docker compose up -d --build
code .
docker exec -it pemweb bash
composer create-project --prefer-dist raugadh/fila-starter .
rm -rf *
rm -rf .*
chown -R www-data:www-data storage/*

edit env:
APP_NAME="Angkot PT Sejahtera"
APP_TIMEZONE='Asia/Jakarta'
APP_URL=http://localhost
ASSET_URL=http://localhost
DB_CONNECTION=mysql
DB_HOST=db_pemweb
DB_PORT=3306
DB_DATABASE=db_pemweb
DB_USERNAME=root
DB_PASSWORD=p455w0rd


php artisan migrate
php artisan migrate:fresh
php artisan db:seed --force (untuk seeder)
php artisan shield:generate --all
php artisan project:init
chmod 777 -R storage/* && chmod 777 bootstrap/*

php artisan make:model Driver -ms
php artisan make:filament-resource Driver --generate
php artisan migrate
php artisan project:init
rm -r app/Filament/Resources/DriverResource
php artisan make:filament-resource Driver --generate

php artisan make:model Schedule -ms
php artisan make:filament-resource Schedule --generate
php artisan migrate
php artisan project:init
php artisan migrate:fresh --seed
rm -r app/Filament/Resources/ScheduleResource
php artisan make:filament-resource Schedule --generate

php artisan make:model Attendance -ms
php artisan make:filament-resource Attendance --generate
php artisan migrate
php artisan project:init

buka localhost dengan browser : 
Username : admin@admin.com
Password : password

Username : driver@angkot.com
Password : password

