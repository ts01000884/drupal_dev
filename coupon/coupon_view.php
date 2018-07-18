<?php
/**
 * Created by PhpStorm.
 * User: UKA
 * Date: 2018/7/2
 * Time: 上午10:51
 */


$view = new view();
$view->name = 'coupon_list_view';
$view->description = '';
$view->tag = 'default';
$view->base_table = 'node';
$view->human_name = '折價券列表';
$view->core = 7;
$view->api_version = '3.0';
$view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

/* Display: Master */
$handler = $view->new_display('default', 'Master', 'default');
$handler->display->display_options['title'] = '折價券列表';
$handler->display->display_options['use_ajax'] = TRUE;
$handler->display->display_options['use_more_always'] = FALSE;
$handler->display->display_options['access']['type'] = 'perm';
$handler->display->display_options['cache']['type'] = 'none';
$handler->display->display_options['query']['type'] = 'views_query';
$handler->display->display_options['exposed_form']['type'] = 'basic';
$handler->display->display_options['exposed_form']['options']['reset_button_label'] = '重設';
$handler->display->display_options['pager']['type'] = 'none';
$handler->display->display_options['style_plugin'] = 'table';
/* Relationship: 內容: 所屬訂閱方案 (field_packages) */
$handler->display->display_options['relationships']['field_packages_value']['id'] = 'field_packages_value';
$handler->display->display_options['relationships']['field_packages_value']['table'] = 'field_data_field_packages';
$handler->display->display_options['relationships']['field_packages_value']['field'] = 'field_packages_value';
/* 欄位: 內容: 標題 */
$handler->display->display_options['fields']['title']['id'] = 'title';
$handler->display->display_options['fields']['title']['table'] = 'node';
$handler->display->display_options['fields']['title']['field'] = 'title';
$handler->display->display_options['fields']['title']['label'] = '序號';
$handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
$handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
$handler->display->display_options['fields']['title']['link_to_node'] = FALSE;
/* 欄位: 內容: 兌換券名稱 */
$handler->display->display_options['fields']['field_experience']['id'] = 'field_experience';
$handler->display->display_options['fields']['field_experience']['table'] = 'field_data_field_experience';
$handler->display->display_options['fields']['field_experience']['field'] = 'field_experience';
$handler->display->display_options['fields']['field_experience']['label'] = '折價券名稱';
$handler->display->display_options['fields']['field_experience']['settings'] = array(
    'bypass_access' => 0,
    'link' => 0,
    'field_formatter_class' => '',
);
/* 欄位: 內容: 折價券型態 */
$handler->display->display_options['fields']['field_coupon_type']['id'] = 'field_coupon_type';
$handler->display->display_options['fields']['field_coupon_type']['table'] = 'field_data_field_coupon_type';
$handler->display->display_options['fields']['field_coupon_type']['field'] = 'field_coupon_type';
$handler->display->display_options['fields']['field_coupon_type']['relationship'] = 'field_experience_target_id';
$handler->display->display_options['fields']['field_coupon_type']['settings'] = array(
    'field_formatter_class' => '',
);
/* 欄位: 內容: 已發表 */
$handler->display->display_options['fields']['status']['id'] = 'status';
$handler->display->display_options['fields']['status']['table'] = 'node';
$handler->display->display_options['fields']['status']['field'] = 'status';
$handler->display->display_options['fields']['status']['label'] = '狀態';
$handler->display->display_options['fields']['status']['not'] = 0;
/* 欄位: 內容: Sticky */
$handler->display->display_options['fields']['sticky']['id'] = 'sticky';
$handler->display->display_options['fields']['sticky']['table'] = 'node';
$handler->display->display_options['fields']['sticky']['field'] = 'sticky';
/* Sort criterion: 內容: Post date */
$handler->display->display_options['sorts']['created']['id'] = 'created';
$handler->display->display_options['sorts']['created']['table'] = 'node';
$handler->display->display_options['sorts']['created']['field'] = 'created';
$handler->display->display_options['sorts']['created']['order'] = 'DESC';
/* Filter criterion: 內容: 類型 */
$handler->display->display_options['filters']['type']['id'] = 'type';
$handler->display->display_options['filters']['type']['table'] = 'node';
$handler->display->display_options['filters']['type']['field'] = 'type';
$handler->display->display_options['filters']['type']['value'] = array(
    'experience_serial' => 'experience_serial',
);
$handler->display->display_options['filters']['type']['group'] = 1;
/* Filter criterion: 內容: 類型 */
$handler->display->display_options['filters']['type_1']['id'] = 'type_1';
$handler->display->display_options['filters']['type_1']['table'] = 'node';
$handler->display->display_options['filters']['type_1']['field'] = 'type';
$handler->display->display_options['filters']['type_1']['relationship'] = 'field_experience_target_id';
$handler->display->display_options['filters']['type_1']['value'] = array(
    'coupon' => 'coupon',
);
/* Filter criterion: 內容: 訂閱帳號 (field_user) */
$handler->display->display_options['filters']['field_user_target_id']['id'] = 'field_user_target_id';
$handler->display->display_options['filters']['field_user_target_id']['table'] = 'field_data_field_user';
$handler->display->display_options['filters']['field_user_target_id']['field'] = 'field_user_target_id';
$handler->display->display_options['filters']['field_user_target_id']['exposed'] = TRUE;
$handler->display->display_options['filters']['field_user_target_id']['expose']['operator_id'] = 'field_user_target_id_op';
$handler->display->display_options['filters']['field_user_target_id']['expose']['label'] = '兌換帳號';
$handler->display->display_options['filters']['field_user_target_id']['expose']['operator'] = 'field_user_target_id_op';
$handler->display->display_options['filters']['field_user_target_id']['expose']['identifier'] = 'field_user_target_id';
$handler->display->display_options['filters']['field_user_target_id']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    4 => 0,
    3 => 0,
    5 => 0,
    7 => 0,
);
/* Filter criterion: 內容: 標題 */
$handler->display->display_options['filters']['title']['id'] = 'title';
$handler->display->display_options['filters']['title']['table'] = 'node';
$handler->display->display_options['filters']['title']['field'] = 'title';
$handler->display->display_options['filters']['title']['relationship'] = 'field_experience_target_id';
$handler->display->display_options['filters']['title']['exposed'] = TRUE;
$handler->display->display_options['filters']['title']['expose']['operator_id'] = 'title_op';
$handler->display->display_options['filters']['title']['expose']['label'] = '折價券名稱';
$handler->display->display_options['filters']['title']['expose']['operator'] = 'title_op';
$handler->display->display_options['filters']['title']['expose']['identifier'] = 'title';
$handler->display->display_options['filters']['title']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    4 => 0,
    3 => 0,
    5 => 0,
    7 => 0,
);
/* Filter criterion: 內容: 標題 */
$handler->display->display_options['filters']['title_1']['id'] = 'title_1';
$handler->display->display_options['filters']['title_1']['table'] = 'node';
$handler->display->display_options['filters']['title_1']['field'] = 'title';
$handler->display->display_options['filters']['title_1']['exposed'] = TRUE;
$handler->display->display_options['filters']['title_1']['expose']['operator_id'] = 'title_1_op';
$handler->display->display_options['filters']['title_1']['expose']['label'] = '序號';
$handler->display->display_options['filters']['title_1']['expose']['operator'] = 'title_1_op';
$handler->display->display_options['filters']['title_1']['expose']['identifier'] = 'title_1';
$handler->display->display_options['filters']['title_1']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    4 => 0,
    3 => 0,
    5 => 0,
    7 => 0,
);
/* Filter criterion: 內容: 已發表 */
$handler->display->display_options['filters']['status']['id'] = 'status';
$handler->display->display_options['filters']['status']['table'] = 'node';
$handler->display->display_options['filters']['status']['field'] = 'status';
$handler->display->display_options['filters']['status']['value'] = '0';
$handler->display->display_options['filters']['status']['exposed'] = TRUE;
$handler->display->display_options['filters']['status']['expose']['operator_id'] = '';
$handler->display->display_options['filters']['status']['expose']['label'] = '未兌換';
$handler->display->display_options['filters']['status']['expose']['operator'] = 'status_op';
$handler->display->display_options['filters']['status']['expose']['identifier'] = 'status';
$handler->display->display_options['filters']['status']['expose']['required'] = TRUE;
$handler->display->display_options['filters']['status']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    4 => 0,
    3 => 0,
    5 => 0,
    7 => 0,
);

