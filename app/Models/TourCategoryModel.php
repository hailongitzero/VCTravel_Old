<?php
/**
 * Created by PhpStorm.
 * User: HaiLong
 * Date: 8/24/2016
 * Time: 3:20 PM
 */

namespace App\Models;
use DB;

class TourCategoryModel
{
    /**
     * get all information of Tour Category
     */
    public function index($localCode){
        $tourCate = array(
            'rpvCate' => $this->getCategory($localCode),
        );

        return $tourCate;
    }
    /**
     * get all representative tour category
     * @param $localCode
     */
    public function getCategory($localCode){
        $result1 = DB::select(DB::raw(
            "SELECT
                tb_post_grp.POST_GRP_ID,
                tb_post_grp.POST_NM_$localCode AS  POST_NM,
                tb_post_grp.POST_INTRO_$localCode AS POST_INTRO,
                tb_post_grp.POST_LINK,
                tb_post_grp.POST_RPV_YN,
                (SELECT count(*) FROM tb_post_grp_connect where POST_GRP_ID = tb_post_grp.POST_GRP_ID) AS TOT_POST,
                tb_img_mgmt.IMG_URL,
                tb_img_mgmt.IMG_ALT,
                tb_img_mgmt.IMG_TP
            FROM
                tb_post_grp
                , tb_img_ref
	            , tb_img_mgmt
            WHERE
                tb_post_grp.POST_RPV_YN = 'Y'
                AND tb_post_grp.POST_GRP_ID LIKE 'T%'
                AND tb_post_grp.POST_RPV_IMG_ID = tb_img_ref.REF_ID
                AND tb_img_ref.IMG_ID = tb_img_mgmt.IMG_ID
            LIMIT 8"
        ));

        $result = DB::table('tb_post_grp')
            ->leftJoin(DB::raw('tb_img_ref INNER JOIN tb_img_mgmt ON tb_img_ref.IMG_ID = tb_img_mgmt.IMG_ID'), 'tb_post_grp.POST_RPV_IMG_ID', '=', 'tb_img_ref.REF_ID')
            ->where('tb_post_grp.POST_RPV_YN', '=', 'Y')
            ->where('tb_post_grp.POST_GRP_ID' , 'like', 'T%')
            ->select(
                'tb_post_grp.POST_GRP_ID'
                , 'tb_post_grp.POST_NM_'.$localCode.' AS POST_NM'
                , 'tb_post_grp.POST_INTRO_'.$localCode.' AS POST_INTRO'
                , 'tb_post_grp.POST_LINK'
                , 'tb_post_grp.POST_RPV_YN'
                , DB::raw('(SELECT count(*) FROM tb_post_grp_connect where POST_GRP_ID = tb_post_grp.POST_GRP_ID) AS TOT_POST')
                , 'tb_img_mgmt.IMG_URL'
                , 'tb_img_mgmt.IMG_ALT'
                , 'tb_img_mgmt.IMG_TP'
            )
            ->orderBy('TOT_POST', 'DESC')
            ->take(8)
            ->get();

        return $result;
    }

}