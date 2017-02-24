<?php
$count = 0;
$parent = isset($parent) ? (integer) $parent : 3;
$classKey = 'msProduct';

if ($parent > 0) {
  $ids = $modx->getChildIds($parent, 10, array('context' => $modx->context->key));
  $count = $modx->getCount('msProduct',array(
      'deleted' => 0, 
      'published' => 1,
      'id:IN' => $ids,
      'class_key' => $classKey,
    ));
}
 
return (integer) $count;
