<div>
<div class="step-one">
           <div class="card">
               <div class="card-header">STEP 7/12 - Financial Information</div>
               <div class="card-body">
                   <div class="row">
                       <div class="col-md-8">
        <div class="form-group">
            <label for="declared_bankrupt">Have you ever been declared bankrupt or insolvent?</label>
            <select id="declared_bankrupt" class="form-control" wire:model.defer="data.financial_information.declared_bankrupt">
                <option value="">Select Option</option>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
            </div>
        </div>
        <div class="col-md-8">
        <div class="form-group">
            <label for="subject_to_judgements">Are you the subject of any Counter Court Judgements of Proceedings?</label>
            <select id="subject_to_judgements" class="form-control" wire:model.defer="data.financial_information.subject_to_judgements">
                <option value="">Select Option</option>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>
        </div>
        <div class="col-md-8">
        <div class="form-group">
            <label for="details">if Yes, Please provide details & date*</label>
            <textarea id="details" class="form-control" wire:model.defer="data.financial_information.details"></textarea>
        </div>
        </div>
</div>
