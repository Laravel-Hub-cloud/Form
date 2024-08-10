<div>
<div class="step-one">
           <div class="card">
               <div class="card-header">STEP 9/12 - Health Disability</div>
               <div class="card-body">
                   <div class="row">
                    
                       <div class="col-md-8">
        <div class="form-group">
            <label for="has_disability">Do you have any disability which may make it difficult for you to carry out 
            functions which are essential for the role you seek?</label>
            <select id="has_disability" class="form-control" wire:model.defer="data.health_disability.has_disability">
                <option value="">Select Option</option>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>
                       </div>
                       <div class="col-md-8">
        <div class="form-group">
            <label for="disability_details">if Yes, Please provide details & date*</label>
            <textarea id="disability_details" class="form-control" wire:model.defer="data.health_disability.disability_details"></textarea>
        </div>
                       </div>
                       <div class="col-md-8">
        <div class="form-group">
            <label for="advised_no_night_shift">  Have you been advised not to undertake night or shift work?</label>
            <select id="advised_no_night_shift" class="form-control" wire:model.defer="data.health_disability.advised_no_night_shift">
                <option value="">Select Option</option>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>
                       </div>
                       <div class="col-md-8">
        <div class="form-group">
            <label for="fitness_to_work_certificate">  Do you hold a current Fitness to Work Certificate?(only required if operation plant & machinery)*</label>
            <select id="fitness_to_work_certificate" class="form-control" wire:model.defer="data.health_disability.fitness_to_work_certificate">
                <option value="">Select Option</option>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>
                       </div>
</div>
