<div>
    <div class="card offset-3 col-6">
        <div class="card-header">
            View Customer
            <a wire:navigate href="/customers/" class="btn btn-success float-end">Back</a>
        </div>
        <div class="card-body">
            
            <h5 class="card-title">{{ $customer->name }}</h5>
            <p class="card-text">{{ $customer->email }}</p>
            <p class="card-text">{{ $customer->phone }}</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>

</div>
