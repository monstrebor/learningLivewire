<div>
    {{-- Success is as dangerous as failure. --}}
    <div class="offset-3 col-6">
        <h1 class="h5">Dynamic dependents dropdown</h1>
        @php
            $showCounty = App\Models\County::find($selectedcounty);
        @endphp
        {{ $showCounty->name ?? '' }}
        <div class="mb-3">
            <select wire:model.live='selectedcounty' name="" id="" class="form-select">
                <option value="">select a country</option>
                @foreach ($counties as $county)
                    <option value="{{ $county->id }}">{{ $county->name }}</option>
                @endforeach
            </select>
        </div>
        @if (!is_null($selectedcounty))
            <div class="mb-3">
                <select wire:model.live='selectedsubcounty' name="" id="" class="form-select">
                    <option value="">select a subcountry</option>
                    @foreach ($subcounties as $county)
                        <option value="{{ $county->id }}">{{ $county->name }}</option>
                    @endforeach
                </select>
            </div>
        @endif
    </div>
    <livewire:LoadingExample>
</div>
