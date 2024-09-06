<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Cart extends Component
{
    public $count;

    public function mount()
    {
        $products = session()->get("products",[]);
        $this->count = count($products);
    }

    public function render()
    {
        return view('livewire.cart',[

        ]);
    }

    protected $listeners = [
      "updateCount" => "changeCartCount"
    ];

    public function changeCartCount($count)
    {
        $this->count = $count;
    }
}
