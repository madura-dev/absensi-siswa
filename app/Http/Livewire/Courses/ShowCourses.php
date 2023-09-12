<?php

namespace App\Http\Livewire\Courses;
use App\Models\Course;

use Livewire\Component;
use Livewire\WithPagination;

class ShowCourses extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $courses_code, $courses_name;
    public $search = '';
    protected $listeners = [
        'deleteCourse' => 'destroy'
    ];
    public function render()
    {
        return view('livewire.courses.index', ['courses' => course::where('courses_name', 'like', '%' . $this->search . '%')->paginate(5)])->layout('layouts.app', ['title' => 'Guru']);
    }
    public function destroy($id)
    {
        try {
            Course::find($id)->delete();
            session()->flash('message', "Course Deleted Successfully!!");
        } catch (\Exception $e) {
            session()->flash('error', "Something goes wrong while deleting Course!!");
        }
    }
}
