<?php
namespace Algorithm\MergeSort;

// Tạo function merge sort
function mergesort($numlist)
{
    if (count($numlist) == 1) {
        return $numlist;
    }

    // 1. Lấy điểm giữa để chia mảng thành 2 nửa
    // làm tròn số bằng hàm floor()
    $mid = floor(count($numlist) / 2);

    // Chia nửa thứ đầu tiên (bên trái)
    // Sử dụng hàm array_slice để chia mảng
    $left = array_slice($numlist, 0, $mid);
    $right = array_slice($numlist, $mid);

    // 2. Gọi đệ quy nửa bên trái
    $left = mergesort($left);
    // 3. Gọi đệ quy nửa bên phải
    $right = mergesort($right);
    
    // 4. Hợp nhất hai nửa đã chia ở bước 2 và 3
    return merge($left, $right);
}

// Tạo function merge hai nửa
function merge($left, $right)
{
    // Tạo mảng nhận kết quả meger
    $result = [];

    // Đặt chỉ mục đầu tiên của mảng trái và phải
    $leftIndex = 0;
    $rightIndex = 0;
    
    // Merge khi cả hai mảng đều còn giá trị
    while ($leftIndex < count($left) && $rightIndex < count($right)) {
        if ($left[$leftIndex] < $right[$rightIndex]) {
            $result[] = $right[$rightIndex];
            $rightIndex++;
        } else {
            $result[] = $left[$leftIndex];
            $leftIndex++;
        }
    }

    // Khi 1 trong 2 mảng đã hết giá trị
    // sao chép phần tử của mảng còn lại
    // vào mảng kết quả,(do các phần tử đó đã được sắp xếp rồi)
    // lên việc sao chép vẫ đảm bảo yêu cầu sắp xếp đặt ra
    // Sao chép phần tử còn lại bên trái
    while ($leftIndex < count($left)) {
        $result[] = $left[$leftIndex];
        $leftIndex++;
    }
    // Sao chép phần tử còn lại bên phải
    while ($rightIndex < count($right)) {
        $result[] = $right[$rightIndex];
        $rightIndex++;
    }

    return $result;
}
