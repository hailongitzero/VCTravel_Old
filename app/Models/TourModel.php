<?php
/**
 * Created by PhpStorm.
 * User: HaiLong
 * Date: 8/25/2016
 * Time: 10:12 AM
 */

namespace App\Models;

use DB;


class TourModel
{
    public function indexTourRecommended($localeCode){
        $tourRecommended = array(
            "tourRecommended" => $this->tourRecommended($localeCode),
        );

        return $tourRecommended;
    }

    /** get tour recommended
     * @param $localeCode
     * @return mixed
     */
    public function tourRecommended($localeCode){
        $result = DB::table('tb_tours')
            ->leftJoin('tb_location', 'tb_tours.LOCATION_ID', '=', 'tb_location.LOCATION_ID')
            ->leftJoin(DB::raw('tb_img_ref INNER JOIN tb_img_mgmt ON tb_img_ref.IMG_ID = tb_img_mgmt.IMG_ID'), 'tb_tours.TOUR_RPV_IMG_ID', '=', 'tb_img_ref.REF_ID')
            ->where('tb_tours.TOUR_RCM_YN', '=', 'Y')
            ->where('tb_tours.TOUR_ACT_YN', '=', 'Y')
            ->select(
                'tb_tours.TOUR_ID'
                , 'tb_tours.TOUR_TEXT_LINK'
                , 'tb_tours.TOUR_TIT_'.$localeCode.' AS TOUR_TIT'
                , 'TOUR_SHRT_CNT_'.$localeCode.' AS TOUR_SHT_CNT'
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
            ->take(9)
            ->get();

        return $result;
    }
}