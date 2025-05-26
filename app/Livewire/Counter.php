<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Entry;

class Counter extends Component
{
    public int $bird_count = 1;
    public string $notes;

    public function increment() {
        $this->bird_count = $this->bird_count + 1;
    }

    public function decrement() {
        $this->bird_count = $this->bird_count - 1;
    }

    public function submit() {
        Entry::create([
            'notes' => $this->pull('notes'),
            'bird_count' => $this->pull('bird_count'),
        ]);

        // Entry::create($this->pull());

        $this->reset();
    }

    // Before the component is rendered, this method is called
    // to set the initial values of the properties.
    // This is where you can set default values for your properties.
    public function mount($bird_count) {
        $this->bird_count = $bird_count;
        $this->notes = '';
    }

    public function render()
    {
        return view('livewire.counter', [
            'entries' => Entry::all(),
        ]);
    }
}
