<div>

<div id="step-1">
           <div class="card">
               <div class="card-header ">STEP 1/12 - Personal Details</div>
               <div class="card-body">
                   <div class="row">
                       <div class="col-md-4">
                   <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" id="first_name" class="form-control" wire:model.defer="data.personal_information.first_name">
            @error('data.personal_information.first_name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
         </div>

         <div class="col-md-4">
        <div class="form-group">
            <label for="middle_name">Middle Name</label>
            <input type="text" id="middle_name" class="form-control" wire:model.defer="data.personal_information.middle_name">
        </div>
         </div>
         <div class="col-md-4">
        <div class="form-group">
            <label for="surname">Surname</label>
            <input type="text" id="surname" class="form-control" wire:model.defer="data.personal_information.surname">
            @error('data.personal_information.surname') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
         </div>

         <div class="col-md-4">
        <div class="form-group">
            <label for="surname_at_birth">Surname at Birth</label>
            <input type="text" id="surname_at_birth" class="form-control" wire:model.defer="data.personal_information.surname_at_birth">
        </div>
         </div>
         <div class="col-md-4">
        <div class="form-group">
            <label for="title">Title</label>
            <select id="title" class="form-control" wire:model.defer="data.personal_information.title">
                <option value="">Select Title</option>
                <option value="Mr.">Mr.</option>
                <option value="Mrs.">Mrs.</option>
                <option value="Miss.">Miss.</option>
                <option value="Dr.">Dr.</option>
                <option value="Prof.">Prof.</option>
            </select>
        </div>
         </div>
         <div class="col-md-4">
        <div class="form-group">
            <label for="gender">Gender</label>
            <select id="gender" class="form-control" wire:model.defer="data.personal_information.gender">
                <option value="">Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>
        </div>
         </div>
         <div class="col-md-4">
        <div class="form-group">
            <label for="date_of_birth">Date of Birth</label>
            <input type="date" id="date_of_birth" class="form-control" wire:model.defer="data.personal_information.date_of_birth">
            @error('data.personal_information.date_of_birth') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
         </div>
         <div class="col-md-4">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" class="form-control" wire:model.defer="data.personal_information.email">
            @error('data.personal_information.email') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
         </div>
         <div class="col-md-4">
        <div class="form-group">
            <label for="mobile_number">Mobile Number</label>
            <input type="text" id="mobile_number" class="form-control" wire:model.defer="data.personal_information.mobile_number">
        </div>
         </div>
         <div class="col-md-3">
        <div class="form-group">
            <label for="place_of_birth">Place of Birth</label>
            <input type="text" id="place_of_birth" class="form-control" wire:model.defer="data.personal_information.place_of_birth">
        </div>
         </div>
         <div class="col-md-3">
        <div class="form-group">
            <label for="home_telephone_number">Home Telephone Number</label>
            <input type="text" id="home_telephone_number" class="form-control" wire:model.defer="data.personal_information.home_telephone_number">
        </div>
         </div>
         <div class="col-md-3">
        <div class="form-group">
            <label for="mothers_maiden_name">Mother's Maiden Name</label>
            <input type="text" id="mothers_maiden_name" class="form-control" wire:model.defer="data.personal_information.mothers_maiden_name">
        </div>
         </div>
         <div class="col-md-3">
        <div class="form-group">
            <label for="nationality">Nationality</label>
            <input type="text" id="nationality" class="form-control" wire:model.defer="data.personal_information.nationality">
            @error('data.personal_information.nationality') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
         </div>
</div>
