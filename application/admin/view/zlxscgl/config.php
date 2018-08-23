<?php

return array (
  'module' => 'admin',
  'menu' => 
  array (
    0 => 'add',
    1 => 'forbid',
    2 => 'resume',
    3 => 'delete',
    4 => 'recyclebin',
    5 => 'saveorder',
  ),
  'create_config' => true,
  'controller' => 'Zlxscgl',
  'title' => '',
  'form' => 
  array (
    0 => 
    array (
      'title' => '产品名称',
      'name' => 'zlxcpmc',
      'type' => 'select',
      'option' => '',
      'default' => '',
      'search_type' => 'text',
      'validate' => 
      array (
        'datatype' => '',
        'nullmsg' => '',
        'errormsg' => '',
      ),
    ),
    1 => 
    array (
      'title' => '食材1',
      'name' => 'zlxssc1',
      'type' => 'text',
      'option' => '',
      'default' => '',
      'search_type' => 'text',
      'validate' => 
      array (
        'datatype' => '',
        'nullmsg' => '',
        'errormsg' => '',
      ),
    ),
    2 => 
    array (
      'title' => '用量1',
      'name' => 'zlxsyl1',
      'type' => 'text',
      'option' => '',
      'default' => '',
      'search_type' => 'text',
      'validate' => 
      array (
        'datatype' => '',
        'nullmsg' => '',
        'errormsg' => '',
      ),
    ),
    5 => 
    array (
      'title' => '食材2',
      'name' => 'zlxssc2',
      'type' => 'text',
      'option' => '',
      'default' => '',
      'search_type' => 'text',
      'validate' => 
      array (
        'datatype' => '',
        'nullmsg' => '',
        'errormsg' => '',
      ),
    ),
    6 => 
    array (
      'title' => '用量2',
      'name' => 'zlxsyl2',
      'type' => 'text',
      'option' => '',
      'default' => '',
      'search_type' => 'text',
      'validate' => 
      array (
        'datatype' => '',
        'nullmsg' => '',
        'errormsg' => '',
      ),
    ),
    7 => 
    array (
      'title' => '食材3',
      'name' => 'zlxssc3',
      'type' => 'text',
      'option' => '',
      'default' => '',
      'search_type' => 'text',
      'validate' => 
      array (
        'datatype' => '',
        'nullmsg' => '',
        'errormsg' => '',
      ),
    ),
    8 => 
    array (
      'title' => '用量3',
      'name' => 'zlxsyl3',
      'type' => 'text',
      'option' => '',
      'default' => '',
      'search_type' => 'text',
      'validate' => 
      array (
        'datatype' => '',
        'nullmsg' => '',
        'errormsg' => '',
      ),
    ),
    9 => 
    array (
      'title' => '食材4',
      'name' => 'zlxssc4',
      'type' => 'text',
      'option' => '',
      'default' => '',
      'search_type' => 'text',
      'validate' => 
      array (
        'datatype' => '',
        'nullmsg' => '',
        'errormsg' => '',
      ),
    ),
    10 => 
    array (
      'title' => '用量4',
      'name' => 'zlxsyl4',
      'type' => 'text',
      'option' => '',
      'default' => '',
      'search_type' => 'text',
      'validate' => 
      array (
        'datatype' => '',
        'nullmsg' => '',
        'errormsg' => '',
      ),
    ),
    12 => 
    array (
      'title' => '食材5',
      'name' => 'zlxssc5',
      'type' => 'text',
      'option' => '',
      'default' => '',
      'search_type' => 'text',
      'validate' => 
      array (
        'datatype' => '',
        'nullmsg' => '',
        'errormsg' => '',
      ),
    ),
    11 => 
    array (
      'title' => '用量5',
      'name' => 'zlxsyl5',
      'type' => 'text',
      'option' => '',
      'default' => '',
      'search_type' => 'text',
      'validate' => 
      array (
        'datatype' => '',
        'nullmsg' => '',
        'errormsg' => '',
      ),
    ),
  ),
  'create_table' => '1',
  'table_engine' => 'InnoDB',
  'table_name' => '',
  'field' => 
  array (
    12 => 
    array (
      'name' => 'zlxcpmc',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '产品名称',
      'extra' => '',
    ),
    13 => 
    array (
      'name' => 'zlxssc1',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '食材1',
      'extra' => '',
    ),
    14 => 
    array (
      'name' => 'zlxsyl1',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '用量1',
      'extra' => '',
    ),
    15 => 
    array (
      'name' => 'zlxssc2',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '食材2',
      'extra' => '',
    ),
    16 => 
    array (
      'name' => 'zlxsyl2',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '用量2',
      'extra' => '',
    ),
    17 => 
    array (
      'name' => 'zlxssc3',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '食材3',
      'extra' => '',
    ),
    18 => 
    array (
      'name' => 'zlxsyl3',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '用量3',
      'extra' => '',
    ),
    19 => 
    array (
      'name' => 'zlxssc4',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '食材4',
      'extra' => '',
    ),
    20 => 
    array (
      'name' => 'zlxsyl4',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '用量4',
      'extra' => '',
    ),
    21 => 
    array (
      'name' => 'zlxssc5',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '食材5',
      'extra' => '',
    ),
    22 => 
    array (
      'name' => 'zlxsyl5',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '用量5',
      'extra' => '',
    ),
  ),
);
