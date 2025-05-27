<div>
    <form wire:submit="submit">
        <div>
            <label for="bird_count">Bird Count:</label>
            <input type="number" wire:model="bird_count">
        </div>
        <div>
            <label for="note">Note:</label>
            <textarea type="number" wire:model="notes"></textarea>
        </div>
        <button type="submit">Submit</button>
    </form>
    @if($errors->any())
        <div style="color: red;">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <!-- show all the entries of bird count -->
    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>Bird Count</th>
                <th>Note</th>
                <th>Created At</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($entries as $entry)
                <tr wire:key="entry-{{ $entry->id }}" wire:transition>
                    <td>{{ $entry->bird_count }}</td>
                    <td>{{ $entry->notes }}</td>
                    <td>{{ $entry->created_at }}</td>
                    <td> 
                        <button wire:click="edit({{ $entry->id }}"><i class="fas fa-edit"></i></button>
                        <button wire:click="delete({{ $entry->id }})"><i class="fa-solid fa-trash"></i></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <!-- show all the entries of bird count -->
</div>
