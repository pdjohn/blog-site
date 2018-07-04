<?php 
class Cms5b37ae4f88be9847255318_4dc59a5b584badfc7eac0f69411f29c2Class extends Cms\Classes\PageCode
{
public function onPagePosts()
{
    $this->blogPosts->setProperty('pageNumber', post('page'));
    $this->pageCycle();
}
}
