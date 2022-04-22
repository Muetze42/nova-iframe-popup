# Laravel Nova Iframe Popup

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
---
#### Change Icon ([Font Awesome](https://fontawesome.com/))
Font Awesome is not included and must be added manually!
```php
IframePopup::make(__('Url'), 'url')->faIcon('fa-solid fa-arrow-up-right-from-square'),
```
---
#### Add text before the button
```php
IframePopup::make(__('Url'), 'url')->preText(__('Click me')),
```
---
#### Add text after the button
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
