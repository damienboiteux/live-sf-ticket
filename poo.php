<?php

class Mere {
    public function index() {
        var_dump(__METHOD__);
    }
}


class Fille extends Mere {
    public function index() {
        parent::index();
        var_dump(__METHOD__);
    }
}

$fille = new Fille();
$fille->index();