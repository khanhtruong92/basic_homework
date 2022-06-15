<?php
class Node
{
    // dữ liệu int
    private $data;
    // phần liên kết node (tham khảo node tiếp theo)
    private $next;

    // tạo một __construct class 
    // mặc định $data = 0, $next = null
    public function __construct($data = 0, $next = null)
    {
        $this->data = $data;
        $this->next = $next;
    }

    // lấy data
    public function getData()
    {
        return $this->data;
    }

    // thiết đặt $data
    public function setData($data)
    {
        $this->data = $data;
    }

    // lấy next
    public function getNext()
    {
        return $this->next;
    }

    // thiết đặt $next
    public function setNext($next)
    {
        $this->next = $next;
    }
}

class LinkedList
{
    // node đầu tiên
    private $head;

    // chèn thêm node mới
    public function insert($data)
    {
        // tạo một node
        $newNode = new Node($data);
        // nếu head là null, hiểu là linked list rỗng, vậy node đầu tiên sẽ là head
        if ($this->head == null) {
            $this->head = $newNode;
        } else {
            // nếu linked list không phải null, thì node mới sẽ được thêm vào cuối list
            // tìm node cuối
            $last = $this->head;
            while ($last->getNext() != null) {
                $last = $last->getNext();
            }
            // chèn node mới vào node cuối cùng
            $last->setNext($newNode);
        }
    }

    // xem linked list (duyệt tất cả các phần tử trong linked list)
    public function visit()
    {
        // bắt đầu với node head
        $currNode = $this->head;
        
        // echo "Linked List: ";
        $arr = [];

        while ($currNode != null) {
            // dừng khi node là null
            $arr[] = $currNode->getData();
            $currNode = $currNode->getNext();
        }
        return $arr;
    }

    // xoá giá trị đầu tiên là $data
    public function deleteFirst($data)
    {
        // Nếu linked list rỗng
        if ($this->head == null) {
            echo "List is empty.";
            return;
        }
        // tìm thấy node đầu
        if ($this->head->getData() == $data) {
            $this->head = $this->head->getNext();
        } else {
            $current = $this->head;
            while ($current->getNext() != null) {
                // tìm node
                if ($current->getNext()->getData() == $data) {
                    $current->setNext($current->getNext()->getNext());
                    return;
                }
                $current = $current->getNext();
            }
            echo "Not found.";
        }
    }
}

//head = null
$list = new LinkedList();
// thêm 1 node với value
$list->insert(1);
$list->insert(2);
$list->insert(3);
$list->insert(4);
$list->insert(5);

// print_r($list->visit());
$reverse = array_reverse($list->visit());
foreach ($reverse as $value) {
    echo $value . " ";
}
