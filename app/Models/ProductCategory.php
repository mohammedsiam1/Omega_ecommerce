<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Nicolaslopezj\Searchable\SearchableTrait;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductCategory extends Model
{
    use HasFactory , Sluggable, SearchableTrait;
    protected $guarded = [];
    protected $appends=['full_search'];
    public function sluggable() :array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
    protected $searchable = [
  
        'columns' => [
            'product_categories.name' => 10,
            
        ],
    ];
    public function status()
    {
        return $this->status ? 'Active' : 'Inactive';
    }
    public function parent()
    {
        return $this->hasOne(ProductCategory::class, 'id', 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(ProductCategory::class, 'parent_id', 'id');
    }
  
    public function appearedChildren()
    {
        return $this->hasMany(ProductCategory::class, 'parent_id', 'id')->where('status',true);
    }
    public static function tree( $level = 1 )
    {
        return static::with(implode('.', array_fill(0, $level, 'children')))
            ->whereNull('parent_id')
            ->whereStatus(true)
            ->orderBy('id', 'asc')
            ->get();
    }
    public function products(){
        return $this->hasMany(Product::class);
    }
    public function getFullSearchAttribute(){
        
        ProductCategory::withCount('products')->when(\request()->keyword !=null,function($query){
           $query->search(\request()->keyword);
       })->
       when(\request()->status !=null,function($query){
           $query->whereStatus(\request()->status);
       })->
       orderBy(\request()->sort_by ?? 'id',\request()->order_by ??'desc')
       
       ->paginate(\request()->limit_by ?? 10);
    }
}
