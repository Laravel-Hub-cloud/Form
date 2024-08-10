<div>
    
<div class="step-one">
           <div class="card">
               <div class="card-header">STEP 4/12 - Employment History</div>
               <div class="card-body">
                   <div class="row">
                       <div class="col-md-6">
        <div class="form-group">
            <label for="employer_agency">Employer/Agency</label>
            <input type="text" id="employer_agency" class="form-control" wire:model.defer="data.employment_histories.employer_agency">
            @error('data.employment_histories.employer_agency') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
                       </div>
                       <div class="col-md-6">
        <div class="form-group">
            <label for="position_held">Position Held</label>
            <input type="text" id="position_held" class="form-control" wire:model.defer="data.employment_histories.position_held">
        </div>
                       </div>
                       <div class="col-md-3">
        <div class="form-group">
            <label for="date_from">Date From</label>
            <input type="date" id="date_from" class="form-control" wire:model.defer="data.employment_histories.date_from">
        </div>
                       </div>
                       <div class="col-md-3">
        <div class="form-group">
            <label for="city_or_town">City or Town</label>
            <input type="text" id="city_or_town" class="form-control" wire:model.defer="data.employment_histories.city_or_town">
        </div>
                       </div>
                       <div class="col-md-3">
        <div class="form-group">
            <label for="contact">Contact</label>
            <input type="text" id="contact" class="form-control" wire:model.defer="data.employment_histories.contact">
        </div>
                       </div>
    
</div>
