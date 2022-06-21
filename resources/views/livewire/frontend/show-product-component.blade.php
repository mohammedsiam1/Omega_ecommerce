<div>
    <div class="form-group d-flex">

        <div class="quantity">

            <input type="button" wire:click="increaseQuantity()"  value="+" class="plus">
            <input type="number" wire:model='quantity' title="Qty" class="qty" size="4">
            <input type="button" wire:click="decreaseQuantity()"  value="-" class="minus">
        </div>

        <button wire:click="addToCart()" type="button" class="btn btn-primary"><i class="lil-add_shopping_cart"></i> Add to cart</button>
    </div>

    <strong>
        <a  class="reset-anchor ml-2" wire:click="addToWishList()" href="#"> <i class="fal fa-heart"></i> Add to whishList </a></strong>

</div>