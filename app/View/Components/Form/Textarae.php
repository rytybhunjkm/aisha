<?php

namespace App\View\Components\form;

use Illuminate\View\Component;

class Textarae extends Component
{

    public $id;
    public $name;
    public $label;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $label, $id = null)
    {

        if (is_null($id)) {

            $this->id = $name;
        } else {
            $this->id = $id;
        }
        $this->name = $name;
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.textarae');
    }
}
