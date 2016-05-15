<?php
namespace Home\Model;
use Think\Model;
class TestModel extends Model {
    protected $table_name = 'test_user';
    //protected $fields = array('uid','user_name');
    public function getDetail(){
    	$map['uid'] = 1;
    	//return $this->where($map)->find();
    }
}