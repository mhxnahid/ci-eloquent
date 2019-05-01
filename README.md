# CodeIgniter Composer + Eloquent ORM



I've used this package to create the CI project as it comes pre packaged with composer usability. <https://github.com/kenjis/codeigniter-composer-installer>.

## Folder Structure

```
codeigniter/
├── application/
├── composer.json
├── composer.lock
├── public/
│   ├── .htaccess
│   └── index.php
└── vendor/
    └── codeigniter/
        └── framework/
            └── system/
```

## Requirements

* PHP 5.3.7 or later
* `composer` command (See [Composer Installation](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx))
* Git

## How to Use

### Files to check for Eloquent/ composer specific changes

```
/application/config/config.php
/application/config/database.php
/application/config/autoload.php
```

```
/application/controllers/Userc.php
/application/models/User.php
```

Once loaded properly, you can use eloquent as you use in Laravel. Check Eloquent docs for that.
