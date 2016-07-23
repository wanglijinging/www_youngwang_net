<?php
// 本类由系统自动生成，仅供测试用途
namespace GlobalTest\Logic;
class IndexLogic {
    public function test() {
    	// $cache = new Redis();
        //$cache->pconnect('127.0.0.1', 6379, 0);
        //dump($cache);
		$list = D('Index')->test();
    	return $list;
    }
    
}