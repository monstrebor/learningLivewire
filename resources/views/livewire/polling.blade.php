<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}

    <span wire:poll.keep-alive class="text-[12px]">
        {{ now()->setTimezone('Asia/Manila')->format('h:i:s A') }}
        @if (now()->setTimezone('Asia/Manila')->format('A') === 'PM')
            🌙
        @else
            ☀️
        @endif
    </span>

    {{-- examples of polling --}}
    {{-- <h1 wire:poll.keep-alive">{{ now()->format('h:i:s A') }}</h1> --}}
    {{-- <h1 wire:poll.visible>{{ $time }}</h1> --}}
    {{-- <h1 wire:poll.15s>{{ $time }}</h1> --}}
</div>
