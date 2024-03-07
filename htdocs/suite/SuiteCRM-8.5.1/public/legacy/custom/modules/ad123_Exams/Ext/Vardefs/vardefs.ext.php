<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2024-03-06 15:29:55
$dictionary["ad123_Exams"]["fields"]["ad123_students_ad123_exams"] = array (
  'name' => 'ad123_students_ad123_exams',
  'type' => 'link',
  'relationship' => 'ad123_students_ad123_exams',
  'source' => 'non-db',
  'module' => 'ad123_Students',
  'bean_name' => 'ad123_Students',
  'vname' => 'LBL_AD123_STUDENTS_AD123_EXAMS_FROM_AD123_STUDENTS_TITLE',
);


// created: 2024-03-06 15:29:55
$dictionary["ad123_Exams"]["fields"]["ad123_teachers_ad123_exams"] = array (
  'name' => 'ad123_teachers_ad123_exams',
  'type' => 'link',
  'relationship' => 'ad123_teachers_ad123_exams',
  'source' => 'non-db',
  'module' => 'ad123_Teachers',
  'bean_name' => 'ad123_Teachers',
  'vname' => 'LBL_AD123_TEACHERS_AD123_EXAMS_FROM_AD123_TEACHERS_TITLE',
  'id_name' => 'ad123_teachers_ad123_examsad123_teachers_ida',
);
$dictionary["ad123_Exams"]["fields"]["ad123_teachers_ad123_exams_name"] = array (
  'name' => 'ad123_teachers_ad123_exams_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AD123_TEACHERS_AD123_EXAMS_FROM_AD123_TEACHERS_TITLE',
  'save' => true,
  'id_name' => 'ad123_teachers_ad123_examsad123_teachers_ida',
  'link' => 'ad123_teachers_ad123_exams',
  'table' => 'ad123_teachers',
  'module' => 'ad123_Teachers',
  'rname' => 'name',
);
$dictionary["ad123_Exams"]["fields"]["ad123_teachers_ad123_examsad123_teachers_ida"] = array (
  'name' => 'ad123_teachers_ad123_examsad123_teachers_ida',
  'type' => 'link',
  'relationship' => 'ad123_teachers_ad123_exams',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AD123_TEACHERS_AD123_EXAMS_FROM_AD123_EXAMS_TITLE',
);

?>