<div>
<div class="col-md-12">

<h3> Step 3</h3>



<table class="table">

    <tr>

        <td>Product Name:</td>

        <td><strong>{{$name}}</strong></td>

    </tr>

    <tr>

        <td>Email:</td>

        <td><strong>{{$email}}</strong></td>

    </tr>

    <tr>

        <td>Pincode:</td>

        <td><strong>{{$pincode}}</strong></td>

    </tr>

    <tr>

        <td>Street Name:</td>

        <td><strong>{{$street_name}}</strong></td>

    </tr>

    <tr>

        <td>Country:</td>

        <td><strong>{{$country}}</strong></td>

    </tr>

</table>



<button class="btn btn-success btn-lg pull-right" wire:click="submitForm" type="button">Finish!</button>

<button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(2)">Back</button>

</div>
</div>
