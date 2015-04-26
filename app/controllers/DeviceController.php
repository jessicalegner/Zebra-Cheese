<?php

use ZebraCheese\Intake\Device\Device;
use ZebraCheese\Intake\Device\Model;
use ZebraCheese\Intake\Device\Brand;
use ZebraCheese\Intake\Device\Type;

class DeviceController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /devices
	 *
	 * @return Response
	 */
	public function index()
	{
		
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /devices/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$brands = Brand::all()->lists('name', 'id');
		$models = Model::all()->lists('name', 'id');
		$types = Type::all()->lists('name', 'id');

		return View::make('admin.device.create', compact('brands', 'models', 'types'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /devices
	 *
	 * @return Response
	 */
	public function store()
	{
		$data = Input::except('_token');
		if(isset($data['new_brand']) && $data['new_brand'] != "") {
			$data['brand'] = $data['new_brand'];
		}
		if(isset($data['new_type']) && $data['new_type'] != "") {
			$data['type'] = $data['new_type'];
		}

		$validation = Validator::make($data, Device::$rules);
		if ($validation->passes()) {
			try {
				$brand = Brand::firstOrCreate(array(($data['new_brand'] != "") ? 'name' :'id' => $data['brand']));
				$model = Model::create(array('name' => $data['model'], 'brand_id' => $brand->id));
				$type  = Type::firstOrCreate(array(($data['new_type'] != "") ? 'name' :'id' => $data['type']));
			
				$device = new Device;
				$device->model_id = $model->id;
				$device->type_id = $type->id;
				$device->save();
			} catch (\Illuminate\Database\QueryException $e) {
				return \Redirect::back()
            	->withInput()
            	->withErrors('Does this device already exist?');
			}
		} else {
            return \Redirect::back()
            	->withInput()
            	->withErrors($validation);
        }

        return Redirect::to('/admin/manage/devices')->withMessage('The device has been created.');
	}

	/**
	 * Display the specified resource.
	 * GET /devices/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @return Response
	 */
	// public function edit()
	// {
	// 	// chosen device to edit
	// 	$device_id = Input::get('id');
	// 	$device = Device::findOrFail($device_id);

	// 	$devices = Device::all();
	// 	$brands = Brand::all()->lists('name', 'id');
	// 	$models = Model::all()->lists('name', 'id');
	// 	$types = Type::all()->lists('name', 'id');

	// 	return View::make('admin.edit.device', compact('device', 'devices', 'brands', 'models', 'types'));
	// }

	/**
	 * Update the specified resource in storage.
	 * PUT /devices/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @return Response
	 */
	public function destroy()
	{
		Device::find(Input::get('id'))->delete();

		return Redirect::back()->withMessage('The device has been deleted.');
	}

}