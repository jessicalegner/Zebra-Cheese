<?php namespace ZebraCheese\Intake;

class Customer extends \Eloquent {

    protected $gaurded = array(
        'id',
        'uuid'
    );
}

?>