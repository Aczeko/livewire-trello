<?php

namespace App\Livewire;

use App\Models\Board;
use Livewire\Attributes\Layout;
use Livewire\Component;

class BoardIndex extends Component
{
    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.board-index', [
            'boards' => auth()->user()->boards
        ]);
    }
}
