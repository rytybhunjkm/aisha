<?php

namespace App\View\Components\Action;

use Illuminate\View\Component;

class Delete extends Component
{
    public $id;
    public $value;
    public $route;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($value , $route , $id = "id")
    {
        $this->value = $value;
        $this->route = $route;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.action.delete');
    }
}
