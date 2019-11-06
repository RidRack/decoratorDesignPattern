<?php
namespace decorator;

require '../vendor/autoload.php';

use decorator\Blog\BlogTitleDecorator;
use decorator\Blog\Decorator\BlogTitleBoldDecorator;
use decorator\Blog\Decorator\BlogTitleItalicDecorator;

echo('Start Decorator Test');
echo("\n");

$patternBlog = new Blog('Text 1, Text 2, Text 3', 'Decorator Pattern', 'Blog Author');

$decorator = new BlogTitleDecorator($patternBlog);
$decoratorItalic = new BlogTitleItalicDecorator($decorator);
$decoratorBold = new BlogTitleBoldDecorator($decorator);

echo('Blog Title: ');
echo($decorator->showTitle());
echo("\n");

echo('Blog Decorator After Italic: ');
$decoratorItalic->addItalicHtml();
echo($decorator->showTitle());
echo("\n");

echo('Blog Decorator after Bold : ');
$decoratorBold->addBoldHtml();
echo($decorator->showTitle());
echo("\n");

echo('showing title after reset: ');
echo($decorator->resetTitle());
echo($decorator->showTitle());
echo("\n");

echo('End Decorator Test');
