<?php 
/*
将矩阵螺旋输出
*/

$arr[0] = array(1 ,2 ,3 ,4 ,5);
$arr[1] = array(16,17,18,19,6);
$arr[2] = array(15,24,25,20,7);
$arr[3] = array(14,23,22,21,8);
$arr[4] = array(13,12,11,10,9);

spiral_matrix($arr);

function spiral_matrix($arr){
    //当前坐标
    $x = 0;
    $y = 0;

    // 坐标的最大最小值
    $x_max = count($arr);
    $y_max = $x_max?count($arr[0]):0;
    $y_min = 0;
    $x_min = 0;

    $max = $x_max * $y_max;//最大个数

    $hor = TRUE;//水平方向为true，垂直方向为false
    $cou = TRUE;//递增为true，递减为false

    for ($i=0; $i < $max ; $i++) { 
        echo $arr[$x][$y]."<br>";
        if ($hor) {
            if ($cou) {
                if ($y<$y_max-1) {
                    $y++;
                }else{
                    $hor = !$hor;
                    $x++;
                }
            }else{
                if ($y>$y_min) {
                    $y--;
                }else{
                    $hor = !$hor;
                    $x_min+=1;
                    $y_min+=1;
                    $x--;
                }
            }
        }else{
            if ($cou) {
                if ($x<$x_max-1) {
                    $x++;
                }else{
                    $hor = !$hor;
                    $cou = !$cou;
                    $y--;
                }
            }else{
                if ($x>$x_min) {
                    $x--;
                }else{
                    $hor = !$hor;
                    $cou = !$cou;
                    $y_max-=1;
                    $x_max-=1;
                    $y++;
                }
            }
        }
    }
}

?>