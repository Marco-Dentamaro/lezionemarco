<div>

    @if (session('articleCreated'))
        <div class="alert alert-success">
            {{ session('articleCreated') }}
        </div>
    @endif

    <form wire:submit="store">
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input wire:model="title" type="text" class="form-control">

        </div>
        <div class="mb-3">
            <label for="subtitle" class="form-label">Sottotitolo</label>
            <input wire:model="subtitle" type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <textarea wire:model="body" class="form-control" name="" id="" cols="30" rows="10"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Crea Articolo</button>
    </form>


</div>
