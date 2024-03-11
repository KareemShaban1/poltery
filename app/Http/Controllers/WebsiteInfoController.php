<?php

namespace App\Http\Controllers;

use App\Models\WebsiteInfo;
use Illuminate\Http\Request;

class WebsiteInfoController extends Controller
{
    //
    public function index()
    {
        $websiteInfo = WebsiteInfo::all();
    }
}