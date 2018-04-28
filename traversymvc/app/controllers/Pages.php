<?php

  //default controller Pages
  class Pages {

    public function __construct(){

    }

    public function index(){
      echo 'This is index ';
    }

    public function about($id){
      echo 'This is about ' . $id ;
    }
  }

?>