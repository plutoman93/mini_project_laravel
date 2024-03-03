<?php

namespace App\Livewire\Project;
use App\Models\User;
use Livewire\Component;

class Edit extends Component
{
    public $idd, $name, $last_name, $phone_number, $email, $department,$photo,$password;

    public function mount($id){
       //dd($id);
        $data = User::find ($id);
        $this->idd = $id;
        $this->name = $data->name;
        $this->last_name = $data->last_name;
        $this->phone_number = $data->phone_number;
        $this->email = $data->email;
        $this->department = $data->department;
    }

    public function edit(){
        User::where('id', $this->idd)->update([
            'name' => $this->name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'department' => $this->department,
            'phone_number' => $this->phone_number,
        ]);
        return redirect()->to(route('projects'));
    }
    public function render()
    {

        return view('livewire.project.edit');

    }
}
