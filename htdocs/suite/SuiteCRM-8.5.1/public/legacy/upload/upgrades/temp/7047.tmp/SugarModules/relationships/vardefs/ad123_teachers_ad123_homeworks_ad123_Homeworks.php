<?php
// created: 2024-03-05 12:59:28
$dictionary["ad123_Homeworks"]["fields"]["ad123_teachers_ad123_homeworks"] = array (
  'name' => 'ad123_teachers_ad123_homeworks',
  'type' => 'link',
  'relationship' => 'ad123_teachers_ad123_homeworks',
  'source' => 'non-db',
  'module' => 'ad123_Teachers',
  'bean_name' => 'ad123_Teachers',
  'vname' => 'LBL_AD123_TEACHERS_AD123_HOMEWORKS_FROM_AD123_TEACHERS_TITLE',
  'id_name' => 'ad123_teachers_ad123_homeworksad123_teachers_ida',
);
$dictionary["ad123_Homeworks"]["fields"]["ad123_teachers_ad123_homeworks_name"] = array (
  'name' => 'ad123_teachers_ad123_homeworks_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AD123_TEACHERS_AD123_HOMEWORKS_FROM_AD123_TEACHERS_TITLE',
  'save' => true,
  'id_name' => 'ad123_teachers_ad123_homeworksad123_teachers_ida',
  'link' => 'ad123_teachers_ad123_homeworks',
  'table' => 'ad123_teachers',
  'module' => 'ad123_Teachers',
  'rname' => 'name',
);
$dictionary["ad123_Homeworks"]["fields"]["ad123_teachers_ad123_homeworksad123_teachers_ida"] = array (
  'name' => 'ad123_teachers_ad123_homeworksad123_teachers_ida',
  'type' => 'link',
  'relationship' => 'ad123_teachers_ad123_homeworks',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AD123_TEACHERS_AD123_HOMEWORKS_FROM_AD123_HOMEWORKS_TITLE',
);
