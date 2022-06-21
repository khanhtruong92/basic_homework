<?php
// tạo node cho cây nhị phân (Binary Tree)

use function PHPSTORM_META\elementType;

class Node
{
    private $data;
    // node left subtree
    private $left;
    // node right subtree
    private $right;

    public function __construct($data, $left = null, $right = null)
    {
        $this->data = $data;
        $this->left = $left;
        $this->right = $right;
    }

    // get data, return int
    public function getData()
    {
        return $this->data;
    }

    // set data, thông số của $data
    public function setData($data)
    {
        $this->data = $data;
    }

    // get left, return Node
    public function getLeft()
    {
        return $this->left;
    }

    // set left, thông số của node $left
    public function setLeft($left)
    {
        $this->left = $left;
    }

    // get right, return Node
    public function getRight()
    {
        return $this->right;
    }

    // set right, thông số của node $right
    public function setRight($right)
    {
        $this->right = $right;
    }
}

// cây nhị phân (binary tree)
class BinaryTree
{
    // Node root
    protected $root;

    public function __construct($root = null)
    {
        $this->root = $root;
    }

    public function isEmpty()
    {
        return $this->root === null;
    }

    // get root, return Node
    public function getRoot()
    {
        return $this->root;
    }

    // set root, thông số Node $root
    public function setRoot($root)
    {
        $this->root = $root;
    }

    // duyệt qua các phần tử trong tree
    public function traverse($method)
    {
        switch($method) {
            case 'inorder':
                $this->_inorder($this->root);
                break;
            case 'postorder':
                $this->_postorder($this->root);
                break;
            case 'preorder':
                $this->_preorder($this->root);
                break;

            default:
            break;
        }
    }

    private function _inorder($node)
    {
        if ($node->getLeft()) {
            $this->_inorder($node->getLeft());
        }

        echo $node->getData() . " ";

        if ($node->getRight()) {
            $this->_inorder($node->getRight());
        }
    }

    private function _preorder($node) {
        echo $node->getData() . " ";
        
        if ($node->getLeft()) {
            $this->_preorder($node->getLeft());
        }

        if ($node->getRight()) {
            $this->_preorder($node->getRight());
        }
    }

    private function _postorder($node)
    {
        if ($node->getLeft()) {
            $this->_postorder($node->getLeft());
        }

        if ($node->getRight()) {
            $this->_postorder($node->getRight());
        }

        echo $node->getData() . " ";
    }

    // write fuction insert the key into the binary tree at first position available in level order
    public function insert12($data)
    {
        $current = $this->root;
        $current = $current->getLeft();
        $current->setRight(new Node($data));
    }
   
}

class SearchBinaryTree extends BinaryTree
{
    public function insert($data)
    {
        if ($this->root == null) {
            $this->root = new Node($data);
        } else {
            $current = $this->root;
            while(true) {
                if ($data < $current->getData()) {
                    if ($current->getLeft()) {
                        $current = $current->getLeft();
                    } else {
                        $current->setLeft(new Node($data));
                        break;
                    }
                } elseif ($data > $current->getData()) {
                    if ($current->getRight()) {
                        $current = $current->getRight();
                    } else {
                        $current->setRight(new Node($data));
                        break;
                    }
                } else {
                    break;
                }
            }
        }
    }

    public function search($value)
    {
        $node = $this->root;

        while($node) {
            if ($value>$node->getData()) {
                $node = $node->getRight();
            } elseif ($value < $node->getData()) {
                $node = $node->getLeft();
            } else {
                echo "YES";
                return;
            }
        }
        echo "NO";
    }

   
}

// Tạo 3 lá cây (three leaves)
$left1 = new Node(7);
$left2 = new Node(15);
$left3 = new Node(8);

//parent nodes
$parent1 = new Node(11, $left1);
$parent2 = new Node(9, $left2, $left3);

// root
$root = new Node(10, $parent1, $parent2);
// tree
$bt = new BinaryTree($root);

// thêm phần tử 12 vào tree
$bt->insert12(12);
// kiểm tra lại kết quả
$bt->traverse('inorder');
