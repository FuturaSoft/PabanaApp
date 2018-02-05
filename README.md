# Pabana Application Skeleton

## Introduction

This is a skeleton application using the Pabana Framework.
This application is meant to be used as a starting place for those
looking to get their feet wet with Pabana.

## Installation using Composer

The easiest way to create a new Pabana project is to use
[Composer](https://getcomposer.org/).  If you don't have it already installed,
then please install as per the [documentation](https://getcomposer.org/doc/00-intro.md).

To create your new Pabana project:

```bash
$ composer create-project pabana/app path/to/install
```

Once installed, you can test it out immediately using PHP's built-in web server:

```bash
$ cd path/to/install
$ php -S 0.0.0.0:8080 -t public
```

This will start the cli-server on port 8080, and bind it to all network
interfaces. You can then visit the site at http://localhost:8080/

**Note:** The built-in CLI server is *for development only*.

## Web server setup

### Apache setup

To setup apache, setup a virtual host to point to the public/ directory of the
project and you should be ready to go! It should look something like below:

```apache
<VirtualHost *:80>
    ServerName app.localhost
    DocumentRoot /path/to/app/public
    <Directory /path/to/app/public>
        DirectoryIndex index.php
        AllowOverride All
        Order allow,deny
        Allow from all
    </Directory>
</VirtualHost>
```

**Note:** For WAMPServer you must add ```Require local``` in directory tag.