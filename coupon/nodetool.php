<?php
/**
 * Created by PhpStorm.
 * User: UKA
 * Date: 2018/6/15
 * Time: 上午10:16
 */

/* 第一階段
 * 新建node type
 *
 * 第二階段
 * 新建field 有的就不用建
 *
 * 第三階段
 * 新建新的field collection
 * 新建新的entityreference
 *
 * 第四階段
 * 新建新的 field instance
 *
 * */





function uka_enable() {

    $content_type = array(

        'type'          => 'cc',
        'name'          => '折價卷',
        'description'   => '',
        'title_label'   => '折價卷名稱',
        'base'          => 'node_content',
        'custom'        => TRUE,
        'node-preview' => 0,


    );

    $node_type = node_type_set_defaults($content_type); // Return a node type object with default values

    node_type_save($node_type); // Save the node type object

//  送出前預覽
    variable_set("node_preview_{$content_type['type']}", 0);
//預設選項  array('status', 'promote', 'sticky', 'revision')
    variable_set("node_options_{$content_type['type']}", array('status'));
//是否支援多國語言 0關閉
    variable_set("language_content_type_{$content_type['type']}", 0);
//顯示作者資料及日期  0 隱藏
    variable_set("node_submitted_{$content_type['type']}", 0);
    //預覽回應
    variable_set("comment_preview_{$content_type['type']}", 0);
    //可用選單 留空即可
    variable_set("menu_options_{$content_type['type']}", '');


    $fields = array(

        // field_source

        /* 欄位類型 文字清單 list_text
         * 文字清單
         * */
        'field_source'	=> array(

            'field_name'	=> 'field_source',
            'type'          => 'list_text',
            'cardinality'	=> 1,
            'settings' => array(
                'allowed_values' => array(
                    1=>'平台',
                    2=>'大師',
                )
            ),

        ),



    );

    foreach( $fields as $field ) {

        field_create_field($field);

    }












}
