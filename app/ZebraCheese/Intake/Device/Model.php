<?php namespace ZebraCheese\Intake\Device;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Model extends \Eloquent {

    use SoftDeletingTrait;
    
    protected $dates = ['deleted_at'];
    protected $fillable = array('name', 'brand_id');
    protected $gaurded = array(
        'id',
        'uuid'
    );

    public function devices() {
        return $this->hasMany('ZebraCheese\Intake\Device\Device');
    }

    public function brand() {
        return $this->belongsTo('ZebraCheese\Intake\Device\Brand');
    }
}

?>