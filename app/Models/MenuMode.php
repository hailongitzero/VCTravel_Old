<?php

namespace App\Models;
use DB;

/**
 * Created by PhpStorm.
 * User: HaiLong
 * Date: 8/18/2016
 * Time: 11:21 AM
 */
class MenuMode
{
    /**
     * @param $menuID
     * @return return all main menu data
     */
    public function getMainMenu($menuID){
        $menuData = array(
            "menuLevel" => $this->getMenuLevel($menuID),
            "menuData" => $this->getMenuData($menuID),
        );

        return $menuData;
    }

    /**
     * get max level of menu
     * @param $menuID
     * @return menu level
     */
    public function getMenuLevel($menuID){
        return DB::table('tb_menu')
            ->select(DB::raw('MAX(MN_LVL) AS MN_LVL'))
            ->where('MN_GRP_ID',$menuID)
            ->first();
    }

    /**
     * get list all of main menu
     * @param $menuID
     * @return menu data
     */
    public function getMenuData($menuID){
        return DB::table('tb_menu')
            ->select('MN_ID','MN_SEQ','MN_GRP_ID','MN_LVL','MN_PRT_ID','MN_NM_VI AS MN_NM','MN_NM_LINK')
            ->where('MN_GRP_ID', $menuID)
            ->orderBy('MN_LVL','MN_PRT_ID','MN_SEQ')->get();
    }
}