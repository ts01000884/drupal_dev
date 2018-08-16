<?php
/**
 * Created by PhpStorm.
 * User: UKA
 * Date: 2018/7/25
 * Time: 下午4:54
 */


$nid = $data->_field_data['nid']['entity']->field_ref_project['und'][0]['target_id'];
$query = new EntityFieldQuery();
    $query->entityCondition('entity_type', 'node')
        ->entityCondition('bundle', 'shoplog')
        ->fieldCondition('field_ref_project','target_id', $nid);
    $count = $query->count()->addMetaData('account', user_load(1))->execute();
?>
<div class="view view-project-earnd-money view-id-project_earnd_money view-display-id-block_2">
<div class="view-content">
        <div>
  <div>        <div class="t_pj-hot-people-buy"><?=$count?><em>人訂閱</em></div>  </div>  </div>
    </div>
</div>



<?php

$data->_field_data['nid']['entity']->field_ref_project['und'][0]['target_id'];



    ?>