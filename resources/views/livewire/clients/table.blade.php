<div>
    <div class="row">
        <div class="col-md"></div>
        <div class="col-md-4">
            <div class="input-group border rounded overflow-hidden mb-4">
                <input class="form-control shadow-none px-4 py-2 fs-14" type="text" wire:model.live="search" placeholder="Search by name, email, telephone">
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-borderless text-center">
            <thead>
                <tr>
                    <th scope="col">UUID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">ID No.</th>
                    <th scope="col">DOB</th>
                    <th scope="col">Telephone</th>
                    <th scope="col">Status</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @forelse ($clients as $client)
                <tr>
                    <td><a href="#" style="color:black;">{{$client->uuid
                            }}</a></td>
                    <td>{{$client->first_name}} {{$client->last_name}}</td>
                    <td>{{$client->email}}</td>
                    <td>{{$client->id_number}}</td>
                    <td>{{$client->date_of_birth}}</td>
                    <td>{{$client->telephone}}</td>
                    <td>{{$client->status}}</td>
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('client.edit', $client->id) }}" class="btn text-brown p-0 my-auto"><i
                                    class="bi bi-pencil-fill"></i></a>
                            <button type="button" class="btn-danger p-0 ms-3 text-danger border-0 my-auto" data-bs-toggle="modal"
                                data-bs-target="#deleteModal{{$client->id}}"><i class="bi bi-trash-fill"></i></button>
                            
                        </div>
                    </td>
                    <div class="modal fade" id="deleteModal{{$client->id}}" tabindex="-1" aria-labelledby="deleteModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-body p-4">
                                    <form action="{{ route('client.destroy', $client->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <h4 class="fs-18 fw-bold text-brown">Delete Confirmation</h4>
                                        <h4 class="text-dark my-5 text-center">Are you sure you want to remove <b> {{$client->first_name}} {{$client->last_name}}</b>?</h4>
                                        <div class="d-flex justify-content-center">
                                            <button type="submit" class="btn bg-danger text-white bg-brown">Delete</button>
                                            <button type="button" class="btn bg-secondary text-white ms-3" data-bs-dismiss="modal">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
    
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center py-3 fs-14 fw-bold">No clients found!</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="col">
        {{$clients->links()}}
    </div>
</div>