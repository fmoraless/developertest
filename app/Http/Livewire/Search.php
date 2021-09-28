<?php

namespace App\Http\Livewire;

use App\Http\Controllers\Auth\ResetPasswordController;
use Illuminate\Support\Facades\Http;
use Livewire\Component;


class Search extends Component
{
    public $search, $url;

    public function render()
    {
        return view('livewire.search');
    }

    public function SearchUrl()
    {
        //dd($this->url);
        $rules = ['url' => 'required|url'];
        $messages = [
            'url.required' => 'La url es requerida',
            'url.url'      => 'Debe ingresar una url válida',
        ];
        $this->validate($rules, $messages);

        $response = Http::get($this->url);

        //$content = $response->body();
        $content = $response->collect();
        dd($content);

        $this->emit('buscar', $content);
        $this->resetUI();
    }

    public function resetUI() {
        $this->resetValidation();
    }
}
