<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Entry;
use Livewire\Attributes\Validate;

class Counter extends Component
{
    #[Validate('required|integer|min:1', message: [
        'required' => 'Bird count is required.',
        'integer' => 'Bird count must be a number.',
        'min' => 'Bird count must be at least 1.',
    ])]
    public int $bird_count = 1;

    #[Validate('required|string|max:255', message: [
        'required' => 'Please enter some notes.',
        'string' => 'Notes must be a valid string',
        'max' => 'Notes may not be greater than 255 characters',
    ])]
    public string $notes;

    public function increment() {
        $this->bird_count = $this->bird_count + 1;
    }

    public function decrement() {
        if ($this->bird_count > 1) {
            $this->bird_count = $this->bird_count - 1;
        }
    }

    public function submit() {
        // This is tradinal way for validation
        // $this->validate([
        //     'notes' => 'required|string|max:255',
        //     'bird_count' => 'required|integer|min:1',
        // ], [
        //     'notes.required' => 'Please enter some notes.',
        //     'notes.string' => 'Notes must be a valid string.',
        //     'notes.max' => 'Notes may not be greater than 255 characters.',
        //     'bird_count.required' => 'Bird count is required.',
        //     'bird_count.integer' => 'Bird count must be a number.',
        //     'bird_count.min' => 'Bird count must be at least 1.',
        // ]);

        $this->validate();

        Entry::create([
            'notes' => $this->pull('notes'),
            'bird_count' => $this->pull('bird_count'),
        ]);

        // Entry::create($this->pull());

        $this->reset();
    }

    /**
     * Before the component is rendered, this method is called
     * to set the initial values of the properties.
     * This is where you can set default values for your properties.
     *
     * @param [integer] $bird_count
     * @return void
     */
    public function mount($bird_count) {
        $this->bird_count = $bird_count;
        $this->notes = '';
    }

    /**
     * 
     */
    public function delete($id) {
        Entry::findOrFail($id)->delete();
    }

     /**
     * Render the Livewire component view.
     *
     * This method returns the view for the Counter component,
     * passing all Entry records to the view.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        // Retrieve all entries from the database and pass them to the view
        return view('livewire.counter', [
            'entries' => Entry::all(),
        ]);
    }
}
