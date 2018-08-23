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
  'controller' => 'Zlxfl',
  'title' => '',
  'form' => 
  array (
    2 => 
    array (
      'title' => '父分类Id',
      'name' => 'pid',
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
    0 => 
    array (
      'title' => '父级分类名称',
      'name' => 'zlxflmc',
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
      'name' => 'pid',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '父分类Id',
      'extra' => '',
    ),
    2 => 
    array (
      'name' => 'zlxflmc',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '父级分类名称',
      'extra' => '',
    ),
  ),
);
