dynamikaweb/php-brazil-info 
===========================
[![Latest Stable Version](https://img.shields.io/github/v/release/dynamikaweb/php-brazil-info)](https://github.com/dynamikaweb/php-brazil-info/releases)
[![Total Downloads](https://poser.pugx.org/dynamikaweb/php-brazil-info/downloads)](https://packagist.org/packages/dynamikaweb/php-brazil-info)
[![License](https://img.shields.io/github/license/dynamikaweb/php-brazil-info)](https://github.com/dynamikaweb/php-brazil-info/blob/master/LICENSE)

Installation
------------
The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```SHELL
$ composer require dynamikaweb/php-brazil-info "*"
```

or add

```JSON
"dynamikaweb/php-brazil-info": "*"
```

to the `require` section of your `composer.json` file.

How to Use
----------
```PHP
use dynamikaweb\brazilinfo\State as BrazilStates;

print_r (BrazilStates::list())
```