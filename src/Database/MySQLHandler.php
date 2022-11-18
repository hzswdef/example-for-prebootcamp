<?php

namespace Database;

class MySQLHandler {

    private string $hi = 'hello';

    public function __construct() {}

    public function getHello() {
        return $this->hi;
    }

}
