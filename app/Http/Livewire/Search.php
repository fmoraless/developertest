<?php

namespace App\Http\Livewire;

use App\Http\Controllers\Auth\ResetPasswordController;
use Illuminate\Support\Facades\Http;
use Livewire\Component;
use Weidner\Goutte\GoutteFacade;


class Search extends Component
{
    public $search, $url, $totalImages, $totalCssFiles, $Css;

    public function mount()
    {
        $this->totalImages = 0;
        $this->totalCssFiles = 0;
        $this->Css = false;
    }

    public function render()
    {
        return view('livewire.search');
    }

    public function SearchUrl()
    {
        $rules = ['url' => 'required|url'];
        $messages = [
            'url.required' => 'La url es requerida',
            'url.url'      => 'Debe ingresar una url válida',
        ];
        $this->validate($rules, $messages);

        $response = GoutteFacade::request('GET', $this->url);

        $liTotal = $response->filter('img');
        $this->totalImages = $liTotal->count();

        $cssTotal = $response->filter('style');
        $this->totalCssFiles = $cssTotal->count();

        if ($this->totalCssFiles > 0)
            $this->Css = true;

        $this->emit('buscar-ok', 'Busqueda ok');

    }

    public function resetUI() {
        $this->totalImages = 0;
        $this->totalCssFiles = 0;
        $this->Css = false;
        $this->resetValidation();
        $this->reset(['url']);

    }

    protected $listeners = [
        'reset-ui' => 'resetUI',
    ];
}
