<?php
 // created: 2024-03-06 15:23:56
$layout_defs["ad123_Homeworks"]["subpanel_setup"]['ad123_homeworks_ad123_students'] = array (
  'order' => 100,
  'module' => 'ad123_Students',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_AD123_HOMEWORKS_AD123_STUDENTS_FROM_AD123_STUDENTS_TITLE',
  'get_subpanel_data' => 'ad123_homeworks_ad123_students',
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