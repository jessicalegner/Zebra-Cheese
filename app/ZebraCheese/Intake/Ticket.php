<?php namespace ZebraCheese\Intake;

class Ticket extends \Eloquent {

    protected $gaurded = array(
        'id',
        'uuid'
    );

    public function devices() {
        return $this->belongsTo('ZebraCheese\Intake\Device\Device')->withTimestamps();
    }
}

?>