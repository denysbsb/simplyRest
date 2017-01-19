# simplyRest
Simple RESTFUL API using PHP and Mysql datastorage

### Instalation

Create database or import _sql/simplyRest

Config params db/config

```sh
$ php composer.phar install 
or
$ composer
```

### Usage
url: mydomain/public

### API
```sh
$ POST /api/users/login - body{username:123,password:123}

$ GET /api/users
$ GET /api/users/{id}
$ POST /api/users/add
$ PUT /api/users/update/{id}
$ DELETE /api/users/delete/{id}
```
