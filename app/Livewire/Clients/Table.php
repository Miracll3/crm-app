<?php

namespace App\Livewire\Clients;

use App\Models\Client;
use Livewire\Component;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination;

    public $search = '';
    // protected $queryString = ['search'];

    public function render()
    {
        $clients = Client::where('first_name', 'like', '%' . $this->search . '%')
                        ->orWhere('last_name', 'like', '%' . $this->search . '%')
                        ->orWhere('email', 'like', '%' . $this->search . '%')
                        ->orWhere('telephone', 'like', '%' . $this->search . '%')
                        ->paginate(10);
        // $clients = Client::onlyTrashed()->get();

        
        return view('livewire.clients.table', ['clients' => $clients]);
    }
}
