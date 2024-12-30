<div>
    {{-- Success is as dangerous as failure. --}}
    <div class="offset-3 col-6">
        <form wire:submit='save'>
            <div class="mb-3">
                <label for="form.name" class="form-label">Name</label>
                <input wire:model='form.name' type="text" class="form-control">
                @error('form.name')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="form.email" class="form-label">Email</label>
                <input wire:model='form.email' type="email" class="form-control">
                @error('form.email')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="form.password" class="form-label">Password</label>
                <input wire:model.live.debounce.50ms='form.password' type="password" class="form-control">
                @error('form.password')
                    <span class="text-danger">
                        {{ $message }}
                    </span>
                @enderror
            </div>
            <button class="btn btn-primary" type="submit">Submit
                <div wire:loading class="spinner-border spinner-border-sm"></div>
            </button>
        </form>
    </div>
</div>
