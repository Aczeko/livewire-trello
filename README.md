![Livewire-Trello](https://banners.beyondco.de/Livewire-Trello.png?theme=dark&packageManager=&packageName=&pattern=xEquals&style=style_1&description=Trello+clone+with+drag+and+drop+sorting+built+with+Laravel+Livewire&md=1&showWatermark=0&fontSize=125px&images=https%3A%2F%2Flaravel.com%2Fimg%2Flogomark.min.svg)

## Table of Contents
- [Overview](#overview)
- [Installation](#installation)
- [Useful Links](#useful-links)

---
<section id="overview">
    
## 🔎 Overview
This is a Trello clone with drag and drop sorting, built with Laravel Livewire.

It has the ability to edit column titles inline, edit cards and add notes, archive cards and columns, and put them back on the board, as well as sort columns and cards, including moving cards around columns. 

All items, like boards, columns and cards are saved in a MySQL database and are updated while they are being sorted.

It also supports dark and light mode, depending on your system-preference.

</section>

<section id="installation">

## ⚙️ Installation

1. Clone this repository:
    ```bash
    git clone git@github.com:Aczeko/livewire-trello.git
    ```
2. Navigate into the directory:
    ```bash
    cd yourproject
    ````
3. Install dependencies:
    ```bash
    npm install
    composer install 
    ```
5. Generate a new Application Key:

    ```bash
    php artisan key:generate
    ```
    
4. Duplicate the .env.example file and save it as .env
    - here you can set up your database connection

    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=livewire_trello
    DB_USERNAME=root
    DB_PASSWORD= 
    ```
5. Migrate the tables
   
    ```bash
    php artisan migrate
    ```

6. Run your build process with:

    ```bash
    npm run dev
    ```
    
</section>

<section id="useful-links">

## 🔗 Useful Links
- [Video-Tutorial for this Trello Clone](https://codecourse.com/courses/build-a-trello-clone-with-livewire)
- [SortableJS - a JavaScript Library](https://github.com/sortableJs/sortable)
- [Livewire SortableJS - a plugin/wrapper around the Sortable.js package](https://github.com/nextapps-be/livewire-sortablejs)
- [Spatie Laravel Collection Macros](https://github.com/spatie/laravel-collection-macros)
- [Spatie Eloquent Sortable](https://github.com/spatie/eloquent-sortable)


</section>

