<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}

    <h1 wire:loading.class='opacity-50' class="text-primary">Loading States</h1>
    <form wire:submit='save'>
        <div wire:loading.remove class="alert alert-warning">
            Instructions
        </div>
        <div wire:target='save' wire:loading.delay.long class="alert alert-primary">
            Saving Form...
        </div>
        <button wire:target='save' wire:click='save' type="submit" class="btn btn-primary">
            Save
            <div wire:target='save' wire:loading class="spinner-border spinner-border-sm"></div>
        </button>
    </form>
    <div wire:loading.block wire:target='delete' class="alert alert-secondary">
        Deleting Form...
    </div>
    <button wire:loading.attr="disabled" wire:target='delete' wire:click='delete' class="btn btn-danger">
        Delete
        <div wire:target='delete' wire:loading class="spinner-border spinner-border-sm"></div>
    </button>
</div>
