<?php

namespace App\Http\Livewire\Teachers;

use Livewire\Component;
use App\Models\Teacher;

class Create extends Component
{
    public $teacher_id, $name, $gender, $birthplace, $birthday, $address, $last_education, $phone_number, $position, $nominal_salary, $email, $password;
    public function render()
    {
        return view('livewire.teachers.create');
    }

    public function store()
    {
        $this->validate([
            'name'              => 'required',
            'gender'            => 'required',
            'birthplace'        => 'required',
            'birthday'          => 'required',
            'address'           => 'required',
            'last_education'    => 'required',
            'phone_number'      => 'required|numeric',
            'position'          => 'required',
            'nominal_salary'    => 'required',
            'email'             => 'required|unique:teachers,email|email:rfc,dns',
            'password'          => 'required',
        ]);

        Teacher::create([
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
            'image'             => 'gambar.jpeg',
        ]);

        session()->flash('message', 'Data Berhasil Disimpan.');

        return redirect()->route('teacher.index');
    }
}
