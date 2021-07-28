# What this package do ?
this package should save some time of downloading the tabler files then move it to the project this package includes the files of tabler version: `1.0.0-alpha.7` all you need just publish the vendor

# Screenshot
![Arabic Tabler](https://i.imgur.com/0N3JEqp.png "Arabic Tabler")
## Current Version of Tabler
- 27 july, 2021 `1.0.0-alpha.7` **(Current)**

# How to use ?
Firstly you need to download the package via Composer
```
composer require ibram/lara-tabler-arabic
```
then you need to publish the files

```
php artisan vendor:publish --tag=LaraTabler
```
now you'll find folder inside `resources/views/LaraTabler` contains the blade of the dashboard and in `public/LaraTabler` contains all assets files

# Ends
i hope my first package'll help you well :)
