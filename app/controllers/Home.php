<?php

class Home extends Controller
{
  //Default method
  public function index()
  {
    $this->view('home/index');
  }
}
