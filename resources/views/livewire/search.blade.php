
<div class="col-md-12 col-lg-12 col-sm-12">
    <form class="form-group">
        <div class="mb-3">
            <label for="url" class="form-label">Ingrese una URL:</label>
            <input type="text"
                   wire:keydown.enter.prevent="SearchUrl()"
                   wire:model.lazy="url" class="form-control" name="url" id="url"
                   placeholder="ej: https://www.udemy.com"
                   required
            >
            @error('url') <span class="text-danger er">{{ $message }}</span>@enderror
        </div>

        <button type="button" wire:click.prevent="SearchUrl()" class="btn btn-dark" title="Consultar">
            Consultar
            <i class="fas fa-search"></i>
        </button>
        <button type="button" wire:click="resetUI()" class="btn btn-dark ml-2" title="Limpiar">
            <i class="fas fa-eraser"></i>
        </button>
        <h6 class="text-center text-warning ml-3" wire:loading>POR FAVOR ESPERE</h6>
    </form>

    <label class="form-label mt-3">Resultados: </label>
    <hr>
    <table class="table table-borderless">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th class="text-center" scope="col">Imágenes</th>
            <th class="text-center" scope="col">Archivos Css</th>
            <th class="text-center" scope="col">Uso de Css</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">Cant.</th>
            <td class="text-center">{{ $totalImages }}</td>
            <td class="text-center">{{ $totalCssFiles }}</td>


            @if ($Css == false)
                <td class="text-center text-muted">Sin uso de css</td>
            @else
                <td class="text-center text-info">En uso de css</td>
            @endif
        </tr>
        </tbody>
    </table>
</div>






