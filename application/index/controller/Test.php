<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2018/4/18
 * Time: 11:39
 */
namespace app\index\controller;
use app\index\model\Test as TestModel;
use think\Controller;

class Test extends \think\Controller{
    public function index(){
//        模板变量赋值
        $name ="Thinkphp";
        $this->assign('name',$name);
//        模板渲染
        return $this->fetch();

    }
    public function page(){
        
    }
    public function add(){

//        $test = new TestModel();
//        $test->name = "好的";
//        $test->status = 2;
//        $test->save();

//        $arr = [
//            'name'=>'数组的方法',
//         'status'=>3
//        ];
//        TestModel::create($arr);

//        批量 插入

//        $test = new TestModel();
//        $arr = [
//            [
//                'name'=>'批量1',
//                'status'=>1
//            ], [
//                'name'=>'批量2',
//                'status'=>1
//            ],
//            [
//                'name'=>'批量3',
//                'status'=>1
//            ]
//        ];
//        $test->saveAll($arr);

//        更新
//        $test = TestModel::get(1);
//        $test->name = "安迪";
//        $test->status = 5;
//        $test->save();

//        $test = new TestModel();
//        $test->save(['name'=>'迪安'],['id'=>1]);

//        $test = new TestModel();
//        $arr =[
//          [
//              'id'=>1,
//              'name'=>'批量更新1'
//          ]  ,
//            [
//                'id'=>2,
//                'name'=>'批量更新2'
//            ]
//        ];
//        $test->save($arr);

//        $test = new TestModel();
//        $test->update(['id'=>1,'name'=>'update方法','status'=>'6']);

//        TestModel::update(['id'=>5,'name'=>'静态方法更新']);

//      模型  查询数据
//        $test = TestModel::get(1);
//        echo $test->name;







    }
}

