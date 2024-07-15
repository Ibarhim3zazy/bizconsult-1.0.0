<?php

namespace App\View\Components\front;

use Closure;
use App\Models\Service;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class ServicesComponent extends Component
{
    public $services;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->services = Service::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.front.services-component');
    }
}
