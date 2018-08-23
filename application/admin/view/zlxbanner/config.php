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
  'controller' => 'Zlxbanner',
  'title' => '',
  'form' => 
  array (
    0 => 
    array (
      'title' => '序号',
      'name' => 'ids',
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
    1 => 
    array (
      'title' => '缩略图',
      'name' => 'zlxban',
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
    1 => 
    array (
      'name' => 'ids',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '序号',
      'extra' => '',
    ),
    2 => 
    array (
      'name' => 'zlxban',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '缩略图',
      'extra' => '',
    ),
  ),
);
