<?php

namespace App\Http\Livewire\Teachers;

use App\Models\Teacher;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search = '';
    protected $listeners = [
        'deleteTeacher' => 'destroy'
    ];
    public function render()
    {
        return view('livewire.teachers.index', ['teachers' => Teacher::where('name', 'like', '%' . $this->search . '%')->paginate(10)])->layout('layouts.app', ['title' => 'Guru']);;
    }
    public function destroy($id)
    {
        try {
            Teacher::find($id)->delete();
            session()->flash('success', "Major Deleted Successfully!!");
        } catch (\Exception $e) {
            session()->flash('error', "Something goes wrong while deleting Major!!");
        }
    }
}
