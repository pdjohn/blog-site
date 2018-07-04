<?php 
class Cms5b38e9c83546b201860395_cbad458593df0bf86719c53231edd86cClass extends Cms\Classes\PageCode
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
