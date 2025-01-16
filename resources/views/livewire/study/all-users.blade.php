<div>
    <h1 class="w-full text-center">All Users</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <livewire:study.create-users>
    <div class="row g-3 align-items-center">
        <div class="col-auto">
            <input type="text" wire:model='q' class="form-control" placeholder="search users">
        </div>
        <div class="col-auto">
            <select wire:model='pagination' class="form-select">
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
        </div>
    </div>

    <table class="table table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th> <!-- Use iteration for correct index -->
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>
                        <a href="">
                            <livewire:study.wire-confirm :userId="$item->id" />
                        </a>
                    </td> <!-- Replace with actual action buttons if needed -->
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $users->links() }} <!-- Correctly display pagination links -->
</div>
