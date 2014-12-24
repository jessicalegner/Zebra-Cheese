<?php namespace ZebraCheese\Intake\Device;

class Type extends \Eloquent {

    protected $gaurded = array(
        'id',
        'uuid'
    );

    public function devices() {
        return $this->hasMany('ZebraCheese\Intake\Device\Device')->withTimestamps();
    }
}

?>