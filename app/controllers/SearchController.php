<?php

use \ZebraCheese\Intake\Customer;

class SearchController extends \BaseController {

  public function searchCustomers($query) {
  	$data = array();
    $results = Customer::select('first_name', 'last_name', 'primary_phone')->where('last_name', 'LIKE', '%' . $query . '%')->get();
    return Response::json($results);
  }
}