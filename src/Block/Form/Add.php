<?php

namespace Mods\Blog\Block\Form;

use Mods\View\Blocks\EmptyBlock;
use Mods\View\Block as BaseBlock;

class Add extends BaseBlock
{
    public function getForm()
    {
        return $this->getLayout()
                ->createBlock(EmptyBlock::class, 'form.elements')
                ->setTemplate('form.elements')
                ->assign($this->app->make(\Mods\Blog\Forms\Add::class)->build())
                ->toHtml();
    }
}
