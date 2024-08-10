<div>
    
<div id="step-2">
           <div class="card">
               <div class="card-header">STEP 2/12 - Documents Details</div>
               <div class="card-body">
                   <div class="row">
            <div class="col-md-6">
        <div class="form-group">
            <label for="ni_number">NI Number</label>
            <input type="number" id="ni_number" class="form-control" wire:model.defer="data.documents.ni_number">
            @error('data.documents.ni_number') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
            </div>
            <div class="col-md-6">
        <div class="form-group">
            <label for="proof_of_ni_number">Proof of NI Number</label>
            <input type="file" id="proof_of_ni_number" class="form-control" wire:model.defer="data.documents.proof_of_ni_number">
        </div>
            </div>
            <div class="col-md-6">
        <div class="form-group">
            <label for="right_to_work_in_uk">Right to Work in UK</label>
            <select id="right_to_work_in_uk" class="form-control" wire:model.defer="data.documents.right_to_work_in_uk">
                <option value="">Select Option</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
        </div>
            </div>
        <div class="col-md-6">
        <div class="form-group">
            <label for="proof_of_right_to_work">Proof of Right to Work</label>
            <input type="file" id="proof_of_right_to_work" class="form-control" wire:model.defer="data.documents.proof_of_right_to_work">
        </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
            <label for="require_brp_visa">Require BRP Visa</label>
            <select id="require_brp_visa" class="form-control" wire:model.defer="data.documents.require_brp_visa">
                <option value="">Select Option</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
        </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
            <label for="brp_visa_copy">BRP Visa Copy</label>
            <input type="file" id="brp_visa_copy" class="form-control" wire:model.defer="data.documents.brp_visa_copy">
        </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
            <label for="hold_sia_license">Hold SIA License</label>
            <select id="hold_sia_license" class="form-control" wire:model.defer="data.documents.hold_sia_license">
                <option value="">Select Option</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
        </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
            <label for="sia_license_picture">SIA License Picture</label>
            <input type="file" id="sia_license_picture" class="form-control" wire:model.defer="data.documents.sia_license_picture">
        </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
            <label for="sia_license_number">SIA License Number</label>
            <input type="text" id="sia_license_number" class="form-control" wire:model.defer="data.documents.sia_license_number">
        </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
            <label for="sia_license_expiry">SIA License Expiry</label>
            <input type="date" id="sia_license_expiry" class="form-control" wire:model.defer="data.documents.sia_license_expiry">
        </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
            <label for="hold_dbs_certificate">Hold DBS Certificate</label>
            <select id="hold_dbs_certificate" class="form-control" wire:model.defer="data.documents.hold_dbs_certificate">
                <option value="">Select Option</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
        </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
            <label for="dbs_certificate_copy">DBS Certificate Copy</label>
            <input type="file" id="dbs_certificate_copy" class="form-control" wire:model.defer="data.documents.dbs_certificate_copy">
        </div>
        </div>
</div>
