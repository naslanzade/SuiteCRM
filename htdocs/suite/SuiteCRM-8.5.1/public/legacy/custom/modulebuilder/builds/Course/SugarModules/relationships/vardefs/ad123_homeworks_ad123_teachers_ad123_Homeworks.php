<?php
// created: 2024-03-06 15:23:56
$dictionary["ad123_Homeworks"]["fields"]["ad123_homeworks_ad123_teachers"] = array (
  'name' => 'ad123_homeworks_ad123_teachers',
  'type' => 'link',
  'relationship' => 'ad123_homeworks_ad123_teachers',
  'source' => 'non-db',
  'module' => 'ad123_Teachers',
  'bean_name' => 'ad123_Teachers',
  'vname' => 'LBL_AD123_HOMEWORKS_AD123_TEACHERS_FROM_AD123_TEACHERS_TITLE',
  'id_name' => 'ad123_homeworks_ad123_teachersad123_teachers_ida',
);
$dictionary["ad123_Homeworks"]["fields"]["ad123_homeworks_ad123_teachers_name"] = array (
  'name' => 'ad123_homeworks_ad123_teachers_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AD123_HOMEWORKS_AD123_TEACHERS_FROM_AD123_TEACHERS_TITLE',
  'save' => true,
  'id_name' => 'ad123_homeworks_ad123_teachersad123_teachers_ida',
  'link' => 'ad123_homeworks_ad123_teachers',
  'table' => 'ad123_teachers',
  'module' => 'ad123_Teachers',
  'rname' => 'name',
);
$dictionary["ad123_Homeworks"]["fields"]["ad123_homeworks_ad123_teachersad123_teachers_ida"] = array (
  'name' => 'ad123_homeworks_ad123_teachersad123_teachers_ida',
  'type' => 'link',
  'relationship' => 'ad123_homeworks_ad123_teachers',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AD123_HOMEWORKS_AD123_TEACHERS_FROM_AD123_HOMEWORKS_TITLE',
);
