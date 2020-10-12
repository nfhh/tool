<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class Test extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.test', [
            'tests' => \App\Models\Test::paginate(20),
        ])->extends('layouts.dashboard')->section('body');
    }
}
