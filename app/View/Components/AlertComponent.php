<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AlertComponent extends Component
{
    public $clase_color;
    public function __construct($type='info')
    {
        switch ($type){
        case 'info':
            $clase_color = "bg-orange-100 border-orange-500 text-orange-700";
            break;
        case 'danger':
            $clase_color = "bg-red-100 border-red-500 text-red-700";
            break;
        default:
            $clase_color = "bg-blue-100 border-blue-500 text-blue-700";
            break;
        }
        $this->clase_color = $clase_color;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert-component');
    }
}
