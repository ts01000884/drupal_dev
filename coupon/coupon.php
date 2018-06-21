<?php
/**
 * Created by PhpStorm.
 * User: UKA
 * Date: 2018/6/20
 * Time: 下午5:32
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
    $content_type = array(
        'type' => 'coupon',
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
##新增coupon node tpye的field
    #body
    $field_body = unserialize('a:7:{s:12:"entity_types";a:1:{i:0;s:4:"node";}s:7:"indexes";a:1:{s:6:"format";a:1:{i:0;s:6:"format";}}s:8:"settings";a:0:{}s:12:"translatable";s:1:"0";s:7:"storage";a:5:{s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";s:1:"1";s:7:"details";a:1:{s:3:"sql";a:2:{s:18:"FIELD_LOAD_CURRENT";a:1:{s:15:"field_data_body";a:3:{s:5:"value";s:10:"body_value";s:7:"summary";s:12:"body_summary";s:6:"format";s:11:"body_format";}}s:19:"FIELD_LOAD_REVISION";a:1:{s:19:"field_revision_body";a:3:{s:5:"value";s:10:"body_value";s:7:"summary";s:12:"body_summary";s:6:"format";s:11:"body_format";}}}}}s:12:"foreign keys";a:1:{s:6:"format";a:2:{s:5:"table";s:13:"filter_format";s:7:"columns";a:1:{s:6:"format";s:6:"format";}}}s:2:"id";s:1:"2";}');
    $field_body = array_merge($field_body, array('field_name' => 'body', 'type' => 'text_with_summary',));

    #field_ref_project
    $field_ref_project = unserialize('a:7:{s:12:"entity_types";a:0:{}s:7:"indexes";a:1:{s:9:"target_id";a:1:{i:0;s:9:"target_id";}}s:8:"settings";a:3:{s:11:"target_type";s:4:"node";s:7:"handler";s:4:"base";s:16:"handler_settings";a:3:{s:14:"target_bundles";a:1:{s:7:"project";s:7:"project";}s:4:"sort";a:1:{s:4:"type";s:4:"none";}s:9:"behaviors";a:1:{s:17:"views-select-list";a:1:{s:6:"status";i:0;}}}}s:12:"translatable";s:1:"0";s:7:"storage";a:5:{s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";s:1:"1";s:7:"details";a:1:{s:3:"sql";a:2:{s:18:"FIELD_LOAD_CURRENT";a:1:{s:28:"field_data_field_ref_project";a:1:{s:9:"target_id";s:27:"field_ref_project_target_id";}}s:19:"FIELD_LOAD_REVISION";a:1:{s:32:"field_revision_field_ref_project";a:1:{s:9:"target_id";s:27:"field_ref_project_target_id";}}}}}s:12:"foreign keys";a:1:{s:4:"node";a:2:{s:5:"table";s:4:"node";s:7:"columns";a:1:{s:9:"target_id";s:3:"nid";}}}s:2:"id";s:2:"48";}');
    $field_ref_project = array_merge($field_ref_project, array('field_name' => 'field_ref_project', 'type' => 'entityreference',));

    #field_source
    $field_source = unserialize('a:7:{s:12:"translatable";s:1:"0";s:12:"entity_types";a:0:{}s:8:"settings";a:2:{s:14:"allowed_values";a:2:{i:1;s:6:"平台";i:2;s:6:"大師";}s:23:"allowed_values_function";s:0:"";}s:7:"storage";a:5:{s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";s:1:"1";s:7:"details";a:1:{s:3:"sql";a:2:{s:18:"FIELD_LOAD_CURRENT";a:1:{s:23:"field_data_field_source";a:1:{s:5:"value";s:18:"field_source_value";}}s:19:"FIELD_LOAD_REVISION";a:1:{s:27:"field_revision_field_source";a:1:{s:5:"value";s:18:"field_source_value";}}}}}s:12:"foreign keys";a:0:{}s:7:"indexes";a:1:{s:5:"value";a:1:{i:0;s:5:"value";}}s:2:"id";s:3:"109";}');
    $field_source = array_merge($field_source, array('field_name' => 'field_source', 'type' => 'list_text',));

    #field_partner_percentage
    $field_partner_percentage = unserialize('a:7:{s:12:"entity_types";a:0:{}s:7:"indexes";a:0:{}s:8:"settings";a:0:{}s:12:"translatable";s:1:"0";s:7:"storage";a:5:{s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";s:1:"1";s:7:"details";a:1:{s:3:"sql";a:2:{s:18:"FIELD_LOAD_CURRENT";a:1:{s:35:"field_data_field_partner_percentage";a:1:{s:5:"value";s:30:"field_partner_percentage_value";}}s:19:"FIELD_LOAD_REVISION";a:1:{s:39:"field_revision_field_partner_percentage";a:1:{s:5:"value";s:30:"field_partner_percentage_value";}}}}}s:12:"foreign keys";a:0:{}s:2:"id";s:2:"81";}');
    $field_partner_percentage = array_merge($field_partner_percentage, array('field_name' => 'field_partner_percentage', 'type' => 'number_integer',));

    #field_platform_percentage
    $field_platform_percentage = unserialize('a:7:{s:12:"entity_types";a:0:{}s:7:"indexes";a:0:{}s:8:"settings";a:0:{}s:12:"translatable";s:1:"0";s:7:"storage";a:5:{s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";s:1:"1";s:7:"details";a:1:{s:3:"sql";a:2:{s:18:"FIELD_LOAD_CURRENT";a:1:{s:36:"field_data_field_platform_percentage";a:1:{s:5:"value";s:31:"field_platform_percentage_value";}}s:19:"FIELD_LOAD_REVISION";a:1:{s:40:"field_revision_field_platform_percentage";a:1:{s:5:"value";s:31:"field_platform_percentage_value";}}}}}s:12:"foreign keys";a:0:{}s:2:"id";s:2:"79";}');
    $field_platform_percentage = array_merge($field_platform_percentage, array('field_name' => 'field_platform_percentage', 'type' => 'number_integer',));

    #field_coupon_type
    $field_coupon_type = unserialize('a:7:{s:12:"translatable";s:1:"0";s:12:"entity_types";a:0:{}s:8:"settings";a:2:{s:14:"allowed_values";a:3:{i:1;s:5:"1對1";i:2;s:7:"1對多";i:3;s:6:"滿額";}s:23:"allowed_values_function";s:0:"";}s:7:"storage";a:5:{s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";s:1:"1";s:7:"details";a:1:{s:3:"sql";a:2:{s:18:"FIELD_LOAD_CURRENT";a:1:{s:28:"field_data_field_coupon_type";a:1:{s:5:"value";s:23:"field_coupon_type_value";}}s:19:"FIELD_LOAD_REVISION";a:1:{s:32:"field_revision_field_coupon_type";a:1:{s:5:"value";s:23:"field_coupon_type_value";}}}}}s:12:"foreign keys";a:0:{}s:7:"indexes";a:1:{s:5:"value";a:1:{i:0;s:5:"value";}}s:2:"id";s:3:"159";}');
    $field_coupon_type = array_merge($field_coupon_type, array('field_name' => 'field_coupon_type', 'type' => 'list_text',));

    #field_apply_date
    $field_apply_date = unserialize('a:7:{s:12:"translatable";s:1:"0";s:12:"entity_types";a:0:{}s:8:"settings";a:6:{s:11:"granularity";a:6:{s:5:"month";s:5:"month";s:3:"day";s:3:"day";s:4:"year";s:4:"year";s:4:"hour";i:0;s:6:"minute";i:0;s:6:"second";i:0;}s:11:"tz_handling";s:4:"none";s:11:"timezone_db";s:0:"";s:13:"cache_enabled";i:0;s:11:"cache_count";s:1:"4";s:6:"todate";s:8:"required";}s:7:"storage";a:5:{s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";s:1:"1";s:7:"details";a:1:{s:3:"sql";a:2:{s:18:"FIELD_LOAD_CURRENT";a:1:{s:27:"field_data_field_apply_date";a:2:{s:5:"value";s:22:"field_apply_date_value";s:6:"value2";s:23:"field_apply_date_value2";}}s:19:"FIELD_LOAD_REVISION";a:1:{s:31:"field_revision_field_apply_date";a:2:{s:5:"value";s:22:"field_apply_date_value";s:6:"value2";s:23:"field_apply_date_value2";}}}}}s:12:"foreign keys";a:0:{}s:7:"indexes";a:0:{}s:2:"id";s:3:"137";}');
    $field_apply_date = array_merge($field_apply_date, array('field_name' => 'field_apply_date', 'type' => 'datestamp',));

    $fields = array(
        'body' => $field_body,
        'field_ref_project' => $field_ref_project,
        'field_source' => $field_source,
        'field_partner_percentage' => $field_partner_percentage,
        'field_platform_percentage' => $field_platform_percentage,
        'field_coupon_type' => $field_coupon_type,
        'field_apply_date' => $field_apply_date,
    );
    foreach ($fields as $field) {
        if (!field_info_field($field['field_name']))
            field_create_field($field);

    }

##field_packages內的field生成

    #field_packages
    $field_packages = unserialize('a:7:{s:12:"entity_types";a:0:{}s:7:"indexes";a:2:{s:11:"revision_id";a:1:{i:0;s:11:"revision_id";}s:5:"value";a:1:{i:0;s:5:"value";}}s:8:"settings";a:3:{s:16:"hide_blank_items";i:1;s:17:"hide_initial_item";i:1;s:4:"path";s:0:"";}s:12:"translatable";s:1:"0";s:7:"storage";a:5:{s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";s:1:"1";s:7:"details";a:1:{s:3:"sql";a:2:{s:18:"FIELD_LOAD_CURRENT";a:1:{s:25:"field_data_field_packages";a:2:{s:5:"value";s:20:"field_packages_value";s:11:"revision_id";s:26:"field_packages_revision_id";}}s:19:"FIELD_LOAD_REVISION";a:1:{s:29:"field_revision_field_packages";a:2:{s:5:"value";s:20:"field_packages_value";s:11:"revision_id";s:26:"field_packages_revision_id";}}}}}s:12:"foreign keys";a:0:{}s:2:"id";s:2:"15";}');
    $field_packages = array_merge($field_packages, array('field_name' => 'field_packages', 'type' => 'field_collection',));

    #field_amount
    $field_amount = unserialize('a:7:{s:12:"entity_types";a:0:{}s:7:"indexes";a:0:{}s:8:"settings";a:0:{}s:12:"translatable";s:1:"0";s:7:"storage";a:5:{s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";s:1:"1";s:7:"details";a:1:{s:3:"sql";a:2:{s:18:"FIELD_LOAD_CURRENT";a:1:{s:23:"field_data_field_amount";a:1:{s:5:"value";s:18:"field_amount_value";}}s:19:"FIELD_LOAD_REVISION";a:1:{s:27:"field_revision_field_amount";a:1:{s:5:"value";s:18:"field_amount_value";}}}}}s:12:"foreign keys";a:0:{}s:2:"id";s:2:"17";}');
    $field_amount = array_merge($field_amount, array('field_name' => 'field_amount', 'type' => 'number_integer',));

    #field_body
    $field_body = unserialize('a:7:{s:12:"entity_types";a:0:{}s:7:"indexes";a:1:{s:6:"format";a:1:{i:0;s:6:"format";}}s:8:"settings";a:0:{}s:12:"translatable";s:1:"0";s:7:"storage";a:5:{s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";s:1:"1";s:7:"details";a:1:{s:3:"sql";a:2:{s:18:"FIELD_LOAD_CURRENT";a:1:{s:21:"field_data_field_body";a:2:{s:5:"value";s:16:"field_body_value";s:6:"format";s:17:"field_body_format";}}s:19:"FIELD_LOAD_REVISION";a:1:{s:25:"field_revision_field_body";a:2:{s:5:"value";s:16:"field_body_value";s:6:"format";s:17:"field_body_format";}}}}}s:12:"foreign keys";a:1:{s:6:"format";a:2:{s:5:"table";s:13:"filter_format";s:7:"columns";a:1:{s:6:"format";s:6:"format";}}}s:2:"id";s:1:"8";}');
    $field_body = array_merge($field_body, array('field_name' => 'field_body', 'type' => 'text_long',));

    #field_image
    $field_image = unserialize('a:7:{s:12:"entity_types";a:0:{}s:7:"indexes";a:1:{s:3:"fid";a:1:{i:0;s:3:"fid";}}s:8:"settings";a:2:{s:10:"uri_scheme";s:6:"public";s:13:"default_image";i:0;}s:12:"translatable";s:1:"0";s:7:"storage";a:5:{s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";s:1:"1";s:7:"details";a:1:{s:3:"sql";a:2:{s:18:"FIELD_LOAD_CURRENT";a:1:{s:22:"field_data_field_image";a:5:{s:3:"fid";s:15:"field_image_fid";s:3:"alt";s:15:"field_image_alt";s:5:"title";s:17:"field_image_title";s:5:"width";s:17:"field_image_width";s:6:"height";s:18:"field_image_height";}}s:19:"FIELD_LOAD_REVISION";a:1:{s:26:"field_revision_field_image";a:5:{s:3:"fid";s:15:"field_image_fid";s:3:"alt";s:15:"field_image_alt";s:5:"title";s:17:"field_image_title";s:5:"width";s:17:"field_image_width";s:6:"height";s:18:"field_image_height";}}}}}s:12:"foreign keys";a:1:{s:3:"fid";a:2:{s:5:"table";s:12:"file_managed";s:7:"columns";a:1:{s:3:"fid";s:3:"fid";}}}s:2:"id";s:1:"4";}');
    $field_image = array_merge($field_image, array('field_name' => 'field_image', 'type' => 'image',));

    #field_price
    $field_price = unserialize('a:7:{s:12:"entity_types";a:0:{}s:7:"indexes";a:0:{}s:8:"settings";a:0:{}s:12:"translatable";s:1:"0";s:7:"storage";a:5:{s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";s:1:"1";s:7:"details";a:1:{s:3:"sql";a:2:{s:18:"FIELD_LOAD_CURRENT";a:1:{s:22:"field_data_field_price";a:1:{s:5:"value";s:17:"field_price_value";}}s:19:"FIELD_LOAD_REVISION";a:1:{s:26:"field_revision_field_price";a:1:{s:5:"value";s:17:"field_price_value";}}}}}s:12:"foreign keys";a:0:{}s:2:"id";s:2:"16";}');
    $field_price = array_merge($field_price, array('field_name' => 'field_price', 'type' => 'number_integer',));

    #field_title
    $field_title = unserialize('a:7:{s:12:"entity_types";a:0:{}s:7:"indexes";a:1:{s:6:"format";a:1:{i:0;s:6:"format";}}s:8:"settings";a:1:{s:10:"max_length";i:40;}s:12:"translatable";s:1:"0";s:7:"storage";a:5:{s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";s:1:"1";s:7:"details";a:1:{s:3:"sql";a:2:{s:18:"FIELD_LOAD_CURRENT";a:1:{s:22:"field_data_field_title";a:2:{s:5:"value";s:17:"field_title_value";s:6:"format";s:18:"field_title_format";}}s:19:"FIELD_LOAD_REVISION";a:1:{s:26:"field_revision_field_title";a:2:{s:5:"value";s:17:"field_title_value";s:6:"format";s:18:"field_title_format";}}}}}s:12:"foreign keys";a:1:{s:6:"format";a:2:{s:5:"table";s:13:"filter_format";s:7:"columns";a:1:{s:6:"format";s:6:"format";}}}s:2:"id";s:2:"12";}');
    $field_title = array_merge($field_title, array('field_name' => 'field_title', 'type' => 'text',));

    #field_summary
    $field_summary = unserialize('a:7:{s:12:"entity_types";a:0:{}s:7:"indexes";a:1:{s:6:"format";a:1:{i:0;s:6:"format";}}s:8:"settings";a:0:{}s:12:"translatable";s:1:"0";s:7:"storage";a:5:{s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";s:1:"1";s:7:"details";a:1:{s:3:"sql";a:2:{s:18:"FIELD_LOAD_CURRENT";a:1:{s:24:"field_data_field_summary";a:2:{s:5:"value";s:19:"field_summary_value";s:6:"format";s:20:"field_summary_format";}}s:19:"FIELD_LOAD_REVISION";a:1:{s:28:"field_revision_field_summary";a:2:{s:5:"value";s:19:"field_summary_value";s:6:"format";s:20:"field_summary_format";}}}}}s:12:"foreign keys";a:1:{s:6:"format";a:2:{s:5:"table";s:13:"filter_format";s:7:"columns";a:1:{s:6:"format";s:6:"format";}}}s:2:"id";s:2:"42";}');
    $field_summary = array_merge($field_summary, array('field_name' => 'field_summary', 'type' => 'text_long',));

    #field_partner_percentage
    $field_partner_percentage = unserialize('a:7:{s:12:"entity_types";a:0:{}s:7:"indexes";a:0:{}s:8:"settings";a:0:{}s:12:"translatable";s:1:"0";s:7:"storage";a:5:{s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";s:1:"1";s:7:"details";a:1:{s:3:"sql";a:2:{s:18:"FIELD_LOAD_CURRENT";a:1:{s:35:"field_data_field_partner_percentage";a:1:{s:5:"value";s:30:"field_partner_percentage_value";}}s:19:"FIELD_LOAD_REVISION";a:1:{s:39:"field_revision_field_partner_percentage";a:1:{s:5:"value";s:30:"field_partner_percentage_value";}}}}}s:12:"foreign keys";a:0:{}s:2:"id";s:2:"81";}');
    $field_partner_percentage = array_merge($field_partner_percentage, array('field_name' => 'field_partner_percentage', 'type' => 'number_integer',));

    #field_url
    $field_url = unserialize('a:7:{s:12:"entity_types";a:0:{}s:7:"indexes";a:0:{}s:8:"settings";a:7:{s:10:"attributes";a:3:{s:5:"class";s:0:"";s:3:"rel";s:0:"";s:6:"target";s:7:"default";}s:7:"display";a:1:{s:10:"url_cutoff";i:80;}s:13:"enable_tokens";i:1;s:5:"title";s:8:"optional";s:15:"title_maxlength";i:128;s:11:"title_value";s:0:"";s:3:"url";i:0;}s:12:"translatable";i:0;s:7:"storage";a:5:{s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";s:1:"1";s:7:"details";a:1:{s:3:"sql";a:2:{s:18:"FIELD_LOAD_CURRENT";a:1:{s:20:"field_data_field_url";a:3:{s:3:"url";s:13:"field_url_url";s:5:"title";s:15:"field_url_title";s:10:"attributes";s:20:"field_url_attributes";}}s:19:"FIELD_LOAD_REVISION";a:1:{s:24:"field_revision_field_url";a:3:{s:3:"url";s:13:"field_url_url";s:5:"title";s:15:"field_url_title";s:10:"attributes";s:20:"field_url_attributes";}}}}}s:12:"foreign keys";a:0:{}s:2:"id";s:2:"20";}');
    $field_url = array_merge($field_url, array('field_name' => 'field_url', 'type' => 'link_field',));

    #field_physical
    $field_physical = unserialize('a:7:{s:12:"translatable";s:1:"0";s:12:"entity_types";a:0:{}s:8:"settings";a:2:{s:14:"allowed_values";a:2:{i:0;s:0:"";i:1;s:12:"包含實體";}s:23:"allowed_values_function";s:0:"";}s:7:"storage";a:5:{s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";s:1:"1";s:7:"details";a:1:{s:3:"sql";a:2:{s:18:"FIELD_LOAD_CURRENT";a:1:{s:25:"field_data_field_physical";a:1:{s:5:"value";s:20:"field_physical_value";}}s:19:"FIELD_LOAD_REVISION";a:1:{s:29:"field_revision_field_physical";a:1:{s:5:"value";s:20:"field_physical_value";}}}}}s:12:"foreign keys";a:0:{}s:7:"indexes";a:1:{s:5:"value";a:1:{i:0;s:5:"value";}}s:2:"id";s:3:"127";}');
    $field_physical = array_merge($field_physical, array('field_name' => 'field_physical', 'type' => 'list_boolean',));

    #field_apply_date
    $field_apply_date = unserialize('a:7:{s:12:"translatable";s:1:"0";s:12:"entity_types";a:0:{}s:8:"settings";a:6:{s:11:"granularity";a:6:{s:5:"month";s:5:"month";s:3:"day";s:3:"day";s:4:"year";s:4:"year";s:4:"hour";i:0;s:6:"minute";i:0;s:6:"second";i:0;}s:11:"tz_handling";s:4:"none";s:11:"timezone_db";s:0:"";s:13:"cache_enabled";i:0;s:11:"cache_count";s:1:"4";s:6:"todate";s:8:"required";}s:7:"storage";a:5:{s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";s:1:"1";s:7:"details";a:1:{s:3:"sql";a:2:{s:18:"FIELD_LOAD_CURRENT";a:1:{s:27:"field_data_field_apply_date";a:2:{s:5:"value";s:22:"field_apply_date_value";s:6:"value2";s:23:"field_apply_date_value2";}}s:19:"FIELD_LOAD_REVISION";a:1:{s:31:"field_revision_field_apply_date";a:2:{s:5:"value";s:22:"field_apply_date_value";s:6:"value2";s:23:"field_apply_date_value2";}}}}}s:12:"foreign keys";a:0:{}s:7:"indexes";a:0:{}s:2:"id";s:3:"137";}');
    $field_apply_date = array_merge($field_apply_date, array('field_name' => 'field_apply_date', 'type' => 'datestamp',));

    #field_account_name
    $field_account_name = unserialize('a:7:{s:12:"entity_types";a:0:{}s:7:"indexes";a:1:{s:6:"format";a:1:{i:0;s:6:"format";}}s:8:"settings";a:1:{s:10:"max_length";i:255;}s:12:"translatable";s:1:"0";s:7:"storage";a:5:{s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";s:1:"1";s:7:"details";a:1:{s:3:"sql";a:2:{s:18:"FIELD_LOAD_CURRENT";a:1:{s:29:"field_data_field_account_name";a:2:{s:5:"value";s:24:"field_account_name_value";s:6:"format";s:25:"field_account_name_format";}}s:19:"FIELD_LOAD_REVISION";a:1:{s:33:"field_revision_field_account_name";a:2:{s:5:"value";s:24:"field_account_name_value";s:6:"format";s:25:"field_account_name_format";}}}}}s:12:"foreign keys";a:1:{s:6:"format";a:2:{s:5:"table";s:13:"filter_format";s:7:"columns";a:1:{s:6:"format";s:6:"format";}}}s:2:"id";s:2:"65";}');
    $field_account_name = array_merge($field_account_name, array('field_name' => 'field_account_name', 'type' => 'text',));

    #field_subway
    $field_subway = unserialize('a:7:{s:12:"entity_types";a:0:{}s:7:"indexes";a:1:{s:5:"value";a:1:{i:0;s:5:"value";}}s:8:"settings";a:2:{s:14:"allowed_values";a:2:{i:2;s:21:"持續訂閱 / 每月";i:1;s:12:"單次訂閱";}s:23:"allowed_values_function";s:0:"";}s:12:"translatable";i:0;s:7:"storage";a:5:{s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";s:1:"1";s:7:"details";a:1:{s:3:"sql";a:2:{s:18:"FIELD_LOAD_CURRENT";a:1:{s:23:"field_data_field_subway";a:1:{s:5:"value";s:18:"field_subway_value";}}s:19:"FIELD_LOAD_REVISION";a:1:{s:27:"field_revision_field_subway";a:1:{s:5:"value";s:18:"field_subway_value";}}}}}s:12:"foreign keys";a:0:{}s:2:"id";s:2:"55";}');
    $field_subway = array_merge($field_subway, array('field_name' => 'field_subway', 'type' => 'list_text',));

    #field_subtime
    $field_subtime = unserialize('a:7:{s:12:"entity_types";a:0:{}s:7:"indexes";a:1:{s:5:"value";a:1:{i:0;s:5:"value";}}s:8:"settings";a:2:{s:14:"allowed_values";a:5:{i:30;s:9:"一個月";i:90;s:9:"三個月";i:180;s:6:"半年";i:270;s:9:"九個月";i:365;s:6:"一年";}s:23:"allowed_values_function";s:0:"";}s:12:"translatable";s:1:"0";s:7:"storage";a:5:{s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";s:1:"1";s:7:"details";a:1:{s:3:"sql";a:2:{s:18:"FIELD_LOAD_CURRENT";a:1:{s:24:"field_data_field_subtime";a:1:{s:5:"value";s:19:"field_subtime_value";}}s:19:"FIELD_LOAD_REVISION";a:1:{s:28:"field_revision_field_subtime";a:1:{s:5:"value";s:19:"field_subtime_value";}}}}}s:12:"foreign keys";a:0:{}s:2:"id";s:2:"56";}');
    $field_subtime = array_merge($field_subtime, array('field_name' => 'field_subtime', 'type' => 'list_text',));

    #field_group_ref
    $field_group_ref = unserialize('a:7:{s:12:"entity_types";a:0:{}s:7:"indexes";a:1:{s:9:"target_id";a:1:{i:0;s:9:"target_id";}}s:8:"settings";a:3:{s:7:"handler";s:4:"base";s:16:"handler_settings";a:3:{s:9:"behaviors";a:1:{s:17:"views-select-list";a:1:{s:6:"status";i:0;}}s:4:"sort";a:1:{s:4:"type";s:4:"none";}s:14:"target_bundles";a:1:{s:7:"package";s:7:"package";}}s:11:"target_type";s:4:"node";}s:12:"translatable";i:0;s:7:"storage";a:5:{s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";s:1:"1";s:7:"details";a:1:{s:3:"sql";a:2:{s:18:"FIELD_LOAD_CURRENT";a:1:{s:26:"field_data_field_group_ref";a:1:{s:9:"target_id";s:25:"field_group_ref_target_id";}}s:19:"FIELD_LOAD_REVISION";a:1:{s:30:"field_revision_field_group_ref";a:1:{s:9:"target_id";s:25:"field_group_ref_target_id";}}}}}s:12:"foreign keys";a:1:{s:4:"node";a:2:{s:5:"table";s:4:"node";s:7:"columns";a:1:{s:9:"target_id";s:3:"nid";}}}s:2:"id";s:2:"71";}');
    $field_group_ref = array_merge($field_group_ref, array('field_name' => 'field_group_ref', 'type' => 'entityreference',));

    #field_start_date
    $field_start_date = unserialize('a:7:{s:12:"entity_types";a:0:{}s:7:"indexes";a:0:{}s:8:"settings";a:6:{s:11:"granularity";a:6:{s:5:"month";s:5:"month";s:3:"day";s:3:"day";s:4:"year";s:4:"year";s:4:"hour";i:0;s:6:"minute";i:0;s:6:"second";i:0;}s:11:"tz_handling";s:4:"none";s:11:"timezone_db";s:0:"";s:13:"cache_enabled";i:1;s:11:"cache_count";s:1:"4";s:6:"todate";s:8:"optional";}s:12:"translatable";s:1:"0";s:7:"storage";a:5:{s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";s:1:"1";s:7:"details";a:1:{s:3:"sql";a:2:{s:18:"FIELD_LOAD_CURRENT";a:1:{s:27:"field_data_field_start_date";a:2:{s:5:"value";s:22:"field_start_date_value";s:6:"value2";s:23:"field_start_date_value2";}}s:19:"FIELD_LOAD_REVISION";a:1:{s:31:"field_revision_field_start_date";a:2:{s:5:"value";s:22:"field_start_date_value";s:6:"value2";s:23:"field_start_date_value2";}}}}}s:12:"foreign keys";a:0:{}s:2:"id";s:2:"11";}');
    $field_start_date = array_merge($field_start_date, array('field_name' => 'field_start_date', 'type' => 'datestamp',));

    #field_status
    $field_status = unserialize('a:7:{s:12:"translatable";s:1:"0";s:12:"entity_types";a:0:{}s:8:"settings";a:2:{s:14:"allowed_values";a:3:{i:0;s:15:"已送出審核";i:1;s:12:"審核通過";i:2;s:15:"審核未通過";}s:23:"allowed_values_function";s:0:"";}s:7:"storage";a:5:{s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";s:1:"1";s:7:"details";a:1:{s:3:"sql";a:2:{s:18:"FIELD_LOAD_CURRENT";a:1:{s:23:"field_data_field_status";a:1:{s:5:"value";s:18:"field_status_value";}}s:19:"FIELD_LOAD_REVISION";a:1:{s:27:"field_revision_field_status";a:1:{s:5:"value";s:18:"field_status_value";}}}}}s:12:"foreign keys";a:0:{}s:7:"indexes";a:1:{s:5:"value";a:1:{i:0;s:5:"value";}}s:2:"id";s:3:"103";}');
    $field_status = array_merge($field_status, array('field_name' => 'field_status', 'type' => 'list_text',));

    $fields = array(
        'field_packages' => $field_packages,
        'field_amount' => $field_amount,
        'field_body' => $field_body,
        'field_image' => $field_image,
        'field_price' => $field_price,
        'field_title' => $field_title,
        'field_summary' => $field_summary,
        'field_partner_percentage' => $field_partner_percentage,
        'field_url' => $field_url,
        'field_physical' => $field_physical,
        'field_apply_date' => $field_apply_date,
        'field_account_name' => $field_account_name,
        'field_subway' => $field_subway,
        'field_subtime' => $field_subtime,
        'field_group_ref' => $field_group_ref,
        'field_start_date' => $field_start_date,
        'field_status' => $field_status,
    );
    foreach ($fields as $field) {
        if (!field_info_field($field['field_name']))
            field_create_field($field);

    }
##field_packages內的instance生成

    #field_amount
    $instances_field_amount = unserialize('a:7:{s:13:"default_value";N;s:11:"description";s:0:"";s:7:"display";a:4:{s:7:"default";a:5:{s:5:"label";s:6:"hidden";s:4:"type";s:14:"number_integer";s:6:"weight";s:1:"2";s:8:"settings";a:5:{s:17:"decimal_separator";s:1:".";s:21:"field_formatter_class";s:11:"t_pj-amount";s:13:"prefix_suffix";i:1;s:5:"scale";i:0;s:18:"thousand_separator";s:0:"";}s:6:"module";s:6:"number";}s:8:"non_self";a:5:{s:5:"label";s:6:"hidden";s:6:"module";s:6:"number";s:8:"settings";a:5:{s:17:"decimal_separator";s:1:".";s:21:"field_formatter_class";s:11:"t_pj-amount";s:13:"prefix_suffix";i:1;s:5:"scale";i:0;s:18:"thousand_separator";s:0:"";}s:4:"type";s:14:"number_integer";s:6:"weight";i:1;}s:5:"owner";a:5:{s:5:"label";s:6:"hidden";s:4:"type";s:14:"number_integer";s:6:"weight";s:1:"3";s:8:"settings";a:5:{s:17:"decimal_separator";s:1:".";s:21:"field_formatter_class";s:11:"t_pj-amount";s:13:"prefix_suffix";i:1;s:5:"scale";i:0;s:18:"thousand_separator";s:0:"";}s:6:"module";s:6:"number";}s:6:"review";a:5:{s:5:"label";s:6:"inline";s:4:"type";s:14:"number_integer";s:6:"weight";s:1:"0";s:8:"settings";a:5:{s:17:"decimal_separator";s:1:".";s:21:"field_formatter_class";s:11:"t_pj-amount";s:13:"prefix_suffix";i:1;s:5:"scale";i:0;s:18:"thousand_separator";s:0:"";}s:6:"module";s:6:"number";}}s:5:"label";s:32:"名額限制 ( 留白表示無 )";s:8:"required";i:0;s:8:"settings";a:5:{s:3:"max";s:0:"";s:3:"min";s:0:"";s:6:"prefix";s:6:"限量";s:6:"suffix";s:3:"名";s:18:"user_register_form";b:0;}s:6:"widget";a:5:{s:6:"active";i:0;s:6:"module";s:6:"number";s:8:"settings";a:0:{}s:4:"type";s:6:"number";s:6:"weight";s:1:"6";}}');
    $instances_field_amount['field_name'] = 'field_amount';

    #field_body
    $instances_field_body = unserialize('a:7:{s:13:"default_value";N;s:11:"description";s:0:"";s:7:"display";a:4:{s:7:"default";a:5:{s:5:"label";s:6:"hidden";s:4:"type";s:12:"text_default";s:6:"weight";s:1:"4";s:8:"settings";a:1:{s:21:"field_formatter_class";s:4:"t_tp";}s:6:"module";s:4:"text";}s:8:"non_self";a:5:{s:5:"label";s:6:"hidden";s:6:"module";s:4:"text";s:8:"settings";a:1:{s:21:"field_formatter_class";s:7:"t_pj-tp";}s:4:"type";s:12:"text_default";s:6:"weight";i:3;}s:5:"owner";a:5:{s:5:"label";s:6:"hidden";s:4:"type";s:12:"text_default";s:6:"weight";s:1:"6";s:8:"settings";a:1:{s:21:"field_formatter_class";s:4:"t_tp";}s:6:"module";s:4:"text";}s:6:"review";a:5:{s:5:"label";s:6:"inline";s:4:"type";s:12:"text_default";s:6:"weight";s:1:"2";s:8:"settings";a:1:{s:21:"field_formatter_class";s:4:"t_tp";}s:6:"module";s:4:"text";}}s:5:"label";s:12:"訂閱描述";s:8:"required";i:1;s:8:"settings";a:2:{s:15:"text_processing";s:1:"1";s:18:"user_register_form";b:0;}s:6:"widget";a:5:{s:6:"weight";s:1:"1";s:4:"type";s:13:"text_textarea";s:6:"module";s:4:"text";s:6:"active";i:1;s:8:"settings";a:1:{s:4:"rows";s:1:"5";}}}');
    $instances_field_body['field_name'] = 'field_body';

    #field_image
    $instances_field_image = unserialize('a:6:{s:11:"description";s:0:"";s:7:"display";a:4:{s:7:"default";a:5:{s:5:"label";s:6:"hidden";s:4:"type";s:5:"image";s:6:"weight";s:1:"3";s:8:"settings";a:3:{s:11:"image_style";s:13:"package_image";s:10:"image_link";s:0:"";s:21:"field_formatter_class";s:8:"p_pj-img";}s:6:"module";s:5:"image";}s:8:"non_self";a:5:{s:5:"label";s:6:"hidden";s:6:"module";s:5:"image";s:8:"settings";a:3:{s:21:"field_formatter_class";s:0:"";s:10:"image_link";s:0:"";s:11:"image_style";s:0:"";}s:4:"type";s:5:"image";s:6:"weight";i:2;}s:5:"owner";a:5:{s:5:"label";s:6:"hidden";s:4:"type";s:5:"image";s:6:"weight";s:1:"4";s:8:"settings";a:3:{s:11:"image_style";s:13:"package_image";s:10:"image_link";s:0:"";s:21:"field_formatter_class";s:0:"";}s:6:"module";s:5:"image";}s:6:"review";a:5:{s:5:"label";s:6:"inline";s:4:"type";s:5:"image";s:6:"weight";s:1:"1";s:8:"settings";a:3:{s:11:"image_style";s:13:"package_image";s:10:"image_link";s:0:"";s:21:"field_formatter_class";s:8:"p_pj-img";}s:6:"module";s:5:"image";}}s:5:"label";s:12:"置入圖片";s:8:"required";i:0;s:8:"settings";a:9:{s:14:"file_directory";s:13:"package_image";s:15:"file_extensions";s:16:"png gif jpg jpeg";s:12:"max_filesize";s:4:"10MB";s:14:"max_resolution";s:0:"";s:14:"min_resolution";s:0:"";s:9:"alt_field";i:0;s:11:"title_field";i:0;s:13:"default_image";i:0;s:18:"user_register_form";b:0;}s:6:"widget";a:5:{s:6:"weight";s:1:"2";s:4:"type";s:11:"image_image";s:6:"module";s:5:"image";s:6:"active";i:1;s:8:"settings";a:2:{s:18:"progress_indicator";s:8:"throbber";s:19:"preview_image_style";s:13:"package_image";}}}');
    $instances_field_image['field_name'] = 'field_image';

    #field_price
    $instances_field_price = unserialize('a:7:{s:13:"default_value";a:1:{i:0;a:1:{s:5:"value";i:50;}}s:11:"description";s:0:"";s:7:"display";a:4:{s:7:"default";a:5:{s:5:"label";s:6:"hidden";s:4:"type";s:14:"number_integer";s:6:"weight";s:1:"5";s:8:"settings";a:5:{s:18:"thousand_separator";s:1:",";s:13:"prefix_suffix";i:1;s:21:"field_formatter_class";s:10:"t_pj-price";s:17:"decimal_separator";s:1:".";s:5:"scale";i:0;}s:6:"module";s:6:"number";}s:8:"non_self";a:5:{s:5:"label";s:6:"hidden";s:6:"module";s:6:"number";s:8:"settings";a:5:{s:17:"decimal_separator";s:1:".";s:21:"field_formatter_class";s:10:"t_pj-price";s:13:"prefix_suffix";i:1;s:5:"scale";i:0;s:18:"thousand_separator";s:0:"";}s:4:"type";s:14:"number_integer";s:6:"weight";i:5;}s:5:"owner";a:5:{s:5:"label";s:6:"hidden";s:4:"type";s:14:"number_integer";s:6:"weight";s:1:"8";s:8:"settings";a:5:{s:17:"decimal_separator";s:1:".";s:21:"field_formatter_class";s:10:"t_pj-price";s:13:"prefix_suffix";i:1;s:5:"scale";i:0;s:18:"thousand_separator";s:0:"";}s:6:"module";s:6:"number";}s:6:"review";a:5:{s:5:"label";s:6:"inline";s:4:"type";s:14:"number_integer";s:6:"weight";s:1:"4";s:8:"settings";a:5:{s:18:"thousand_separator";s:1:",";s:13:"prefix_suffix";i:1;s:21:"field_formatter_class";s:10:"t_pj-price";s:17:"decimal_separator";s:1:".";s:5:"scale";i:0;}s:6:"module";s:6:"number";}}s:5:"label";s:21:"訂閱金額 / 方式";s:8:"required";i:1;s:8:"settings";a:5:{s:3:"max";s:0:"";s:3:"min";i:10;s:6:"prefix";s:1:"$";s:6:"suffix";s:0:"";s:18:"user_register_form";b:0;}s:6:"widget";a:5:{s:6:"active";i:0;s:6:"module";s:6:"number";s:8:"settings";a:0:{}s:4:"type";s:6:"number";s:6:"weight";s:1:"3";}}');
    $instances_field_price['field_name'] = 'field_price';

    #field_title
    $instances_field_title = unserialize('a:7:{s:13:"default_value";N;s:11:"description";s:0:"";s:7:"display";a:4:{s:7:"default";a:5:{s:5:"label";s:6:"hidden";s:4:"type";s:12:"text_default";s:6:"weight";s:1:"0";s:8:"settings";a:1:{s:21:"field_formatter_class";s:10:"t_pj-title";}s:6:"module";s:4:"text";}s:8:"non_self";a:5:{s:5:"label";s:6:"hidden";s:6:"module";s:4:"text";s:8:"settings";a:1:{s:21:"field_formatter_class";s:10:"t_pj-title";}s:4:"type";s:12:"text_default";s:6:"weight";i:0;}s:5:"owner";a:5:{s:5:"label";s:6:"hidden";s:4:"type";s:12:"text_default";s:6:"weight";s:1:"0";s:8:"settings";a:1:{s:21:"field_formatter_class";s:10:"t_pj-title";}s:6:"module";s:4:"text";}s:6:"review";a:4:{s:5:"label";s:6:"inline";s:4:"type";s:6:"hidden";s:6:"weight";s:2:"10";s:8:"settings";a:0:{}}}s:5:"label";s:12:"訂閱標題";s:8:"required";i:1;s:8:"settings";a:2:{s:15:"text_processing";i:0;s:18:"user_register_form";b:0;}s:6:"widget";a:5:{s:6:"active";i:1;s:6:"module";s:4:"text";s:8:"settings";a:1:{s:4:"size";i:30;}s:4:"type";s:14:"text_textfield";s:6:"weight";s:1:"0";}}');
    $instances_field_title['field_name'] = 'field_title';

    #field_summary
    $instances_field_summary = unserialize('a:7:{s:5:"label";s:12:"退件原因";s:6:"widget";a:5:{s:6:"weight";s:2:"13";s:4:"type";s:13:"text_textarea";s:6:"module";s:4:"text";s:6:"active";i:1;s:8:"settings";a:1:{s:4:"rows";s:1:"5";}}s:8:"settings";a:2:{s:15:"text_processing";s:1:"0";s:18:"user_register_form";b:0;}s:7:"display";a:3:{s:7:"default";a:4:{s:5:"label";s:5:"above";s:4:"type";s:6:"hidden";s:6:"weight";s:2:"11";s:8:"settings";a:0:{}}s:5:"owner";a:4:{s:5:"label";s:5:"above";s:4:"type";s:6:"hidden";s:6:"weight";s:1:"0";s:8:"settings";a:0:{}}s:6:"review";a:4:{s:5:"label";s:5:"above";s:4:"type";s:6:"hidden";s:6:"weight";s:2:"11";s:8:"settings";a:0:{}}}s:8:"required";i:0;s:11:"description";s:0:"";s:13:"default_value";N;}');
    $instances_field_summary['field_name'] = 'field_summary';

    #field_partner_percentage
    $instances_field_partner_percentage = unserialize('a:7:{s:5:"label";s:15:"方案拆分比";s:6:"widget";a:5:{s:6:"weight";s:2:"10";s:4:"type";s:6:"number";s:6:"module";s:6:"number";s:6:"active";i:0;s:8:"settings";a:0:{}}s:8:"settings";a:5:{s:3:"min";s:1:"0";s:3:"max";s:2:"99";s:6:"prefix";s:0:"";s:6:"suffix";s:1:"%";s:18:"user_register_form";b:0;}s:7:"display";a:2:{s:7:"default";a:4:{s:5:"label";s:5:"above";s:4:"type";s:6:"hidden";s:6:"weight";s:2:"13";s:8:"settings";a:0:{}}s:6:"review";a:4:{s:5:"label";s:5:"above";s:4:"type";s:6:"hidden";s:6:"weight";s:1:"8";s:8:"settings";a:0:{}}}s:8:"required";i:1;s:11:"description";s:0:"";s:13:"default_value";a:1:{i:0;a:1:{s:5:"value";s:1:"0";}}}');
    $instances_field_partner_percentage['field_name'] = 'field_partner_percentage';

    #field_url
    $instances_field_url = unserialize('a:7:{s:13:"default_value";N;s:11:"description";s:0:"";s:7:"display";a:4:{s:7:"default";a:5:{s:5:"label";s:6:"hidden";s:4:"type";s:12:"link_default";s:6:"weight";s:1:"8";s:8:"settings";a:1:{s:21:"field_formatter_class";s:10:"btn_pj-buy";}s:6:"module";s:4:"link";}s:8:"non_self";a:4:{s:5:"label";s:6:"hidden";s:8:"settings";a:0:{}s:4:"type";s:6:"hidden";s:6:"weight";i:6;}s:5:"owner";a:4:{s:5:"label";s:6:"hidden";s:4:"type";s:6:"hidden";s:6:"weight";s:1:"9";s:8:"settings";a:0:{}}s:6:"review";a:4:{s:5:"label";s:6:"inline";s:4:"type";s:6:"hidden";s:6:"weight";s:1:"9";s:8:"settings";a:0:{}}}s:5:"label";s:12:"立即訂閱";s:8:"required";i:0;s:8:"settings";a:12:{s:12:"absolute_url";i:0;s:10:"attributes";a:6:{s:5:"class";s:12:"subscription";s:18:"configurable_class";i:0;s:18:"configurable_title";i:0;s:3:"rel";s:8:"nofollow";s:6:"target";s:7:"default";s:5:"title";s:0:"";}s:7:"display";a:1:{s:10:"url_cutoff";i:80;}s:13:"enable_tokens";i:1;s:10:"rel_remove";s:7:"default";s:5:"title";s:5:"value";s:27:"title_label_use_field_label";i:1;s:15:"title_maxlength";i:128;s:11:"title_value";s:12:"立即訂閱";s:3:"url";i:0;s:18:"user_register_form";b:0;s:12:"validate_url";i:0;}s:6:"widget";a:5:{s:6:"active";i:0;s:6:"module";s:4:"link";s:8:"settings";a:0:{}s:4:"type";s:10:"link_field";s:6:"weight";s:2:"12";}}');
    $instances_field_url['field_name'] = 'field_url';

    #field_physical
    $instances_field_physical = unserialize('a:7:{s:5:"label";s:12:"包含實體";s:6:"widget";a:5:{s:6:"weight";s:1:"7";s:4:"type";s:13:"options_onoff";s:6:"module";s:7:"options";s:6:"active";i:1;s:8:"settings";a:1:{s:13:"display_label";i:1;}}s:8:"settings";a:1:{s:18:"user_register_form";b:0;}s:7:"display";a:1:{s:7:"default";a:4:{s:5:"label";s:5:"above";s:4:"type";s:6:"hidden";s:6:"weight";s:2:"14";s:8:"settings";a:0:{}}}s:8:"required";i:0;s:11:"description";s:0:"";s:13:"default_value";N;}');
    $instances_field_physical['field_name'] = 'field_physical';

    #field_apply_date
    $instances_field_apply_date = unserialize('a:6:{s:5:"label";s:12:"生效期間";s:6:"widget";a:5:{s:6:"weight";s:2:"15";s:4:"type";s:10:"date_popup";s:6:"module";s:4:"date";s:6:"active";i:1;s:8:"settings";a:7:{s:12:"input_format";s:13:"m/d/Y - H:i:s";s:19:"input_format_custom";s:0:"";s:10:"year_range";s:5:"-3:+3";s:9:"increment";s:2:"15";s:14:"label_position";s:5:"above";s:10:"text_parts";a:0:{}s:11:"no_fieldset";i:0;}}s:8:"settings";a:5:{s:13:"default_value";s:3:"now";s:18:"default_value_code";s:0:"";s:14:"default_value2";s:4:"same";s:19:"default_value_code2";s:0:"";s:18:"user_register_form";b:0;}s:7:"display";a:1:{s:7:"default";a:4:{s:5:"label";s:5:"above";s:4:"type";s:6:"hidden";s:6:"weight";s:2:"15";s:8:"settings";a:0:{}}}s:8:"required";i:1;s:11:"description";s:0:"";}');
    $instances_field_apply_date['field_name'] = 'field_apply_date';

    #field_account_name
    $instances_field_account_name = unserialize('a:7:{s:5:"label";s:12:"贈品名稱";s:6:"widget";a:5:{s:6:"weight";s:1:"8";s:4:"type";s:14:"text_textfield";s:6:"module";s:4:"text";s:6:"active";i:1;s:8:"settings";a:1:{s:4:"size";s:2:"60";}}s:8:"settings";a:2:{s:15:"text_processing";s:1:"0";s:18:"user_register_form";b:0;}s:7:"display";a:1:{s:7:"default";a:4:{s:5:"label";s:5:"above";s:4:"type";s:6:"hidden";s:6:"weight";s:2:"16";s:8:"settings";a:0:{}}}s:8:"required";i:0;s:11:"description";s:0:"";s:13:"default_value";N;}');
    $instances_field_account_name['field_name'] = 'field_account_name';

    #field_subway
    $instances_field_subway = unserialize('a:7:{s:13:"default_value";a:1:{i:0;a:1:{s:5:"value";i:2;}}s:11:"description";s:0:"";s:7:"display";a:4:{s:7:"default";a:5:{s:5:"label";s:6:"hidden";s:4:"type";s:12:"list_default";s:6:"weight";s:1:"6";s:8:"settings";a:1:{s:21:"field_formatter_class";s:11:"t_pj-subway";}s:6:"module";s:4:"list";}s:8:"non_self";a:5:{s:5:"label";s:6:"hidden";s:6:"module";s:4:"list";s:8:"settings";a:1:{s:21:"field_formatter_class";s:13:"t_pj-taxonomy";}s:4:"type";s:12:"list_default";s:6:"weight";i:4;}s:5:"owner";a:5:{s:5:"label";s:6:"hidden";s:4:"type";s:12:"list_default";s:6:"weight";s:1:"7";s:8:"settings";a:1:{s:21:"field_formatter_class";s:11:"t_pj-subway";}s:6:"module";s:4:"list";}s:6:"review";a:5:{s:5:"label";s:6:"inline";s:4:"type";s:12:"list_default";s:6:"weight";s:1:"3";s:8:"settings";a:1:{s:21:"field_formatter_class";s:11:"t_pj-subway";}s:6:"module";s:4:"list";}}s:5:"label";s:12:"訂閱方式";s:8:"required";i:0;s:8:"settings";a:1:{s:18:"user_register_form";b:0;}s:6:"widget";a:5:{s:6:"active";i:1;s:6:"module";s:7:"options";s:8:"settings";a:1:{s:12:"apply_chosen";s:0:"";}s:4:"type";s:14:"options_select";s:6:"weight";s:1:"4";}}');
    $instances_field_subway['field_name'] = 'field_subway';

    #field_subtime
    $instances_field_subtime = unserialize('a:7:{s:13:"default_value";a:1:{i:0;a:1:{s:5:"value";i:30;}}s:11:"description";s:0:"";s:7:"display";a:4:{s:7:"default";a:5:{s:5:"label";s:6:"hidden";s:4:"type";s:12:"list_default";s:6:"weight";s:1:"7";s:8:"settings";a:1:{s:21:"field_formatter_class";s:11:"t_pj-subway";}s:6:"module";s:4:"list";}s:8:"non_self";a:4:{s:5:"label";s:6:"hidden";s:8:"settings";a:0:{}s:4:"type";s:6:"hidden";s:6:"weight";i:8;}s:5:"owner";a:4:{s:5:"label";s:6:"hidden";s:4:"type";s:6:"hidden";s:6:"weight";s:2:"10";s:8:"settings";a:0:{}}s:6:"review";a:5:{s:5:"label";s:6:"inline";s:4:"type";s:12:"list_default";s:6:"weight";s:1:"5";s:8:"settings";a:1:{s:21:"field_formatter_class";s:0:"";}s:6:"module";s:4:"list";}}s:5:"label";s:18:"單次訂閱時間";s:8:"required";i:0;s:8:"settings";a:1:{s:18:"user_register_form";b:0;}s:6:"widget";a:5:{s:6:"active";i:1;s:6:"module";s:7:"options";s:8:"settings";a:1:{s:12:"apply_chosen";s:0:"";}s:4:"type";s:14:"options_select";s:6:"weight";s:1:"5";}}');
    $instances_field_subtime['field_name'] = 'field_subtime';

    #field_group_ref
    $instances_field_group_ref = unserialize('a:8:{s:13:"default_value";N;s:22:"default_value_function";s:47:"entityreference_prepopulate_field_default_value";s:11:"description";s:0:"";s:7:"display";a:4:{s:7:"default";a:4:{s:5:"label";s:6:"hidden";s:4:"type";s:6:"hidden";s:6:"weight";s:2:"12";s:8:"settings";a:0:{}}s:8:"non_self";a:5:{s:5:"label";s:5:"above";s:6:"module";s:15:"entityreference";s:8:"settings";a:3:{s:13:"bypass_access";b:0;s:21:"field_formatter_class";s:0:"";s:4:"link";b:0;}s:4:"type";s:21:"entityreference_label";s:6:"weight";i:7;}s:5:"owner";a:4:{s:5:"label";s:6:"hidden";s:4:"type";s:6:"hidden";s:6:"weight";s:1:"1";s:8:"settings";a:0:{}}s:6:"review";a:4:{s:5:"label";s:6:"hidden";s:4:"type";s:6:"hidden";s:6:"weight";s:2:"13";s:8:"settings";a:0:{}}}s:5:"label";s:12:"連結群組";s:8:"required";i:0;s:8:"settings";a:2:{s:9:"behaviors";a:1:{s:11:"prepopulate";a:6:{s:6:"action";s:4:"hide";s:14:"action_on_edit";i:1;s:8:"fallback";s:4:"hide";s:9:"providers";a:2:{s:10:"og_context";i:0;s:3:"url";i:1;}s:9:"skip_perm";i:0;s:6:"status";i:1;}}s:18:"user_register_form";b:0;}s:6:"widget";a:5:{s:6:"active";i:1;s:6:"module";s:7:"options";s:8:"settings";a:0:{}s:4:"type";s:15:"options_buttons";s:6:"weight";s:2:"11";}}');
    $instances_field_group_ref['field_name'] = 'field_group_ref';

    #field_start_date
    $instances_field_start_date = unserialize('a:6:{s:11:"description";s:0:"";s:7:"display";a:3:{s:7:"default";a:5:{s:5:"label";s:6:"hidden";s:4:"type";s:12:"date_default";s:6:"weight";s:1:"9";s:8:"settings";a:7:{s:11:"format_type";s:4:"long";s:15:"multiple_number";s:0:"";s:13:"multiple_from";s:0:"";s:11:"multiple_to";s:0:"";s:6:"fromto";s:4:"both";s:19:"show_remaining_days";b:0;s:21:"field_formatter_class";s:0:"";}s:6:"module";s:4:"date";}s:5:"owner";a:5:{s:5:"label";s:6:"hidden";s:4:"type";s:12:"date_default";s:6:"weight";s:1:"5";s:8:"settings";a:7:{s:21:"field_formatter_class";s:0:"";s:11:"format_type";s:5:"short";s:6:"fromto";s:5:"value";s:13:"multiple_from";s:0:"";s:15:"multiple_number";s:0:"";s:11:"multiple_to";s:0:"";s:19:"show_remaining_days";i:0;}s:6:"module";s:4:"date";}s:6:"review";a:5:{s:5:"label";s:6:"inline";s:4:"type";s:12:"date_default";s:6:"weight";s:1:"6";s:8:"settings";a:7:{s:11:"format_type";s:4:"long";s:15:"multiple_number";s:0:"";s:13:"multiple_from";s:0:"";s:11:"multiple_to";s:0:"";s:6:"fromto";s:4:"both";s:19:"show_remaining_days";b:0;s:21:"field_formatter_class";s:0:"";}s:6:"module";s:4:"date";}}s:5:"label";s:18:"開放訂閱日期";s:8:"required";i:1;s:8:"settings";a:5:{s:13:"default_value";s:3:"now";s:14:"default_value2";s:5:"blank";s:18:"default_value_code";s:0:"";s:19:"default_value_code2";s:8:"+30 days";s:18:"user_register_form";b:0;}s:6:"widget";a:5:{s:6:"active";i:1;s:6:"module";s:4:"date";s:8:"settings";a:7:{s:9:"increment";i:15;s:12:"input_format";s:9:"site-wide";s:19:"input_format_custom";s:0:"";s:14:"label_position";s:4:"none";s:11:"no_fieldset";i:0;s:10:"text_parts";a:0:{}s:10:"year_range";s:5:"-3:+3";}s:4:"type";s:10:"date_popup";s:6:"weight";s:1:"9";}}');
    $instances_field_start_date['field_name'] = 'field_start_date';

    #field_status
    $instances_field_status = unserialize('a:7:{s:5:"label";s:12:"審核狀態";s:6:"widget";a:5:{s:6:"weight";s:2:"14";s:4:"type";s:14:"options_select";s:6:"module";s:7:"options";s:6:"active";i:1;s:8:"settings";a:1:{s:12:"apply_chosen";s:0:"";}}s:8:"settings";a:1:{s:18:"user_register_form";b:0;}s:7:"display";a:3:{s:7:"default";a:5:{s:5:"label";s:6:"hidden";s:4:"type";s:8:"list_key";s:6:"weight";s:1:"1";s:8:"settings";a:1:{s:21:"field_formatter_class";s:0:"";}s:6:"module";s:4:"list";}s:5:"owner";a:5:{s:5:"label";s:6:"hidden";s:4:"type";s:8:"list_key";s:6:"weight";s:1:"2";s:8:"settings";a:1:{s:21:"field_formatter_class";s:0:"";}s:6:"module";s:4:"list";}s:6:"review";a:4:{s:5:"label";s:6:"hidden";s:4:"type";s:6:"hidden";s:6:"weight";s:2:"12";s:8:"settings";a:0:{}}}s:8:"required";i:0;s:11:"description";s:0:"";s:13:"default_value";N;}');
    $instances_field_status['field_name'] = 'field_status';


    $instances = array(
        'field_amount' => $instances_field_amount,
        'field_body' => $instances_field_body,
        'field_image' => $instances_field_image,
        'field_price' => $instances_field_price,
        'field_title' => $instances_field_title,
        'field_summary' => $instances_field_summary,
        'field_partner_percentage' => $instances_field_partner_percentage,
        'field_url' => $instances_field_url,
        'field_physical' => $instances_field_physical,
        'field_apply_date' => $instances_field_apply_date,
        'field_account_name' => $instances_field_account_name,
        'field_subway' => $instances_field_subway,
        'field_subtime' => $instances_field_subtime,
        'field_group_ref' => $instances_field_group_ref,
        'field_start_date' => $instances_field_start_date,
        'field_status' => $instances_field_status,
    );
    foreach ($instances as $instance) { // Loop through our instances
        if (!field_info_instance('field_collection_item', $instance['field_name'], 'field_packages')) {
            $instance['entity_type'] = 'field_collection_item';
            $instance['bundle'] = 'field_packages'; // Attach the instance to our content type
            field_create_instance($instance);
        }
    }
##新增field_coupons 的 field

    #field_coupons
    $field_coupons = unserialize('a:7:{s:12:"translatable";s:1:"0";s:12:"entity_types";a:0:{}s:8:"settings";a:3:{s:16:"hide_blank_items";i:1;s:17:"hide_initial_item";i:0;s:4:"path";s:0:"";}s:7:"storage";a:5:{s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";s:1:"1";s:7:"details";a:1:{s:3:"sql";a:2:{s:18:"FIELD_LOAD_CURRENT";a:1:{s:24:"field_data_field_coupons";a:2:{s:5:"value";s:19:"field_coupons_value";s:11:"revision_id";s:25:"field_coupons_revision_id";}}s:19:"FIELD_LOAD_REVISION";a:1:{s:28:"field_revision_field_coupons";a:2:{s:5:"value";s:19:"field_coupons_value";s:11:"revision_id";s:25:"field_coupons_revision_id";}}}}}s:12:"foreign keys";a:0:{}s:7:"indexes";a:2:{s:5:"value";a:1:{i:0;s:5:"value";}s:11:"revision_id";a:1:{i:0;s:11:"revision_id";}}s:2:"id";s:3:"157";}');
    $field_coupons = array_merge($field_coupons, array('field_name' => 'field_coupons', 'type' => 'field_collection',));

    #field_amount
    $field_amount = unserialize('a:7:{s:12:"entity_types";a:0:{}s:7:"indexes";a:0:{}s:8:"settings";a:0:{}s:12:"translatable";s:1:"0";s:7:"storage";a:5:{s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";s:1:"1";s:7:"details";a:1:{s:3:"sql";a:2:{s:18:"FIELD_LOAD_CURRENT";a:1:{s:23:"field_data_field_amount";a:1:{s:5:"value";s:18:"field_amount_value";}}s:19:"FIELD_LOAD_REVISION";a:1:{s:27:"field_revision_field_amount";a:1:{s:5:"value";s:18:"field_amount_value";}}}}}s:12:"foreign keys";a:0:{}s:2:"id";s:2:"17";}');
    $field_amount = array_merge($field_amount, array('field_name' => 'field_amount', 'type' => 'number_integer',));

    #field_partner_amount
    $field_partner_amount = unserialize('a:7:{s:12:"entity_types";a:0:{}s:7:"indexes";a:0:{}s:8:"settings";a:0:{}s:12:"translatable";s:1:"0";s:7:"storage";a:5:{s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";s:1:"1";s:7:"details";a:1:{s:3:"sql";a:2:{s:18:"FIELD_LOAD_CURRENT";a:1:{s:31:"field_data_field_partner_amount";a:1:{s:5:"value";s:26:"field_partner_amount_value";}}s:19:"FIELD_LOAD_REVISION";a:1:{s:35:"field_revision_field_partner_amount";a:1:{s:5:"value";s:26:"field_partner_amount_value";}}}}}s:12:"foreign keys";a:0:{}s:2:"id";s:2:"80";}');
    $field_partner_amount = array_merge($field_partner_amount, array('field_name' => 'field_partner_amount', 'type' => 'number_integer',));

    #field_price
    $field_price = unserialize('a:7:{s:12:"entity_types";a:0:{}s:7:"indexes";a:0:{}s:8:"settings";a:0:{}s:12:"translatable";s:1:"0";s:7:"storage";a:5:{s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";s:1:"1";s:7:"details";a:1:{s:3:"sql";a:2:{s:18:"FIELD_LOAD_CURRENT";a:1:{s:22:"field_data_field_price";a:1:{s:5:"value";s:17:"field_price_value";}}s:19:"FIELD_LOAD_REVISION";a:1:{s:26:"field_revision_field_price";a:1:{s:5:"value";s:17:"field_price_value";}}}}}s:12:"foreign keys";a:0:{}s:2:"id";s:2:"16";}');
    $field_price = array_merge($field_price, array('field_name' => 'field_price', 'type' => 'number_integer',));

    #field_title
    $field_title = unserialize('a:7:{s:12:"entity_types";a:0:{}s:7:"indexes";a:1:{s:6:"format";a:1:{i:0;s:6:"format";}}s:8:"settings";a:1:{s:10:"max_length";i:40;}s:12:"translatable";s:1:"0";s:7:"storage";a:5:{s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";s:1:"1";s:7:"details";a:1:{s:3:"sql";a:2:{s:18:"FIELD_LOAD_CURRENT";a:1:{s:22:"field_data_field_title";a:2:{s:5:"value";s:17:"field_title_value";s:6:"format";s:18:"field_title_format";}}s:19:"FIELD_LOAD_REVISION";a:1:{s:26:"field_revision_field_title";a:2:{s:5:"value";s:17:"field_title_value";s:6:"format";s:18:"field_title_format";}}}}}s:12:"foreign keys";a:1:{s:6:"format";a:2:{s:5:"table";s:13:"filter_format";s:7:"columns";a:1:{s:6:"format";s:6:"format";}}}s:2:"id";s:2:"12";}');
    $field_title = array_merge($field_title, array('field_name' => 'field_title', 'type' => 'text',));

    #field_promotion_yes
    $field_promotion_yes = unserialize('a:7:{s:12:"entity_types";a:0:{}s:7:"indexes";a:0:{}s:8:"settings";a:0:{}s:12:"translatable";s:1:"0";s:7:"storage";a:5:{s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";s:1:"1";s:7:"details";a:1:{s:3:"sql";a:2:{s:18:"FIELD_LOAD_CURRENT";a:1:{s:30:"field_data_field_promotion_yes";a:1:{s:5:"value";s:25:"field_promotion_yes_value";}}s:19:"FIELD_LOAD_REVISION";a:1:{s:34:"field_revision_field_promotion_yes";a:1:{s:5:"value";s:25:"field_promotion_yes_value";}}}}}s:12:"foreign keys";a:0:{}s:2:"id";s:2:"85";}');
    $field_promotion_yes = array_merge($field_promotion_yes, array('field_name' => 'field_promotion_yes', 'type' => 'number_integer',));

    #field_promotion_yes_back
    $field_promotion_yes_back = unserialize('a:7:{s:12:"translatable";s:1:"0";s:12:"entity_types";a:0:{}s:8:"settings";a:0:{}s:7:"storage";a:5:{s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";s:1:"1";s:7:"details";a:1:{s:3:"sql";a:2:{s:18:"FIELD_LOAD_CURRENT";a:1:{s:35:"field_data_field_promotion_yes_back";a:1:{s:5:"value";s:30:"field_promotion_yes_back_value";}}s:19:"FIELD_LOAD_REVISION";a:1:{s:39:"field_revision_field_promotion_yes_back";a:1:{s:5:"value";s:30:"field_promotion_yes_back_value";}}}}}s:12:"foreign keys";a:0:{}s:7:"indexes";a:0:{}s:2:"id";s:3:"141";}');
    $field_promotion_yes_back = array_merge($field_promotion_yes_back, array('field_name' => 'field_promotion_yes_back', 'type' => 'number_integer',));

    #field_bank_account
    $field_bank_account = unserialize('a:7:{s:12:"entity_types";a:0:{}s:7:"indexes";a:1:{s:6:"format";a:1:{i:0;s:6:"format";}}s:8:"settings";a:1:{s:10:"max_length";i:255;}s:12:"translatable";s:1:"0";s:7:"storage";a:5:{s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";s:1:"1";s:7:"details";a:1:{s:3:"sql";a:2:{s:18:"FIELD_LOAD_CURRENT";a:1:{s:29:"field_data_field_bank_account";a:2:{s:5:"value";s:24:"field_bank_account_value";s:6:"format";s:25:"field_bank_account_format";}}s:19:"FIELD_LOAD_REVISION";a:1:{s:33:"field_revision_field_bank_account";a:2:{s:5:"value";s:24:"field_bank_account_value";s:6:"format";s:25:"field_bank_account_format";}}}}}s:12:"foreign keys";a:1:{s:6:"format";a:2:{s:5:"table";s:13:"filter_format";s:7:"columns";a:1:{s:6:"format";s:6:"format";}}}s:2:"id";s:2:"64";}');
    $field_bank_account = array_merge($field_bank_account, array('field_name' => 'field_bank_account', 'type' => 'text',));

    $fields = array(
        'field_coupons' => $field_coupons,
        'field_amount' => $field_amount,
        'field_partner_amount' => $field_partner_amount,
        'field_price' => $field_price,
        'field_title' => $field_title,
        'field_promotion_yes' => $field_promotion_yes,
        'field_promotion_yes_back' => $field_promotion_yes_back,
        'field_bank_account' => $field_bank_account,
    );
    foreach ($fields as $field) {
        if (!field_info_field($field['field_name']))
            field_create_field($field);

    }
##新增field_coupons 的 instance生成

    #field_amount
    $instances_field_amount = unserialize('a:7:{s:5:"label";s:19:"申請/使用數量";s:6:"widget";a:5:{s:6:"weight";i:0;s:4:"type";s:6:"number";s:6:"module";s:6:"number";s:6:"active";i:0;s:8:"settings";a:0:{}}s:8:"settings";a:5:{s:3:"min";s:1:"1";s:3:"max";s:5:"99999";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:18:"user_register_form";b:0;}s:7:"display";a:1:{s:7:"default";a:5:{s:5:"label";s:5:"above";s:4:"type";s:14:"number_integer";s:8:"settings";a:5:{s:18:"thousand_separator";s:0:"";s:17:"decimal_separator";s:1:".";s:5:"scale";i:0;s:13:"prefix_suffix";b:1;s:21:"field_formatter_class";s:0:"";}s:6:"module";s:6:"number";s:6:"weight";i:0;}}s:8:"required";i:0;s:11:"description";s:0:"";s:13:"default_value";N;}');
    $instances_field_amount['field_name'] = 'field_amount';

    #field_partner_amount
    $instances_field_partner_amount = unserialize('a:7:{s:5:"label";s:21:"單帳號限制數量";s:6:"widget";a:5:{s:6:"weight";s:1:"1";s:4:"type";s:6:"number";s:6:"module";s:6:"number";s:6:"active";i:0;s:8:"settings";a:0:{}}s:8:"settings";a:5:{s:3:"min";s:1:"1";s:3:"max";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:18:"user_register_form";b:0;}s:7:"display";a:1:{s:7:"default";a:5:{s:5:"label";s:5:"above";s:4:"type";s:14:"number_integer";s:8:"settings";a:5:{s:18:"thousand_separator";s:0:"";s:17:"decimal_separator";s:1:".";s:5:"scale";i:0;s:13:"prefix_suffix";b:1;s:21:"field_formatter_class";s:0:"";}s:6:"module";s:6:"number";s:6:"weight";i:1;}}s:8:"required";i:0;s:11:"description";s:0:"";s:13:"default_value";a:1:{i:0;a:1:{s:5:"value";s:1:"1";}}}');
    $instances_field_partner_amount['field_name'] = 'field_partner_amount';

    #field_price
    $instances_field_price = unserialize('a:7:{s:5:"label";s:12:"折抵金額";s:6:"widget";a:5:{s:6:"weight";s:1:"3";s:4:"type";s:6:"number";s:6:"module";s:6:"number";s:6:"active";i:0;s:8:"settings";a:0:{}}s:8:"settings";a:5:{s:3:"min";s:1:"1";s:3:"max";s:4:"9999";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:18:"user_register_form";b:0;}s:7:"display";a:1:{s:7:"default";a:5:{s:5:"label";s:5:"above";s:4:"type";s:14:"number_integer";s:8:"settings";a:5:{s:18:"thousand_separator";s:0:"";s:17:"decimal_separator";s:1:".";s:5:"scale";i:0;s:13:"prefix_suffix";b:1;s:21:"field_formatter_class";s:0:"";}s:6:"module";s:6:"number";s:6:"weight";i:2;}}s:8:"required";i:0;s:11:"description";s:0:"";s:13:"default_value";N;}');
    $instances_field_price['field_name'] = 'field_price';

    #field_title
    $instances_field_title = unserialize('a:7:{s:5:"label";s:12:"折價序號";s:6:"widget";a:5:{s:6:"weight";s:1:"2";s:4:"type";s:14:"text_textfield";s:6:"module";s:4:"text";s:6:"active";i:1;s:8:"settings";a:1:{s:4:"size";s:2:"60";}}s:8:"settings";a:2:{s:15:"text_processing";s:1:"0";s:18:"user_register_form";b:0;}s:7:"display";a:1:{s:7:"default";a:5:{s:5:"label";s:5:"above";s:4:"type";s:12:"text_default";s:8:"settings";a:1:{s:21:"field_formatter_class";s:0:"";}s:6:"module";s:4:"text";s:6:"weight";i:3;}}s:8:"required";i:0;s:11:"description";s:0:"";s:13:"default_value";N;}');
    $instances_field_title['field_name'] = 'field_title';

    #field_promotion_yes
    $instances_field_promotion_yes = unserialize('a:7:{s:5:"label";s:12:"結帳門檻";s:6:"widget";a:5:{s:6:"weight";s:1:"5";s:4:"type";s:6:"number";s:6:"module";s:6:"number";s:6:"active";i:0;s:8:"settings";a:0:{}}s:8:"settings";a:5:{s:3:"min";s:0:"";s:3:"max";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:18:"user_register_form";b:0;}s:7:"display";a:1:{s:7:"default";a:5:{s:5:"label";s:5:"above";s:4:"type";s:14:"number_integer";s:8:"settings";a:5:{s:18:"thousand_separator";s:0:"";s:17:"decimal_separator";s:1:".";s:5:"scale";i:0;s:13:"prefix_suffix";b:1;s:21:"field_formatter_class";s:0:"";}s:6:"module";s:6:"number";s:6:"weight";i:5;}}s:8:"required";i:0;s:11:"description";s:0:"";s:13:"default_value";N;}');
    $instances_field_promotion_yes['field_name'] = 'field_promotion_yes';

    #field_promotion_yes_back
    $instances_field_promotion_yes_back = unserialize('a:7:{s:5:"label";s:12:"折扣折數";s:6:"widget";a:5:{s:6:"weight";s:1:"6";s:4:"type";s:6:"number";s:6:"module";s:6:"number";s:6:"active";i:0;s:8:"settings";a:0:{}}s:8:"settings";a:5:{s:3:"min";s:0:"";s:3:"max";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:1:"%";s:18:"user_register_form";b:0;}s:7:"display";a:1:{s:7:"default";a:5:{s:5:"label";s:5:"above";s:4:"type";s:14:"number_integer";s:8:"settings";a:5:{s:18:"thousand_separator";s:0:"";s:17:"decimal_separator";s:1:".";s:5:"scale";i:0;s:13:"prefix_suffix";b:1;s:21:"field_formatter_class";s:0:"";}s:6:"module";s:6:"number";s:6:"weight";i:6;}}s:8:"required";i:0;s:11:"description";s:0:"";s:13:"default_value";N;}');
    $instances_field_promotion_yes_back['field_name'] = 'field_promotion_yes_back';

    #field_bank_account
    $instances_field_bank_account = unserialize('a:7:{s:5:"label";s:12:"指定用戶";s:6:"widget";a:5:{s:6:"weight";s:1:"4";s:4:"type";s:14:"text_textfield";s:6:"module";s:4:"text";s:6:"active";i:1;s:8:"settings";a:1:{s:4:"size";s:2:"60";}}s:8:"settings";a:2:{s:15:"text_processing";s:1:"0";s:18:"user_register_form";b:0;}s:7:"display";a:1:{s:7:"default";a:5:{s:5:"label";s:5:"above";s:4:"type";s:12:"text_default";s:8:"settings";a:1:{s:21:"field_formatter_class";s:0:"";}s:6:"module";s:4:"text";s:6:"weight";i:7;}}s:8:"required";i:0;s:11:"description";s:0:"";s:13:"default_value";N;}');
    $instances_field_bank_account['field_name'] = 'field_bank_account';

    $instances = array(
        'field_amount' => $instances_field_amount,
        'field_partner_amount' => $instances_field_partner_amount,
        'field_price' => $instances_field_price,
        'field_title' => $instances_field_title,
        'field_promotion_yes' => $instances_field_promotion_yes,
        'field_promotion_yes_back' => $instances_field_promotion_yes_back,
        'field_bank_account' => $instances_field_bank_account,
    );
    foreach ($instances as $instance) { // Loop through our instances
        if (!field_info_instance('field_collection_item', $instance['field_name'], 'field_coupons')) {
            $instance['entity_type'] = 'field_collection_item';
            $instance['bundle'] = 'field_coupons'; // Attach the instance to our content type
            field_create_instance($instance);
        }
    }

##最後將所有field與coupon node建立 instance

    #body
    $instances_body = unserialize('a:7:{s:5:"label";s:6:"描述";s:6:"widget";a:5:{s:6:"weight";s:2:"10";s:4:"type";s:26:"text_textarea_with_summary";s:6:"module";s:4:"text";s:6:"active";i:1;s:8:"settings";a:2:{s:4:"rows";s:1:"5";s:12:"summary_rows";i:5;}}s:8:"settings";a:3:{s:15:"text_processing";s:1:"0";s:15:"display_summary";i:0;s:18:"user_register_form";b:0;}s:7:"display";a:2:{s:7:"default";a:5:{s:5:"label";s:6:"hidden";s:4:"type";s:12:"text_default";s:8:"settings";a:1:{s:21:"field_formatter_class";s:0:"";}s:6:"module";s:4:"text";s:6:"weight";i:0;}s:6:"teaser";a:5:{s:5:"label";s:6:"hidden";s:4:"type";s:23:"text_summary_or_trimmed";s:8:"settings";a:2:{s:11:"trim_length";i:600;s:21:"field_formatter_class";s:0:"";}s:6:"module";s:4:"text";s:6:"weight";i:0;}}s:8:"required";i:0;s:11:"description";s:0:"";s:13:"default_value";N;}');
    $instances_body['field_name'] = 'body';

    #field_ref_project
    $instances_field_ref_project = unserialize('a:8:{s:5:"label";s:15:"折價券專案";s:6:"widget";a:5:{s:6:"weight";s:1:"5";s:4:"type";s:14:"options_select";s:6:"module";s:7:"options";s:6:"active";i:1;s:8:"settings";a:1:{s:12:"apply_chosen";s:0:"";}}s:8:"settings";a:2:{s:9:"behaviors";a:1:{s:11:"prepopulate";a:1:{s:6:"status";i:0;}}s:18:"user_register_form";b:0;}s:7:"display";a:1:{s:7:"default";a:5:{s:5:"label";s:5:"above";s:4:"type";s:21:"entityreference_label";s:8:"settings";a:3:{s:4:"link";b:0;s:13:"bypass_access";b:0;s:21:"field_formatter_class";s:0:"";}s:6:"module";s:15:"entityreference";s:6:"weight";i:1;}}s:8:"required";i:1;s:11:"description";s:0:"";s:13:"default_value";N;s:22:"default_value_function";s:0:"";}');
    $instances_field_ref_project['field_name'] = 'field_ref_project';

    #field_packages
    $instances_field_packages = unserialize('a:7:{s:5:"label";s:15:"折價券方案";s:6:"widget";a:5:{s:6:"weight";s:1:"6";s:4:"type";s:23:"field_collection_hidden";s:6:"module";s:16:"field_collection";s:6:"active";i:0;s:8:"settings";a:0:{}}s:8:"settings";a:1:{s:18:"user_register_form";b:0;}s:7:"display";a:1:{s:7:"default";a:5:{s:5:"label";s:5:"above";s:4:"type";s:21:"field_collection_view";s:8:"settings";a:6:{s:4:"edit";s:6:"編輯";s:6:"delete";s:6:"刪除";s:3:"add";s:6:"新增";s:11:"description";b:1;s:9:"view_mode";s:4:"full";s:21:"field_formatter_class";s:0:"";}s:6:"module";s:16:"field_collection";s:6:"weight";i:2;}}s:8:"required";i:0;s:11:"description";s:0:"";s:13:"default_value";N;}');
    $instances_field_packages['field_name'] = 'field_packages';

    #field_coupons
    $instances_field_coupons = unserialize('a:7:{s:5:"label";s:12:"紅色欄位";s:6:"widget";a:5:{s:6:"weight";s:1:"3";s:4:"type";s:22:"field_collection_embed";s:6:"module";s:16:"field_collection";s:6:"active";i:0;s:8:"settings";a:0:{}}s:8:"settings";a:1:{s:18:"user_register_form";b:0;}s:7:"display";a:1:{s:7:"default";a:5:{s:5:"label";s:5:"above";s:4:"type";s:21:"field_collection_view";s:8:"settings";a:6:{s:4:"edit";s:6:"編輯";s:6:"delete";s:6:"刪除";s:3:"add";s:6:"新增";s:11:"description";b:1;s:9:"view_mode";s:4:"full";s:21:"field_formatter_class";s:0:"";}s:6:"module";s:16:"field_collection";s:6:"weight";i:3;}}s:8:"required";i:0;s:11:"description";s:0:"";s:13:"default_value";N;}');
    $instances_field_coupons['field_name'] = 'field_coupons';

    #field_source
    $instances_field_source = unserialize('a:7:{s:5:"label";s:15:"折價券來源";s:6:"widget";a:5:{s:6:"weight";s:1:"1";s:4:"type";s:14:"options_select";s:6:"module";s:7:"options";s:6:"active";i:1;s:8:"settings";a:1:{s:12:"apply_chosen";s:0:"";}}s:8:"settings";a:1:{s:18:"user_register_form";b:0;}s:7:"display";a:1:{s:7:"default";a:5:{s:5:"label";s:5:"above";s:4:"type";s:12:"list_default";s:8:"settings";a:1:{s:21:"field_formatter_class";s:0:"";}s:6:"module";s:4:"list";s:6:"weight";i:4;}}s:8:"required";i:1;s:11:"description";s:0:"";s:13:"default_value";N;}');
    $instances_field_source['field_name'] = 'field_source';

    #field_partner_percentage
    $instances_field_partner_percentage = unserialize('a:7:{s:5:"label";s:16:"承擔比率(CP)";s:6:"widget";a:5:{s:6:"weight";s:1:"7";s:4:"type";s:6:"number";s:6:"module";s:6:"number";s:6:"active";i:0;s:8:"settings";a:0:{}}s:8:"settings";a:5:{s:3:"min";s:0:"";s:3:"max";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:1:"%";s:18:"user_register_form";b:0;}s:7:"display";a:1:{s:7:"default";a:5:{s:5:"label";s:5:"above";s:4:"type";s:14:"number_integer";s:8:"settings";a:5:{s:18:"thousand_separator";s:0:"";s:17:"decimal_separator";s:1:".";s:5:"scale";i:0;s:13:"prefix_suffix";b:1;s:21:"field_formatter_class";s:0:"";}s:6:"module";s:6:"number";s:6:"weight";i:6;}}s:8:"required";i:0;s:11:"description";s:0:"";s:13:"default_value";N;}');
    $instances_field_partner_percentage['field_name'] = 'field_partner_percentage';

    #field_platform_percentage
    $instances_field_platform_percentage = unserialize('a:7:{s:5:"label";s:17:"承擔比率(SHE)";s:6:"widget";a:5:{s:6:"weight";s:1:"8";s:4:"type";s:6:"number";s:6:"module";s:6:"number";s:6:"active";i:0;s:8:"settings";a:0:{}}s:8:"settings";a:5:{s:3:"min";s:0:"";s:3:"max";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:1:"%";s:18:"user_register_form";b:0;}s:7:"display";a:1:{s:7:"default";a:5:{s:5:"label";s:5:"above";s:4:"type";s:14:"number_integer";s:8:"settings";a:5:{s:18:"thousand_separator";s:0:"";s:17:"decimal_separator";s:1:".";s:5:"scale";i:0;s:13:"prefix_suffix";b:1;s:21:"field_formatter_class";s:0:"";}s:6:"module";s:6:"number";s:6:"weight";i:7;}}s:8:"required";i:0;s:11:"description";s:0:"";s:13:"default_value";N;}');
    $instances_field_platform_percentage['field_name'] = 'field_platform_percentage';

    #field_coupon_type
    $instances_field_coupon_type = unserialize('a:7:{s:5:"label";s:15:"折價券型態";s:6:"widget";a:5:{s:6:"weight";s:1:"2";s:4:"type";s:14:"options_select";s:6:"module";s:7:"options";s:6:"active";i:1;s:8:"settings";a:1:{s:12:"apply_chosen";s:0:"";}}s:8:"settings";a:1:{s:18:"user_register_form";b:0;}s:7:"display";a:1:{s:7:"default";a:5:{s:5:"label";s:5:"above";s:4:"type";s:12:"list_default";s:8:"settings";a:1:{s:21:"field_formatter_class";s:0:"";}s:6:"module";s:4:"list";s:6:"weight";i:8;}}s:8:"required";i:1;s:11:"description";s:0:"";s:13:"default_value";N;}');
    $instances_field_coupon_type['field_name'] = 'field_coupon_type';

    #field_apply_date
    $instances_field_apply_date = unserialize('a:6:{s:5:"label";s:12:"有效期間";s:6:"widget";a:5:{s:6:"weight";s:1:"9";s:4:"type";s:10:"date_popup";s:6:"module";s:4:"date";s:6:"active";i:1;s:8:"settings";a:7:{s:12:"input_format";s:5:"Y/n/j";s:19:"input_format_custom";s:0:"";s:10:"year_range";s:5:"-3:+3";s:9:"increment";s:2:"15";s:14:"label_position";s:5:"above";s:10:"text_parts";a:0:{}s:11:"no_fieldset";i:0;}}s:8:"settings";a:5:{s:13:"default_value";s:3:"now";s:18:"default_value_code";s:0:"";s:14:"default_value2";s:4:"same";s:19:"default_value_code2";s:0:"";s:18:"user_register_form";b:0;}s:7:"display";a:1:{s:7:"default";a:5:{s:5:"label";s:5:"above";s:4:"type";s:12:"date_default";s:8:"settings";a:7:{s:11:"format_type";s:4:"long";s:15:"multiple_number";s:0:"";s:13:"multiple_from";s:0:"";s:11:"multiple_to";s:0:"";s:6:"fromto";s:4:"both";s:19:"show_remaining_days";b:0;s:21:"field_formatter_class";s:0:"";}s:6:"module";s:4:"date";s:6:"weight";i:9;}}s:8:"required";i:1;s:11:"description";s:0:"";}');
    $instances_field_apply_date['field_name'] = 'field_apply_date';

    $instances = array(
        'body' => $instances_body,
        'field_ref_project' => $instances_field_ref_project,
        'field_packages' => $instances_field_packages,
        'field_coupons' => $instances_field_coupons,
        'field_source' => $instances_field_source,
        'field_partner_percentage' => $instances_field_partner_percentage,
        'field_platform_percentage' => $instances_field_platform_percentage,
        'field_coupon_type' => $instances_field_coupon_type,
        'field_apply_date' => $instances_field_apply_date,
    );
    foreach ($instances as $instance) { // Loop through our instances
        if (!field_info_instance('node', $instance['field_name'], 'coupon')) {
            $instance['entity_type'] = 'node';
            $instance['bundle'] = 'coupon'; // Attach the instance to our content type
            field_create_instance($instance);
        }
    }








}