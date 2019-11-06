<?php

namespace decorator\Blog\Decorator;

use decorator\Blog\BlogTitleDecorator;

class BlogTitleItalicDecorator extends BlogTitleDecorator
{
    private $blogTitleDecorator;

    public function __construct(BlogTitleDecorator $blogTitleDecorator)
    {
        $this->blogTitleDecorator = $blogTitleDecorator;
    }

    /**
     * Wraps the current title in an italic tag
     */
    public function addItalicHtml()
    {
        $this->blogTitleDecorator->blogTitle = '<i>' . $this->blogTitleDecorator->blogTitle . '</i>';
    }

}