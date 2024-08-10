<div class="container mt-2">
    <div class="progress-container">
        <div class="progress-bar">
            <div class="progress" style="width: '{{ ($currentStep / 12) * 100 }}%'"></div>
        </div>
        <ol class="steps">
            @for ($i = 1; $i <= 12; $i++)
                <li class="step @if($i <= $currentStep) active @endif">
                    <span class="number">{{ $i }}</span>
                </li>
            @endfor
        </ol>
    </div>

    @include('livewire.steps.step-' . $currentStep)

    
    <div class="nav-buttons mt-2">
    <!-- Previous Button -->
    @if ($currentStep > 1)
            <button wire:click="decreaseStep" class=" prev">Previous</button>
        @else
            <button class="prev" disabled>Previous</button>
        @endif


    <!-- Next or Submit Button -->
    @if ($currentStep < 12)
        <button wire:click="increaseStep" class="nav-button next">Next</button>
    @else
        <button wire:click="submitForm" class="btn btn-success">Submit</button>
    @endif
</div>
</div>
