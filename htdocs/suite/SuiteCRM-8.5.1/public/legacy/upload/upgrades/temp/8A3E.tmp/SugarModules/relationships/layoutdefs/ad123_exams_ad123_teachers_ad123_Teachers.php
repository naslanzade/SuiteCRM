<?php
 // created: 2024-03-05 13:06:25
$layout_defs["ad123_Teachers"]["subpanel_setup"]['ad123_exams_ad123_teachers'] = array (
  'order' => 100,
  'module' => 'ad123_Exams',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_AD123_EXAMS_AD123_TEACHERS_FROM_AD123_EXAMS_TITLE',
  'get_subpanel_data' => 'ad123_exams_ad123_teachers',
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
