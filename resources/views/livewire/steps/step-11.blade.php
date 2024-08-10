<div>
<div class="step-one">
<div class="card">
<div class="card-header">STEP 11/12 - Work Time Working Time Directive</div>
<div class="card-body">
<div class="row">
   <div class="col-md-8">
      <div class="form-group">
         <label for="understand_wtd">  Please confirm if you understand all relevant information
         on the Working Time Directive?</label>
         <select id="understand_wtd" class="form-control" wire:model.defer="data.working_time_directive.understand_wtd">
            <option value="">Select Option</option>
            <option value="1">Yes</option>
            <option value="0">No</option>
         </select>
      </div>
   </div>
   <div class="col-md-8">
      <div class="form-group">
         <label for="opt_out_48hr_week">  
         Please confirm if you wish to opt out of the 48hr
         working week with regards to any assignment offered by JAR
         Site Solution Ltd and accepted by the Temporary Worker* </label>
         <select id="opt_out_48hr_week" class="form-control" wire:model.defer="data.working_time_directive.opt_out_48hr_week">
            <option value="">Select Option</option>
            <option value="1">Yes</option>
            <option value="0">No</option>
         </select>
      </div>
   </div>
   <div class="col-md-8">
   <div class="form-group">
    <label for=""> Futher information founeded at</label>
    <input type="text" class="form-control" value="https://www.gov.uk/terrorism-national-emergency" disabled>
   </div>
   </div>
</div>