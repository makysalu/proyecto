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
    public function start_kernel(){
      $this->router->start_router();
    }
  }
 ?>
