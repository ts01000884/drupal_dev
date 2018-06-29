<?php
/**
 * Created by PhpStorm.
 * User: UKA
 * Date: 2018/6/29
 * Time: 下午8:28
 */



/**
 * 判斷一對一重複的序號
 * 一對多滿而不用判斷
 * 判斷重複序號
 *
 */
#判斷折價卷種類
$node_data = node_load($row->field_coupon_type);
#使用靜態資料暫存 以排除重複序號
if(!isset($static->title)){
    $static->title=array();
}
#一對一折價卷不能重複 所以將一對一兌換卷的序號存入
if ($node_data->field_coupon_type['und'][0]['value'] == '1') {
    if (isset($static->title)) {
        #序號發現重複 直接遮蔽 由於已被兌換的資料不會重複 原因不明 故不判斷
        if (in_array($row->title, $static->title)) {
            return true;
        }
        if (!isset($static->title)) {
            $static->title = array();
        }
        $static->title = array_merge($static->title, array($row->title));
    }
}
#檢查點
//dpm($static->title);
if($row->php_1!=null) {#有找出兌換的帳號
    if ($node_data->field_coupon_type['und'][0]['value'] == '1' && $row->status == '0') {
        $node_data1 = node_load($row->field_user);
        if (isset($node_data1->field_user['und'][0]['target_id'])) {
            $user = user_load($node_data1->field_user['und'][0]['target_id']);
            ###保留一對一序號 本身序號欄位 shoplog資料 及計算出來的帳號一樣的序號
            if($user->name==$row->php_1){
                $node_data1 = node_load($row->field_user_1);
                if (isset($node_data1->field_user['und'][0]['target_id'])) {
                    $user = user_load($node_data1->field_user['und'][0]['target_id']);
                    if($user->name==$row->php_1){
                        return false;
                    }else{return true;}
                }}else{return true;}
        }
        ###
        #判斷若為一對多及滿額 以及計算出的帳號與訂閱帳號一致就保留 !!!可能可以刪除 筆記!!!
    } else if ($node_data->field_coupon_type['und'][0]['value'] != '1') {
        $node_data1 = node_load($row->field_user_1);
        if (isset($node_data1->field_user['und'][0]['target_id'])) {
            $user = user_load($node_data1->field_user['und'][0]['target_id']);
            if($user->name==$row->php_1){return false;}else{return true;}
        }
    }

}
/**
 *
 * 判斷訂閱序號
 * 利用field_user field_user1給的值判斷訂閱帳號
 */
#讀取折價卷種類
$node_data = node_load($row->field_coupon_type);
#一對一 去訂單找
if ($node_data->field_coupon_type['und'][0]['value'] == '1' && $row->status == '0') {
    $node_data1 = node_load($row->field_user);
    if (isset($node_data1->field_user['und'][0]['target_id'])) {
        $user = user_load($node_data1->field_user['und'][0]['target_id']);
        return $user->name;
    }
    #一對多
} else if ($node_data->field_coupon_type['und'][0]['value'] != '1') {
    $node_data1 = node_load($row->field_user_1);
    if (isset($node_data1->field_user['und'][0]['target_id'])) {
        $user = user_load($node_data1->field_user['und'][0]['target_id']);
        return $user->name;
    }
}
