<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Support\Facades\DB;

class Browse extends Component
{
    public $results;
    public function mount()
    {
        // $this->results = User::latest()->get();
        $this->results = DB::table('users')
            ->join('profiles', 'profiles.user_id', '=', 'users.id')
            ->get();
    }
    public function render()
    {
        return view('livewire.browse');
    }
}
