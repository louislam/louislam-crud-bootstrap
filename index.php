<?php
require "vendor/autoload.php";

use LouisLam\CRUD\SlimLouisCRUD;
use RedBeanPHP\R;

/*
 * 1. Setup a Database Connection (Support MySQL, SQLite etc.)
 * Please refer to: http://www.redbeanphp.com/connection
 */
R::setup('sqlite:dbfile.db');


/*
 * 2. Create a SlimLouisCRUD instance.
 */
$crud = new SlimLouisCRUD();


/*
 * 3. Add handlers
 */
$crud->add("user", function () use ($crud) {
    $crud->showFields("id", "name", "password", "email");
});

$crud->add("book", function () use ($crud) {
    $crud->showFields("id", "title",  "date");
});


/*
 * 4. Run the application
 */
$crud->run();
