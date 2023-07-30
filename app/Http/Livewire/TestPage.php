<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Traits\WithToaster;
class TestPage extends Component
{
    use WithToaster;
    
    public $test = "";
    public function render()
    {
        return view('livewire.test-page');
    }

    public function handleTest()
    {
        $this->validate([
            'test' => 'required'
        ]);
        $this->toastError(
            $title = "Success",
            $message = "This is a success message"
        );
    }
}
