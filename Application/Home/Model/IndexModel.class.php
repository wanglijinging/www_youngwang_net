<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Model;
use Think\Model;
class IndexModel extends Model {
    
    public function test() {
    	$list = M('record')->select();
    	return $list;
    }
    
}