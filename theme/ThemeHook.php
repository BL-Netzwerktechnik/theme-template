<?php

use crisp\api\Helper;
use crisp\models\HookFile;
use \Twig\Environment;

class ThemeHook extends HookFile {

    /**
     * @description This function executes before any RESTful API Class is triggered.
     **/
    public function preExecute(string $Interface): void {

    }

    /**
     * @description This function executes after any RESTful API Class is triggered 
     **/
    public function postExecute(string $Interface): void {

    }


    /**
     * @description This function executes after a template has been rendered 
     **/
    public function postRender($CurrentPage, $CurrentFile): void {
        return null;
    }


    /**
     * @description This function executes before a template has been rendered 
     **/
    public function preRender($CurrentPage, $CurrentFile): void {
        return null;

    }

}
