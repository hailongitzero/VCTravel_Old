<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models;
use Illuminate\Support\Facades\App;

class IndexController extends Controller
{
    public function index(){
        $local = App::getLocale();

        /* Load Model */
        $mnModel = new Models\MenuMode();
        $sldMode = new Models\SliderMode();

        $headerData = $mnModel->getMainMenu('MG01');
        $sldData = $sldMode->getSliderData();

        $indexData = array(
            "headerData" => $headerData,
            "sldData" => $sldData,
        );

        return view('index', $indexData);
    }
}