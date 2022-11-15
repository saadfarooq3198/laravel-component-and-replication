<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TestComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $latestPosts;
    public function __construct($latestPosts)
    {
        $this->latestPosts = $latestPosts;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.test-component');
    }
}