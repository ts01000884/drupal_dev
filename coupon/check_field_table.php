<?php
/**
 * Created by PhpStorm.
 * User: UKA
 * Date: 2018/6/22
 * Time: 下午4:34
 */
/**
 * 檢查field資料與資料表有無正確
 * 即 field_config中沒有的field 不可以有table
 * @param $check_list
 * 傳入要檢查的field名稱
 * @return array
 * 正確無誤回傳空的array 有問題回傳錯誤的table 名稱
 */
function check_field_tables($check_list){
    $check_status = array();
    foreach ($check_list as $field) {
        if (!field_info_field($field)){
            if(db_find_tables("field_data_{$field}")){
                $check_status=array_merge($check_status,db_find_tables("field_data_{$field}"));
            }
            if(db_find_tables("field_revision_{$field}")){
                $check_status=array_merge($check_status,db_find_tables("field_revision_{$field}"));
            }
        }
    }
    return $check_status;
}