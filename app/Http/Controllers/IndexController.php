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
        $headerModel = new Models\HeaderModel();
        $sldModel = new Models\SliderModel();
        $cateModel = new Models\TourCategoryModel();
        $tourModel = new Models\TourModel();

        $headerData = $headerModel->index($localCode);
        $sliderData = $sldModel->index($localCode);
        $cateData = $cateModel->index($localCode);
        $tourRcm = $tourModel->indexTourRecommended($localCode);

        $indexData = array(
            "headerData" => $headerData,
            "sliderData" => $sliderData,
            "cateData" => $cateData,
            "tourRcm" => $tourRcm,
        );

        return view('index', $indexData);
    }
}