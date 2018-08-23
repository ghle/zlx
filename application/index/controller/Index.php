<?php
namespace app\index\controller;

use app\admin\Controller;


class Index extends  Controller
{

        public function  zlxtjw()
    {
          $res=   db('zlxcpgl')->select();

       dump($res);
    }


}
