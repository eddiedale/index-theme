<?php
use Kirby\Cms\Page;

class DefaultPage extends Page
{

    public function published($format = null)
    {
        return parent::date()->toDate($format ?? 'd M, Y');
    }

}
