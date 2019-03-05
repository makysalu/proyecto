<?php
  namespace RC\Controller;

  /*
  *kernel
  */

  class Kernel{
    private $router;
    private $request;

    function __construct(){
      $this->router=new Router();
      $this->request=new Request();
    }
  }
 ?>
