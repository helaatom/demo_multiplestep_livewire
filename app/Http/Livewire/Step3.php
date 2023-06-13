<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\User;

class Step3 extends Component
{
    public $currentStep = 1;

    public $name, $email, $phone, $state, $city,$street_name,$country,$pincode;

    public $successMessage = '';

    public function submitForm()

    {

        User::create([

            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'state' => $this->state,
            'street_name' => $this->street_name,
            'country' => $this->country,
            'pincode' => $this->pincode,

        ]);

  

        $this->successMessage = 'User Created Successfully.';

  

        $this->clearForm();

  

        $this->currentStep = 1;

    }
    public function render()
    {
        return view('livewire.step3');
    }
}
