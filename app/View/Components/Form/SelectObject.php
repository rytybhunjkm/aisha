<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class SelectObject extends Component
{
    public $name;
    public $id;
    public $label;
    public $collection;
    public $selected;
    public $field;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name,$label,$collection,$field, $id = null,$selected = null)
    {
        if (is_null($id)) {
            $this->id = $name;
        } else {
            $this->id = $id;
        }
        $this->name = $name;
        $this->label = $label;
        $this->collection = $collection;
        $this->field = $field;
        $this->selected = $selected;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.select-object');
    }
}
