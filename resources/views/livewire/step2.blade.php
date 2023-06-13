<div>
<div class="col-md-12">

<h3> Step 2</h3>

<div class="form-group">

    <label for="description">State</label><br/>

    <input type="text" wire:model="state" class="form-control" id="state"/>

    @error('state') <span class="error">{{ $message }}</span> @enderror

</div>
<div class="form-group">

    <label for="description">City</label><br/>

    <input type="text" wire:model="city" class="form-control" id="city"/>

    @error('city') <span class="error">{{ $message }}</span> @enderror

</div>
<div class="form-group">

    <label for="description">Country</label><br/>

    <input type="text" wire:model="country" class="form-control" id="country"/>

    @error('country') <span class="error">{{ $message }}</span> @enderror

</div>

<div class="form-group">

    <label for="description">Pincode</label><br/>

    <input type="text" wire:model="pincode" class="form-control" id="pincode"/>

    @error('pincode') <span class="error">{{ $message }}</span> @enderror

</div>



<div class="form-group">

    <label for="description">Stree Name</label>

    <input type="text" wire:model="street_name" class="form-control" id="street_name"/>

    @error('street_name') <span class="error">{{ $message }}</span> @enderror

</div>



<button class="btn btn-primary nextBtn btn-lg pull-right" type="button" wire:click="secondStepSubmit">Next</button>

<button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(1)">Back</button>

</div>
</div>
