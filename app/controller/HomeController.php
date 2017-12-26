<?php

namespace Miz\Controller;

//use Miz\Model\Home;
use Miz\Engine\Session;

class HomeController
{

    public function index()
    {

        require ROOT . 'resource/view/home.php';

    }

}
