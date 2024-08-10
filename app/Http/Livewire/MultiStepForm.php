<?php

namespace App\Http\Livewire;

use App\Models\Offence;
use Livewire\Component;
use App\Models\Document;
use App\Models\NextOfKin;
use App\Models\Declaration;
use App\Models\Qualification;
use Livewire\WithFileUploads;
use App\Models\AddressHistory;
use App\Models\HealthDisability;
use App\Models\EmploymentHistory;
use App\Models\CharacterReference;
use App\Models\PersonalInformation;
use App\Models\FinancialInformation;
use App\Models\WorkingTimeDirective;

class MultiStepForm extends Component
{
    use WithFileUploads;
    
    public $currentStep = 1;
    public $totalSteps = 12;

    public $data = [
        'personal_information' => [],
        'documents' => [],
        'address_history' => [],
        'employment_histories' => [],
        'character_references' => [],
        'offences' => [],
        'financial_information' => [],
        'qualifications' => [],
        'health_disability' => [],
        'next_of_kin' => [],
        'working_time_directives' => [],
        'declarations' => [],
    ];
    

    public function increaseStep()
    {
        $this->validateStep();
        $this->currentStep++;
    }

    public function decreaseStep()
    {
        if ($this->currentStep > 1) {
        $this->currentStep--;
    }
    }

    public function validateStep()
    {
        if ($this->currentStep == 1) {
            $this->validate([
                'data.personal_information.first_name' => 'required|string|max:255',
                'data.personal_information.surname' => 'required|string|max:255',
                'data.personal_information.email' => 'required|email|max:255',
                // Additional rules for step 1
            ]);
        } elseif ($this->currentStep == 2) {
            $this->validate([
                'data.documents.ni_number' => 'required|numeric',
        'data.documents.proof_of_ni_number' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
        'data.documents.right_to_work_in_uk' => 'required|in:Yes,No',
        'data.documents.proof_of_right_to_work' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
        'data.documents.require_brp_visa' => 'required|in:Yes,No',
        'data.documents.brp_visa_copy' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
        'data.documents.hold_sia_license' => 'required|in:Yes,No',
        'data.documents.sia_license_picture' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
        'data.documents.sia_license_number' => 'nullable|string',
        'data.documents.sia_license_expiry' => 'nullable|date',
        'data.documents.hold_dbs_certificate' => 'required|in:Yes,No',
        'data.documents.dbs_certificate_copy' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
                // Additional rules for step 2
            ]);
        } elseif ($this->currentStep == 3) {
            $this->validate([
                'data.address_history.current_address' => 'required|string|max:255',
                'data.address_history.house_name_or_number' => 'required|string|max:255',
                'data.address_history.street_name' => 'required|string|max:255',
                'data.address_history.city_or_town' => 'required|string|max:255',
                'data.address_history.country' => 'required|string|max:255',
                'data.address_history.post_code' => 'required|string|max:255',
                'data.address_history.date_from' => 'required|date',
                // Additional rules for step 3
            ]);
        } elseif ($this->currentStep == 4) {
            $this->validate([
                'data.employment_histories.employer_agency' => 'required|string|max:255',
                'data.employment_histories.position_held' => 'required|string|max:255',
                'data.employment_histories.date_from' => 'required|date',
                'data.employment_histories.city_or_town' => 'required|string|max:255',
                'data.employment_histories.contact' => 'required|string|max:255',
                // Additional rules for step 4
            ]);
        } elseif ($this->currentStep == 5) {
            $this->validate([
                'data.character_references.reference_number' => 'required|string|max:255',
                'data.character_references.house_name_or_number' => 'required|string|max:255',
                'data.character_references.street_name' => 'required|string|max:255',
                'data.character_references.city_or_town' => 'required|string|max:255',
                'data.character_references.post_code' => 'required|string|max:10',
                'data.character_references.year_known' => 'required|string|max:4',
            ]);
        } elseif ($this->currentStep == 6) {
            $this->validate([
                'data.offences.has_unspent_conviction' => 'required|boolean',
                'data.offences.details' => 'nullable|string',
                // Additional rules for step 6
            ]);
        } elseif ($this->currentStep == 7) {
            $this->validate([
                'data.financial_information.declared_bankrupt' => 'required|boolean',
                'data.financial_information.subject_to_judgements' => 'required|boolean',
                'data.financial_information.details' => 'nullable|string',
                // Additional rules for step 7
            ]);
        } elseif ($this->currentStep == 8) {
            $this->validate([
                'data.qualifications.file1' => 'nullable|file|mimes:pdf,jpeg,png',
                'data.qualifications.file2' => 'nullable|file|mimes:pdf,jpeg,png',
                'data.qualifications.file3' => 'nullable|file|mimes:pdf,jpeg,png',
                // Additional rules for step 8
            ]);
        } elseif ($this->currentStep == 9) {
            $this->validate([
                'data.health_disability.has_disability' => 'required|boolean',
                'data.health_disability.disability_details' => 'nullable|string',
                'data.health_disability.advised_no_night_shift' => 'required|boolean',
                'data.health_disability.fitness_to_work_certificate' => 'required|boolean',
                // Additional rules for step 9
            ]);
        } elseif ($this->currentStep == 10) {
            $this->validate([
                'data.next_of_kin.name' => 'required|string|max:255',
                'data.next_of_kin.relationship' => 'required|string|max:255',
                'data.next_of_kin.contact_number' => 'required|string|max:255',
                // Additional rules for step 10
            ]);
        } elseif ($this->currentStep == 11) {
            $this->validate([
                'data.working_time_directive.understand_wtd' => 'required|boolean',
                'data.working_time_directive.opt_out_48hr_week' => 'required|boolean',
                // Additional rules for step 11
            ]);
        } elseif ($this->currentStep == 12) {
            $this->validate([
                'data.declarations.agreed' => 'required|boolean',
                'data.declarations.declaration_text' => 'required|string',
                'data.declarations.signature' => 'required|string',
                'data.declarations.print_name' => 'required|string',
                'data.declarations.date_completed' => 'required|date',
                // Additional rules for step 12
            ]);
        }
    }

