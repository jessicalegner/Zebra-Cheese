<?php namespace ZebraCheese\Intake\Device;

class Device extends \Eloquent {

    protected $gaurded = array(
        'id',
        'uuid'
    );

    public function customers() {
        return $this->belongsToMany('ZebraCheese\Intake\Customer')->withTimestamps();
    }

    public function types() {
    	return $this->belongsTo('ZebraCheese\Intake\Device\Type')->withTimestamps();
    }

    public function brands() {
    	return $this->belongsTo('ZebraCheese\Intake\Device\Brand')->withTimestamps();
    }
}

?>