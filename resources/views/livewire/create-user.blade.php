<div class="card offset-3 col-6">
    <div class="card-body">
        {{$name}} <br>
        Showing the email {{$email}} <br>

        <input type="text" wire:model.live='name'>

        @foreach ($users as $item)
            <div wire:key='{{$item->id}}'>
                {{$item->name}}
            </div>
        @endforeach
    </div>
</div>
