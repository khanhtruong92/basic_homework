<?php
 
function MaxHeapify(&$data, $heapSize, $index) {
   $left = $index * 2 + 1;
   $right = $index * 2 + 2;
   $largest = 0;
 
   if ($left < $heapSize && $data[$left] > $data[$index])
      $largest = $left;
   else
      $largest = $index;
 
   if ($right < $heapSize && $data[$right] > $data[$largest])
      $largest = $right;
 
   if ($largest != $index)
   {
      $temp = $data[$index];
      $data[$index] = $data[$largest];
      $data[$largest] = $temp;
 
      MaxHeapify($data, $heapSize, $largest);
   }
}
 
function HeapSort(&$data, $count) {
   $heapSize = $count;
	// Step 1: Build a max heap from the input data
   for ($p = ceil($heapSize / 2) - 1 ; $p >= 0; $p--)
      MaxHeapify($data, $heapSize, $p);
 
   for ($i = $count - 1; $i > 0; $i--)
   {
	  // Step 2
      $temp = $data[$i];
      $data[$i] = $data[0];
      $data[0] = $temp;
      // Step 3
      $heapSize--;
      MaxHeapify($data, $heapSize, 0);
    }
}

function echoThreeElement($arr, $number)
{
    for ($i = 1; $i <= $number; $i++) {
        echo $arr[count($arr) - $i] . " ";
    }
}

$array = array(1, 23, 12, 9, 30, 2, 50);
HeapSort($array,7);
echoThreeElement($array, 3);
