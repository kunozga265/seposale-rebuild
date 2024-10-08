<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Log;
use Livewire\Component;

class ShopPage extends Component
{
    public function render()
    {
//        session()->pull("products");
        return view('livewire.shop-page');
    }

    public function addToCart()
    {
        $products = session()->get("products",[]);
        $products[] = [
            "name" => "Product Name",
            "quantity" => 1,
            "cost" => 22000,
            "total" => 22000
        ];

        //store data
        session()->put("products",$products);
        $count = count($products);

        $this->emitTo("cart","updateCount",$count);

    }
}
