<?php
  namespace RC\Controller;

  /*
  *Router
  */

  class Router{
    private $url=null;

    function __construct(){

    }
    public function start_router(){
      $this->url =$_SERVER['REQUEST_URI'];
      var _dump($this->url);
    }
  }
 ?>
