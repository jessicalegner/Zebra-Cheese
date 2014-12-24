<?php namespace ZebraCheese\Intake\Device;

class Brand extends \Eloquent {

    protected $gaurded = array(
        'id',
        'uuid'
    );

    public function devices() {
        return $this->hasMany('ZebraCheese\Intake\Device\Device')->withTimestamps();
    }
}

?>