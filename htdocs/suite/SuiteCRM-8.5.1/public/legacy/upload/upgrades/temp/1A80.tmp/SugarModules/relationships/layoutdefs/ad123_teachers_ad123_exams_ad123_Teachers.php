<?php
 // created: 2024-03-05 12:52:58
$layout_defs["ad123_Teachers"]["subpanel_setup"]['ad123_teachers_ad123_exams'] = array (
  'order' => 100,
  'module' => 'ad123_Exams',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_AD123_TEACHERS_AD123_EXAMS_FROM_AD123_EXAMS_TITLE',
  'get_subpanel_data' => 'ad123_teachers_ad123_exams',
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
