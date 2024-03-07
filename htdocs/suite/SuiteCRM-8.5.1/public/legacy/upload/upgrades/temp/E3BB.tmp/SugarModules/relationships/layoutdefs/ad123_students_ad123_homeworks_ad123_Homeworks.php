<?php
 // created: 2024-03-05 12:31:07
$layout_defs["ad123_Homeworks"]["subpanel_setup"]['ad123_students_ad123_homeworks'] = array (
  'order' => 100,
  'module' => 'ad123_Students',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_AD123_STUDENTS_AD123_HOMEWORKS_FROM_AD123_STUDENTS_TITLE',
  'get_subpanel_data' => 'ad123_students_ad123_homeworks',
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
