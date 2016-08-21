<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Controller;
use Think\Controller;
use Think\Cache;
use Think\Cache\Driver\Redis;


class IndexController extends Controller {
    public function index(){
       echo 'git ilove';
    }
    // 测试代码
    public function test_list() {
        // 这儿可以换成从数据库中获取数据
        $list = array(0=>array('id'=>1,'name'=>'test1'),1=>array('id'=>2,'name'=>'test2'));
        $data['status']  = 1;
        $data['msg'] = '获取成功';
        $data['list'] = $list;
        $this->ajaxReturn($data);
    }
    public function add_record() {
        $redis = new \Redis(); 
        //$redis->connect('redis',['host' => '127.0.0.1','port' => 6379]);
        dump($redis);exit;
        $this->display();
    }
}