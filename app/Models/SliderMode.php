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
    /** get All data for Slider
     * @param $localeCode
     * @return object
     */
    public function getSliderData($localeCode){
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

        $resultPost = DB::select(DB::raw(
            "SELECT
                tb_tours.TOUR_ID,
                tb_tours.TOUR_TEXT_LINK,
                tb_tours.TOUR_TIT_$localeCode AS TOUR_TIT,
                tb_tours.TOUR_LENGTH_$localeCode AS TOUR_LENGTH,
                FORMAT(tb_tours.TOUR_PRICE_$localeCode, 2) AS TOUR_PRICE,
                IF('$localeCode' = 'VI', 'VND', 'USD') AS CURRENCY_UNIT,
                tb_tours.TOUR_PRM_PRICE,
                tb_tours.TOUR_RATE_TOT_STAR,
                tb_tours.TOUR_RATE_TOT_TURN,
                tb_tours.TOUR_DESCRIPTION_$localeCode AS TOUR_DESCRIPTION,
                tb_tours.TOUR_KEYWORDS_$localeCode AS TOUR_KEYWORDS,
                tb_location.NATIONAL_NM_$localeCode AS NATIONAL_NM,
                tb_location.PROVINCE_NM_$localeCode AS PROVINCE_NM,
                tb_img_mgmt.IMG_URL,
                tb_img_mgmt.IMG_ALT
            FROM
                tb_tours,
                tb_location,
                tb_img_ref,
                tb_img_mgmt
            WHERE
                tb_tours.TOUR_FTR_YN = 'Y'
                AND tb_tours.TOUR_ACT_YN = 'Y'
                AND tb_tours.LOCATION_ID = tb_location.LOCATION_ID
                AND tb_tours.TOUR_RPV_IMG_ID = tb_img_ref.REF_ID
                AND tb_img_ref.IMG_ID = tb_img_mgmt.IMG_ID
            ORDER BY
                tb_tours.TOUR_ID, tb_tours.TOUR_CREATE_TIMESTAMP DESC"
        ));
        return $resultPost;
    }
}