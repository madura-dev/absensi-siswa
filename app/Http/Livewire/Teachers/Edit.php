<?php

namespace App\Http\Livewire\Teachers;

use App\Models\Teacher;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;

class Edit extends Component
{
    use WithFileUploads;
    public $id_teacher_old, $teacher_id, $name, $gender, $birthplace, $birthday, $address, $last_education, $phone_number, $position, $nominal_salary, $email, $password, $image, $image_old;

    public function mount($teachers)
    {
        $result = Teacher::find($teachers);

        if($teachers) {
            $this->id_teacher_old   = $result->id;
            $this->teacher_id       = $result->teacher_id;
            $this->name             = $result->name;
            $this->gender           = $result->gender;
            $this->birthplace       = $result->birthplace;
            $this->birthday         = $result->birthday;
            $this->address          = $result->address;
            $this->last_education   = $result->last_education;
            $this->phone_number     = $result->phone_number;
            $this->position         = $result->position;
            $this->nominal_salary   = $result->nominal_salary;
            $this->email            = $result->email;
            $this->password         = $result->password;
            $this->image_old        = $result->image;
        }
    }

    public function update()
    {
        $rules = [
            'name'              => 'required',
            'gender'            => 'required',
            'birthplace'        => 'required',
            'birthday'          => 'required',
            'address'           => 'required',
            'last_education'    => 'required',
            'phone_number'      => 'required|numeric',
            'position'          => 'required',
            'nominal_salary'    => 'required',
            'password'          => 'required',
        ];

        if($this->id_teacher_old) {
            $teacher = Teacher::find($this->id_teacher_old);

            if($teacher->email != $this->email){
                $rules['email'] = 'required|unique:teachers,email|email:rfc,dns';
            }

            $this->validate($rules);

            if($teacher) {

                if($this->image){
                    $file_name = time() . "." . $this->image->extension();
                    $this->image->storeAs('images', $file_name);
                    if($this->image_old != 'default.jpg'){
                        File::delete('uploads/images/'. $this->image_old);
                    }
                }else{
                    $file_name = $teacher->image;
                }

                $teacher->update([
                    'teacher_id'        => $this->teacher_id,
                    'name'              => $this->name,
                    'gender'            => $this->gender,
                    'birthplace'        => $this->birthplace,
                    'birthday'          => $this->birthday,
                    'address'           => $this->address,
                    'last_education'    => $this->last_education,
                    'phone_number'      => $this->phone_number,
                    'position'          => $this->position,
                    'nominal_salary'    => $this->nominal_salary,
                    'email'             => $this->email,
                    'password'          => $this->password,
                    'image'             => $file_name,
                ]);
            }
        }

        //flash message
        session()->flash('message', 'Data Berhasil Diubah.');

        return redirect()->route('teacher.index');
    }

    public function render()
    {
        return view('livewire.teachers.edit');
    }
}
