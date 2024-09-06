<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CartPage extends Component
{
    public $products;
    public $subtotal = 0;
    public $total = 0;

    public function mount()
    {
        $this->products = session()->get("products",[]);
        $this->calculateTotals();
    }

    public function render()
    {
        return view('livewire.cart-page');
    }

    public function incrementQuantity($key){
        $this->products["$key"]["quantity"] += 1;
        $this->cacheProducts();
        $this->calculateTotals();
    }

    public function decrementQuantity($key){
        $quantity = $this->products["$key"]["quantity"];
        if($quantity > 1) {
            $this->products["$key"]["quantity"] -= 1;
        }
        $this->cacheProducts();
        $this->calculateTotals();
    }

    public function removeProduct($key)
    {
        array_splice($this->products,$key,1);
        $count = count($this->products);
        $this->emitTo("cart","updateCount",$count);

        $this->cacheProducts();
        $this->calculateTotals();
    }
    public function calculateTotals()
    {
        $sum = 0;
        foreach ($this->products as $product){
            $sum += $product['cost'] * $product["quantity"];
        }
        $this->subtotal = $sum;

        //factor extra transport

        //calculate final total
        $this->total = $this->subtotal;

    }

    private function cacheProducts()
    {
        session()->put("products",$this->products);
    }
}
