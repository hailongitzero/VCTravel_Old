<?php
/**
 * Created by PhpStorm.
 * User: HaiLong
 * Date: 8/18/2016
 * Time: 2:53 PM
 */

namespace App\Models;
use DB;


class SliderMode
{
    public function getSliderData(){
        return DB::table('tb_slide')
            ->select('SLD_ID','SLD_SEQ','SLD_TITLE','SLD_CONTENT','SLD_IMG_URL','SLD_IMG_ALT','SLD_LINK')
            ->orderBy('SLD_SEQ')->get();
    }
}