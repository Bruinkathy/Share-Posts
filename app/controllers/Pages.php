<?php
  class Pages {
    public function __construct(){
     
    }

    public function index(){
      echo 'Hello';
    }

    public function about($id){
      echo $id;
    }
  }