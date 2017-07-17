<?php

namespace App\Controllers;

use App\Models\Users;
use Phalcon\Http\Request;

class IndexController extends ControllerBase
{

    public function indexAction()
    {
        $type = $this->request->get('type','int',1);
        var_dump($type);exit;
        $user = new Users();
        $user->name = 'test';
        $user->password = 'news';
        echo $user->create();
        exit;


        $user = Users::find();
        echo "ok";exit;
    }

    public function testAction()
    {
       return "okss";
    }

}

