<?php

namespace decorator\Blog\Decorator;

use decorator\Blog\BlogTitleDecorator;

class BlogTitleBoldDecorator extends BlogTitleDecorator
{

    private $blogTitleDecorator;

    public function __construct(BlogTitleDecorator $blogTitleDecorator)
    {
        $this->blogTitleDecorator = $blogTitleDecorator;
    }

    /**
     * Wraps the current blog title in a bold tag
     */
    public function addBoldHtml()
    {
        $this->blogTitleDecorator->blogTitle = '<b>' . $this->blogTitleDecorator->blogTitle . '</b>';
    }

}