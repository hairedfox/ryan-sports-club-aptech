<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


class ActivitiesController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    function indoor() {
        return view('activities.indoor');
    }

    function outdoor() {
        return view('activities.outdoor');
    }

    function recreation() {
        return view('activities.recreation');
    }

    function create() {}
}
