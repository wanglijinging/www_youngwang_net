<?php
namespace Home\Controller;
use Think\Controller;

class IndexController extends Controller {
	const TEST_NUMBER = '123';
	protected $name = 'wanglijing';
	static $sex = '6';

    public function qrcode($url='http://wxshop.youngwang.net/',$level=3,$size=4){
          
          Vendor('phpqrcode.phpqrcode');
          
          $errorCorrectionLevel =intval($level) ;//容错级别 
          $matrixPointSize = intval($size);//生成图片大小 
          //生成二维码图片
          $object = new \QRcode();

          $object->png($url, false, $errorCorrectionLevel, $matrixPointSize, 2);   

         }
    
    /**
    * $url 嵌入的扫码出现的URL
    * $size 显示图片尺寸
    * $level 容错等级
    * $padding 图片边距
    * $logo 中间嵌入的图片地址
    */
    public function qrcode1($url='http://wxshop.youngwang.net',$size=4,$level='L',$padding=2,$logo=true){
       
        $url     = $_GET['url'];   // 嵌入的扫码出现的URL
        $size    = $_GET['size'];  
        $level   = $_GET['level']; // 容错级别
        $logo    = $_GET['logo'];  // 二维码嵌入的头像地址
        $padding = $GET['padding']; // 二维码图片变距
        $path = __IMAGE__; // 存放二维码图片的文件夹名称
        $QR=$path.'qrcode.png';
        Vendor('phpqrcode.phpqrcode'); // 引入的类
        $object = new \QRcode(); 
        $object->png($text,$QR,$level, $size,$padding);
        if($logo!== false){
            $QR= imagecreatefromstring(file_get_contents($QR));
            $logo= imagecreatefromstring(file_get_contents($logo));
            $QR_width= imagesx($QR);
            $QR_height= imagesy($QR);
            $logo_width= imagesx($logo);
            $logo_height= imagesy($logo);
            $logo_qr_width= $QR_width / 5;
            $scale= $logo_width / $logo_qr_width;
            $logo_qr_height= $logo_height / $scale;
            $from_width= ($QR_width - $logo_qr_width) / 2;
            imagecopyresampled($QR,$logo, $from_width,$from_width, 1, 1,$logo_qr_width, $logo_qr_height, $logo_width, $logo_height);
        }
            header("Content-Type:image/jpg");
            imagepng($QR);
    }

    public function index(){

        for($i=0;$i<10000;$i++) {
            $test[] = $i;
        }
        //$test = array(8,10,7,9,11,23);
        $flip = array_flip($test);
        $start_time = time();
        dump($start_time);
        $end_time = 0;
        //echo time();
        for($j=0;$j<count($test);$j++) {
            $start = $j*10;
            $slice = array_slice($test, $start,10);
            
            if(in_array(9999,$slice)) {
                
                $page = $i;
                $end_time = time();
                break;
            }

        }
    dump($end_time);
var_dump($end_time-$start_time);
        //var_dump($flip[9999]);
       // echo (time()-$start_time);
        exit;
        $test = array(0=>array('id'=>1,'name'=>'test'),1=>array('id'=>2,'name'=>'test2'));
        if(empty($test)) {
            $data = array('status'=>0,'list'=>array());
                          
        }else{
            $data = array('status'=>1,'list'=>$test);
                          
        }
        echo json_encode($data);exit;
        //$this->ajaxReturn($test,'获取成功',1);

        //$this->display();
       // $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover,{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
    }

    public function test(){
    	echo self::TEST_NUMBER;
    	echo $this->name;
    	echo self::$sex;
    	$str = "hello_world";
    	$str = str_replace("_", " ", $str);
    	$str = ucwords($str);

    	$str = str_replace(" ", "", $str);
    	dump($str);
    	//dump(C('default_module'));
    	//$detail = M('test','Home')->getDetail();
    	//dump($detail);
    	//echo '345';
    }
}