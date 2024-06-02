<div>
    <div class="card">
        <div class="card-header">
            List Customer
            <a wire:navigate href="/customers/create" class="btn btn-success float-end">Create</a>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($this->customers as $index => $customer)
                    <tr>
                        <th scope="row">{{ $index + 1 }}</th>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->email }}</td>
                        <td>{{ $customer->phone }}</td>
                        <td>
                            <button wire:navigate href="/customer/{{ $customer->id }}"
                                class="btn btn-primary btn-sm">View</button>
                            <button wire:navigate href="/customer/edit/{{ $customer->id }}"
                                class="btn btn-secondary btn-sm">Edit</button>
                            <a wire:click='confirmDelete({{ $customer->id }})' href="javascript:void(0);"
                                class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                data-bs-target="#confirmDelete">Delete</a>
                        </td>
                    </tr>

                    @endforeach

                </tbody>
            </table>
        </div>
    </div>

    <x-modal :modalTitle="'Confirmation'" :eventName="'destroy-customer'">
        <p>Are you sure to delete?</p>
    </x-modal>

    @push('scripts_after_livewire')
        <script>
            window.addEventListener('close-modal', (event) => {
                $("#confirmDelete").modal('hide');
            })
        </script>
    @endpush

</div>