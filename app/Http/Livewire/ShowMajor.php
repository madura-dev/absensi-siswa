<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Major;

class ShowMajor extends Component
{

    public $major, $major_code, $major_name, $major_alias;
    protected $listeners = [
        'deleteMajor' => 'destroy'
    ];
    public function render()
    {

        $this->major = Major::select('id', 'major_code', 'major_name', 'major_alias')->get();
        return view('livewire.show-major');
    }
    public function store()
    {
        // Validate Form Request
        try {
            // Create Category
            Major::create([
                'major_code' => $this->major_code,
                'major_name' => $this->major_name,
                'major_alias' => $this->major_alias
            ]);

            // Set Flash Message
            session()->flash('success', 'Major Created Successfully!!');
            // Reset Form Fields After Creating Category
            $this->resetFields();
        } catch (\Exception $e) {
            // Set Flash Message
            session()->flash('error', 'Something goes wrong while creating category!!');
            // Reset Form Fields After Creating Category
            $this->resetFields();
        }
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
