<?php  
// PHP program for insertion sort 
  
// Tạo function sắp xếp tăng dần sử dụng insertion sort
 
// Đối số của function là mảng và số lượng phần tử của mảng
function insertionSort(&$arr, $n) 
{ 
    for ($i = 1; $i < $n; $i++) 
    {
        // Coi giá trị đầu tiên đã được sắp xếp
        // Đặt key là giá trị tiếp theo 
        $key = $arr[$i];

        $j = $i-1; 
        // Di chuyển phần tử lớn hơn $key lên vị trí trước của chúng (index + 1)
        while ($j >= 0 && $arr[$j] > $key) 
        { 
            $arr[$j + 1] = $arr[$j]; 
            $j = $j - 1; 
        } 
        
        // Chèn giá trị của key vào vị trí đúng 
        // $j được xác định qua vòng lặp while phía trên
        $arr[$j + 1] = $key; 
    } 
} 
  
// A utility function to 
// print an array of size n 
// Đây là function hỗ trợ in ra phần tử của mảng
function printArray(&$arr, $n) 
{ 
    for ($i = 0; $i < $n; $i++) 
        echo $arr[$i]." "; 
    echo "\n"; 
} 
  
// Driver Code 
$arr = array(12, 11, 13, 5, 6); 
$n = sizeof($arr); 
insertionSort($arr, $n); 
printArray($arr, $n); 
