<div>
    <h1>Counter: {{ $bird_count }}</h1>
    <button wire:click="increment">Increment</button>
    <button wire:click="decrement">Decrement</button>
    <form wire:submit="submit">
        <div>
            <label for="bird_count">Bird:</label>
            <input type="number" wire:model="bird_count">
        </div>
        <div>
            <label for="note">Note:</label>
            <textarea type="number" wire:model="notes"></textarea>
        </div>
        <button type="submit">Submit</button>
    </form>

    <!-- show all the entries of bird count -->
    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>Bird Count</th>
                <th>Note</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            @foreach($entries as $entry)
                <tr>
                    <td>{{ $entry->bird_count }}</td>
                    <td>{{ $entry->notes }}</td>
                    <td>{{ $entry->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <!-- show all the entries of bird count -->
</div>
