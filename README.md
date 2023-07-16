# Icon widgets and helper classes for Yii2

## This project has been discontinued.

## Installation

The preferred way of installation is through Composer.
If you don't have Composer you can get it here: https://getcomposer.org/

You must be able to load NPM assets via Composer. This can either be achieved by the FXP composer asset plugin or by using [Asset Packagist](https://asset-packagist.org/).

To install the package add the following to the ```require``` section of your composer.json:
```
"require": {
    "macgyer/yii2-icon": "*"
},
```

## Usage
Please check sources for examples and details.

```php
// via named magical method
echo FontawesomeIconHelper::faUser()->regular()->size(8)->render();

// via instance by icon name and additional config
echo FontawesomeIconHelper::getInstance('user', ['flipVertical' => true])->regular()->render();
```

## Changelog
### 2.5.0 - 2019-12-27
* updated to FA version 5.12.0

### 2.4.0 - 2019-10-25
* use native composer package to load FA

### 2.3.0 - 2019-10-25
* updated to FA version 5.11.2

### 2.2.0 - 2019-06-07
* updated to FA version 5.9.0

### 2.1.0 - 2019-01-02
* updated to FA version 5.6.3

### 2.0.0 - 2018-12-05
* **Please note:** This release introduces breaking changes
* updated to FA version 5.5.0
* make use of FA NPM asset

### 1.0.3 - 2018-05-14
* updated to FA version 5.0.13

### 1.0.2 - 2018-04-20
* updated to FA version 5.0.10

### 1.0.1 - 2018-03-03
* updated to FA version 5.0.8

### 1.0.0 - 2018-01-02
* initial release
* FA5 version: 5.0.2
