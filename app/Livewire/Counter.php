<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public int $count = 1;

    public function increment() {
        $this->count = $this->count + 1;
    }

    public function decrement() {
        if ($this->count > 1) {
            $this->count = $this->count - 1;
        }
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
        return view('livewire.counter');
    }
}
