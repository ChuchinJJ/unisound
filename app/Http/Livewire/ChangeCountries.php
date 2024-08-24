<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class ChangeCountries extends Component
{
    public $countries;
    public $myCountry = "Mexico";
    public $states;
    public $myState = "Chiapas";
    public $token;

    public function render()
    {
        return view('livewire.change-countries');
    }

    public function mount(){
        $response = Http::retry(3, 100)->withHeaders([
            "Accept" => "application/json",
            "api-token" => "IB9ke9yDbFFXfEUXAl0kpE04_XNsq2X-fMQkc1LphMge4ZkFClRDhMdlB4QRh7TWysA",
            "user-email" => "jonamorales1801@gmail.com"
        ])->get('https://www.universal-tutorial.com/api/getaccesstoken');

        $this->token = $response->json('auth_token');

        $this->countries = Http::retry(3, 100)->withHeaders([
            "Authorization" => "Bearer ". $this->token,
            "Accept" => "application/json"
        ])->get('https://www.universal-tutorial.com/api/countries/')
        ->json();

        $this->states = Http::retry(3, 100)->withHeaders([
            "Authorization" => "Bearer ". $this->token,
            "Accept" => "application/json"
        ])->get('https://www.universal-tutorial.com/api/states/Mexico')
        ->json();
    }

    public function getStates(){
        $this->states = Http::retry(3, 100)->withHeaders([
            "Authorization" => "Bearer ". $this->token,
            "Accept" => "application/json"
        ])->get('https://www.universal-tutorial.com/api/states/'.$this->myCountry)
        ->json();
    }
}
