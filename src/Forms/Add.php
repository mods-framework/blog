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
               $field->addClass('required')->id('title')->rules('required')->label('Title');
            })
            ->add('content', 'textarea', function($field) {
               $field->addClass('required materialize-textarea')->rules('required')->label('Content');
            })
            ->add('status', 'select', function($field) {
                  $field->options([
                        'publish' => 'Publish',
                        'draft' => 'Draft',
                    ])->label('Status')->select('draft');
            })
            ->add('submit', 'submit', function($field) {
                $field->value('Submit')->addClass('btn waves-effect waves-light');
            })
            ->close();
    }
}