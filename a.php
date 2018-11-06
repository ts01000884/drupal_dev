<?php

$node=node_load($row->nid);

$shop_log_created=$node->created;
dpm($shop_log_created);

#是否有折價券
#承擔比率(CP)
$coupon_field_partner_percentage='NaN';
if(isset($node->field_coupon['und']['0']['target_id'])){
    $coupon=node_load($node->field_coupon['und']['0']['target_id']);
    $coupon_field_partner_percentage=$coupon->field_partner_percentage['und']['0']['value'];
}

#撈出專案
$project=node_load($node->field_ref_project['und']['0']['target_id']);
$query = new EntityFieldQuery();
$query->entityCondition('entity_type', 'node')
    ->entityCondition('bundle', 'contract')
    ->fieldCondition('field_ref_project', 'target_id', $project->nid, "=");
$rs = $query->execute();
$project_contract_ids=array_keys($rs['node']);

#專案拆分比(行銷網址)
$project_contract_promotion_yes='NaN';
#專案拆分比(非行銷網址)
$project_contract_promotion_no='NaN';

#01/01/2016
$created_time=1451606400;
foreach ($project_contract_ids as $v){
    $n=node_load($v);

    if($n->field_start_date['und']['0']['value']<=$shop_log_created){
        #沒有結束時間的合約
        if($n->field_start_date['und']['0']['value']==$n->field_start_date['und']['0']['value2']){
            if($created_time <= $n->created){
                $project_contract_promotion_yes=$n->field_promotion_yes['und']['0']['value'];
                $project_contract_promotion_no=$n->field_promotion_no['und']['0']['value'];
                $created_time=$n->created;
            }

            #有結束時間的合約
        }elseif($n->field_start_date['und']['0']['value2']>=$shop_log_created){
            if($created_time <= $n->created){
                $project_contract_promotion_yes=$n->field_promotion_yes['und']['0']['value'];
                $project_contract_promotion_no=$n->field_promotion_no['und']['0']['value'];
                $created_time=$n->created;
            }
        }
    }
}
#表示都過期
if($project_contract_promotion_yes=='NaN'){
    foreach ($project_contract_ids as $v){
        $n=node_load($v);
        if($n->field_start_date['und']['0']['value']<=$shop_log_created){
            #沒有結束時間的合約
            if($n->field_start_date['und']['0']['value']==$n->field_start_date['und']['0']['value2']){
                if($created_time <= $n->created){
                    $project_contract_promotion_yes=$n->field_promotion_yes['und']['0']['value'];
                    $project_contract_promotion_no=$n->field_promotion_no['und']['0']['value'];
                    $created_time=$n->created;
                }

                #有結束時間的合約
            }else{
                if($created_time <= $n->created){
                    $project_contract_promotion_yes=$n->field_promotion_yes['und']['0']['value'];
                    $project_contract_promotion_no=$n->field_promotion_no['und']['0']['value'];
                    $created_time=$n->created;
                }
            }
        }
    }
}



#方案拆分比(行銷網址)
$field_promotion_yes='NaN';
#方案拆分比(非行銷網址)
$field_partner_percentage='NaN';
#撈出方案
$package=node_load($node->field_group_ref['und']['0']['target_id']);
#撈出方案中的field_collection
$package_field_packages=entity_load('field_collection_item', array($package->field_packages['und']['0']['value']));
$field_collection_id=$package->field_packages['und']['0']['value'];


if(isset($package_field_packages[$field_collection_id]->field_apply_date['und']['0']['value'])){
    #時間沒有期限
    if($package_field_packages[$field_collection_id]->field_apply_date['und']['0']['value']==$package_field_packages[$field_collection_id]->field_apply_date['und']['0']['value2']){
        if ($package_field_packages[$field_collection_id]->field_apply_date['und']['0']['value'] <= $shop_log_created) {
            #方案拆分比(行銷網址)  field_promotion_yes
            if(isset($package_field_packages[$field_collection_id]->field_promotion_yes['und']['0']['value'])){
                $field_promotion_yes=$package_field_packages[$field_collection_id]->field_promotion_yes['und']['0']['value'];
            }


            #方案拆分比(非行銷網址)	field_partner_percentage
            if(isset($package_field_packages[$field_collection_id]->field_partner_percentage['und']['0']['value'])){
                $field_partner_percentage=$package_field_packages[$field_collection_id]->field_partner_percentage['und']['0']['value'];
            }
        }
    }
    else{
        if (($package_field_packages[$field_collection_id]->field_apply_date['und']['0']['value'] <= $shop_log_created) &&($package_field_packages[$field_collection_id]->field_apply_date['und']['0']['value2'] >= $shop_log_created)) {
            #方案拆分比(行銷網址)  field_promotion_yes
            if(isset($package_field_packages[$field_collection_id]->field_promotion_yes['und']['0']['value'])){
                $field_promotion_yes=$package_field_packages[$field_collection_id]->field_promotion_yes['und']['0']['value'];
            }

            #方案拆分比(非行銷網址)	field_partner_percentage
            if(isset($package_field_packages[$field_collection_id]->field_partner_percentage['und']['0']['value'])){
                $field_partner_percentage=$package_field_packages[$field_collection_id]->field_partner_percentage['und']['0']['value'];
            }
        }
    }
}


echo "$coupon_field_partner_percentage/"."$project_contract_promotion_yes/"."$project_contract_promotion_no/"."$field_promotion_yes/"."$field_partner_percentage";

?>