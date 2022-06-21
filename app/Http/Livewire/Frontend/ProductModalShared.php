<?php

namespace App\Http\Livewire\Frontend;

use App\Models\Product;
use Livewire\Component;

class ProductModalShared extends Component
{
    public $productModalCount = false;
    public $productModal = [];
    public $quantity = 1;

    protected $listeners = ['showProductModalAction'];
    
    public function showProductModalAction($slug){
     
     $this->productModalCount=true;
     $this->productModal=Product::whereSlug($slug)->Active()->HasQuantity()->ActiveCategory()->firstOrFail();

    }
    
    public function render()
    {
        return view('livewire.frontend.product-modal-shared');
    }
}
