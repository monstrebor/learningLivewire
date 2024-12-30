<div>
    <div class="card offset-3 mt-4 col-6">
        <div class="card-header">
            Counter App
        </div>
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-info">
                    {{ session('status') }}
                </div>
            @endif
            <h1 class="text-primary">Your Count is: {{ $count }}</h1>
            <button wire:click='increment' class="btn btn-secondary">incrementing</button>
            <button wire:click='decrement' class="btn btn-secondary">decrementing</button>
        </div>
    </div>
    <livewire:create-user />
</div>
