<tr class="item" x-data="{ show: true }" x-show="show">
    <td class="product-remove">
        <a wire:click.prevent="removeFromCart('{{ $cartItem->rowId }}')" x-on:click="show = false"
          class="remove" title="Remove this item"><i class="fa fa-window-close"></i>
        </a>
    </td>
    <td class="product-thumbnail">
        <a href="{{ route('frontend.product', $cartItem->model->slug) }}">
            <img src="{{ asset('assets/products/' . $cartItem->model->firstMedia->file_name) }}" class="img-fluid" alt="{{ $cartItem->model->name }}">
        </a>
    </td>
    <td class="product-name">
        <a href="{{ route('frontend.product', $cartItem->model->slug) }}">{{ $cartItem->model->name }}</a>
    </td>
    <td class="product-price">
        <span class="amount">${{ $cartItem->model->price }}</span>
    </td>
    <td class="product-quantity">
        <div class="quantity">
         
            <input type="button"  wire:click="increaseQuantity('{{ $cartItem->rowId }}')"  value="+" class="plus">
            <input type="number"  title="Qty" class="qty" size="4"   value="{{ $item_quantity }}"  readonly>
            <input type="button"  wire:click="decreaseQuantity('{{ $cartItem->rowId }}')"  value="-" class="minus">
        </div>
    </td>
    <td class="product-subtotal">
        <span class="amount">${{ $cartItem->model->price * $cartItem->qty }}</span>
    </td>
</tr>