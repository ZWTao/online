<?php
namespace app\valtao\controller;

use think\Controller;
class Common extends Controller
{
    public function index()
    {
        return $this->view->fetch();
    }
    public function welcome()
    {
        return $this->view->fetch();
    }
}
