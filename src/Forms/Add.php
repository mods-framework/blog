<?php

namespace Mods\Blog\Forms;

use Mods\Form\Form;

class Add extends Form
{
	protected function buildForm() 
    {
    	
    	$this->open(function($form) { 
                $form->addClass('validate')->post()->token(csrf_token())->action(route('backend.blog.add'));
            })
            ->add('title', 'text', function($field) {
               $field->addClass('form-control required')->id('title')->rules('required')->label('Title');
            })
            ->add('content', 'editor', function($field) {
               $field->addClass('required')->id('blog_content')->rules('required')->label('Content');
            })
            ->close();
    }
}