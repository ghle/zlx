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
  'controller' => 'Zlxsfl',
  'title' => '',
  'form' => 
  array (
    0 => 
    array (
      'title' => '子级分类id',
      'name' => 'zlxsflid',
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
      'title' => '子级分类名称',
      'name' => 'zlxsflmc',
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
      'title' => '父级分类',
      'name' => 'zlxpid',
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
  ),
  'create_table' => '1',
  'table_engine' => 'InnoDB',
  'table_name' => '',
  'field' => 
  array (
    4 => 
    array (
      'name' => 'zlxsflid',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '子级分类id',
      'extra' => '',
    ),
    5 => 
    array (
      'name' => 'zlxsflmc',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '子级分类名称',
      'extra' => '',
    ),
    6 => 
    array (
      'name' => 'zlxpid',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '父级分类',
      'extra' => '',
    ),
  ),
);
