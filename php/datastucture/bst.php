<?php

/**
 * A node in BST tree.
 */
class Node
{

    public $key;
    public $value;
    public $left = '';
    public $right = '';
    public $parent = '';
    public $whichChild = 0;

    const IS_LEFT = 1;
    const IS_RIGHT = 2;

    public function __construct($key, $value = '')
    {
        $this->key = $key;
        $this->value = $value;
    }

    public function __toString()
    {
        $return = '';
        if (!empty($this->left)) {
            $return .= '[' . $this->left . ']';
        }
        $return .= $this->key;
        if (!empty($this->right)) {
            $return .= '[' . $this->right . ']';
        }
        return $return;
    }

    public function insert(Node $node)
    {
        if ($node->key < $this->key) {
            $this->insertTo($this->left, $node);
            $node->whichChild = NODE::IS_LEFT;
        } elseif ($node->key > $this->key) {
            $this->insertTo($this->right, $node);
            $node->whichChild = NODE::IS_RIGHT;
        } else {
            throw new Exception("not supported same key insert.");
        }
    }

    private function insertTo(& $childNode, Node $insertNode)
    {
        if (empty($childNode)) {
            $childNode = $insertNode;
            $insertNode->parent = $this;
        } else {
            $childNode->insert($insertNode);
        }
    }

    public function search($key)
    {
        if ($this->key === $key) {
            return $this;
        } elseif ($this->key > $key) {
            return $this->searchOn($this->left, $key);
        } else {
            return $this->searchOn($this->right, $key);
        }
    }

    private function searchOn($childNode, $key)
    {
        if (empty($childNode)) {
            throw new Exception("not in tree.");
        }
        return $childNode->search($key);
    }

    public function delete($key)
    {
        $node = $this->search($key);

        if (empty($node->left)) {
            if (empty($node->right)) {

                $this->updateParent($node, '');
            } else {

                $this->updateParent($node, $node->right);

                $node->right->parent = $node->parent;
            }
        } else {
            if (empty($node->right)) {

                $this->updateParent($node, $node->left);

                $node->left->parent = $node->parent;
            } else {
                $mostright = $this->getMostright($node->left);
                $mostright->parent = $node;

                $this->updateParent($node, $mostright);

                $mostright->right = $node->right;
                $node->right->parent = $mostright;

                if ($mostright !== $node->left) {
                    $mostright->left = $node->left;
                    $node->left->parent = $mostright;
                }
            }
        }
    }

    private function updateParent(Node $node, $replace)
    {
        if ($node->whichChild === NODE::IS_LEFT) {
            $node->parent->left = $replace;
        } elseif ($node->whichChild === NODE::IS_RIGHT) {
            $node->parent->right = $replace;
        } else {
            throw new Exception("not implemented for root");
        }
    }

    private function getMostright(Node $node)
    {
        if ($node->right instanceof Node) {
            return $this->getMostright($node->right);
        } else {
            return $node;
        }
    }
}

class Tree
{

    public $root;

    /**
     * insert an node into the tree.
     */
    public function insert(Node $node)
    {
        $this->root->insert($node);
    }

    /**
     * delete an node from the tree by key.
     */
    public function delete($key)
    {
        $this->root->delete($key);
    }

    /**
     * search an node by key.
     */
    public function search($key)
    {
        return $this->root->search($key);
    }

    public function __toString()
    {
        return '' . $this->root;
    }
}
$tree = new Tree();
$tree->root = new Node(10, 'root');
$tree->insert(new Node(8, 'bla'));
$tree->insert(new Node(9, 'xx'));
$tree->insert(new Node(15, 'yy'));
$tree->insert(new Node(20, 'zz'));
$tree->insert(new Node(18, 'bb'));
$tree->insert(new Node(7, 'ee'));
$tree->insert(new Node(6, 'ee'));

echo $tree;

try {
    $node = $tree->search(15);
    var_dump($node->value);

    $tree->search(100);
} catch (Exception $e) {
    var_dump('100 not in tree');
}

// delete leaf.
//$tree->delete(18);
// delete node with one child.
//$tree->delete(20);
// delete node with two children.
$tree->delete(8);

echo $tree;
