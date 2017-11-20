<?php 

namespace Mods\Blog\Events;

class MenuEventSubscriber {

    public function addMenu($menu)
    {
        $menu->add('Blog', 'Blog')->prepend('<span class="oi oi-book"></span>');
        $menu->blog->add('Add', 'Add', ['route' => 'backend.blog.add'])->prepend('<span class="oi oi-plus"></span>');
        $menu->blog->add('List', 'List', ['route' => 'backend.blog.all'])->prepend('<span class="oi oi-list"></span>');
    }

    /**
    * Register the listeners for the subscriber.
    *
    * @param  Illuminate\Events\Dispatcher  $events
    * @return array
    */
    public function subscribe($events)
    {
        $events->listen('backend.sidebar.menu.getSideMenu.before', 'Mods\Blog\Events\MenuEventSubscriber@addMenu');
    }
}