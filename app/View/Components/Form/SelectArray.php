<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class SelectArray extends Component
{
    public $id;
    public $name;
    public $label;
    public $array;
    public $selected;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $label, $array , $id = null, $selected = null)
    {
        if (is_null($id)) {
            $this->id = $name;
        } else {
            $this->id = $id;
        }
        $this->name = $name;
        $this->label = $label;
        $this->array = $array;
        $this->selected = $selected;
        // $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.select-array');
    }
}
