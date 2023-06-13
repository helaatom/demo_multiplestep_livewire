<div>
<div class="col-md-12">

<h3> Step 1</h3>



<div class="form-group">

    <label for="title"> Name:</label>

    <input type="text" wire:model="name" class="form-control" id="name">

    @error('name') <span class="error">{{ $message }}</span> @enderror

</div>

<div class="form-group">

    <label for="description">phone:</label>

    <input type="text" wire:model="phone" class="form-control" id="phone"/>

    @error('phone') <span class="error">{{ $message }}</span> @enderror

</div>



<div class="form-group">

    <label for="description">Email:</label>

    <input type="email" wire:model="email" class="form-control" id="email">

    @error('email') <span class="error">{{ $message }}</span> @enderror

</div>



<button class="btn btn-primary nextBtn btn-lg pull-right" wire:click="firstStepSubmit" type="button" >Next</button>

</div>
</div>
