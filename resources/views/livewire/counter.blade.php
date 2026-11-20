<div>
    
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-12">
                <h2 class="text-center">{{$value}}</h2>
            </div>
        
            <div class="col-6">
                <button class="btn btn-primary" wire:click="increment">+</button>
            </div>
        
        
            <div class="col-6">
                <button class="btn btn-danger" wire:click="decrement">-</button>
            </div>

            <div class="col-6">
                <input type="text" wire:model="number">
                <button class="btn btn-warning" wire:click="incrementByInput()">Incrementa</button>
            </div>
        </div>
    </div>

</div>
