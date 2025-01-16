<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div class="card-body">
        {{ $name }} <br>
        Showing the email {{ $email }} <br>

        <input type="text" wire:model.live='name'>

        @foreach ($users as $item)
            <div wire:key='{{ $item->id }}'>
                {{ $item->name }}
            </div>
        @endforeach
    </div>
</div>
