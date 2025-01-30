<?php

namespace example\views\controllers;

use crisp\core\Bitmask;
use crisp\core\RESTfulAPI;
use crisp\core\Themes;




class ApiPagecontroller {

    public function execute(): void
    {
        RESTfulAPI::response(Bitmask::REQUEST_SUCCESS->value, "This is a test response");
    }
}
