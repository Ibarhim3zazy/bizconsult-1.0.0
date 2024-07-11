<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SidebarTabBadge extends Component
{

    /**
     * Create a new component instance.
     */
    public function __construct(public string $color, public string $value,public string $hidden)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        
        $this->hidden = $this->hidden == 'false' ? '' : 'hidden';
        return view('components.sidebar-tab-badge', ['hidden' => $this->hidden]);
    }
}
