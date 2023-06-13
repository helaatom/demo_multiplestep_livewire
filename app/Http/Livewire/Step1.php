<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\User;

class Step1 extends Component
{
    public $currentStep = 1;

    public $name, $email, $phone, $state, $city,$street_name,$country,$pincode;

    public $successMessage = '';

        /**

     * Write code on Method

     *

     * @return response()

     */


    public function firstStepSubmit()

    {

        $validatedData = $this->validate([

            'name' => 'required',

            'phone' => 'required|numeric',

            'email' => 'required',

        ]);

 

        $this->currentStep = 2;

    }
       /**

     * Write code on Method

     *

     * @return response()

     */
    public function render()
    {
        return view('livewire.step1');
    }
}
