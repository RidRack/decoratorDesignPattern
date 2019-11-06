<?php

namespace decorator\Blog;

use decorator\Blog;

class BlogTitleDecorator {

    protected $blog;

    protected $blogTitle;

    public function __construct(Blog $blog) {
        $this->blog = $blog;
        $this->resetTitle();
    }

    public function resetTitle() {
        $this->blogTitle = $this->blog->getBlogTitle();
    }

    public function showTitle()
    {
        return $this->blogTitle;
    }
}