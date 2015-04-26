<?php namespace ZebraCheese\Intake\Device;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Device extends \Eloquent {

    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];
    protected $gaurded = array(
        'id',
        'uuid'
    );
    

    public static $rules = array(
        'brand' => 'required',
        'model' => 'required',
        'type'  => 'required'
    );

    public function type() {
    	return $this->belongsTo('ZebraCheese\Intake\Device\Type');
    }

    public function model() {
    	return $this->belongsTo('ZebraCheese\Intake\Device\Model');
    }
}

?>