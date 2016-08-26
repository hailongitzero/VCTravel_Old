<?php

namespace App\Models;
use DB;

/**
 * Created by PhpStorm.
 * User: HaiLong
 * Date: 8/18/2016
 * Time: 11:21 AM
 */
class HeaderModel
{
    /**
     * @param $menuID
     * @return return all main menu data
     */
    public function index($localCode){
        $menuID = 'MG01';
        $headerData = array(
            "menuInitData" => $this->getMenuInitData($menuID, $localCode),
            "menuData" => $this->getMenuData($menuID, $localCode),
        );
        return $headerData;

    }

    /**
     * get max level of menu
     * @param $menuID
     * @return menu level
     */
    public function getMenuInitData($menuID, $localCode){
        $mnLevel = DB::table('tb_menu')
            ->select(DB::raw('MAX(MN_LVL) AS MN_LVL'))
            ->where('MN_GRP_ID',$menuID)
            ->first();

        $mnMaxSeq = DB::table('tb_menu')
            ->select(DB::raw('MAX(MN_SEQ) AS MN_SEQ'))
            ->where('MN_GRP_ID',$menuID)
            ->where('MN_PRT_ID',null)
            ->first();

        $mnInitInfo = array(
            "mnLevel" => $mnLevel->MN_LVL,
            "mnMaxSeq" => $mnMaxSeq->MN_SEQ
        );

        return $mnInitInfo;
    }

    /**
     * get list all of main menu
     * @param $menuID
     * @return menu data
     */
    public function getMenuData($menuID, $localCode){
        return DB::table('tb_menu')
            ->select('MN_ID','MN_SEQ','MN_GRP_ID','MN_LVL','MN_PRT_ID','MN_NM_'.$localCode.' AS MN_NM','MN_NM_LINK', 'MN_DSP_TP')
            ->where('MN_GRP_ID', $menuID)
            ->orderBy('MN_LVL','ASC')
            ->orderBy('MN_SEQ', 'ASC')
            ->orderBy('MN_PRT_ID', 'ASC')
            ->get();
    }
}