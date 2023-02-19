<?php
use crisp\api\Helper;
use crisp\models\ThemePage;
use Twig\Environment;
use crisp\core\RESTfulAPI;
use crisp\core\Bitmask;


class start extends ThemeAPI  {

    public function execute(string $Interface, Environment $TwigTheme): void
    {
        echo RESTfulAPI::response(Bitmask::REQUEST_SUCCESS->value, "I am an API!", []);
    }
}
