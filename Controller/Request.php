<?php
  namespace RC\Controller;

  /*
  *Router
  */

  class Request{

    private $controla=null;
    private $action=null;
    private $params=null;

    function __construct(){
      echo "Lanzamos Request";
    }

    /**
     * Get the value of namespace RC\Controller;
     *
     * @return mixed
     */
    public function getControla()
    {
        return $this->controla;
    }

    /**
     * Set the value of namespace RC\Controller;
     *
     * @param mixed controla
     *
     * @return self
     */
    public function setControla($controla)
    {
        $this->controla = $controla;

        return $this;
    }

    /**
     * Get the value of Action
     *
     * @return mixed
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set the value of Action
     *
     * @param mixed action
     *
     * @return self
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get the value of Params
     *
     * @return mixed
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * Set the value of Params
     *
     * @param mixed params
     *
     * @return self
     */
    public function setParams($params)
    {
        $this->params = $params;

        return $this;
    }

}
 ?>
