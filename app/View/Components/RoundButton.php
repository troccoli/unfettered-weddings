<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class RoundButton extends Component
{
    public function __construct(public string $url)
    {
    }

    public function render(): View
    {
        return view('components.reusable.round-button');
    }
}
