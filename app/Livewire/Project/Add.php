<?php

namespace App\Livewire\Project;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;


class Add extends Component
{
    use WithFileUploads;

    public $name, $last_name, $phone_number, $department, $email, $password, $photo;

    public function add(){

        $this->validate([
            'name'=> 'required',
            'last_name'=> 'required',
        ],[
            'name.required' => "กรุณากรอกชื่อ",
            'last_name.required' => "กรุณากรอกนามสกุล",
        ]);
        //dd($this->department);
        try {
          $data = User::create([
            'name' => $this->name,
            'last_name' => $this->last_name,
            'phone_number' => $this->phone_number,
            'department' => $this->department,
            'email' => $this->email,
            'password' => Hash::make ($this->password),
            'created_by' => auth()->user()->id,
           ]);
           if($this->photo){
            $fullpath =  $this->photo->store('photos','public');
            $data->profile_photo_path = $fullpath;
            $data->save();
            }
           return redirect()->to(route('projects'));
        }
        catch (\Exception $e) {
            dd($e);
        }
    }
    public function render()
    {
        return view('livewire.project.add');
    }
}
