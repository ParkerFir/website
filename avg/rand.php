<?php
// 发红包
// $money_total=13.5;
// $personal_num=3;
// $min_money=0.01;
// $money_right=$money_total;
// $randMoney=[];
// for($i=1;$i<=$personal_num;$i++){
//     if($i== $personal_num){
//         $money=$money_right;
//     }else{
//         $max=$money_right*100 - ($personal_num - $i ) * $min_money *100;
//         $money= rand($min_money*100,$max) /100;
//         $money=sprintf("%.2f",$money);
//         }
//         $randMoney[]=$money;
//         $money_right=$money_right - $money;
//         $money_right=sprintf("%.2f",$money_right);
// }
// shuffle($randMoney);
// p($randMoney);


// $avg = 4.5;
// $count = 3;
// $min = 2;
// $max = 4;

$count = $_POST['count'];
$avg = $_POST['avg'];
$min = floor($_POST['min']);
$max = floor($_POST['max']);

$sum = $avg * $count;
for($i=$count;$i>0;$i--){
	if ($i != 1) {
		// $data[$i] = round($min + mt_rand() / mt_getrandmax() * ($max - $min),2);
	}
    
    $row=0;
	// p($sum, $data, $i, false);
    if($i==1){
    	if($sum<0){
			$data[$i] = 0;
    	} else {
    		$data[$i] = round($sum, 2);
    	}
    }else{
        // $max=floor($sum/$i*2);
        // $row=mt_rand(0,$max);
        $row = round($min + mt_rand() / mt_getrandmax() * ($max - $min) ,2);
        // p($row, false);
        $data[$i]+=$row;
        // p($data,false);
    }
	$sum -= $data[$i];
 }
 $new = [];
 foreach ($data as $v) {
 	array_push($new, (strval($v)));
 }
 $arr = [
 	'code' => 200,
 	'arr' => $new
 ];

echo json_encode($arr);


/**
 * 打印数据
 * @param param 参数信息
 * @return array
 */
function p() {
    $param = func_get_args();
    foreach ($param as $v) {
        if ($v !== false) {
            echo '<pre autocomplete="off" style="background-color:#272a32;color:#ffe4a6;font:15px/19px Consolas;padding:8px;width:90%;word-break:break-all;white-space:pre-wrap;">';
            print_r($v);
            echo '</pre>';
        }
    }
    if (end($param) !== false) exit() ;
}
