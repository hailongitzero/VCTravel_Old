<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models;
use Illuminate\Support\Facades\App;

class IndexController extends Controller
{
    public function index(){
        $localCode = strtoupper(App::getLocale());

        /* Load Model */
        $headerModel = new Models\HeaderMode();
        $sldMode = new Models\SliderMode();

        $headerData = $headerModel->getHeader($localCode);
        $sliderData = $sldMode->getSliderData($localCode);

        $indexData = array(
            "headerData" => $headerData,
            "sliderData" => $sliderData,
        );

        return view('index', $indexData);
    }
}