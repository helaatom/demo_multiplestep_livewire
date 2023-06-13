<?php

  

namespace App\Http\Livewire;

  

use Livewire\Component;

use App\Models\User;

  

class Wizard extends Component

{

    public $currentStep = 1;

    public $name, $email, $phone, $state, $city,$street_name,$country,$pincode;

    public $successMessage = '';

  

    /**

     * Write code on Method

     *

     * @return response()

     */

    public function render()

    {

        return view('livewire.wizard');

    }

  

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

    public function secondStepSubmit()

    {

        $validatedData = $this->validate([

            'street_name' => 'required',

            'country' => 'required',
            'state' => 'required',

        ]);

  

        $this->currentStep = 3;

    }

  

    /**

     * Write code on Method

     *

     * @return response()

     */

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

  

    /**

     * Write code on Method

     *

     * @return response()

     */

    public function back($step)

    {

        $this->currentStep = $step;    

    }

  

    /**

     * Write code on Method

     *

     * @return response()

     */

    public function clearForm()

    {

        $this->name = '';

        $this->email = '';

        $this->phone = '';

        $this->state = '';

        $this->city = 1;
        $this->street_name = '';

        $this->country = '';

        $this->pincode = '';

    }

}?>