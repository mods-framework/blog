<?php

namespace Mods\Blog\Block\Form;

use Mods\View\Blocks\Form as BaseForm;

class Add extends BaseForm
{

	/**
     * The given form to render.
     *
     * @var string
     */
    protected $form = 'Mods\Blog\Forms\Add';

	/**
    * Get the Title of the form
    *
    * @return string
    */
    public function getTitle()
    {
       return 'Create Blog';
    }

    /**
    * Get the Title of the form
    *
    * @return string
    */
    public function getHeaderIcon()
    {
        return '<i class="material-icons">book</i>';
    }
}
