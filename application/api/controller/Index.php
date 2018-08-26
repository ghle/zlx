<?php
namespace app\api\controller;
use app\api\lib\exception\ApiException;
use think\Controller;
use app\api\server\WxToken;
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

          $res=   db('zlxcplb')->limit(6)->order('id asc ')->where(['status'=>1,'isdelete'=>0])->select();
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

        $res=   db('zlxbanner')->limit(3)->order('id asc ')->select();
        if (!$res)
        {
            throw  new  ApiException('数据异常',500);
        }

        return return_json(2000,'首页轮播图数据',$res,200);
    }

    /**
     * 分类
     * @return \think\response\Json
     * @throws ApiException
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public  function  zlxsfl(){

        $res=   db('zlxsfl')->order('id desc ')->select();
        if (!$res)
        {
            throw  new  ApiException('数据异常',500);
        }

        return return_json(2000,'分类数据成功返回啦',$res,200);
    }

    /**
     * 搜索接口
     * @return mixed
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function zlxsearch()
    {
        $param=input('post.');

        if(empty($param['zlxcpmc'])){
            throw  new  ApiException('数据异常',500);
        }

        $res=db('zlxcplb')
//                ->field('zlxcpmc,zlxfbr,zlxscs,zlxdzs,zlxtbtp')
                ->where(['zlxcpmc'=>['like',"%".trim($param["zlxcpmc"])."%"]])->where(['status'=>1,'isdelete'=>0])->select();

        if ($res) {

            return return_json(2000,'分类数据成功返回啦',$res,200);

        }else{

            return return_json(2000,'没有数据啦',$res,200);
        }

    }

    /**
     * 详情页接口
     * @return \think\response\Json
     * @throws ApiException
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function  zlxxqy(){
        $param=input('post.');
        $id=$param['id'];
        if (empty($id)){
            throw  new  ApiException('数据异常',500);
        }

        $res=db('zlxcplb')
                    ->where(['id'=>$id])
                    ->select();

        $bz=db('zlxcpbz')->field('zlxstep1,zlxstep2,zlxstep3,zlxstep4,zlxstep5')
                    ->where(['zlxcpmc'=>$id])
                    ->select();

        $sc=db('zlxscgl')
            ->where(['zlxcpmc'=>$id])
            ->select();

        $scs=[];

        foreach ($sc  as $key=>$value){

            for ($k=1;$k<=5;$k++){
                    $scs[]=[
                        'zlxsyl'=>$sc[$key]['zlxsyl'.$k],
                        'zlxssc'=>$sc[$key]['zlxssc'.$k]
                    ];
            }
        }

        $res['wayListArr']=$bz;

        $res['materialListArr']=$scs;

        if ($res) {

            return return_json(2000,'数据成功返回啦',$res,200);

        }else{

            return return_json(2000,'没有数据啦',$res,200);
        }
    }

    public   function  zlxshangchuan(){
        $param=input('post.');

//        数据验证 (所有数据都应该验证 此处写基本的验证)
        if (empty($param['zlxcpmc'])){
            throw  new  ApiException('zlxcpmc数据不能为空哦');
        }
        if (empty($param['zlxjs'])){
            throw  new  ApiException('zlxjs数据不能为空哦');
        }
        if (empty($param['zlxnd'])){
            throw  new  ApiException('zlxnd 数据不能为空哦');
        }
        if (empty($param['zlxsj'])){
            throw  new  ApiException('zlxsj数据不能为空哦');
        }
        if (empty($param['zlxfbr'])){
            throw  new  ApiException('zlxbr数据不能为空哦');
        }


        $zlxcplb=[
            'zlxcpmc'=>$param['zlxcpmc'],
            'zlxjs'     =>$param['zlxjs'],
            'zlxnd'     =>$param['zlxnd'],
            'zlxsj'     =>$param['zlxsj'],
            'zlxfbr'=>$param['zlxfbr']
        ];

        $res=db('zlxcplb')->insertGetId($zlxcplb);

        if (!$res){
            return return_json(4000,'zlxcplb数据失败了',$res,400);
        };


        $zlxscgl=[
            'zlxcpmc'=>$res,
            'zlxsyl1'     =>$param['zlxsyl1'],
            'zlxsyl2'     =>$param['zlxsyl2'],
            'zlxsyl3'     =>$param['zlxsyl3'],
            'zlxsyl4'      =>$param['zlxsyl4'],
            'zlxsyl5'     =>$param['zlxsyl5'],

            'zlxssc1'     =>$param['zlxssc1'],
            'zlxssc2'     =>$param['zlxssc2'],
            'zlxssc3'      =>$param['zlxssc3'],
            'zlxssc4'     =>$param['zlxssc4'],
            'zlxssc5'=>$param['zlxssc5']
        ];

        $ress=db('zlxscgl')->insert($zlxscgl);

        if (!$ress){
            return return_json(4000,'数据没成功呢',$ress,400);
        };

        $zlxbz=[
            'zlxcpmc'=>$res,
            'zlxstep1'=>$param['step1'],
            'zlxstep2'=>$param['step2'],
            'zlxstep3'=>$param['step3'],
            'zlxstep4'=>$param['step4'],
            'zlxstep5'=>$param['step5'],
            'zlxstep6'=>$param['step6'],
        ];
        $resss=db('zlxcpbz')->insert($zlxbz);

        if (!$resss){
            return return_json(4000,'数据没成功呢',$resss,400);
        };

        return return_json(2000,'数据成功呢',[],200);


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

    public function  GetToken(){
//        验证参数
        $param=input('get.');
        if (!isset($param['code'])||empty($param['code'])){
            throw  new ApiException('数据不鞥为空或者code不存在 ',500,5000);
        }
//        发起请求
     $wx= new WxToken($param['code']);

       return $wx->request();



    }


}
