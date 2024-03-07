<?php
 // created: 2024-03-05 12:59:28
$layout_defs["ad123_Teachers"]["subpanel_setup"]['ad123_teachers_ad123_homeworks'] = array (
  'order' => 100,
  'module' => 'ad123_Homeworks',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_AD123_TEACHERS_AD123_HOMEWORKS_FROM_AD123_HOMEWORKS_TITLE',
  'get_subpanel_data' => 'ad123_teachers_ad123_homeworks',
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
