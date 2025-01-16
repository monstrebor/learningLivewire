<div>
    {{-- Stop trying to control. --}}
    <button class="btn btn-danger" wire:click='delete,{{ $this->userId }}'
        wire:confirm.prompt="Are you a nigga? Type DELETE to confirm|DELETE">Delete</button>
</div>
