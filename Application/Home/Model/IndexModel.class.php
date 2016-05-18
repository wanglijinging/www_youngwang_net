<?php
// 本类由系统自动生成，仅供测试用途
namespace Home\Model;
use Think\Model;
class IndexModel extends Model {
    
    public function select() {
		//$sql = "select * from org_book_info";
		//$list = M()->query($sql);
    	$list = M('book_info')->select();
    	return $list;
    }
}