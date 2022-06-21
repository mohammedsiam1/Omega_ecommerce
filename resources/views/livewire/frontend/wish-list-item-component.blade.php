<tr class="item"x-data="{ show: true }" x-show="show">
    <td class="product-remove">
        <a wire:click.prevent="removeFromWishList('{{ $wishlistItem->rowId }}')" x-on:click="show = false" class="remove" title="Remove this item"><i class="bx bx-x"></i></a>
    </td>
    <td class="product-thumbnail">
       <a  href="{{ route('frontend.product', $wishlistItem->model->slug) }}">
                <img src="{{ asset('assets/products/' . $wishlistItem->model->firstMedia->file_name) }}" alt="{{ $wishlistItem->model->name }}" width="70"/>
            </a>
    </td>
    <td class="product-name">
        <a href="{{ route('frontend.product', $wishlistItem->model->slug) }}">{{ $wishlistItem->model->name }}</a>
    </td>
    <td class="product-price">
        <span class="amount">${{ $wishlistItem->model->price }}</span>
    </td>

    <td class="product-add-to-cart text-right">
        <button 
        wire:click.prevent="moveToCart('{{ $wishlistItem->rowId }}')" x-on:click="show = false"
        class="btn btn-primary" type="button">Add To Cart</button>
    </td>
</tr>