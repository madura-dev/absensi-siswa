<?php

namespace App\Http\Livewire\Courses;
use App\Models\Course;
use Livewire\Component;
use Livewire\WithPagination;

class UpdateCourses extends Component
{
    public $courses_code, $courses_name, $courses_id;

    public function mount($id)
    {
        $course = Course::find($id);
        if($course) {
        $this->courses_id   = $course->id;
        $this->courses_code  = $course->courses_code;
        $this->courses_name = $course->courses_name;
        }
    }

    public function update()
    {
        $this->validate([
            'courses_code'   => 'required',
            'courses_code' => 'required',
        ]);

        if($this->courses_id) {

            $course = Course::find($this->courses_id);

            if($course) {
                $course->update([
                    'courses_code'     => $this->courses_code,
                    'courses_name'   => $this->courses_name
                ]);
            }
        }

        //flash message
        session()->flash('message', 'Data Berhasil Diupdate.');

        //redirect
        return redirect()->route('courses.index');
    }
    public function render()
    {
        return view('livewire.courses.update');
    }


}

