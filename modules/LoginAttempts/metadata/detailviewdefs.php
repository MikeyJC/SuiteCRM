<?php
$module_name = 'LoginAttempts';
$viewdefs [$module_name] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'username',
            'label' => 'LBL_USERNAME',
          ),
          1 => 
          array (
            'name' => 'record_user_id',
            'label' => 'LBL_RECORD_USER_ID',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'ip_address',
            'label' => 'LBL_IP_ADDRESS',
          ),
          1 => 
          array (
            'name' => 'success',
            'label' => 'LBL_SUCCESS',
          ),
        ),
        3 => 
        array (
          0 => 'description',
        ),
        4 => 
        array (
          0 => 'date_entered',
          1 => '',
        ),
      ),
    ),
  ),
);
?>