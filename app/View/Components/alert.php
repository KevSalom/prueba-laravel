<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class alert extends Component
{
    /**
     * Create a new component instance.
     */
    public $class;
    public function __construct($type)
    {
        $class = ($type == 'info') ? 'bg-blue-100' : ($type == "danger" ? "bg-red-100" : "bg-green-100");
        $this->class =  $class;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
