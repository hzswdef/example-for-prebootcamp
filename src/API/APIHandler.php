<?php

namespace API;

use Database\MySQLHandler;

class APIHandler extends MySQLHandler {

    /**
     * String.
     */
    private string $world = 'world!';

    /**
     * Construct method.
     *
     * @see https://www.php.net/manual/en/language.oop5.decon.php
     */
    public function __costruct() {
        // Initializate MySQLHandler class.
        parent::__construct();
    }

    /**
     * Get 'Hello world!' string.
     *
     * @param string $random
     *   Random staff.
     *
     * @return string
     *   Always return 'Hello world!'.
     */
    public function sayHello(string $random = 'Example for example') {
        // Get data from parent class method.
        $hi = $this->getHello();

        return $hi . ' ' . $this->world;
    }

}
