<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SidebarTabDropdwonHead extends Component
{
    public string $dropdownUniqid;
    /**
     * Create a new component instance.
     */
    public function __construct(public string $icon, public string $value, public string $dropdown, public string $href = '')
    {
        $this->dropdownUniqid = uniqid('ui-elements_');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sidebar-tab-dropdwon-head');
    }
}
