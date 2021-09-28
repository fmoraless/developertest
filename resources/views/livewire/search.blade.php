
<div class="col-md-6 col-lg-6 col-sm-12">
    <form>
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

        <button type="button" wire:click.prevent="SearchUrl()" class="btn btn-dark close-modal">
            Consultar
        </button>
    </form>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        window.livewire.on('buscar', function (content) {
            console.log(content.value);
            // document.getElementsByTagName('img');
        })
    });
</script>


