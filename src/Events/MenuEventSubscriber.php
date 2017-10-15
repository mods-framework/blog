<?php 

namespace Mods\Blog\Events;

class MenuEventSubscriber {

    public function addMenu($menu)
    {
        $menu->add('Blog', 'Blog')->prepend('<i class="material-icons">book</i> ');
        $menu->blog->add('List', 'List', ['route' => 'backend.blog.all'])->prepend('<i class="material-icons">list</i> ');        
        $menu->blog->add('Add', 'Add', ['route' => 'backend.blog.add'])->prepend('<i class="material-icons">add</i> ');
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