    public function submitForm()
    {
        // Final validation
        $this->validate([
            'data.personal_information.first_name' => 'required|string|max:255',
            'data.personal_information.surname' => 'required|string|max:255',
            'data.personal_information.email' => 'required|email|max:255',
            'data.documents.ni_number' => 'required|string|max:255',
            'data.documents.right_to_work_in_uk' => 'required|in:Yes,No',
            'data.address_history.current_address' => 'required|string|max:255',
            'data.address_history.house_name_or_number' => 'required|string|max:255',
            'data.address_history.street_name' => 'required|string|max:255',
            'data.address_history.city_or_town' => 'required|string|max:255',
            'data.address_history.country' => 'required|string|max:255',
            'data.address_history.date_from' => 'required|date',
            'data.employment_histories.employer_agency' => 'required|string|max:255',
            'data.employment_histories.position_held' => 'required|string|max:255',
            'data.employment_histories.date_from' => 'required|date',
            'data.employment_histories.city_or_town' => 'required|string|max:255',
            'data.employment_histories.contact' => 'required|string|max:255',
            'data.character_references.reference_number' => 'required|string|max:255',
            'data.character_references.house_name_or_number' => 'required|string|max:255',
            'data.character_references.street_name' => 'required|string|max:255',
            'data.character_references.city_or_town' => 'required|string|max:255',
            'data.character_references.year_known' => 'required|string|max:4',
            'data.offences.has_unspent_conviction' => 'required|boolean',
            'data.financial_information.declared_bankrupt' => 'required|boolean',
            'data.financial_information.subject_to_judgements' => 'required|boolean',
            'data.qualifications.file1' => 'nullable|file|mimes:pdf,jpeg,png',
            'data.health_disability.has_disability' => 'required|boolean',
            'data.next_of_kin.name' => 'required|string|max:255',
            'data.working_time_directive.understand_wtd' => 'required|boolean',
            // Additional validation rules
        ]);

        // Save the data
        PersonalInformation::create($this->data['personal_information']);
        Document::create($this->data['documents']);
        AddressHistory::create($this->data['address_history']);
        EmploymentHistory::create($this->data['employment_histories']);
        CharacterReference::create($this->data['character_references']);
        Offence::create($this->data['offences']);
        FinancialInformation::create($this->data['financial_information']);
        Qualification::create($this->data['qualifications']);
        HealthDisability::create($this->data['health_disability']);
        NextOfKin::create($this->data['next_of_kin']);
        WorkingTimeDirective::create($this->data['working_time_directives']);
        Declaration::create($this->data['declarations']);

        session()->flash('message', 'Form successfully submitted!');
        $this->reset(); // Reset form data
        $this->currentStep = 1; // Reset to the first step
        return redirect()->route('register.success'); // Redirect to the dashboard page
    }

    public function render()
    {
        return view('livewire.multi-step-form');
    }
}
