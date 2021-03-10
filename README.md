## About InventoryManagement

InventoryManagement is a web application using a [Backend](https://github.com/Kreyco/InventoryManagementBackend) and a [Frontend](https://github.com/Kreyco/InventoryManagementFrontend)

##Start apps
1. We assume you have a MariaDB installation (or MySQL). Create Database `CREATE DATABASE inventory_management DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;`
1. Now you need to Seed the database. Go to the Backend app directory into the root and use:
   1. If is the first time, run:
      `php artisan migrate --seed`
   1. If you have the DB structure created and want to have a fresh installation just use:
      `php artisan migrate:fresh --seed`
1. Create a `.env` file and run `php artisan key:generate`, then run `php artisan jwt:secret`
1. Start [Backend app](https://github.com/Kreyco/InventoryManagementBackend) using `php artisan serve`
1. Go to the Frontend directory and start [Frontend app](https://github.com/Kreyco/InventoryManagementFrontend) using `npm run serve`

#Login
Login with the credentials above:
*Email:* user@example.com
*Password:* 12345678
