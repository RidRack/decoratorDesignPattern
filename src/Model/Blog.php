<?php

namespace decorator;

class Blog
{

    private $blogText;

    private $blogTitle;

    private $blogAuthor;

    public function __construct($blogText, $blogTitle, $blogAuthor)
    {
        $this->blogText = $blogText;
        $this->blogTitle = $blogTitle;
        $this->blogAuthor = $blogAuthor;
    }

    public function getBlogText() {
        return $this->blogText;
    }

    public function getBlogTitle() {
        return $this->blogTitle;
    }

    public function getBlogAuthor()
    {
        return $this->blogAuthor;
    }
}