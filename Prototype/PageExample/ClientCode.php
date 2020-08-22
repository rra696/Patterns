<?php
namespace Patterns\Prototype\PageExample;

require_once '../../vendor/autoload.php';

function clientCode()
{
    $author = new Author('John Doe');
    $page = new Page(
        'It is a title of new page.',
        'Content this page very interesting, just enjoy these.',
        $author
    );
    $page->addComment('Contents is awesome!'); 

    $copiedPage = clone $page;
    print_r($copiedPage);
}

clientCode();
