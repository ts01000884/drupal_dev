<?php
/**
 * Created by PhpStorm.
 * User: UKA
 * Date: 2018/7/2
 * Time: 下午3:20
 */

/**
 * 判斷一對一重複的序號
 * 一對多滿而不用判斷
 * 判斷重複序號
 * 一對一的兌換使用者與一對多滿額的兌換使用者搜尋條件不同要注意
 */

#使用靜態資料暫存 以排除重複序號
if (!isset($static)) {              //避免錯誤訊息
    $static= new stdClass();
}
if (!isset($static->title)) {
    $static->title = array();
}
#判斷折價卷種類
$node_data = node_load($row->field_coupon_type);    #coupon 資訊

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
#搜尋條件不為空值

if(isset($_GET['account']) && ($_GET['account']!='')){
    #一對一的序號 且已被兌換
    if ($node_data->field_coupon_type['und'][0]['value'] == '1' && $row->status=='0') {
        $node_data1 = node_load($row->field_user_1);
        #判斷序號是否為該使用者兌換
        $user = user_load($node_data1->field_user['und'][0]['target_id']);
        if($user->name==$_GET['account']){
            return false;
        }else{
            return true;
        }
        #一對一序號未兌換
    }else if($node_data->field_coupon_type['und'][0]['value'] == '1'){
        return true;
        #一對多 滿額
    }else{
        #判斷序號是否為該使用者兌換
        $user = user_load($data->field_coupon_node__field_data_field_user_field_user_target_i);
        if($user->name==$_GET['account']){
            return false;
        }else{
            return true;
        }
    }
}else{
    return false;
}


#搜尋條件不為空值
$node_data = node_load($row->field_coupon_type);
if(isset($_GET['email']) && ($_GET['email']!='')){
    #一對一的序號 且已被兌換
    if ($node_data->field_coupon_type['und'][0]['value'] == '1' && $row->status=='0') {
        $node_data1 = node_load($row->field_user_1);
        #判斷序號是否為該使用者兌換
        $user = user_load($node_data1->field_user['und'][0]['target_id']);
        if($user->name==$_GET['account']){
            return false;
        }else{
            return true;
        }
        #一對一序號未兌換
    }else if($node_data->field_coupon_type['und'][0]['value'] == '1'){
        return true;
        #一對多 滿額
    }else{
        #判斷序號是否為該使用者兌換
        $user = user_load($data->field_coupon_node__field_data_field_user_field_user_target_i);
        if($user->name==$_GET['account']){
            return false;
        }else{
            return true;
        }
    }
}else{
    return false;
}