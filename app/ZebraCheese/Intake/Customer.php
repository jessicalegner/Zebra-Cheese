<?php namespace ZebraCheese\Intake;

class Customer extends \Eloquent {

    protected $gaurded = array(
        'id',
        'uuid',
        'first_name',
        'last_name'
    );

    public function devices() {
        return $this->belongsToMany('ZebraCheese\Intake\Device\Device')->withTimestamps();
    }
}

?>