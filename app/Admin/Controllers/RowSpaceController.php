<?php

namespace App\Admin\Controllers;

class RowSpaceController extends UserController
{
    use PreviewCode;
    protected $title = 'Row Space';

    public function grid()
    {
        return parent::grid()
            ->tableCollapse(false)
            ->tools($this->buildPreviewButton());
    }
}

