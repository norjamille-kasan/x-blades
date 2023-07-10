<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TestPage extends Component
{

    public $test = "";
    public function render()
    {
        return view('livewire.test-page');
    }

    public function test()
    {
        sleep(3);
    }
}
