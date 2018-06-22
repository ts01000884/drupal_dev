<?php
/**
 * Created by PhpStorm.
 * User: UKA
 * Date: 2018/6/19
 * Time: 上午11:51
 */
#系統的
$serialized_object='a:7:{s:5:"label";s:6:"描述";s:6:"widget";a:5:{s:6:"weight";s:2:"10";s:4:"type";s:26:"text_textarea_with_summary";s:6:"module";s:4:"text";s:6:"active";i:1;s:8:"settings";a:2:{s:4:"rows";s:1:"5";s:12:"summary_rows";i:5;}}s:8:"settings";a:3:{s:15:"text_processing";s:1:"0";s:15:"display_summary";i:0;s:18:"user_register_form";b:0;}s:7:"display";a:2:{s:7:"default";a:5:{s:5:"label";s:6:"hidden";s:4:"type";s:12:"text_default";s:8:"settings";a:1:{s:21:"field_formatter_class";s:0:"";}s:6:"module";s:4:"text";s:6:"weight";i:0;}s:6:"teaser";a:5:{s:5:"label";s:6:"hidden";s:4:"type";s:23:"text_summary_or_trimmed";s:8:"settings";a:2:{s:11:"trim_length";i:600;s:21:"field_formatter_class";s:0:"";}s:6:"module";s:4:"text";s:6:"weight";i:0;}}s:8:"required";i:0;s:11:"description";s:0:"";s:13:"default_value";N;}';
#自己的
$serialized_object1='a:7:{s:5:"label";s:6:"描述";s:6:"widget";a:5:{s:6:"weight";s:2:"10";s:4:"type";s:26:"text_textarea_with_summary";s:6:"module";s:4:"text";s:6:"active";i:1;s:8:"settings";a:2:{s:4:"rows";s:1:"5";s:12:"summary_rows";i:5;}}s:8:"settings";a:3:{s:15:"text_processing";s:1:"0";s:15:"display_summary";i:0;s:18:"user_register_form";b:0;}s:7:"display";a:2:{s:7:"default";a:5:{s:5:"label";s:6:"hidden";s:4:"type";s:12:"text_default";s:8:"settings";a:1:{s:21:"field_formatter_class";s:0:"";}s:6:"module";s:4:"text";s:6:"weight";i:0;}s:6:"teaser";a:5:{s:5:"label";s:6:"hidden";s:4:"type";s:23:"text_summary_or_trimmed";s:8:"settings";a:2:{s:11:"trim_length";i:600;s:21:"field_formatter_class";s:0:"";}s:6:"module";s:4:"text";s:6:"weight";i:0;}}s:8:"required";i:0;s:11:"description";s:0:"";s:13:"default_value";N;}';

$sss='a:6:{s:12:"translatable";s:1:"0";s:7:"storage";a:5:{s:7:"details";a:1:{s:3:"sql";a:2:{s:18:"FIELD_LOAD_CURRENT";a:1:{s:37:"field_data_field_partner_percentage10";a:1:{s:5:"value";s:32:"field_partner_percentage10_value";}}s:19:"FIELD_LOAD_REVISION";a:1:{s:41:"field_revision_field_partner_percentage10";a:1:{s:5:"value";s:32:"field_partner_percentage10_value";}}}}s:4:"type";s:17:"field_sql_storage";s:8:"settings";a:0:{}s:6:"module";s:17:"field_sql_storage";s:6:"active";i:1;}s:12:"entity_types";a:0:{}s:8:"settings";a:0:{}s:12:"foreign keys";a:0:{}s:7:"indexes";a:0:{}}';
print_r(unserialize($serialized_object));
print_r('<br><br><br><br>');
print_r(unserialize($serialized_object1));
