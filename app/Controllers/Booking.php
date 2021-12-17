<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Booking extends BaseController
{
    public function index()
    {
        return view('book_view');
    }
}