/* Display: Page */
$handler = $view->new_display('page', 'Page', 'page');
$handler->display->display_options['defaults']['relationships'] = FALSE;
/* Relationship: 內容: 所屬訂閱方案 (field_packages) */
$handler->display->display_options['relationships']['field_packages_value']['id'] = 'field_packages_value';
$handler->display->display_options['relationships']['field_packages_value']['table'] = 'field_data_field_packages';
$handler->display->display_options['relationships']['field_packages_value']['field'] = 'field_packages_value';
$handler->display->display_options['relationships']['field_packages_value']['delta'] = '-1';
/* Relationship: 內容: 紅色欄位 (field_coupons) */
$handler->display->display_options['relationships']['field_coupons_value']['id'] = 'field_coupons_value';
$handler->display->display_options['relationships']['field_coupons_value']['table'] = 'field_data_field_coupons';
$handler->display->display_options['relationships']['field_coupons_value']['field'] = 'field_coupons_value';
$handler->display->display_options['relationships']['field_coupons_value']['delta'] = '-1';
/* Relationship: 內容: 作者 */
$handler->display->display_options['relationships']['uid']['id'] = 'uid';
$handler->display->display_options['relationships']['uid']['table'] = 'node';
$handler->display->display_options['relationships']['uid']['field'] = 'uid';
$handler->display->display_options['defaults']['fields'] = FALSE;
/* 欄位: 內容: 標題 */
$handler->display->display_options['fields']['title']['id'] = 'title';
$handler->display->display_options['fields']['title']['table'] = 'node';
$handler->display->display_options['fields']['title']['field'] = 'title';
$handler->display->display_options['fields']['title']['label'] = '折價券名稱';
$handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
$handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
$handler->display->display_options['fields']['title']['link_to_node'] = FALSE;
/* 欄位: 內容: 折價券來源 */
$handler->display->display_options['fields']['field_source']['id'] = 'field_source';
$handler->display->display_options['fields']['field_source']['table'] = 'field_data_field_source';
$handler->display->display_options['fields']['field_source']['field'] = 'field_source';
$handler->display->display_options['fields']['field_source']['settings'] = array(
    'field_formatter_class' => '',
);
/* 欄位: 內容: 折價券型態 */
$handler->display->display_options['fields']['field_coupon_type']['id'] = 'field_coupon_type';
$handler->display->display_options['fields']['field_coupon_type']['table'] = 'field_data_field_coupon_type';
$handler->display->display_options['fields']['field_coupon_type']['field'] = 'field_coupon_type';
$handler->display->display_options['fields']['field_coupon_type']['settings'] = array(
    'field_formatter_class' => '',
);
/* 欄位: 欄位: 所屬專案 */
$handler->display->display_options['fields']['field_ref_project']['id'] = 'field_ref_project';
$handler->display->display_options['fields']['field_ref_project']['table'] = 'field_data_field_ref_project';
$handler->display->display_options['fields']['field_ref_project']['field'] = 'field_ref_project';
$handler->display->display_options['fields']['field_ref_project']['settings'] = array(
    'bypass_access' => 0,
    'link' => 0,
    'field_formatter_class' => '',
);
$handler->display->display_options['fields']['field_ref_project']['delta_offset'] = '0';
/* 欄位: 欄位: 訂閱標題 */
$handler->display->display_options['fields']['field_title']['id'] = 'field_title';
$handler->display->display_options['fields']['field_title']['table'] = 'field_data_field_title';
$handler->display->display_options['fields']['field_title']['field'] = 'field_title';
$handler->display->display_options['fields']['field_title']['relationship'] = 'field_packages_value';
$handler->display->display_options['fields']['field_title']['label'] = '方案名稱';
$handler->display->display_options['fields']['field_title']['settings'] = array(
    'field_formatter_class' => '',
);
/* 欄位: 欄位: 單次訂閱時間 */
$handler->display->display_options['fields']['field_subtime']['id'] = 'field_subtime';
$handler->display->display_options['fields']['field_subtime']['table'] = 'field_data_field_subtime';
$handler->display->display_options['fields']['field_subtime']['field'] = 'field_subtime';
$handler->display->display_options['fields']['field_subtime']['relationship'] = 'field_packages_value';
$handler->display->display_options['fields']['field_subtime']['settings'] = array(
    'field_formatter_class' => '',
);
/* 欄位: 欄位: 折抵金額 */
$handler->display->display_options['fields']['field_price']['id'] = 'field_price';
$handler->display->display_options['fields']['field_price']['table'] = 'field_data_field_price';
$handler->display->display_options['fields']['field_price']['field'] = 'field_price';
$handler->display->display_options['fields']['field_price']['relationship'] = 'field_packages_value';
$handler->display->display_options['fields']['field_price']['label'] = '方案售價';
$handler->display->display_options['fields']['field_price']['settings'] = array(
    'thousand_separator' => '',
    'prefix_suffix' => 1,
    'field_formatter_class' => '',
);
/* 欄位: 欄位: 申請/使用數量 */
$handler->display->display_options['fields']['field_amount']['id'] = 'field_amount';
$handler->display->display_options['fields']['field_amount']['table'] = 'field_data_field_amount';
$handler->display->display_options['fields']['field_amount']['field'] = 'field_amount';
$handler->display->display_options['fields']['field_amount']['relationship'] = 'field_coupons_value';
$handler->display->display_options['fields']['field_amount']['label'] = '申請使用數量';
$handler->display->display_options['fields']['field_amount']['settings'] = array(
    'thousand_separator' => '',
    'prefix_suffix' => 1,
    'field_formatter_class' => '',
);
/* 欄位: Global: PHP */
$handler->display->display_options['fields']['php']['id'] = 'php';
$handler->display->display_options['fields']['php']['table'] = 'views';
$handler->display->display_options['fields']['php']['field'] = 'php';
$handler->display->display_options['fields']['php']['label'] = '已使用數量';
$handler->display->display_options['fields']['php']['use_php_setup'] = 0;
$handler->display->display_options['fields']['php']['php_value'] = '$pj = $row->nid;      
$query = new EntityFieldQuery();
$query->entityCondition(\'entity_type\', \'node\')
            ->entityCondition(\'bundle\', \'shoplog\')
             ->fieldCondition(\'field_coupon\', \'target_id\', $pj, \'=\');
           #->entityCondition(\'bundle\', \'experience_serial\')
           #->fieldCondition(\'field_experience\', \'target_id\', $pj, \'=\')
           #->fieldCondition(\'field_user\', \'target_id\', null, \'IS NOT NULL\');
$rs = $query->count()->execute();
return $rs;';
$handler->display->display_options['fields']['php']['use_php_click_sortable'] = '0';
$handler->display->display_options['fields']['php']['php_click_sortable'] = '';
/* 欄位: 欄位: 單帳號限制數量 */
$handler->display->display_options['fields']['field_partner_amount']['id'] = 'field_partner_amount';
$handler->display->display_options['fields']['field_partner_amount']['table'] = 'field_data_field_partner_amount';
$handler->display->display_options['fields']['field_partner_amount']['field'] = 'field_partner_amount';
$handler->display->display_options['fields']['field_partner_amount']['relationship'] = 'field_coupons_value';
$handler->display->display_options['fields']['field_partner_amount']['settings'] = array(
    'thousand_separator' => '',
    'prefix_suffix' => 1,
    'field_formatter_class' => '',
);
/* 欄位: 欄位: 折抵金額 */
$handler->display->display_options['fields']['field_price_1']['id'] = 'field_price_1';
$handler->display->display_options['fields']['field_price_1']['table'] = 'field_data_field_price';
$handler->display->display_options['fields']['field_price_1']['field'] = 'field_price';
$handler->display->display_options['fields']['field_price_1']['relationship'] = 'field_coupons_value';
$handler->display->display_options['fields']['field_price_1']['settings'] = array(
    'thousand_separator' => '',
    'prefix_suffix' => 1,
    'field_formatter_class' => '',
);
/* 欄位: 欄位: 結帳門檻 */
$handler->display->display_options['fields']['field_promotion_yes']['id'] = 'field_promotion_yes';
$handler->display->display_options['fields']['field_promotion_yes']['table'] = 'field_data_field_promotion_yes';
$handler->display->display_options['fields']['field_promotion_yes']['field'] = 'field_promotion_yes';
$handler->display->display_options['fields']['field_promotion_yes']['relationship'] = 'field_coupons_value';
$handler->display->display_options['fields']['field_promotion_yes']['settings'] = array(
    'thousand_separator' => '',
    'prefix_suffix' => 1,
    'field_formatter_class' => '',
);
/* 欄位: 欄位: 折扣折數 */
$handler->display->display_options['fields']['field_promotion_yes_back']['id'] = 'field_promotion_yes_back';
$handler->display->display_options['fields']['field_promotion_yes_back']['table'] = 'field_data_field_promotion_yes_back';
$handler->display->display_options['fields']['field_promotion_yes_back']['field'] = 'field_promotion_yes_back';
$handler->display->display_options['fields']['field_promotion_yes_back']['relationship'] = 'field_coupons_value';
$handler->display->display_options['fields']['field_promotion_yes_back']['settings'] = array(
    'thousand_separator' => '',
    'prefix_suffix' => 1,
    'field_formatter_class' => '',
);
/* 欄位: 欄位: 方案拆分比 */
$handler->display->display_options['fields']['field_partner_percentage']['id'] = 'field_partner_percentage';
$handler->display->display_options['fields']['field_partner_percentage']['table'] = 'field_data_field_partner_percentage';
$handler->display->display_options['fields']['field_partner_percentage']['field'] = 'field_partner_percentage';
$handler->display->display_options['fields']['field_partner_percentage']['label'] = '承擔比率(CP)';
$handler->display->display_options['fields']['field_partner_percentage']['settings'] = array(
    'thousand_separator' => '',
    'prefix_suffix' => 1,
    'field_formatter_class' => '',
);
/* 欄位: 內容: 承擔比率(SHE) */
$handler->display->display_options['fields']['field_platform_percentage']['id'] = 'field_platform_percentage';
$handler->display->display_options['fields']['field_platform_percentage']['table'] = 'field_data_field_platform_percentage';
$handler->display->display_options['fields']['field_platform_percentage']['field'] = 'field_platform_percentage';
$handler->display->display_options['fields']['field_platform_percentage']['settings'] = array(
    'thousand_separator' => '',
    'prefix_suffix' => 1,
    'field_formatter_class' => '',
);
/* 欄位: 欄位: 生效期間 */
$handler->display->display_options['fields']['field_apply_date']['id'] = 'field_apply_date';
$handler->display->display_options['fields']['field_apply_date']['table'] = 'field_data_field_apply_date';
$handler->display->display_options['fields']['field_apply_date']['field'] = 'field_apply_date';
$handler->display->display_options['fields']['field_apply_date']['settings'] = array(
    'format_type' => 'date',
    'custom_date_format' => '',
    'fromto' => 'both',
    'multiple_number' => '',
    'multiple_from' => '',
    'multiple_to' => '',
    'show_remaining_days' => 0,
    'field_formatter_class' => '',
);
/* 欄位: 使用者: 名稱 */
$handler->display->display_options['fields']['name']['id'] = 'name';
$handler->display->display_options['fields']['name']['table'] = 'users';
$handler->display->display_options['fields']['name']['field'] = 'name';
$handler->display->display_options['fields']['name']['relationship'] = 'uid';
$handler->display->display_options['fields']['name']['label'] = '建立者';
$handler->display->display_options['fields']['name']['link_to_user'] = FALSE;
/* 欄位: 內容: Nid */
$handler->display->display_options['fields']['nid']['id'] = 'nid';
$handler->display->display_options['fields']['nid']['table'] = 'node';
$handler->display->display_options['fields']['nid']['field'] = 'nid';
$handler->display->display_options['fields']['nid']['label'] = '';
$handler->display->display_options['fields']['nid']['exclude'] = TRUE;
$handler->display->display_options['fields']['nid']['element_label_colon'] = FALSE;
/* 欄位: Global: PHP */
$handler->display->display_options['fields']['php_1']['id'] = 'php_1';
$handler->display->display_options['fields']['php_1']['table'] = 'views';
$handler->display->display_options['fields']['php_1']['field'] = 'php';
$handler->display->display_options['fields']['php_1']['label'] = '維護';
$handler->display->display_options['fields']['php_1']['use_php_setup'] = 0;
$handler->display->display_options['fields']['php_1']['php_output'] = '<?php
echo "<a href=\'/adm/coupon-serial-list?title=".$row->title."&status=All\'>序號</a>/".l("下載", "/adm/exp/".$row->nid."/all-serial-list/csv")."/<a href=\'/node/".$row->nid."/edit?theme=seven&destination=adm/coupon-list\'>編輯</a>";
?>';
$handler->display->display_options['fields']['php_1']['use_php_click_sortable'] = '0';
$handler->display->display_options['fields']['php_1']['php_click_sortable'] = '';
$handler->display->display_options['defaults']['filter_groups'] = FALSE;
$handler->display->display_options['defaults']['filters'] = FALSE;
/* Filter criterion: 內容: 類型 */
$handler->display->display_options['filters']['type']['id'] = 'type';
$handler->display->display_options['filters']['type']['table'] = 'node';
$handler->display->display_options['filters']['type']['field'] = 'type';
$handler->display->display_options['filters']['type']['value'] = array(
    'coupon' => 'coupon',
);
$handler->display->display_options['filters']['type']['group'] = 1;
/* Filter criterion: 內容: 折價券來源 (field_source) */
$handler->display->display_options['filters']['field_source_value']['id'] = 'field_source_value';
$handler->display->display_options['filters']['field_source_value']['table'] = 'field_data_field_source';
$handler->display->display_options['filters']['field_source_value']['field'] = 'field_source_value';
$handler->display->display_options['filters']['field_source_value']['exposed'] = TRUE;
$handler->display->display_options['filters']['field_source_value']['expose']['operator_id'] = 'field_source_value_op';
$handler->display->display_options['filters']['field_source_value']['expose']['label'] = '折價券來源';
$handler->display->display_options['filters']['field_source_value']['expose']['operator'] = 'field_source_value_op';
$handler->display->display_options['filters']['field_source_value']['expose']['identifier'] = 'field_source_value';
$handler->display->display_options['filters']['field_source_value']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    4 => 0,
    3 => 0,
    5 => 0,
    7 => 0,
);
/* Filter criterion: 內容: 折價券型態 (field_coupon_type) */
$handler->display->display_options['filters']['field_coupon_type_value']['id'] = 'field_coupon_type_value';
$handler->display->display_options['filters']['field_coupon_type_value']['table'] = 'field_data_field_coupon_type';
$handler->display->display_options['filters']['field_coupon_type_value']['field'] = 'field_coupon_type_value';
$handler->display->display_options['filters']['field_coupon_type_value']['exposed'] = TRUE;
$handler->display->display_options['filters']['field_coupon_type_value']['expose']['operator_id'] = 'field_coupon_type_value_op';
$handler->display->display_options['filters']['field_coupon_type_value']['expose']['label'] = '折價券型態';
$handler->display->display_options['filters']['field_coupon_type_value']['expose']['operator'] = 'field_coupon_type_value_op';
$handler->display->display_options['filters']['field_coupon_type_value']['expose']['identifier'] = 'field_coupon_type_value';
$handler->display->display_options['filters']['field_coupon_type_value']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    4 => 0,
    3 => 0,
    5 => 0,
    7 => 0,
);
/* Filter criterion: 內容: 標題 */
$handler->display->display_options['filters']['title']['id'] = 'title';
$handler->display->display_options['filters']['title']['table'] = 'node';
$handler->display->display_options['filters']['title']['field'] = 'title';
$handler->display->display_options['filters']['title']['operator'] = 'contains';
$handler->display->display_options['filters']['title']['exposed'] = TRUE;
$handler->display->display_options['filters']['title']['expose']['operator_id'] = 'title_op';
$handler->display->display_options['filters']['title']['expose']['label'] = '標題';
$handler->display->display_options['filters']['title']['expose']['operator'] = 'title_op';
$handler->display->display_options['filters']['title']['expose']['identifier'] = 'title';
$handler->display->display_options['filters']['title']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    4 => 0,
    3 => 0,
    5 => 0,
    7 => 0,
);
$handler->display->display_options['path'] = 'adm/coupon-list';

