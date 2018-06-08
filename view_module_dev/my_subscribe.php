<?php
/*
 * Date:2018/06/08 by uka
 * @$ta_project_id          目標專案編號
 * @$direction_project_id   備選專案編號
 * 若admin設定尚未設定 主選與備選 將會與目前預設的值進行代換。
 * */
$output_projcet = '';
global $user;
$ta_project_id = 9;                   //主要控制哪個專案的作者 會看到指定的專案
$direction_project_id = 3;            //目標導向的專案ID
$project = node_load($ta_project_id);       //取得目標專案的資料

$ta_project_id = variable_get('MEMBER_PASS_TARGET_PROJECT_ID', $ta_project_id);
$direction_project_id = variable_get('MEMBER_PASS_DIRECTION_PROJECT_ID', $direction_project_id);

//  dpm($temp);    //測試顯示用
if ($user->uid == $project->uid or $user->uid == 507) {
    $output_projcet = $direction_project_id;
} else {
    $output_projcet = $ta_project_id;
}


?>