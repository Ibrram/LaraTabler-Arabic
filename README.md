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

## Installation command
Now you can use the installtion command to save some time of install laravel/ui
```
php artisan laratabler:install
```

this command'll publish Tabler files and call the artisan command `php artisan ui:auth --force` and replace all UI auth views with the tabler one

# Wan't only publish Tabler Files ?
```
php artisan vendor:publish --tag=LaraTabler
```
This publish line'll publish only Tabler admin views without Auth one so you can use your own one or Laravel/UI one
now you'll find folder inside `resources/views/LaraTabler` contains the blade of the dashboard and in `public/LaraTabler` contains all assets files

# Video ?
[![Install Arabic LaraTabler](http://img.youtube.com/vi/gHprnJOoWYE/0.jpg)](http://www.youtube.com/watch?v=gHprnJOoWYE "Install Arabic LaraTabler")


### Changelog
```
# 7 aug, 2021 | Add the installtion command with Tabler Auth views to replace with the Laravel/UI one "php artisan laratabler:install"
```

# Ends
i hope my first package'll help you well :)
