<?php
 // created: 2024-03-05 12:56:16
$layout_defs["ad123_Students"]["subpanel_setup"]['ad123_students_ad123_exams'] = array (
  'order' => 100,
  'module' => 'ad123_Exams',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_AD123_STUDENTS_AD123_EXAMS_FROM_AD123_EXAMS_TITLE',
  'get_subpanel_data' => 'ad123_students_ad123_exams',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
