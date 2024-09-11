# Assignment 1 - Laravel Blade

| Nama | NRP |
| :----: | :-: |
| Iftala Zahri Sukmana | 5025221002 |


## Tech Stack
- Laravel 11
- MySQL
- Tailwind (Flowbite UI)

## Development

```
composer install
npm install
php artisan key:generate
php artisan migrate
php artisan db:seed
php artisan serve
```

## Project Updates
The way that I made this project different is that I use [Flowbite](https://flowbite.com/) as an Tailwind UI library to simplify my styling. Flowbite UI is responsible to my additional features that will be described below.

![default](resources/assets/default.png)

1. Footer
   
   The footer is obtained from the Flowbite library and has additional features too, such as supports dark mode and able to stick to the bottom of the display.

2. Dark mode toggle
   
   Dark mode toggle is also available on the right side of the top navbar. The purposes are to make user be able to switch in between dark/light mode only with a single click. It's possible by manipulating the tailwind class and using `localStorage` in JavaScript to invoke the classes. That means, The code needs additional Tailwind classes and styles to accomodate the light and dark modes.

   ![light mode](resources/assets/lightmode.png)

   ![dark mode](resources/assets/darkmode.png)

## Changelog
```
11/09/2024
- feat: add changes
- feat: initial commit
```