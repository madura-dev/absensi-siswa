<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PageHeader extends Component
{
    private $pretitle;
    private $title;

    /**
     * Create a new component instance.
     */
    public function __construct($pretitle, $title)
    {
        $this->pretitle = $pretitle;
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.page-header');
    }
}
