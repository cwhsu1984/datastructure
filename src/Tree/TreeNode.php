<?php
namespace DataStructure\Tree;

class TreeNode
{
    protected $data;

    private $parent;

    private $left;

    private $right;

    public function __construct(?self $parent, int $data)
    {
        $this->parent = $parent;
        $this->data   = $data;
    }

    public function setParent(self $parent): void
    {
        $this->parent = $parent;
    }

    public function getParent(): ?self
    {
        return $this->parent;
    }

    public function setLeft(?self $left): void
    {
        $this->left = $left;
    }

    public function setRight(?self $right): void
    {
        $this->right = $right;
    }

    public function getLeft(): ?self
    {
        return $this->left;
    }

    public function getRight(): ?self
    {
        return $this->right;
    }

    public function getData(): int
    {
        return $this->data;
    }
}
