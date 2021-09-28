@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h6 class="text-center text-warning" wire:loading>POR FAVOR ESPERE</h6>
            <div class="card">
                <div class="card-header">{{ __('Buscador') }}</div>

                <div class="card-body">
                    <div class="row">
                        <livewire:search />

                        <livewire:results />
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
