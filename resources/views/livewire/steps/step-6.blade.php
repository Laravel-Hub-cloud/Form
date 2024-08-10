<div>
    
<div class="step-one">
           <div class="card">
               <div class="card-header">STEP 6/12 - Offences,Caution & Conviction</div>
               <div class="card-body">
                   <div class="row">
                       <div class="col-md-8">
        <div class="form-group">
            <label for="has_unspent_conviction">Do you hold any unspent Criminal Conviction?</label>
            <select id="has_unspent_conviction" class="form-control" wire:model.defer="data.offences.has_unspent_conviction">
                <option value="">Select Option</option>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>
        </div>
        <div class="col-md-8">
        <div class="form-group">
            <label for="details">if Yes, Please provide details & date*</label>
            <textarea id="details" class="form-control" wire:model.defer="data.offences.details"></textarea>
        </div>
        </div>
</div>
