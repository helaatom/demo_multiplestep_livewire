<div>

   

@if(!empty($successMessage))

<div class="alert alert-success">

   {{ $successMessage }}

</div>

@endif

  

<div class="stepwizard">

    <div class="stepwizard-row setup-panel">

        <div class="stepwizard-step">

            <a href="#step-1" type="button" class="btn btn-circle {{ $currentStep != 1 ? 'btn-default' : 'btn-primary' }}">1</a>

            <p>Step 1</p>

        </div>

        <div class="stepwizard-step">

            <a href="#step-2" type="button" class="btn btn-circle {{ $currentStep != 2 ? 'btn-default' : 'btn-primary' }}">2</a>

            <p>Step 2</p>

        </div>

        <div class="stepwizard-step">

            <a href="#step-3" type="button" class="btn btn-circle {{ $currentStep != 3 ? 'btn-default' : 'btn-primary' }}" disabled="disabled">3</a>

            <p>Step 3</p>

        </div>

    </div>

</div>

  

    <div class="row setup-content {{ $currentStep != 1 ? 'displayNone' : '' }}" id="step-1">

        <div class="col-xs-12">
        <livewire:step1 />
        </div>

    </div>

    <div class="row setup-content {{ $currentStep != 2 ? 'displayNone' : '' }}" id="step-2">

        <div class="col-xs-12">
        <livewire:step2 />
        </div>

    </div>

    <div class="row setup-content {{ $currentStep != 3 ? 'displayNone' : '' }}" id="step-3">

        <div class="col-xs-12">
        <livewire:step3 />
        </div>

    </div>

</div>