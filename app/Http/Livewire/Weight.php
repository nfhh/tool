<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class Weight extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $sn;
    public $weight;

    protected $rules = [
        'sn' => 'required|unique:weights',
        'weight' => 'required',
    ];

    public function store()
    {
        $this->validate();
        \App\Models\Weight::create([
            'sn' => $this->sn,
            'weight' => $this->weight,
        ]);
        $this->reset(['sn', 'weight']);
        session()->flash('message', '添加成功！');
    }

    public function render()
    {
        return view('livewire.weight', [
            'weights' => \App\Models\Weight::paginate(20),
        ])->extends('layouts.dashboard')->section('body');
    }
}
