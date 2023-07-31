<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Traits\WithToaster;
use Livewire\WithFileUploads;
class TestPage extends Component
{
    use WithToaster, WithFileUploads;
    
    public $files = [];
    public function render()
    {
        return view('livewire.test-page');
    }
}