/* Display: 一對一序號列表 */
$handler = $view->new_display('page', '一對一序號列表', 'page_1');
$handler->display->display_options['defaults']['group_by'] = FALSE;
$handler->display->display_options['defaults']['style_plugin'] = FALSE;
$handler->display->display_options['style_plugin'] = 'table';
$handler->display->display_options['style_options']['columns'] = array(
    'title' => 'title',
    'field_experience' => 'field_experience',
    'field_coupon_type' => 'field_coupon_type',
    'status' => 'status',
    'sticky' => 'sticky',
    'nid' => 'nid',
    'php' => 'php',
    'field_user' => 'field_user',
    'field_user_1' => 'field_user_1',
    'php_1' => 'php_1',
    'nothing' => 'nothing',
);
$handler->display->display_options['style_options']['default'] = '-1';
$handler->display->display_options['style_options']['info'] = array(
    'title' => array(
        'sortable' => 0,
        'default_sort_order' => 'asc',
        'align' => '',
        'separator' => '',
        'empty_column' => 0,
    ),
    'field_experience' => array(
        'sortable' => 0,
        'default_sort_order' => 'asc',
        'align' => '',
        'separator' => '',
        'empty_column' => 0,
    ),
    'field_coupon_type' => array(
        'sortable' => 0,
        'default_sort_order' => 'asc',
        'align' => '',
        'separator' => '',
        'empty_column' => 0,
    ),
    'status' => array(
        'sortable' => 0,
        'default_sort_order' => 'asc',
        'align' => '',
        'separator' => '',
        'empty_column' => 0,
    ),
    'sticky' => array(
        'sortable' => 0,
        'default_sort_order' => 'asc',
        'align' => '',
        'separator' => '',
        'empty_column' => 0,
    ),
    'nid' => array(
        'sortable' => 0,
        'default_sort_order' => 'asc',
        'align' => '',
        'separator' => '',
        'empty_column' => 0,
    ),
    'php' => array(
        'align' => '',
        'separator' => '',
        'empty_column' => 0,
    ),
    'field_user' => array(
        'align' => '',
        'separator' => '',
        'empty_column' => 0,
    ),
    'field_user_1' => array(
        'align' => '',
        'separator' => '',
        'empty_column' => 0,
    ),
    'php_1' => array(
        'align' => '',
        'separator' => '',
        'empty_column' => 0,
    ),
    'nothing' => array(
        'align' => '',
        'separator' => '',
        'empty_column' => 0,
    ),
);
$handler->display->display_options['defaults']['style_options'] = FALSE;
$handler->display->display_options['defaults']['row_plugin'] = FALSE;
$handler->display->display_options['defaults']['row_options'] = FALSE;
$handler->display->display_options['defaults']['footer'] = FALSE;
$handler->display->display_options['defaults']['relationships'] = FALSE;
/* Relationship: Entity Reference: Referenced Entity */
$handler->display->display_options['relationships']['field_experience_target_id']['id'] = 'field_experience_target_id';
$handler->display->display_options['relationships']['field_experience_target_id']['table'] = 'field_data_field_experience';
$handler->display->display_options['relationships']['field_experience_target_id']['field'] = 'field_experience_target_id';
$handler->display->display_options['relationships']['field_experience_target_id']['label'] = 'entity referenced from field_experience';
$handler->display->display_options['relationships']['field_experience_target_id']['required'] = TRUE;
/* Relationship: Entity Reference: Referencing entity */
$handler->display->display_options['relationships']['reverse_field_coupon_node']['id'] = 'reverse_field_coupon_node';
$handler->display->display_options['relationships']['reverse_field_coupon_node']['table'] = 'node';
$handler->display->display_options['relationships']['reverse_field_coupon_node']['field'] = 'reverse_field_coupon_node';
$handler->display->display_options['relationships']['reverse_field_coupon_node']['relationship'] = 'field_experience_target_id';
$handler->display->display_options['defaults']['fields'] = FALSE;
/* 欄位: 內容: 標題 */
$handler->display->display_options['fields']['title']['id'] = 'title';
$handler->display->display_options['fields']['title']['table'] = 'node';
$handler->display->display_options['fields']['title']['field'] = 'title';
$handler->display->display_options['fields']['title']['label'] = '序號';
$handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
$handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
$handler->display->display_options['fields']['title']['link_to_node'] = FALSE;
/* 欄位: 內容: 兌換券名稱 */
$handler->display->display_options['fields']['field_experience']['id'] = 'field_experience';
$handler->display->display_options['fields']['field_experience']['table'] = 'field_data_field_experience';
$handler->display->display_options['fields']['field_experience']['field'] = 'field_experience';
$handler->display->display_options['fields']['field_experience']['label'] = '折價券名稱';
$handler->display->display_options['fields']['field_experience']['settings'] = array(
    'bypass_access' => 0,
    'link' => 0,
    'field_formatter_class' => '',
);
/* 欄位: 內容: 折價券型態 */
$handler->display->display_options['fields']['field_coupon_type']['id'] = 'field_coupon_type';
$handler->display->display_options['fields']['field_coupon_type']['table'] = 'field_data_field_coupon_type';
$handler->display->display_options['fields']['field_coupon_type']['field'] = 'field_coupon_type';
$handler->display->display_options['fields']['field_coupon_type']['relationship'] = 'field_experience_target_id';
$handler->display->display_options['fields']['field_coupon_type']['settings'] = array(
    'field_formatter_class' => '',
);
/* 欄位: 內容: 已發表 */
$handler->display->display_options['fields']['status']['id'] = 'status';
$handler->display->display_options['fields']['status']['table'] = 'node';
$handler->display->display_options['fields']['status']['field'] = 'status';
$handler->display->display_options['fields']['status']['label'] = '狀態';
$handler->display->display_options['fields']['status']['type'] = 'custom';
$handler->display->display_options['fields']['status']['type_custom_true'] = '未兌換';
$handler->display->display_options['fields']['status']['type_custom_false'] = '已兌換';
$handler->display->display_options['fields']['status']['not'] = 0;
/* 欄位: 內容: Sticky */
$handler->display->display_options['fields']['sticky']['id'] = 'sticky';
$handler->display->display_options['fields']['sticky']['table'] = 'node';
$handler->display->display_options['fields']['sticky']['field'] = 'sticky';
$handler->display->display_options['fields']['sticky']['label'] = '';
$handler->display->display_options['fields']['sticky']['exclude'] = TRUE;
$handler->display->display_options['fields']['sticky']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['sticky']['type'] = 'boolean';
$handler->display->display_options['fields']['sticky']['not'] = 0;
/* 欄位: 內容: Nid */
$handler->display->display_options['fields']['nid']['id'] = 'nid';
$handler->display->display_options['fields']['nid']['table'] = 'node';
$handler->display->display_options['fields']['nid']['field'] = 'nid';
$handler->display->display_options['fields']['nid']['label'] = '';
$handler->display->display_options['fields']['nid']['exclude'] = TRUE;
$handler->display->display_options['fields']['nid']['element_label_colon'] = FALSE;
/* 欄位: Global: PHP */
$handler->display->display_options['fields']['php']['id'] = 'php';
$handler->display->display_options['fields']['php']['table'] = 'views';
$handler->display->display_options['fields']['php']['field'] = 'php';
$handler->display->display_options['fields']['php']['label'] = '序號鎖定';
$handler->display->display_options['fields']['php']['use_php_setup'] = 0;
$handler->display->display_options['fields']['php']['php_output'] = '<?php
if($row->sticky)  echo l("解除鎖定","explock/".$row->nid);
else echo l("序號鎖定","explock/".$row->nid);
?>';
$handler->display->display_options['fields']['php']['use_php_click_sortable'] = '0';
$handler->display->display_options['fields']['php']['php_click_sortable'] = '';
/* 欄位: 內容: 訂閱帳號 */
$handler->display->display_options['fields']['field_user']['id'] = 'field_user';
$handler->display->display_options['fields']['field_user']['table'] = 'field_data_field_user';
$handler->display->display_options['fields']['field_user']['field'] = 'field_user';
$handler->display->display_options['fields']['field_user']['exclude'] = TRUE;
$handler->display->display_options['fields']['field_user']['settings'] = array(
    'bypass_access' => 0,
    'link' => 0,
    'field_formatter_class' => '',
);
$handler->display->display_options['fields']['field_user']['delta_offset'] = '0';
/* 欄位: 內容: 訂閱帳號 */
$handler->display->display_options['fields']['field_user_1']['id'] = 'field_user_1';
$handler->display->display_options['fields']['field_user_1']['table'] = 'field_data_field_user';
$handler->display->display_options['fields']['field_user_1']['field'] = 'field_user';
$handler->display->display_options['fields']['field_user_1']['relationship'] = 'reverse_field_coupon_node';
$handler->display->display_options['fields']['field_user_1']['exclude'] = TRUE;
$handler->display->display_options['fields']['field_user_1']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['field_user_1']['settings'] = array(
    'bypass_access' => 0,
    'link' => 0,
    'field_formatter_class' => '',
);
$handler->display->display_options['fields']['field_user_1']['delta_offset'] = '0';
/* 欄位: Global: PHP */
$handler->display->display_options['fields']['php_1']['id'] = 'php_1';
$handler->display->display_options['fields']['php_1']['table'] = 'views';
$handler->display->display_options['fields']['php_1']['field'] = 'php';
$handler->display->display_options['fields']['php_1']['label'] = '訂閱帳號';
$handler->display->display_options['fields']['php_1']['use_php_setup'] = 0;
$handler->display->display_options['fields']['php_1']['php_value'] = '/**
 *
 * 判斷訂閱序號
 * 利用field_user field_user1給的值判斷訂閱帳號
 */
