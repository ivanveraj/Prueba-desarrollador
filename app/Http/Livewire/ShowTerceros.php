<?php

namespace App\Http\Livewire;

use App\Models\Terceros;
use Livewire\Component;

class ShowTerceros extends Component
{
    protected $listeners = ['render' => 'render', 'deleteA'];
    public function render()
    {
        $terceros = Terceros::all();
        return view('livewire.show-terceros', compact('terceros'));
    }
    /**Elimina el tercero seleccionado: El llamado se realiza mediante ajax */
    public function deleteA(Terceros $TerceroId)
    {
        /* dump("d"); */
        $TerceroId->delete();
    }
}
