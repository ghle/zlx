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
  'controller' => 'Zlxcplb',
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
      'title' => '发布作者',
      'name' => 'zlxfbr',
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
      'title' => '点赞数',
      'name' => 'zlxdzs',
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
    3 => 
    array (
      'title' => '收藏数',
      'name' => 'zlxscs',
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
    4 => 
    array (
      'title' => '简述',
      'name' => 'zlxjs',
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
      'title' => '烹饪难度',
      'name' => 'zlxnd',
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
      'title' => '烹饪时间',
      'name' => 'zlxsj',
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
      'title' => '头部图片',
      'name' => 'zlxtbtp',
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
    9 => 
    array (
      'name' => 'zlxcpmc',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '产品名称',
      'extra' => '',
    ),
    10 => 
    array (
      'name' => 'zlxfbr',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '发布作者',
      'extra' => '',
    ),
    11 => 
    array (
      'name' => 'zlxdzs',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '点赞数',
      'extra' => '',
    ),
    12 => 
    array (
      'name' => 'zlxscs',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '收藏数',
      'extra' => '',
    ),
    13 => 
    array (
      'name' => 'zlxjs',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '简述',
      'extra' => '',
    ),
    14 => 
    array (
      'name' => 'zlxnd',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '烹饪难度',
      'extra' => '',
    ),
    15 => 
    array (
      'name' => 'zlxsj',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '烹饪时间',
      'extra' => '',
    ),
    16 => 
    array (
      'name' => 'zlxtbtp',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '头部图片',
      'extra' => '',
    ),
  ),
);
