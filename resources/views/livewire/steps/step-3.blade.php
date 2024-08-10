<div>
   

<div class="step-one">
           <div class="card">
               <div class="card-header">STEP 3/12 - Address Details</div>
               <div class="card-body">
                   <div class="row">
                       <div class="col-md-4">
        <div class="form-group">
            <label for="current_address">Current Address</label>
            <input type="text" id="current_address" class="form-control" wire:model.defer="data.address_history.current_address">
            @error('data.address_history.current_address') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
                       </div>
                       <div class="col-md-4">
        <div class="form-group">
            <label for="house_name_or_number">House Name or Number</label>
            <input type="text" id="house_name_or_number" class="form-control" wire:model.defer="data.address_history.house_name_or_number">
        </div>
                       </div>
                       <div class="col-md-4">
        <div class="form-group">
            <label for="street_name">Street Name</label>
            <input type="text" id="street_name" class="form-control" wire:model.defer="data.address_history.street_name">
        </div>
                       </div>
                       <div class="col-md-4">
        <div class="form-group">
            <label for="city_or_town">City or Town</label>
            <input type="text" id="city_or_town" class="form-control" wire:model.defer="data.address_history.city_or_town">
        </div>
                       </div>
                       <div class="col-md-4">
        <div class="form-group">
            <label for="country">Country</label>
            <input type="text" id="country" class="form-control" wire:model.defer="data.address_history.country">
        </div>
                       </div>
                       <div class="col-md-4">
        <div class="form-group">
            <label for="post_code">Post Code</label>
            <input type="text" id="post_code" class="form-control" wire:model.defer="data.address_history.post_code">
        </div>
                       </div>
                       <div class="col-md-4">
        <div class="form-group">
            <label for="date_from">Date From</label>
            <input type="date" id="date_from" class="form-control" wire:model.defer="data.address_history.date_from">
        </div>
                       </div>
    </form>
</div>
