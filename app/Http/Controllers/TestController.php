<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;
use App;
use App\UserInterface;

class TestController extends Controller
{
    /**
     * 顯示應用程式中所有使用者的列表。
     *
     * @return Response
     */
    public function index()
    {
        echo "kirakira<br>";
        $s = new UserInterface();
        $s->index();
    }
}