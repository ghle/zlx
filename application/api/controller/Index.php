<?php
namespace app\api\controller;

use app\api\lib\ApiException;
use think\Controller;
use think\Exception;

class Index extends  Controller
{
    /**
     * 首页推荐位接口数据
     * @return \think\response\Json
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
        public function  zlxtjw()
    {

          $res=   db('zlxcpgl')->limit(6)->order('id desc ')->select();
          if (!$res)
          {
                throw  new  ApiException('数据异常',500);
          }

            return return_json(2000,'首页推荐位数据',$res,200);
    }

    /**
     * 首页轮播图接口
     * @return \think\response\Json
     * @throws ApiException
     */
    public function  zlxlbt()
    {

        $res=   db('zlxbanner')->limit(3)->order('id desc ')->field('zlxban,ids')->select();
        if (!$res)
        {
            throw  new  ApiException('数据异常',500);
        }

        return return_json(2000,'首页轮播图数据',$res,200);
    }

    /******************** 1、用户文章或者商品  2、  用户文章或者商品关系表      ************************/

    /**
     * 点赞接口
     * @return \think\response\Json
     * @throws ApiException
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public  function yhdz(){

//       验证参数  产品的id
            $param=input('post.');
            if(empty($param)){
                throw  new ApiException('数据异常',500);
            }
            $data=[
                $userid=’用户id’,
                $id=$param['id'],
            ];
            $res=db('产品')->where($data)->find();

            if ($res){
               return  return_json(4000,'您已经点赞无需再次操作');
            }

            try{
                $ers=db('产品和用户的关系表')->insert($data);
                if ($ers){
                    $r=db('文章或者产品表')->where('')->setInc('记录点赞数的数据库字段');
                    return return_json(2000,'点赞成功',$r);
                }
            }catch (\Exception $e){
                throw new  ApiException($e->getMessage(),500);
            }



    }

    /**
     * 取消点赞接口
     * @return \think\response\Json
     * @throws ApiException
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public  function  qxdz(){

//       验证参数  产品的id
        $param=input('post.');
        if(empty($param)){
            throw  new ApiException('数据异常',500);
        }
        $data=[
            $userid=’用户id’,
            $id=$param['id'],
        ];
        $res=db('产品')->where($data)->find();

        if ($res){
            return  return_json(4000,'没有点赞无需处理');
        }

        try{
            $ers=db('产品和用户的关系表')->where($data)->delete();
            if ($ers){
                $r=db('文章或者产品表')->where('文章id')->setDec('记录点赞数的数据库字段');
                return return_json(2000,'取消点赞成功',$r);
            }else{
                return return_json(2000,'取消点赞失败');
            }
        }catch (\Exception $e){
            throw new  ApiException($e->getMessage(),500);
        }

    }

    /**
     * 查看文章是否点赞
     * @return \think\response\Json
     * @throws ApiException
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function  tfdz(){
        $id=input('post.id');
        if (empty($id)){
            throw  new ApiException('数据不鞥为空',500,5000);
        }

        $atf=db('文章或者商品表')->where(['id'=>$id])->find();
        if (!$atf){
            return  return_json(2000,'该产品不存在',['isdz'=>1]);
        }
        $dat=[
            'userid'=>'用户id',
            'id'=>$id,
        ];
             $tf=db('用户和文章关系表')->where($dat)->find();
            if ($tf){
              return  return_json(2000,'已经点赞过',['isdz'=>1]);
            }else{
                return return_json(2000,'已经点赞过',['isdz'=>0]);
            }

    }

    
}
