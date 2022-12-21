# Laravel Nova Iframe Popup Field

With this field you create a button which displays an iframe in a popup (visually oriented to Inertia.js).

![1](https://raw.githubusercontent.com/Muetze42/asset-repo/main/nova-iframe-popup/images/1.png)
![2](https://raw.githubusercontent.com/Muetze42/asset-repo/main/nova-iframe-popup/images/2.png)
![3](https://raw.githubusercontent.com/Muetze42/asset-repo/main/nova-iframe-popup/images/3.png)

## Install

`composer require norman-huth/nova-iframe-popup`

## Usage

```php

IframePopup::make(__('Url'), 'url'),

IframePopup::make('', 'url', function () {
    return 'https://huth.it';
})->icon('eye')->sufText('Help'),
```

### Options

#### Change Icon ([Heroicon](https://heroicons.com/))

```php
IframePopup::make(__('Url'), 'url')->icon('eye'),
```

#### Change Icon ([Font Awesome](https://fontawesome.com/))

Font Awesome is not included and must be added manually!

```php
IframePopup::make(__('Url'), 'url')->faIcon('fa-solid fa-arrow-up-right-from-square'),
```

#### Remove Icon

```php
IframePopup::make(__('Url'), 'url')
    ->icon('')
    ->preText(__('Show me')),
```

---

#### Add text before the icon

```php
IframePopup::make(__('Url'), 'url')->preText(__('Click me')),
```

#### Add text after the icon

```php
IframePopup::make(__('Url'), 'url')->sufText(__('Help')),
```

---

#### Change button class

```php
IframePopup::make(__('Url'), 'url')->btnClass('btn-primary'),
```

---

#### Add class to DIV container

```php
IframePopup::make(__('Url'), 'url')->containerClass('text-center'),
```

##### Add class to DIV container (index view)

```php
IframePopup::make(__('Url'), 'url')->containerClassIndex('text-center'),
```

##### Add class to DIV container (detail view)

```php
IframePopup::make(__('Url'), 'url')->containerClassDetail('text-center'),
```

##### Add class to DIV container (form view)

```php
IframePopup::make(__('Url'), 'url')->containerClassForm('text-center'),
```

---
[![More Laravel Nova Packages](https://raw.githubusercontent.com/Muetze42/asset-repo/main/svg/more-laravel-nova-packages.svg)](https://huth.it/nova-packages)

[![Stand With Ukraine](https://raw.githubusercontent.com/vshymanskyy/StandWithUkraine/main/banner2-direct.svg)](https://vshymanskyy.github.io/StandWithUkraine/)
[![Woman. Life. Freedom.](https://raw.githubusercontent.com/Muetze42/Muetze42/2033b219c6cce0cb656c34da5246434c27919bcd/files/iran-banner-big.svg)](https://linktr.ee/CurrentPetitionsFreeIran)
