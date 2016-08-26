<?php
/**
 * Created by PhpStorm.
 * User: HaiLong
 * Date: 8/18/2016
 * Time: 2:53 PM
 */

namespace App\Models;
use DB;


class SliderModel
{
    /** get All data for Slider
     * @param $localeCode
     * @return object
     */
    public function index($localeCode){
        $sliderData = array(
            'sliderContent' => $this->getSliderContent($localeCode),
            'sliderPost' => $this->getSliderPost($localeCode)
        );

        return $sliderData;
    }

    /** return Slider content
     * @param $localeCode
     * @return mixed
     */
    public function getSliderContent($localeCode){
        return DB::table('tb_slide')
            ->select('SLD_ID','SLD_SEQ','SLD_TITLE_'.$localeCode.' AS SLD_TITLE','SLD_CONTENT_'.$localeCode.' AS SLD_CONTENT','SLD_IMG_URL','SLD_IMG_ALT', 'SLD_HTML_CODE', 'SLD_LINK')
            ->orderBy('SLD_SEQ', 'ASC')
            ->get();
    }

    /** return post display in slider
     * @param $localeCode
     * @return string
     */
    public function getSliderPost($localeCode){

        $result = DB::table('tb_tours')
            ->leftJoin('tb_location', 'tb_tours.LOCATION_ID', '=', 'tb_location.LOCATION_ID')
            ->leftJoin(DB::raw('tb_img_ref INNER JOIN tb_img_mgmt ON tb_img_ref.IMG_ID = tb_img_mgmt.IMG_ID'), 'tb_tours.TOUR_RPV_IMG_ID', '=', 'tb_img_ref.REF_ID')
            ->where('tb_tours.TOUR_FTR_YN', '=', 'Y')
            ->where('tb_tours.TOUR_ACT_YN', '=', 'Y')
            ->select(
                'tb_tours.TOUR_ID'
                , 'tb_tours.TOUR_TEXT_LINK'
                , 'tb_tours.TOUR_TIT_'.$localeCode.' AS TOUR_TIT'
                , 'tb_tours.TOUR_LENGTH_'.$localeCode.' AS TOUR_LENGTH'
                , DB::raw('FORMAT(tb_tours.TOUR_PRICE_'.$localeCode.', 0) TOUR_PRICE')
                , DB::raw('IF( \''.$localeCode.'\' = \'VI\', \'VND\', \'USD\' ) AS CURRENCY_UNIT')
                , 'tb_tours.TOUR_PRM_PRICE'
                , 'tb_tours.TOUR_RATE_TOT_STAR'
                , 'tb_tours.TOUR_RATE_TOT_SEQ'
                , 'tb_tours.TOUR_DESCRIPTION_'.$localeCode.' AS TOUR_DESCRIPTION'
                , 'tb_tours.TOUR_KEYWORDS_'.$localeCode.' AS TOUR_KEYWORDS'
                , 'tb_location.NATIONAL_NM_'.$localeCode.' AS NATIONAL_NM'
                , 'tb_location.PROVINCE_NM_'.$localeCode.' AS PROVINCE_NM'
                , 'tb_img_mgmt.IMG_URL'
                , 'tb_img_mgmt.IMG_ALT'
                , 'tb_img_mgmt.IMG_TP'
            )
            ->orderBy('TOUR_RATE_TOT_STAR', 'DESC')
            ->orderBy('TOUR_RATE_TOT_STAR', 'DESC')
            ->orderBy('TOUR_CREATE_TIMESTAMP', 'DESC')
            ->take(4)
            ->get();
        return $result;
    }
}