<div class="card">
    <div class="card-header">
        Edit Customer
        <a wire:navigate href="/customers" class="btn btn-success float-end">List Customers</a>
    </div>
    <div class="card-body">
        <form wire:submit.prevent='update'>
            <div class="mb-3">
                <label for="exampleInputName" class="form-label">Name</label>
                <input wire:model='name' type="text" class="form-control" id="exampleInputName"
                    aria-describedby="nameHelp">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input wire:model='email' type="text" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPhone" class="form-label">Phone</label>
                <input wire:model='phone' type="text" class="form-control" id="exampleInputPhone">
                @error('phone')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
