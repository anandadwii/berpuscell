<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Track extends BaseController
{
    public function index()
    {
        echo view("track_view");
    }
}
