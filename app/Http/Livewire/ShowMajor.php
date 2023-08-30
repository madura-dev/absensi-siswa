<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Major;

class ShowMajor extends Component
{

    public $major;

    public function render()
    {

        $this->major = Major::select('id', 'major_code', 'major_name', 'major_alias')->get();
        return view('livewire.show-major');
    }
}
