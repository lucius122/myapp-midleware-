<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests; // <-- PENTING & BENAR
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    // pastikan hanya AuthorizesRequests (bukan AuthorizesResources)
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
