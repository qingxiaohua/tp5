<?php
namespace app\index\controller;
use think\Request;
use think\Db;
class Index
{
    public function index()
    {
        return '<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:) </h1><p> ThinkPHP V5.1<br/><span style="font-size:30px">12载初心不改（2006-2018） - 你值得信赖的PHP框架</span></p></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=64890268" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="eab4b9f840753f8e7"></think>';
    }

    public function hello($name = 'ThinkPHP 5')
    {
        return 'hello everyone!' . $name;
    }
    public function test(Request $request){
//        $request = Request::instance();
        dump($request);
    }
    public function db(){
//        insert into
//        $requst =   Db::execute('INSERT  into test (name,status) values ("大华",1)');
//        $requst =   Db::execute('update test set NAME ="测试" WHERE  id = 2 ');
//        Db::execute('delete from  test  WHERE  id =2 ');
//        Db::table('think')->insert(['name'=>'测试2','status'=>1]);
//        Db::table('think')->where('id',1)->update(['name'=>'测试3','status'=>0]);
//        Db::table('think')->where('id',1)->select();
//        Db::table('think')->where('id',1)->delete();

//        助手函数 每次会链接数据库，少用。
//        $db =   db('test');
//        $db->insert(['name'=>'测试5','status'=>1]);
//        $db->where('id',1)->update(['name'=>'测试6']);
//        $db->where('id',1)->delete();
//        $db->where('id',1)->select();

//        $list = Db::name('test')->where('status',1)->field('name','status')->order('id','desc')->limit(3)->select();
//        Db::name('test')->where('status',1)->find();
//        Db::name('test')->where('status',1)->select();
//        Db::name('test')->where('name','like','%测%')->select();
//        Db::table('test')->where('id','between',[2,5])->select();
//        Db::table('test')->insertAll([['name'=>'测试11','status'=>1],['name'=>'测试22','status'=>1],['name'=>'测试33','status'=>1]]);

//        某些字段 便捷操作

//        Db::table('test')->where('id',1)->setField('name','哈哈');
//        Db::table('name')->where('id',1)->setInc('status');
//        Db::table('name')->where('id',1)->setInc('status',5);
//        Db::table('name')->where('id',1)->setDec('status');
//        Db::table('name')->where('id',1)->setDec('status',3);

        $requst = Db::query("select * from test  ");
        dump($requst);
    }
}
