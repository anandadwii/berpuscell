<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Tracking extends BaseController
{
    public function index()
    {
        return view('status_view');
    }
}
