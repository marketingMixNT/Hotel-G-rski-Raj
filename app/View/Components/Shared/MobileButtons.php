<?php

namespace App\View\Components\Shared;

use Closure;
use App\Models\MobileButton;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class MobileButtons extends Component
{
    public $mobileButtons;
    public function __construct()
    {
        $this->mobileButtons = MobileButton::orderBy('sort')->get();
   
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.shared.MobileButtons');
    }
}
