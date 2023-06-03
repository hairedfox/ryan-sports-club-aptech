<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


class ActivitiesController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    function indoor() {}

    function outdoor() {}

    function recreation() {}

    function create() {}
}
