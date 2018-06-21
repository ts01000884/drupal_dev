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


function uka_enable()
{
    $index = 20;
    $fieldname = 'kkk'.$index;

    $content_type = array(
        'type' => $fieldname,
        'name' => '折價卷',
        'description' => '',
        'title_label' => '折價卷名稱',
        'base' => 'node_content',
        'custom' => TRUE,
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



    $field_1=unserialize('a:7:{s:12:"translatable";s:1:"0";s:12:"entity_types";a:0:{}s:8:"settings";a:2:{s:14:"allowed_values";a:2:{i:1;s:6:"平台";i:2;s:6:"大師";}s:23:"allowed_values_function";s:0:"";}s:7:"storage";a:5:{s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";s:1:"1";s:7:"details";a:1:{s:3:"sql";a:2:{s:18:"FIELD_LOAD_CURRENT";a:1:{s:23:"field_data_field_source";a:1:{s:5:"value";s:18:"field_source_value";}}s:19:"FIELD_LOAD_REVISION";a:1:{s:27:"field_revision_field_source";a:1:{s:5:"value";s:18:"field_source_value";}}}}}s:12:"foreign keys";a:0:{}s:7:"indexes";a:1:{s:5:"value";a:1:{i:0;s:5:"value";}}s:2:"id";s:3:"109";}');
    $field_1=array_merge($field_1,array('field_name' => 'field_source' . $index,'type' => 'list_text',));

    $field_2=unserialize('a:7:{s:12:"translatable";s:1:"0";s:12:"entity_types";a:0:{}s:8:"settings";a:2:{s:14:"allowed_values";a:3:{i:1;s:5:"1對1";i:2;s:7:"1對多";i:3;s:6:"滿額";}s:23:"allowed_values_function";s:0:"";}s:7:"storage";a:5:{s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";s:1:"1";s:7:"details";a:1:{s:3:"sql";a:2:{s:18:"FIELD_LOAD_CURRENT";a:1:{s:28:"field_data_field_coupon_type";a:1:{s:5:"value";s:23:"field_coupon_type_value";}}s:19:"FIELD_LOAD_REVISION";a:1:{s:32:"field_revision_field_coupon_type";a:1:{s:5:"value";s:23:"field_coupon_type_value";}}}}}s:12:"foreign keys";a:0:{}s:7:"indexes";a:1:{s:5:"value";a:1:{i:0;s:5:"value";}}s:2:"id";s:3:"159";}');
    $field_2=array_merge($field_2,array('field_name' => 'field_coupon_type' . $index,'type' => 'list_text',));

    $field_3=unserialize('a:7:{s:12:"entity_types";a:0:{}s:7:"indexes";a:0:{}s:8:"settings";a:0:{}s:12:"translatable";s:1:"0";s:7:"storage";a:5:{s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";s:1:"1";s:7:"details";a:1:{s:3:"sql";a:2:{s:18:"FIELD_LOAD_CURRENT";a:1:{s:35:"field_data_field_partner_percentage";a:1:{s:5:"value";s:30:"field_partner_percentage_value";}}s:19:"FIELD_LOAD_REVISION";a:1:{s:39:"field_revision_field_partner_percentage";a:1:{s:5:"value";s:30:"field_partner_percentage_value";}}}}}s:12:"foreign keys";a:0:{}s:2:"id";s:2:"81";}');
    $field_3=array_merge($field_3,array('field_name' => 'field_partner_percentage' . $index,'type' => 'number_integer',));

    #field_ref_project
    $field_4=unserialize('a:7:{s:12:"entity_types";a:0:{}s:7:"indexes";a:1:{s:9:"target_id";a:1:{i:0;s:9:"target_id";}}s:8:"settings";a:3:{s:11:"target_type";s:4:"node";s:7:"handler";s:4:"base";s:16:"handler_settings";a:3:{s:14:"target_bundles";a:1:{s:7:"project";s:7:"project";}s:4:"sort";a:1:{s:4:"type";s:4:"none";}s:9:"behaviors";a:1:{s:17:"views-select-list";a:1:{s:6:"status";i:0;}}}}s:12:"translatable";s:1:"0";s:7:"storage";a:5:{s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";s:1:"1";s:7:"details";a:1:{s:3:"sql";a:2:{s:18:"FIELD_LOAD_CURRENT";a:1:{s:28:"field_data_field_ref_project";a:1:{s:9:"target_id";s:27:"field_ref_project_target_id";}}s:19:"FIELD_LOAD_REVISION";a:1:{s:32:"field_revision_field_ref_project";a:1:{s:9:"target_id";s:27:"field_ref_project_target_id";}}}}}s:12:"foreign keys";a:1:{s:4:"node";a:2:{s:5:"table";s:4:"node";s:7:"columns";a:1:{s:9:"target_id";s:3:"nid";}}}s:2:"id";s:2:"48";}');
    $field_4=array_merge($field_4,array('field_name' => 'field_ref_project' . $index,'type' => 'entityreference',));


    $fields =array(
        'field_source'=> $field_1,
        'field_coupon_type' => $field_2,
        'field_partner_percentage' => $field_3,
        'field_ref_project' => $field_4,
    );





//    $fields = array(
//
//        // field_source
//
//        /* 欄位類型 文字清單 list_text
//         * 文字清單
//         * */
//        'field_source' => array(
//
//            'field_name' => 'field_source' . $index,
//            'type' => 'list_text',
//            'cardinality' => 1,
//            'translatable' => '0',
//            'settings' => array(
//                'allowed_values' => array(
//                    1 => '平台',
//                    2 => '大師',
//                )
//            ),
//
//        ),
//        'field_coupon_type' => array(
//
//            'field_name' => 'field_coupon_type' . $index,
//            'type' => 'list_text',
//            'cardinality' => 1,
//            'translatable' => '0',
//            'settings' => array(
//                'allowed_values' => array(
//                    1 => '一對一',
//                    2 => '一對多',
//                    3 => '滿額',
//                )
//            ),
//
//        ),
//        'field_partner_percentage' => array(
//
//            'field_name' => 'field_partner_percentage' . $index,
//            'type' => 'number_integer',
//            'cardinality' => 1,
//            'translatable' => '0',
//            'storage' => array(
//                'details' => array(
//                    'sql' => array(
//                        'FIELD_LOAD_CURRENT' => array(
//                            'field_data_field_partner_percentage' . $index => array(
//                                'value' => 'field_partner_percentage' . $index . '_value',
//                            ),
//                        ),
//                        'FIELD_LOAD_REVISION' => array(
//                            'field_revision_field_partner_percentage' . $index => array(
//                                'value' => 'field_partner_percentage' . $index . '_value',
//                            ),
//                        ),
//                    ),
//                ),
//            ),
//        ),
//
//
//    );

    foreach ($fields as $field) {
        if(!field_info_field($field['field_name']))
        field_create_field($field);

    }

    $instances_1=unserialize('a:7:{s:5:"label";s:15:"折價券來源";s:6:"widget";a:5:{s:6:"weight";s:1:"1";s:4:"type";s:14:"options_select";s:6:"module";s:7:"options";s:6:"active";i:1;s:8:"settings";a:1:{s:12:"apply_chosen";s:0:"";}}s:8:"settings";a:1:{s:18:"user_register_form";b:0;}s:7:"display";a:1:{s:7:"default";a:5:{s:5:"label";s:5:"above";s:4:"type";s:12:"list_default";s:8:"settings";a:1:{s:21:"field_formatter_class";s:0:"";}s:6:"module";s:4:"list";s:6:"weight";i:4;}}s:8:"required";i:1;s:11:"description";s:0:"";s:13:"default_value";N;}');
    $instances_1['field_name']='field_source' . $index;

    $instances_2=unserialize('a:7:{s:5:"label";s:15:"折價券型態";s:6:"widget";a:5:{s:6:"weight";s:1:"2";s:4:"type";s:14:"options_select";s:6:"module";s:7:"options";s:6:"active";i:1;s:8:"settings";a:1:{s:12:"apply_chosen";s:0:"";}}s:8:"settings";a:1:{s:18:"user_register_form";b:0;}s:7:"display";a:1:{s:7:"default";a:5:{s:5:"label";s:5:"above";s:4:"type";s:12:"list_default";s:8:"settings";a:1:{s:21:"field_formatter_class";s:0:"";}s:6:"module";s:4:"list";s:6:"weight";i:8;}}s:8:"required";i:1;s:11:"description";s:0:"";s:13:"default_value";N;}');
    $instances_2['field_name']='field_coupon_type' . $index;

    $instances_3=unserialize('a:7:{s:5:"label";s:16:"承擔比率(CP)";s:6:"widget";a:5:{s:6:"weight";s:1:"7";s:4:"type";s:6:"number";s:6:"module";s:6:"number";s:6:"active";i:0;s:8:"settings";a:0:{}}s:8:"settings";a:5:{s:3:"min";s:0:"";s:3:"max";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:1:"%";s:18:"user_register_form";b:0;}s:7:"display";a:1:{s:7:"default";a:5:{s:5:"label";s:5:"above";s:4:"type";s:14:"number_integer";s:8:"settings";a:5:{s:18:"thousand_separator";s:0:"";s:17:"decimal_separator";s:1:".";s:5:"scale";i:0;s:13:"prefix_suffix";b:1;s:21:"field_formatter_class";s:0:"";}s:6:"module";s:6:"number";s:6:"weight";i:6;}}s:8:"required";i:0;s:11:"description";s:0:"";s:13:"default_value";N;}');
    $instances_3['field_name']='field_partner_percentage' . $index;

    #field_ref_project
    $instances_4=unserialize('a:7:{s:5:"label";s:15:"折價券方案";s:6:"widget";a:5:{s:6:"weight";s:1:"6";s:4:"type";s:23:"field_collection_hidden";s:6:"module";s:16:"field_collection";s:6:"active";i:0;s:8:"settings";a:0:{}}s:8:"settings";a:1:{s:18:"user_register_form";b:0;}s:7:"display";a:1:{s:7:"default";a:5:{s:5:"label";s:5:"above";s:4:"type";s:21:"field_collection_view";s:8:"settings";a:6:{s:4:"edit";s:6:"編輯";s:6:"delete";s:6:"刪除";s:3:"add";s:6:"新增";s:11:"description";b:1;s:9:"view_mode";s:4:"full";s:21:"field_formatter_class";s:0:"";}s:6:"module";s:16:"field_collection";s:6:"weight";i:2;}}s:8:"required";i:0;s:11:"description";s:0:"";s:13:"default_value";N;}');
    $instances_4['field_name']='field_ref_project' . $index;

//    $instances = array(
//
//        // field_source
//        'field_source' => array(
//            'field_name' => 'field_source' . $index,
//            'label' => '折價卷來源',
//            'required' => TRUE,
//            'widget' => array(
//                'type' => 'options_select',
//                /* options_buttons 選擇按鈕
//                 * options_select 選擇清單
//                 * */
//            ),
//        ),
//        // field_source
//        'field_coupon_type' => array(
//            'field_name' => 'field_coupon_type' . $index,
//            'label' => '折價卷種類',
//            'required' => TRUE,
//            'widget' => array(
//                'type' => 'options_select',
//                /* options_buttons 選擇按鈕
//                 * options_select 選擇清單
//                 * */
//            ),
//        ),
////        'field_partner_percentage' => array(
////            'field_name' => 'field_partner_percentage' . $index,
////            'label' => '承擔比例(CP)',
////            'required' => TRUE,
//////            'max_length' =>20,
//////            'text_processing' =>'',
////            'settings' => array(
////                'min' => '',
////                'max' => '',
////                'prefix' => '',
////                'suffix' => '%',
////            ),
////            'widget' => array(
////                'type' => 'text_textfield',
////                'module' => 'text',
////                'settings' => array(
////                    'size' =>'20',
////                ),
////                /* text_textfield 文字欄位
////                 * text_textarea 文字區塊
////                 * */
////            ),
////        ),
//
//
//
//    );

    $instances=array(
        'field_source'=>$instances_1,
        'field_coupon_type'=>$instances_2,
        'field_partner_percentage'=>$instances_3,
        'field_ref_project'=>$instances_4,
    );

    foreach ($instances as $instance) { // Loop through our instances

        $instance['entity_type'] = 'node';
        $instance['bundle'] = $fieldname; // Attach the instance to our content type

        field_create_instance($instance);

    }


    /**
     * 建立field collection
     * field_coupons
     * 大略流程為
     * /////////建立field///////////
     * 建立collection中有用的field (要檢查有無存在)
     * 然後最後也要建立field collection的field
     *
     * /////////建立collection instances///////////
     * 將剛剛的field都黏上剛剛建立的field collection 的 field
     *
     * /////////最後將collection黏上node type///////////
     *
     *
     */
    #field_amount
    $field_collection_1=unserialize('a:7:{s:12:"entity_types";a:0:{}s:7:"indexes";a:0:{}s:8:"settings";a:0:{}s:12:"translatable";s:1:"0";s:7:"storage";a:5:{s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";s:1:"1";s:7:"details";a:1:{s:3:"sql";a:2:{s:18:"FIELD_LOAD_CURRENT";a:1:{s:23:"field_data_field_amount";a:1:{s:5:"value";s:18:"field_amount_value";}}s:19:"FIELD_LOAD_REVISION";a:1:{s:27:"field_revision_field_amount";a:1:{s:5:"value";s:18:"field_amount_value";}}}}}s:12:"foreign keys";a:0:{}s:2:"id";s:2:"17";}');
    $field_collection_1=array_merge($field_collection_1,array('field_name' => 'field_amount' . $index,'type' => 'number_integer',));

    #field_partner_amount
    $field_collection_2=unserialize('a:7:{s:12:"entity_types";a:0:{}s:7:"indexes";a:0:{}s:8:"settings";a:0:{}s:12:"translatable";s:1:"0";s:7:"storage";a:5:{s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";s:1:"1";s:7:"details";a:1:{s:3:"sql";a:2:{s:18:"FIELD_LOAD_CURRENT";a:1:{s:31:"field_data_field_partner_amount";a:1:{s:5:"value";s:26:"field_partner_amount_value";}}s:19:"FIELD_LOAD_REVISION";a:1:{s:35:"field_revision_field_partner_amount";a:1:{s:5:"value";s:26:"field_partner_amount_value";}}}}}s:12:"foreign keys";a:0:{}s:2:"id";s:2:"80";}');
    $field_collection_2=array_merge($field_collection_2,array('field_name' => 'field_partner_amount' . $index,'type' => 'number_integer',));

    #field_title
    $field_collection_3=unserialize('a:7:{s:12:"entity_types";a:0:{}s:7:"indexes";a:1:{s:6:"format";a:1:{i:0;s:6:"format";}}s:8:"settings";a:1:{s:10:"max_length";i:40;}s:12:"translatable";s:1:"0";s:7:"storage";a:5:{s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";s:1:"1";s:7:"details";a:1:{s:3:"sql";a:2:{s:18:"FIELD_LOAD_CURRENT";a:1:{s:22:"field_data_field_title";a:2:{s:5:"value";s:17:"field_title_value";s:6:"format";s:18:"field_title_format";}}s:19:"FIELD_LOAD_REVISION";a:1:{s:26:"field_revision_field_title";a:2:{s:5:"value";s:17:"field_title_value";s:6:"format";s:18:"field_title_format";}}}}}s:12:"foreign keys";a:1:{s:6:"format";a:2:{s:5:"table";s:13:"filter_format";s:7:"columns";a:1:{s:6:"format";s:6:"format";}}}s:2:"id";s:2:"12";}');
    $field_collection_3=array_merge($field_collection_3,array('field_name' => 'field_title' . $index,'type' => 'text',));

    #field_price
    $field_collection_4=unserialize('a:7:{s:12:"entity_types";a:0:{}s:7:"indexes";a:0:{}s:8:"settings";a:0:{}s:12:"translatable";s:1:"0";s:7:"storage";a:5:{s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";s:1:"1";s:7:"details";a:1:{s:3:"sql";a:2:{s:18:"FIELD_LOAD_CURRENT";a:1:{s:22:"field_data_field_price";a:1:{s:5:"value";s:17:"field_price_value";}}s:19:"FIELD_LOAD_REVISION";a:1:{s:26:"field_revision_field_price";a:1:{s:5:"value";s:17:"field_price_value";}}}}}s:12:"foreign keys";a:0:{}s:2:"id";s:2:"16";}');
    $field_collection_4=array_merge($field_collection_4,array('field_name' => 'field_price' . $index,'type' => 'number_integer',));

    #field_bank_account
    $field_collection_5=unserialize('a:7:{s:12:"entity_types";a:0:{}s:7:"indexes";a:1:{s:6:"format";a:1:{i:0;s:6:"format";}}s:8:"settings";a:1:{s:10:"max_length";i:255;}s:12:"translatable";s:1:"0";s:7:"storage";a:5:{s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";s:1:"1";s:7:"details";a:1:{s:3:"sql";a:2:{s:18:"FIELD_LOAD_CURRENT";a:1:{s:29:"field_data_field_bank_account";a:2:{s:5:"value";s:24:"field_bank_account_value";s:6:"format";s:25:"field_bank_account_format";}}s:19:"FIELD_LOAD_REVISION";a:1:{s:33:"field_revision_field_bank_account";a:2:{s:5:"value";s:24:"field_bank_account_value";s:6:"format";s:25:"field_bank_account_format";}}}}}s:12:"foreign keys";a:1:{s:6:"format";a:2:{s:5:"table";s:13:"filter_format";s:7:"columns";a:1:{s:6:"format";s:6:"format";}}}s:2:"id";s:2:"64";}');
    $field_collection_5=array_merge($field_collection_5,array('field_name' => 'field_bank_account' . $index,'type' => 'text',));

    #field_promotion_yes
    $field_collection_6=unserialize('a:7:{s:12:"entity_types";a:0:{}s:7:"indexes";a:0:{}s:8:"settings";a:0:{}s:12:"translatable";s:1:"0";s:7:"storage";a:5:{s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";s:1:"1";s:7:"details";a:1:{s:3:"sql";a:2:{s:18:"FIELD_LOAD_CURRENT";a:1:{s:30:"field_data_field_promotion_yes";a:1:{s:5:"value";s:25:"field_promotion_yes_value";}}s:19:"FIELD_LOAD_REVISION";a:1:{s:34:"field_revision_field_promotion_yes";a:1:{s:5:"value";s:25:"field_promotion_yes_value";}}}}}s:12:"foreign keys";a:0:{}s:2:"id";s:2:"85";}');
    $field_collection_6=array_merge($field_collection_6,array('field_name' => 'field_promotion_yes' . $index,'type' => 'number_integer',));

    #field_promotion_yes_back
    $field_collection_7=unserialize('a:7:{s:12:"translatable";s:1:"0";s:12:"entity_types";a:0:{}s:8:"settings";a:0:{}s:7:"storage";a:5:{s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";s:1:"1";s:7:"details";a:1:{s:3:"sql";a:2:{s:18:"FIELD_LOAD_CURRENT";a:1:{s:35:"field_data_field_promotion_yes_back";a:1:{s:5:"value";s:30:"field_promotion_yes_back_value";}}s:19:"FIELD_LOAD_REVISION";a:1:{s:39:"field_revision_field_promotion_yes_back";a:1:{s:5:"value";s:30:"field_promotion_yes_back_value";}}}}}s:12:"foreign keys";a:0:{}s:7:"indexes";a:0:{}s:2:"id";s:3:"141";}');
    $field_collection_7=array_merge($field_collection_7,array('field_name' => 'field_promotion_yes_back' . $index,'type' => 'number_integer',));

    #field_coupons
    $field_collection_8=unserialize('a:7:{s:12:"translatable";s:1:"0";s:12:"entity_types";a:0:{}s:8:"settings";a:3:{s:16:"hide_blank_items";i:1;s:17:"hide_initial_item";i:0;s:4:"path";s:0:"";}s:7:"storage";a:5:{s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";s:1:"1";s:7:"details";a:1:{s:3:"sql";a:2:{s:18:"FIELD_LOAD_CURRENT";a:1:{s:24:"field_data_field_coupons";a:2:{s:5:"value";s:19:"field_coupons_value";s:11:"revision_id";s:25:"field_coupons_revision_id";}}s:19:"FIELD_LOAD_REVISION";a:1:{s:28:"field_revision_field_coupons";a:2:{s:5:"value";s:19:"field_coupons_value";s:11:"revision_id";s:25:"field_coupons_revision_id";}}}}}s:12:"foreign keys";a:0:{}s:7:"indexes";a:2:{s:5:"value";a:1:{i:0;s:5:"value";}s:11:"revision_id";a:1:{i:0;s:11:"revision_id";}}s:2:"id";s:3:"157";}');
    $field_collection_8=array_merge($field_collection_8,array('field_name' => 'field_coupons' . $index,'type' => 'field_collection',));





    $field_collection =array(
        'field_amount'=> $field_collection_1,
        'field_partner_amount' => $field_collection_2,
        'field_title' => $field_collection_3,
        'field_price' => $field_collection_4,
        'field_bank_account' => $field_collection_5,
        'field_promotion_yes' => $field_collection_6,
        'field_promotion_yes_back' => $field_collection_7,
        'field_coupons' => $field_collection_8,
    );
    foreach ($field_collection as $field) {
        if(!field_info_field($field['field_name']))
            field_create_field($field);
    }
    #將field黏至fieldcollection
    #field_amount
    $instances_field_collection_1=unserialize('a:7:{s:5:"label";s:19:"申請/使用數量";s:6:"widget";a:5:{s:6:"weight";i:0;s:4:"type";s:6:"number";s:6:"module";s:6:"number";s:6:"active";i:0;s:8:"settings";a:0:{}}s:8:"settings";a:5:{s:3:"min";s:1:"1";s:3:"max";s:5:"99999";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:18:"user_register_form";b:0;}s:7:"display";a:1:{s:7:"default";a:5:{s:5:"label";s:5:"above";s:4:"type";s:14:"number_integer";s:8:"settings";a:5:{s:18:"thousand_separator";s:0:"";s:17:"decimal_separator";s:1:".";s:5:"scale";i:0;s:13:"prefix_suffix";b:1;s:21:"field_formatter_class";s:0:"";}s:6:"module";s:6:"number";s:6:"weight";i:0;}}s:8:"required";i:0;s:11:"description";s:0:"";s:13:"default_value";N;}');
    $instances_field_collection_1['field_name']='field_amount' . $index;
    #field_partner_amount
    $instances_field_collection_2=unserialize('a:7:{s:5:"label";s:21:"單帳號限制數量";s:6:"widget";a:5:{s:6:"weight";s:1:"1";s:4:"type";s:6:"number";s:6:"module";s:6:"number";s:6:"active";i:0;s:8:"settings";a:0:{}}s:8:"settings";a:5:{s:3:"min";s:1:"1";s:3:"max";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:18:"user_register_form";b:0;}s:7:"display";a:1:{s:7:"default";a:5:{s:5:"label";s:5:"above";s:4:"type";s:14:"number_integer";s:8:"settings";a:5:{s:18:"thousand_separator";s:0:"";s:17:"decimal_separator";s:1:".";s:5:"scale";i:0;s:13:"prefix_suffix";b:1;s:21:"field_formatter_class";s:0:"";}s:6:"module";s:6:"number";s:6:"weight";i:1;}}s:8:"required";i:0;s:11:"description";s:0:"";s:13:"default_value";a:1:{i:0;a:1:{s:5:"value";s:1:"1";}}}');
    $instances_field_collection_2['field_name']='field_partner_amount' . $index;
    #field_price
    $instances_field_collection_3=unserialize('a:7:{s:5:"label";s:12:"折抵金額";s:6:"widget";a:5:{s:6:"weight";s:1:"3";s:4:"type";s:6:"number";s:6:"module";s:6:"number";s:6:"active";i:0;s:8:"settings";a:0:{}}s:8:"settings";a:5:{s:3:"min";s:1:"1";s:3:"max";s:4:"9999";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:18:"user_register_form";b:0;}s:7:"display";a:1:{s:7:"default";a:5:{s:5:"label";s:5:"above";s:4:"type";s:14:"number_integer";s:8:"settings";a:5:{s:18:"thousand_separator";s:0:"";s:17:"decimal_separator";s:1:".";s:5:"scale";i:0;s:13:"prefix_suffix";b:1;s:21:"field_formatter_class";s:0:"";}s:6:"module";s:6:"number";s:6:"weight";i:2;}}s:8:"required";i:0;s:11:"description";s:0:"";s:13:"default_value";N;}');
    $instances_field_collection_3['field_name']='field_price' . $index;
    #field_title
    $instances_field_collection_4=unserialize('a:7:{s:5:"label";s:12:"折價序號";s:6:"widget";a:5:{s:6:"weight";s:1:"2";s:4:"type";s:14:"text_textfield";s:6:"module";s:4:"text";s:6:"active";i:1;s:8:"settings";a:1:{s:4:"size";s:2:"60";}}s:8:"settings";a:2:{s:15:"text_processing";s:1:"0";s:18:"user_register_form";b:0;}s:7:"display";a:1:{s:7:"default";a:5:{s:5:"label";s:5:"above";s:4:"type";s:12:"text_default";s:8:"settings";a:1:{s:21:"field_formatter_class";s:0:"";}s:6:"module";s:4:"text";s:6:"weight";i:3;}}s:8:"required";i:0;s:11:"description";s:0:"";s:13:"default_value";N;}');
    $instances_field_collection_4['field_name']='field_title' . $index;
    #field_promotion_yes
    $instances_field_collection_5=unserialize('a:7:{s:5:"label";s:12:"結帳門檻";s:6:"widget";a:5:{s:6:"weight";s:1:"5";s:4:"type";s:6:"number";s:6:"module";s:6:"number";s:6:"active";i:0;s:8:"settings";a:0:{}}s:8:"settings";a:5:{s:3:"min";s:0:"";s:3:"max";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:18:"user_register_form";b:0;}s:7:"display";a:1:{s:7:"default";a:5:{s:5:"label";s:5:"above";s:4:"type";s:14:"number_integer";s:8:"settings";a:5:{s:18:"thousand_separator";s:0:"";s:17:"decimal_separator";s:1:".";s:5:"scale";i:0;s:13:"prefix_suffix";b:1;s:21:"field_formatter_class";s:0:"";}s:6:"module";s:6:"number";s:6:"weight";i:5;}}s:8:"required";i:0;s:11:"description";s:0:"";s:13:"default_value";N;}');
    $instances_field_collection_5['field_name']='field_promotion_yes' . $index;
    #field_promotion_yes_back
    $instances_field_collection_6=unserialize('a:7:{s:5:"label";s:12:"折扣折數";s:6:"widget";a:5:{s:6:"weight";s:1:"6";s:4:"type";s:6:"number";s:6:"module";s:6:"number";s:6:"active";i:0;s:8:"settings";a:0:{}}s:8:"settings";a:5:{s:3:"min";s:0:"";s:3:"max";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:1:"%";s:18:"user_register_form";b:0;}s:7:"display";a:1:{s:7:"default";a:5:{s:5:"label";s:5:"above";s:4:"type";s:14:"number_integer";s:8:"settings";a:5:{s:18:"thousand_separator";s:0:"";s:17:"decimal_separator";s:1:".";s:5:"scale";i:0;s:13:"prefix_suffix";b:1;s:21:"field_formatter_class";s:0:"";}s:6:"module";s:6:"number";s:6:"weight";i:6;}}s:8:"required";i:0;s:11:"description";s:0:"";s:13:"default_value";N;}');
    $instances_field_collection_6['field_name']='field_promotion_yes_back' . $index;




    $instances_field_collection=array(
        'field_amount'=>$instances_field_collection_1,
        'field_partner_amount'=>$instances_field_collection_2,
        'field_price'=>$instances_field_collection_3,
        'field_title'=>$instances_field_collection_4,
        'field_promotion_yes'=>$instances_field_collection_5,
        'field_promotion_yes_back'=>$instances_field_collection_6,

    );

    foreach ($instances_field_collection as $instance) { // Loop through our instances

        $instance['entity_type'] = 'field_collection_item';
        $instance['bundle'] = 'field_coupons' . $index; // Attach the instance to our content type
        /**
         * 此處注意 綁定至某個field_collection的field
         *
         *
         */

        field_create_instance($instance);

    }
    #最後將field黏上node
    #field_coupons
    $instances_field_collection_7=unserialize('a:7:{s:5:"label";s:12:"紅色欄位";s:6:"widget";a:5:{s:6:"weight";s:1:"3";s:4:"type";s:22:"field_collection_embed";s:6:"module";s:16:"field_collection";s:6:"active";i:0;s:8:"settings";a:0:{}}s:8:"settings";a:1:{s:18:"user_register_form";b:0;}s:7:"display";a:1:{s:7:"default";a:5:{s:5:"label";s:5:"above";s:4:"type";s:21:"field_collection_view";s:8:"settings";a:6:{s:4:"edit";s:6:"編輯";s:6:"delete";s:6:"刪除";s:3:"add";s:6:"新增";s:11:"description";b:1;s:9:"view_mode";s:4:"full";s:21:"field_formatter_class";s:0:"";}s:6:"module";s:16:"field_collection";s:6:"weight";i:3;}}s:8:"required";i:0;s:11:"description";s:0:"";s:13:"default_value";N;}');
    $instances_field_collection_7['field_name']='field_coupons' . $index;
    $instances_field_collection_7['entity_type'] = 'node';
    $instances_field_collection_7['bundle'] = $fieldname; // Attach the instance to our content type
    field_create_instance($instances_field_collection_7);












}
