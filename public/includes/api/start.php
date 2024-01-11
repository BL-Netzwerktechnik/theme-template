<?php
use crisp\core\RESTfulAPI;
use crisp\core\Bitmask;
use crisp\models\ThemeAPI;


class start extends ThemeAPI  {

    public function execute(string $Interface): void
    {
        echo RESTfulAPI::response(Bitmask::REQUEST_SUCCESS->value, "I am an API!", []);
    }
}
