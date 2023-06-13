<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\User;

class Step2 extends Component
{
    public $currentStep = 1;

    public $name, $email, $phone, $state, $city,$street_name,$country,$pincode;

    public $successMessage = '';

    public function secondStepSubmit()

    {

        $validatedData = $this->validate([

            'street_name' => 'required',

            'country' => 'required',
            'state' => 'required',

        ]);

  

        $this->currentStep = 3;

    }
    public function render()
    {
        return view('livewire.step2');
    }
}
