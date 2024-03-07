<?php
// created: 2024-03-06 15:29:55
$dictionary["ad123_teachers_ad123_exams"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'ad123_teachers_ad123_exams' => 
    array (
      'lhs_module' => 'ad123_Teachers',
      'lhs_table' => 'ad123_teachers',
      'lhs_key' => 'id',
      'rhs_module' => 'ad123_Exams',
      'rhs_table' => 'ad123_exams',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ad123_teachers_ad123_exams_c',
      'join_key_lhs' => 'ad123_teachers_ad123_examsad123_teachers_ida',
      'join_key_rhs' => 'ad123_teachers_ad123_examsad123_exams_idb',
    ),
  ),
  'table' => 'ad123_teachers_ad123_exams_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'ad123_teachers_ad123_examsad123_teachers_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ad123_teachers_ad123_examsad123_exams_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ad123_teachers_ad123_examsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ad123_teachers_ad123_exams_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'ad123_teachers_ad123_examsad123_teachers_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'ad123_teachers_ad123_exams_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'ad123_teachers_ad123_examsad123_exams_idb',
      ),
    ),
  ),
);