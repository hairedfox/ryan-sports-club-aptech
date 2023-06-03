<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class UsersController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;

    function new() {}

    function create() {}
}
