<?php

namespace App\Http\Controllers;

use App\Traits\RestfulTrait;
use Illuminate\Http\Request;

class apiController extends Controller
{
    use RestfulTrait;

    public const STATUS_OK=200;
    public const STATUS_CREATED=201;


    public const STATUS_NOT_FOUND=404;


}
