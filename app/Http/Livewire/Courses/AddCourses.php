<?php

namespace App\Http\Livewire\Courses;
use App\Models\Course;

use Livewire\Component;

class AddCourses extends Component
{
    public $courses_code, $courses_name;
    public function render()
    {
        return view('livewire.courses.create');
    }
    public function store()
    {

            // Create Category
            Course::create([
                'courses_code' => $this->courses_code,
                'courses_name' => $this->courses_name
            ]);

            // Set Flash Message
            session()->flash('message', 'Data Berhasil Disimpan.');

        return redirect()->route('courses.index');
    }
}

