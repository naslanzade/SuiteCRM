<?php
// created: 2024-03-05 12:34:15
$dictionary["ad123_students_ad123_homeworks"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'ad123_students_ad123_homeworks' => 
    array (
      'lhs_module' => 'ad123_Students',
      'lhs_table' => 'ad123_students',
      'lhs_key' => 'id',
      'rhs_module' => 'ad123_Homeworks',
      'rhs_table' => 'ad123_homeworks',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'ad123_students_ad123_homeworks_c',
      'join_key_lhs' => 'ad123_students_ad123_homeworksad123_students_ida',
      'join_key_rhs' => 'ad123_students_ad123_homeworksad123_homeworks_idb',
    ),
  ),
  'table' => 'ad123_students_ad123_homeworks_c',
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
      'name' => 'ad123_students_ad123_homeworksad123_students_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'ad123_students_ad123_homeworksad123_homeworks_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'ad123_students_ad123_homeworksspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'ad123_students_ad123_homeworks_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'ad123_students_ad123_homeworksad123_students_ida',
        1 => 'ad123_students_ad123_homeworksad123_homeworks_idb',
      ),
    ),
  ),
);