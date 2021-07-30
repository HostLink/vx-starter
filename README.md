# vx-starter

## Project setup
```
git clone https://github.com/HostLink/vx-starter .
cd vx
php composer.phar install
```

## Remove git remote
```
git remote remove origin
```

## Install db
open puxt.config.ini and set the database information

```
php db_install.php
```

after db install, remove the sql file
```
rm vx.sql
```