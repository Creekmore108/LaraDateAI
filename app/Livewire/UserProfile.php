<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Route;
use Livewire\Component;
use App\Models\User;
use App\Helpers\CalcAge;

class UserProfile extends Component
{

    public $birthDate;
    public $age;
    public $userId;
    public $userProfile;
    public $userInfo;

    public function mount()
    {
        $this->userId = request()->query('userId');
        $this->userInfo = User::findOrFail($this->userId);
        // dd($this->userInfo);
        $this->userProfile = $this->userInfo->profile;
        // $this->age = (int)abs(CalcAge::calculateAge($this->profile->birthday));
    }

    public function render()
    {
        return view('livewire.user-profile');
    }

}
