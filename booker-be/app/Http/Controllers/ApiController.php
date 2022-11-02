<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function events() {

        return json_encode(
            Event::
                  orderBy('created_at', 'DESC')
                ->get() 
        );
    }
}
