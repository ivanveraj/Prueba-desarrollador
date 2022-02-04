<?php

namespace App\Http\Livewire;

use App\Models\Departamentos;
use App\Models\Municipios;
use App\Models\Terceros;
use App\Models\TipoIdentificacion;
use App\Models\TipoTerceros;
use Livewire\Component;

class CreateTerceros extends Component
{
    public $open = false;
    public  $tipo_identificacion, $num_identificacion, $tipo_tercero, $nombre1,
        $nombre2, $apellido1, $apellido2, $departamento, $municipio;
    protected $rules = [
        'tipo_identificacion' => 'required',
        'num_identificacion' => 'required',
        'tipo_tercero' => 'required',
        'nombre1' => 'required',
        'nombre2' => 'required',
        'apellido1' => 'required',
        'apellido2' => 'required',
        'departamento' => 'required',
        'municipio' => 'required',
    ];

    public function render()
    {
        $tipo_identificaciones = TipoIdentificacion::all();
        $tipo_terceros = TipoTerceros::all();
        $departamentos = Departamentos::all();
        /* $municipios = Municipios::where('departamento_id', $this->departamento); */
        $municipios = Municipios::all();
        return view('livewire.create-terceros', compact('tipo_identificaciones', 'tipo_terceros', 'departamentos', 'municipios'));
    }
    /*Funcion updated valida el formulario sin actualizar o enviar el modal */
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    /**Funcion save: Valida y guarda el tercero creado, posteriormente, resetea las variables 
     * , y renderiza la vista
     */
    public function save()
    {
        $this->validate();
        Terceros::create([
            'tipoidentificacion_tercero' => $this->tipo_identificacion,
            'numeroidentificacion_tercero' => $this->num_identificacion,
            'tipo_tercero' => $this->tipo_tercero,
            'primernombre_tercero' => $this->nombre1,
            'segundonombre_tercero' => $this->nombre2,
            'primerapellido_tercero' => $this->apellido1,
            'segundoapellido_tercero' => $this->apellido2,
            'departamento_id' => $this->departamento,
            'municipio_id' => $this->municipio,
        ]);

        $this->reset([
            'open', 'tipo_identificacion', 'num_identificacion',
            'tipo_tercero', 'nombre1', 'nombre2', 'apellido1', 'apellido2', 'departamento',
            'municipio'
        ]);
        $this->emit('render');
    }
}
