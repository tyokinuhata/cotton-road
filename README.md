# Cotton Road
&#x1f48a; Inventory management system for drugs &#x1f489;

## Initial setup

```bash
$ cp .env.example .env
$ composer install
$ php artisan key:generate
$ touch database/database.sqlite
$ php artisan serve
```

## DB Setup

```bash
$ php artisan migrate   // or php artisan migrate:refresh
$ php artisan db:seed
```

## Dev account information

|Type|User ID|Password|
|:--|:--|:--|
|admin|admin|password|
|seller|seller|password|
|customer|customer|password|