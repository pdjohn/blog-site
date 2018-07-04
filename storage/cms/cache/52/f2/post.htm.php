<?php 
class Cms5b37ae5b8cc80860247910_d3f246fd8de1027d8e3615f6211d921bClass extends Cms\Classes\PageCode
{
public function onEnd()
{
    if ($this->post) {
        $this->page->title = $this->post->title;
    }
    else {
        return Redirect::to($this->pageUrl('404'));
    }
}
}
