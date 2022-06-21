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

    // find element min
    public function getElementMin()
    {
        $min = $this->root;
        while ($min->getLeft() != null) {
            $min = $min->getLeft();
        }
        echo $min->getData() . "\n";
    }

    // find element max
    public function getElementMax()
    {
        $min = $this->root;
        while ($min->getRight() != null) {
            $min = $min->getRight();
        }
        echo $min->getData() . "\n";
    }
}



$arr = array(10, 5, 19, 1, 6, 17);
$tree = new SearchBinaryTree();
for ($i = 0, $n = count($arr); $i < $n; $i++) {
    $tree->insert($arr[$i]);
} 
$tree->getElementMin();
$tree->getElementMax();