#讀取折價卷種類
$node_data = node_load($row->field_coupon_type);
#一對一 去訂單找
if ($node_data->field_coupon_type[\'und\'][0][\'value\'] == \'1\' && $row->status == \'0\') {
    $node_data1 = node_load($row->field_user);
    if (isset($node_data1->field_user[\'und\'][0][\'target_id\'])) {
        $user = user_load($node_data1->field_user[\'und\'][0][\'target_id\']);
        return $user->name;
    }
    #一對多
} else if ($node_data->field_coupon_type[\'und\'][0][\'value\'] != \'1\') {
    $node_data1 = node_load($row->field_user_1);
    if (isset($node_data1->field_user[\'und\'][0][\'target_id\'])) {
        $user = user_load($node_data1->field_user[\'und\'][0][\'target_id\']);
        return $user->name;
    }
}
';
$handler->display->display_options['fields']['php_1']['use_php_click_sortable'] = '0';
$handler->display->display_options['fields']['php_1']['php_click_sortable'] = '';
/* 欄位: Global: Custom text */
$handler->display->display_options['fields']['nothing']['id'] = 'nothing';
$handler->display->display_options['fields']['nothing']['table'] = 'views';
$handler->display->display_options['fields']['nothing']['field'] = 'nothing';
$handler->display->display_options['fields']['nothing']['alter']['text'] = '[php_1]';
$handler->display->display_options['defaults']['arguments'] = FALSE;
$handler->display->display_options['defaults']['filter_groups'] = FALSE;
$handler->display->display_options['filter_groups']['operator'] = 'OR';
$handler->display->display_options['filter_groups']['groups'] = array(
    1 => 'AND',
    2 => 'AND',
);
$handler->display->display_options['defaults']['filters'] = FALSE;
/* Filter criterion: 內容: 類型 */
$handler->display->display_options['filters']['type']['id'] = 'type';
$handler->display->display_options['filters']['type']['table'] = 'node';
$handler->display->display_options['filters']['type']['field'] = 'type';
$handler->display->display_options['filters']['type']['value'] = array(
    'experience_serial' => 'experience_serial',
);
$handler->display->display_options['filters']['type']['group'] = 1;
/* Filter criterion: 內容: 類型 */
$handler->display->display_options['filters']['type_1']['id'] = 'type_1';
$handler->display->display_options['filters']['type_1']['table'] = 'node';
$handler->display->display_options['filters']['type_1']['field'] = 'type';
$handler->display->display_options['filters']['type_1']['relationship'] = 'field_experience_target_id';
$handler->display->display_options['filters']['type_1']['value'] = array(
    'coupon' => 'coupon',
);
$handler->display->display_options['filters']['type_1']['group'] = 1;
/* Filter criterion: 內容: 標題 */
$handler->display->display_options['filters']['title']['id'] = 'title';
$handler->display->display_options['filters']['title']['table'] = 'node';
$handler->display->display_options['filters']['title']['field'] = 'title';
$handler->display->display_options['filters']['title']['relationship'] = 'field_experience_target_id';
$handler->display->display_options['filters']['title']['group'] = 1;
$handler->display->display_options['filters']['title']['exposed'] = TRUE;
$handler->display->display_options['filters']['title']['expose']['operator_id'] = 'title_op';
$handler->display->display_options['filters']['title']['expose']['label'] = '折價券名稱';
$handler->display->display_options['filters']['title']['expose']['operator'] = 'title_op';
$handler->display->display_options['filters']['title']['expose']['identifier'] = 'title';
$handler->display->display_options['filters']['title']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    4 => 0,
    3 => 0,
    5 => 0,
    7 => 0,
);
/* Filter criterion: 內容: 標題 */
$handler->display->display_options['filters']['title_1']['id'] = 'title_1';
$handler->display->display_options['filters']['title_1']['table'] = 'node';
$handler->display->display_options['filters']['title_1']['field'] = 'title';
$handler->display->display_options['filters']['title_1']['group'] = 1;
$handler->display->display_options['filters']['title_1']['exposed'] = TRUE;
$handler->display->display_options['filters']['title_1']['expose']['operator_id'] = 'title_1_op';
$handler->display->display_options['filters']['title_1']['expose']['label'] = '序號';
$handler->display->display_options['filters']['title_1']['expose']['operator'] = 'title_1_op';
$handler->display->display_options['filters']['title_1']['expose']['identifier'] = 'title_1';
$handler->display->display_options['filters']['title_1']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    4 => 0,
    3 => 0,
    5 => 0,
    7 => 0,
);
/* Filter criterion: 內容: 折價券型態 (field_coupon_type) */
$handler->display->display_options['filters']['field_coupon_type_value']['id'] = 'field_coupon_type_value';
$handler->display->display_options['filters']['field_coupon_type_value']['table'] = 'field_data_field_coupon_type';
$handler->display->display_options['filters']['field_coupon_type_value']['field'] = 'field_coupon_type_value';
$handler->display->display_options['filters']['field_coupon_type_value']['relationship'] = 'field_experience_target_id';
$handler->display->display_options['filters']['field_coupon_type_value']['group'] = 1;
$handler->display->display_options['filters']['field_coupon_type_value']['exposed'] = TRUE;
$handler->display->display_options['filters']['field_coupon_type_value']['expose']['operator_id'] = 'field_coupon_type_value_op';
$handler->display->display_options['filters']['field_coupon_type_value']['expose']['label'] = '折價券型態';
$handler->display->display_options['filters']['field_coupon_type_value']['expose']['operator'] = 'field_coupon_type_value_op';
$handler->display->display_options['filters']['field_coupon_type_value']['expose']['identifier'] = 'field_coupon_type_value';
$handler->display->display_options['filters']['field_coupon_type_value']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    4 => 0,
    3 => 0,
    5 => 0,
    7 => 0,
);
/* Filter criterion: 內容: 已發表 */
$handler->display->display_options['filters']['status']['id'] = 'status';
$handler->display->display_options['filters']['status']['table'] = 'node';
$handler->display->display_options['filters']['status']['field'] = 'status';
$handler->display->display_options['filters']['status']['value'] = 'All';
$handler->display->display_options['filters']['status']['group'] = 1;
$handler->display->display_options['filters']['status']['exposed'] = TRUE;
$handler->display->display_options['filters']['status']['expose']['operator_id'] = '';
$handler->display->display_options['filters']['status']['expose']['label'] = '未兌換';
$handler->display->display_options['filters']['status']['expose']['operator'] = 'status_op';
$handler->display->display_options['filters']['status']['expose']['identifier'] = 'status';
$handler->display->display_options['filters']['status']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    4 => 0,
    3 => 0,
    5 => 0,
    7 => 0,
);
/* Filter criterion: Global: PHP */
$handler->display->display_options['filters']['php']['id'] = 'php';
$handler->display->display_options['filters']['php']['table'] = 'views';
$handler->display->display_options['filters']['php']['field'] = 'php';
$handler->display->display_options['filters']['php']['group'] = 1;
$handler->display->display_options['filters']['php']['use_php_setup'] = 0;
$handler->display->display_options['filters']['php']['php_filter'] = '
/**
 * 判斷一對一重複的序號
 * 一對多滿而不用判斷
 * 判斷重複序號
 *
 */
#判斷折價卷種類
$node_data = node_load($row->field_coupon_type);
#使用靜態資料暫存 以排除重複序號
if (!isset($static)) {              //避免錯誤訊息
    $static= new stdClass();
}
if (!isset($static->title)) {
    $static->title = array();
}
#一對一折價卷不能重複 所以將一對一兌換卷的序號存入
if ($node_data->field_coupon_type[\'und\'][0][\'value\'] == \'1\') {
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
if ($row->php_1 != null) {#有找出兌換的帳號
    if ($node_data->field_coupon_type[\'und\'][0][\'value\'] == \'1\' && $row->status == \'0\') {
        $node_data1 = node_load($row->field_user);
        if (isset($node_data1->field_user[\'und\'][0][\'target_id\'])) {
            $user = user_load($node_data1->field_user[\'und\'][0][\'target_id\']);
            ###保留一對一序號 本身序號欄位 shoplog資料 及計算出來的帳號一樣的序號
            if ($user->name == $row->php_1) {
                $node_data1 = node_load($row->field_user_1);
                if (isset($node_data1->field_user[\'und\'][0][\'target_id\'])) {
                    $user = user_load($node_data1->field_user[\'und\'][0][\'target_id\']);
                    if ($user->name == $row->php_1) {
                        #作為帳號搜尋使用
                        if (isset($_GET[\'combine\'])) {
                            if ($_GET[\'combine\'] == $row->php_1) {
                                return false;
                            }
                            return true;
                        }
                        return false;
                    } else {
                        return true;
                    }
                }
            } else {
                return true;
            }
        }
        ###
        #判斷若為一對多及滿額 以及計算出的帳號與訂閱帳號一致就保留 !!!可能可以刪除 筆記!!!
    } else if ($node_data->field_coupon_type[\'und\'][0][\'value\'] != \'1\') {
        $node_data1 = node_load($row->field_user_1);
        if (isset($node_data1->field_user[\'und\'][0][\'target_id\'])) {
            $user = user_load($node_data1->field_user[\'und\'][0][\'target_id\']);
            if ($user->name == $row->php_1) {
                #作為帳號搜尋使用
                if (isset($_GET[\'combine\'])) {
                    if ($_GET[\'combine\'] == $row->php_1) {
                        return false;
                    }
                    return true;
                }
                return false;
            } else {
                return true;
            }
        }
    }

}
#作為帳號搜尋使用
if (isset($_GET[\'combine\'])) {
    if ($_GET[\'combine\'] == $row->php_1) {
        return false;
    }
    return true;
}';
/* Filter criterion: Global: Combine fields filter */
$handler->display->display_options['filters']['combine']['id'] = 'combine';
$handler->display->display_options['filters']['combine']['table'] = 'views';
$handler->display->display_options['filters']['combine']['field'] = 'combine';
$handler->display->display_options['filters']['combine']['operator'] = 'allwords';
$handler->display->display_options['filters']['combine']['group'] = 2;
$handler->display->display_options['filters']['combine']['exposed'] = TRUE;
$handler->display->display_options['filters']['combine']['expose']['operator_id'] = 'combine_op';
$handler->display->display_options['filters']['combine']['expose']['label'] = '訂閱帳號';
$handler->display->display_options['filters']['combine']['expose']['operator'] = 'combine_op';
$handler->display->display_options['filters']['combine']['expose']['identifier'] = 'combine';
$handler->display->display_options['filters']['combine']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    4 => 0,
    3 => 0,
    5 => 0,
    7 => 0,
);
$handler->display->display_options['path'] = 'adm/coupon-serial-list';

/* Display: 折價券列表(下載用) */
$handler = $view->new_display('views_data_export', '折價券列表(下載用)', 'views_data_export_1');
$handler->display->display_options['pager']['type'] = 'none';
$handler->display->display_options['pager']['options']['offset'] = '0';
$handler->display->display_options['style_plugin'] = 'views_data_export_xls';
$handler->display->display_options['style_options']['provide_file'] = 1;
$handler->display->display_options['style_options']['parent_sort'] = 0;
$handler->display->display_options['defaults']['relationships'] = FALSE;
/* Relationship: Entity Reference: Referenced Entity */
$handler->display->display_options['relationships']['field_experience_target_id']['id'] = 'field_experience_target_id';
$handler->display->display_options['relationships']['field_experience_target_id']['table'] = 'field_data_field_experience';
$handler->display->display_options['relationships']['field_experience_target_id']['field'] = 'field_experience_target_id';
$handler->display->display_options['relationships']['field_experience_target_id']['label'] = 'entity referenced from field_experience';
/* Relationship: 內容: 作者 */
$handler->display->display_options['relationships']['uid']['id'] = 'uid';
$handler->display->display_options['relationships']['uid']['table'] = 'node';
$handler->display->display_options['relationships']['uid']['field'] = 'uid';
$handler->display->display_options['defaults']['fields'] = FALSE;
/* 欄位: 內容: 標題 */
$handler->display->display_options['fields']['title']['id'] = 'title';
$handler->display->display_options['fields']['title']['table'] = 'node';
$handler->display->display_options['fields']['title']['field'] = 'title';
$handler->display->display_options['fields']['title']['label'] = '序號';
$handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
$handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
$handler->display->display_options['fields']['title']['link_to_node'] = FALSE;
/* 欄位: 內容: 兌換券名稱 */
$handler->display->display_options['fields']['field_experience']['id'] = 'field_experience';
$handler->display->display_options['fields']['field_experience']['table'] = 'field_data_field_experience';
$handler->display->display_options['fields']['field_experience']['field'] = 'field_experience';
$handler->display->display_options['fields']['field_experience']['label'] = '折價券名稱';
$handler->display->display_options['fields']['field_experience']['settings'] = array(
    'bypass_access' => 0,
    'link' => 0,
    'field_formatter_class' => '',
);
/* 欄位: 內容: 折價券型態 */
$handler->display->display_options['fields']['field_coupon_type']['id'] = 'field_coupon_type';
$handler->display->display_options['fields']['field_coupon_type']['table'] = 'field_data_field_coupon_type';
$handler->display->display_options['fields']['field_coupon_type']['field'] = 'field_coupon_type';
$handler->display->display_options['fields']['field_coupon_type']['relationship'] = 'field_experience_target_id';
$handler->display->display_options['fields']['field_coupon_type']['settings'] = array(
    'field_formatter_class' => '',
);
/* 欄位: 內容: 已發表 */
$handler->display->display_options['fields']['status']['id'] = 'status';
$handler->display->display_options['fields']['status']['table'] = 'node';
$handler->display->display_options['fields']['status']['field'] = 'status';
$handler->display->display_options['fields']['status']['label'] = '狀態';
$handler->display->display_options['fields']['status']['type'] = 'custom';
$handler->display->display_options['fields']['status']['type_custom_true'] = '未兌換';
$handler->display->display_options['fields']['status']['type_custom_false'] = '已兌換';
$handler->display->display_options['fields']['status']['not'] = 0;
/* 欄位: 內容: Sticky */
$handler->display->display_options['fields']['sticky']['id'] = 'sticky';
$handler->display->display_options['fields']['sticky']['table'] = 'node';
$handler->display->display_options['fields']['sticky']['field'] = 'sticky';
$handler->display->display_options['fields']['sticky']['type'] = 'custom';
$handler->display->display_options['fields']['sticky']['type_custom_true'] = '已鎖定';
$handler->display->display_options['fields']['sticky']['type_custom_false'] = '未鎖定';
$handler->display->display_options['fields']['sticky']['not'] = 0;
/* 欄位: 內容: 訂閱帳號 */
$handler->display->display_options['fields']['field_user']['id'] = 'field_user';
$handler->display->display_options['fields']['field_user']['table'] = 'field_data_field_user';
$handler->display->display_options['fields']['field_user']['field'] = 'field_user';
$handler->display->display_options['fields']['field_user']['label'] = '兌換帳號';
$handler->display->display_options['fields']['field_user']['settings'] = array(
    'bypass_access' => 0,
    'link' => 0,
    'field_formatter_class' => '',
);
$handler->display->display_options['fields']['field_user']['delta_offset'] = '0';
$handler->display->display_options['defaults']['filter_groups'] = FALSE;
$handler->display->display_options['defaults']['filters'] = FALSE;
/* Filter criterion: 內容: 類型 */
$handler->display->display_options['filters']['type']['id'] = 'type';
$handler->display->display_options['filters']['type']['table'] = 'node';
$handler->display->display_options['filters']['type']['field'] = 'type';
$handler->display->display_options['filters']['type']['value'] = array(
    'experience_serial' => 'experience_serial',
);
$handler->display->display_options['filters']['type']['group'] = 1;
/* Filter criterion: 內容: 類型 */
$handler->display->display_options['filters']['type_1']['id'] = 'type_1';
$handler->display->display_options['filters']['type_1']['table'] = 'node';
$handler->display->display_options['filters']['type_1']['field'] = 'type';
$handler->display->display_options['filters']['type_1']['relationship'] = 'field_experience_target_id';
$handler->display->display_options['filters']['type_1']['value'] = array(
    'coupon' => 'coupon',
);
/* Filter criterion: 內容: 訂閱帳號 (field_user) */
$handler->display->display_options['filters']['field_user_target_id']['id'] = 'field_user_target_id';
$handler->display->display_options['filters']['field_user_target_id']['table'] = 'field_data_field_user';
$handler->display->display_options['filters']['field_user_target_id']['field'] = 'field_user_target_id';
$handler->display->display_options['filters']['field_user_target_id']['exposed'] = TRUE;
$handler->display->display_options['filters']['field_user_target_id']['expose']['operator_id'] = 'field_user_target_id_op';
$handler->display->display_options['filters']['field_user_target_id']['expose']['label'] = '兌換帳號';
$handler->display->display_options['filters']['field_user_target_id']['expose']['operator'] = 'field_user_target_id_op';
$handler->display->display_options['filters']['field_user_target_id']['expose']['identifier'] = 'field_user_target_id';
$handler->display->display_options['filters']['field_user_target_id']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    4 => 0,
    3 => 0,
    5 => 0,
    7 => 0,
);
/* Filter criterion: 內容: 標題 */
$handler->display->display_options['filters']['title']['id'] = 'title';
$handler->display->display_options['filters']['title']['table'] = 'node';
$handler->display->display_options['filters']['title']['field'] = 'title';
$handler->display->display_options['filters']['title']['relationship'] = 'field_experience_target_id';
$handler->display->display_options['filters']['title']['exposed'] = TRUE;
$handler->display->display_options['filters']['title']['expose']['operator_id'] = 'title_op';
$handler->display->display_options['filters']['title']['expose']['label'] = '折價券名稱';
$handler->display->display_options['filters']['title']['expose']['operator'] = 'title_op';
$handler->display->display_options['filters']['title']['expose']['identifier'] = 'title';
$handler->display->display_options['filters']['title']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    4 => 0,
    3 => 0,
    5 => 0,
    7 => 0,
);
/* Filter criterion: 內容: 標題 */
$handler->display->display_options['filters']['title_1']['id'] = 'title_1';
$handler->display->display_options['filters']['title_1']['table'] = 'node';
$handler->display->display_options['filters']['title_1']['field'] = 'title';
$handler->display->display_options['filters']['title_1']['exposed'] = TRUE;
$handler->display->display_options['filters']['title_1']['expose']['operator_id'] = 'title_1_op';
$handler->display->display_options['filters']['title_1']['expose']['label'] = '序號';
$handler->display->display_options['filters']['title_1']['expose']['operator'] = 'title_1_op';
$handler->display->display_options['filters']['title_1']['expose']['identifier'] = 'title_1';
$handler->display->display_options['filters']['title_1']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    4 => 0,
    3 => 0,
    5 => 0,
    7 => 0,
);
/* Filter criterion: 內容: 折價券型態 (field_coupon_type) */
$handler->display->display_options['filters']['field_coupon_type_value']['id'] = 'field_coupon_type_value';
$handler->display->display_options['filters']['field_coupon_type_value']['table'] = 'field_data_field_coupon_type';
$handler->display->display_options['filters']['field_coupon_type_value']['field'] = 'field_coupon_type_value';
$handler->display->display_options['filters']['field_coupon_type_value']['relationship'] = 'field_experience_target_id';
$handler->display->display_options['filters']['field_coupon_type_value']['exposed'] = TRUE;
$handler->display->display_options['filters']['field_coupon_type_value']['expose']['operator_id'] = 'field_coupon_type_value_op';
$handler->display->display_options['filters']['field_coupon_type_value']['expose']['label'] = '折價券型態';
$handler->display->display_options['filters']['field_coupon_type_value']['expose']['operator'] = 'field_coupon_type_value_op';
$handler->display->display_options['filters']['field_coupon_type_value']['expose']['identifier'] = 'field_coupon_type_value';
$handler->display->display_options['filters']['field_coupon_type_value']['expose']['remember_roles'] = array(
    2 => '2',
    1 => 0,
    4 => 0,
    3 => 0,
    5 => 0,
    7 => 0,
);
$handler->display->display_options['path'] = 'adm/coupon-serial-list/export';
$handler->display->display_options['displays'] = array(
    'page_1' => 'page_1',
    'default' => 0,
    'page' => 0,
);

/* Display: 一對多、滿額序號列表 */
$handler = $view->new_display('page', '一對多、滿額序號列表', 'page_2');
$handler->display->display_options['defaults']['group_by'] = FALSE;
$handler->display->display_options['defaults']['query'] = FALSE;
$handler->display->display_options['query']['type'] = 'views_query';
$handler->display->display_options['defaults']['style_plugin'] = FALSE;
$handler->display->display_options['style_plugin'] = 'table';
$handler->display->display_options['style_options']['columns'] = array(
    'title' => 'title',
    'field_experience' => 'field_experience',
    'field_coupon_type' => 'field_coupon_type',
    'field_user' => 'field_user',
    'status' => 'status',
    'sticky' => 'sticky',
    'nid' => 'nid',
    'php' => 'php',
);
$handler->display->display_options['style_options']['default'] = '-1';
$handler->display->display_options['style_options']['info'] = array(
    'title' => array(
        'sortable' => 0,
        'default_sort_order' => 'asc',
        'align' => '',
        'separator' => '',
        'empty_column' => 0,
    ),
    'field_experience' => array(
        'sortable' => 0,
        'default_sort_order' => 'asc',
        'align' => '',
        'separator' => '',
        'empty_column' => 0,
    ),
    'field_coupon_type' => array(
        'sortable' => 0,
        'default_sort_order' => 'asc',
        'align' => '',
        'separator' => '',
        'empty_column' => 0,
    ),
    'field_user' => array(
        'align' => '',
        'separator' => '',
        'empty_column' => 0,
    ),
    'status' => array(
        'sortable' => 0,
        'default_sort_order' => 'asc',
        'align' => '',
        'separator' => '',
        'empty_column' => 0,
    ),
    'sticky' => array(
        'sortable' => 0,
        'default_sort_order' => 'asc',
        'align' => '',
        'separator' => '',
        'empty_column' => 0,
    ),
    'nid' => array(
        'sortable' => 0,
        'default_sort_order' => 'asc',
        'align' => '',
        'separator' => '',
        'empty_column' => 0,
    ),
    'php' => array(
        'align' => '',
        'separator' => '',
        'empty_column' => 0,
    ),
);
$handler->display->display_options['defaults']['style_options'] = FALSE;
$handler->display->display_options['defaults']['row_plugin'] = FALSE;
$handler->display->display_options['defaults']['row_options'] = FALSE;
$handler->display->display_options['defaults']['relationships'] = FALSE;
/* Relationship: Entity Reference: Referenced Entity */
$handler->display->display_options['relationships']['field_experience_target_id']['id'] = 'field_experience_target_id';
$handler->display->display_options['relationships']['field_experience_target_id']['table'] = 'field_data_field_experience';
$handler->display->display_options['relationships']['field_experience_target_id']['field'] = 'field_experience_target_id';
$handler->display->display_options['relationships']['field_experience_target_id']['label'] = 'entity referenced from field_experience';
$handler->display->display_options['relationships']['field_experience_target_id']['required'] = TRUE;
/* Relationship: Entity Reference: Referencing entity */
$handler->display->display_options['relationships']['reverse_field_coupon_node']['id'] = 'reverse_field_coupon_node';
$handler->display->display_options['relationships']['reverse_field_coupon_node']['table'] = 'node';
$handler->display->display_options['relationships']['reverse_field_coupon_node']['field'] = 'reverse_field_coupon_node';
$handler->display->display_options['relationships']['reverse_field_coupon_node']['relationship'] = 'field_experience_target_id';
$handler->display->display_options['defaults']['fields'] = FALSE;
/* 欄位: 內容: 標題 */
$handler->display->display_options['fields']['title']['id'] = 'title';
$handler->display->display_options['fields']['title']['table'] = 'node';
$handler->display->display_options['fields']['title']['field'] = 'title';
$handler->display->display_options['fields']['title']['label'] = '序號';
$handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
$handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
$handler->display->display_options['fields']['title']['link_to_node'] = FALSE;
/* 欄位: 內容: 兌換券名稱 */
$handler->display->display_options['fields']['field_experience']['id'] = 'field_experience';
$handler->display->display_options['fields']['field_experience']['table'] = 'field_data_field_experience';
$handler->display->display_options['fields']['field_experience']['field'] = 'field_experience';
$handler->display->display_options['fields']['field_experience']['label'] = '折價券名稱';
$handler->display->display_options['fields']['field_experience']['settings'] = array(
    'bypass_access' => 0,
    'link' => 0,
    'field_formatter_class' => '',
);
/* 欄位: 內容: 折價券型態 */
$handler->display->display_options['fields']['field_coupon_type']['id'] = 'field_coupon_type';
$handler->display->display_options['fields']['field_coupon_type']['table'] = 'field_data_field_coupon_type';
$handler->display->display_options['fields']['field_coupon_type']['field'] = 'field_coupon_type';
$handler->display->display_options['fields']['field_coupon_type']['relationship'] = 'field_experience_target_id';
$handler->display->display_options['fields']['field_coupon_type']['settings'] = array(
    'field_formatter_class' => '',
);
/* 欄位: 內容: 已發表 */
$handler->display->display_options['fields']['status']['id'] = 'status';
$handler->display->display_options['fields']['status']['table'] = 'node';
$handler->display->display_options['fields']['status']['field'] = 'status';
$handler->display->display_options['fields']['status']['label'] = '狀態';
$handler->display->display_options['fields']['status']['type'] = 'custom';
$handler->display->display_options['fields']['status']['type_custom_true'] = '未兌換';
$handler->display->display_options['fields']['status']['type_custom_false'] = '已兌換';
$handler->display->display_options['fields']['status']['not'] = 0;
/* 欄位: 內容: Sticky */
$handler->display->display_options['fields']['sticky']['id'] = 'sticky';
$handler->display->display_options['fields']['sticky']['table'] = 'node';
$handler->display->display_options['fields']['sticky']['field'] = 'sticky';
$handler->display->display_options['fields']['sticky']['label'] = '';
$handler->display->display_options['fields']['sticky']['exclude'] = TRUE;
$handler->display->display_options['fields']['sticky']['element_label_colon'] = FALSE;
$handler->display->display_options['fields']['sticky']['type'] = 'boolean';
$handler->display->display_options['fields']['sticky']['not'] = 0;
/* 欄位: 內容: Nid */
$handler->display->display_options['fields']['nid']['id'] = 'nid';
$handler->display->display_options['fields']['nid']['table'] = 'node';
$handler->display->display_options['fields']['nid']['field'] = 'nid';
$handler->display->display_options['fields']['nid']['label'] = '';
$handler->display->display_options['fields']['nid']['exclude'] = TRUE;
$handler->display->display_options['fields']['nid']['element_label_colon'] = FALSE;
/* 欄位: Global: PHP */
$handler->display->display_options['fields']['php']['id'] = 'php';
$handler->display->display_options['fields']['php']['table'] = 'views';
$handler->display->display_options['fields']['php']['field'] = 'php';
$handler->display->display_options['fields']['php']['label'] = '序號鎖定';
$handler->display->display_options['fields']['php']['use_php_setup'] = 0;
$handler->display->display_options['fields']['php']['php_output'] = '<?php
if($row->sticky)  echo l("解除鎖定","explock/".$row->nid);
else echo l("序號鎖定","explock/".$row->nid);
?>';
$handler->display->display_options['fields']['php']['use_php_click_sortable'] = '0';
$handler->display->display_options['fields']['php']['php_click_sortable'] = '';
/* 欄位: 內容: 訂閱帳號 */
$handler->display->display_options['fields']['field_user']['id'] = 'field_user';
$handler->display->display_options['fields']['field_user']['table'] = 'field_data_field_user';
$handler->display->display_options['fields']['field_user']['field'] = 'field_user';
$handler->display->display_options['fields']['field_user']['relationship'] = 'reverse_field_coupon_node';
$handler->display->display_options['fields']['field_user']['settings'] = array(
    'bypass_access' => 0,
    'link' => 0,
    'field_formatter_class' => '',
);
$handler->display->display_options['fields']['field_user']['delta_offset'] = '0';
$handler->display->display_options['defaults']['arguments'] = FALSE;
$handler->display->display_options['defaults']['filter_groups'] = FALSE;
$handler->display->display_options['defaults']['filters'] = FALSE;
/* Filter criterion: 內容: 類型 */
$handler->display->display_options['filters']['type']['id'] = 'type';
$handler->display->display_options['filters']['type']['table'] = 'node';
$handler->display->display_options['filters']['type']['field'] = 'type';
$handler->display->display_options['filters']['type']['value'] = array(
    'experience_serial' => 'experience_serial',
);
$handler->display->display_options['filters']['type']['group'] = 1;
/* Filter criterion: 內容: 類型 */
$handler->display->display_options['filters']['type_1']['id'] = 'type_1';
$handler->display->display_options['filters']['type_1']['table'] = 'node';
$handler->display->display_options['filters']['type_1']['field'] = 'type';
$handler->display->display_options['filters']['type_1']['relationship'] = 'field_experience_target_id';
$handler->display->display_options['filters']['type_1']['value'] = array(
    'coupon' => 'coupon',
);
$handler->display->display_options['filters']['type_1']['group'] = 1;
/* Filter criterion: 內容: 折價券型態 (field_coupon_type) */
$handler->display->display_options['filters']['field_coupon_type_value_1']['id'] = 'field_coupon_type_value_1';
$handler->display->display_options['filters']['field_coupon_type_value_1']['table'] = 'field_data_field_coupon_type';
$handler->display->display_options['filters']['field_coupon_type_value_1']['field'] = 'field_coupon_type_value';
$handler->display->display_options['filters']['field_coupon_type_value_1']['relationship'] = 'field_experience_target_id';
$handler->display->display_options['filters']['field_coupon_type_value_1']['value'] = array(
    2 => '2',
    3 => '3',
);
$handler->display->display_options['filters']['field_coupon_type_value_1']['group'] = 1;
$handler->display->display_options['path'] = 'adm/coupon-serial-list1';
$translatables['coupon_list_view'] = array(
    t('Master'),
    t('折價券列表'),
    t('more'),
    t('Apply'),
    t('重設'),
    t('Sort by'),
    t('Asc'),
    t('Desc'),
    t('field collection item from field_packages'),
    t('序號'),
    t('折價券名稱'),
    t('折價券型態'),
    t('狀態'),
    t('Sticky'),
    t('兌換帳號'),
    t('未兌換'),
    t('Page'),
    t('field collection item from field_coupons'),
    t('author'),
    t('折價券來源'),
    t('所屬專案'),
    t('方案名稱'),
    t('單次訂閱時間'),
    t('方案售價'),
    t('申請使用數量'),
    t('已使用數量'),
    t('單帳號限制數量'),
    t('折抵金額'),
    t('結帳門檻'),
    t('折扣折數'),
    t('承擔比率(CP)'),
    t('承擔比率(SHE)'),
    t('生效期間'),
    t('建立者'),
    t('維護'),
    t('標題'),
    t('一對一序號列表'),
    t('entity referenced from field_experience'),
    t('內容 referencing 內容 from field_coupon'),
    t('已兌換'),
    t('序號鎖定'),
    t('訂閱帳號'),
    t('Custom text'),
    t('[php_1]'),
    t('折價券列表(下載用)'),
    t('已鎖定'),
    t('未鎖定'),
    t('一對多、滿額序號列表'),
);
