<?php namespace ZebraCheese\Intake\Device;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Type extends \Eloquent {

    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];
    protected $fillable = array('name');
    protected $gaurded = array(
        'id',
        'uuid'
    );

    public function devices() {
        return $this->hasMany('ZebraCheese\Intake\Device\Device');
    }
}

?>