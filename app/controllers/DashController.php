<?php

class DashController extends BaseController {

  public function index() {
    return View::make('dashboard');
  }
}