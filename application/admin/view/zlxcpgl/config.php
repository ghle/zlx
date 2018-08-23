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
  'controller' => 'Zlxcpgl',
  'title' => '',
  'form' => 
  array (
    0 => 
    array (
      'title' => '产品名称',
      'name' => 'zlxcpmc',
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
      'name' => 'zlxslt',
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
      'name' => 'zlxcpmc',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '产品名称',
      'extra' => '',
    ),
    2 => 
    array (
      'name' => 'zlxslt',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '缩略图',
      'extra' => '',
    ),
  ),
);
