<?php
/**
 * Created by PhpStorm.
 * User: UKA
 * Date: 2018/6/19
 * Time: 上午11:51
 */
#系統的
$serialized_object='a:7:{s:12:"entity_types";a:0:{}s:7:"indexes";a:0:{}s:8:"settings";a:6:{s:11:"granularity";a:6:{s:5:"month";s:5:"month";s:3:"day";s:3:"day";s:4:"year";s:4:"year";s:4:"hour";i:0;s:6:"minute";i:0;s:6:"second";i:0;}s:11:"tz_handling";s:4:"none";s:11:"timezone_db";s:0:"";s:13:"cache_enabled";i:1;s:11:"cache_count";s:1:"4";s:6:"todate";s:8:"optional";}s:12:"translatable";s:1:"0";s:7:"storage";a:5:{s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";s:1:"1";s:7:"details";a:1:{s:3:"sql";a:2:{s:18:"FIELD_LOAD_CURRENT";a:1:{s:27:"field_data_field_start_date";a:2:{s:5:"value";s:22:"field_start_date_value";s:6:"value2";s:23:"field_start_date_value2";}}s:19:"FIELD_LOAD_REVISION";a:1:{s:31:"field_revision_field_start_date";a:2:{s:5:"value";s:22:"field_start_date_value";s:6:"value2";s:23:"field_start_date_value2";}}}}}s:12:"foreign keys";a:0:{}s:2:"id";s:2:"11";}';
#自己的
$serialized_object1='a:6:{s:5:"label";s:16:"承擔比例(CP)";s:8:"required";b:1;s:8:"settings";a:5:{s:3:"min";s:0:"";s:3:"max";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:1:"%";s:18:"user_register_form";b:0;}s:6:"widget";a:4:{s:4:"type";s:14:"text_textfield";s:6:"module";s:4:"text";s:8:"settings";a:1:{s:4:"size";s:2:"20";}s:6:"weight";i:-2;}s:7:"display";a:1:{s:7:"default";a:5:{s:5:"label";s:5:"above";s:4:"type";s:14:"number_integer";s:8:"settings";a:4:{s:18:"thousand_separator";s:0:"";s:17:"decimal_separator";s:1:".";s:5:"scale";i:0;s:13:"prefix_suffix";b:1;}s:6:"module";s:6:"number";s:6:"weight";i:2;}}s:11:"description";s:0:"";}';

$sss='a:6:{s:12:"translatable";s:1:"0";s:7:"storage";a:5:{s:7:"details";a:1:{s:3:"sql";a:2:{s:18:"FIELD_LOAD_CURRENT";a:1:{s:37:"field_data_field_partner_percentage10";a:1:{s:5:"value";s:32:"field_partner_percentage10_value";}}s:19:"FIELD_LOAD_REVISION";a:1:{s:41:"field_revision_field_partner_percentage10";a:1:{s:5:"value";s:32:"field_partner_percentage10_value";}}}}s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";i:1;}s:12:"entity_types";a:0:{}s:8:"settings";a:0:{}s:12:"foreign keys";a:0:{}s:7:"indexes";a:0:{}}';
print_r(unserialize($serialized_object));
print_r('<br><br><br><br>');
//print_r(unserialize($serialized_object1));
