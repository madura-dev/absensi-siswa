<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Major;

class ShowMajor extends Component
{

    public $major;
    protected $listeners = [
        'deleteMajor' => 'destroy'
    ];
    public function render()
    {

        $this->major = Major::select('id', 'major_code', 'major_name', 'major_alias')->get();
        return view('livewire.show-major');
    }
    public function destroy($id)
    {
        try {
            Major::find($id)->delete();
            session()->flash('success', "Major Deleted Successfully!!");
        } catch (\Exception $e) {
            session()->flash('error', "Something goes wrong while deleting Major!!");
        }
    }
}
