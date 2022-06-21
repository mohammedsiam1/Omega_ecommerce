<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Nicolaslopezj\Searchable\SearchableTrait;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Mindscms\Entrust\Traits\EntrustUserWithPermissionsTrait;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable, SearchableTrait, EntrustUserWithPermissionsTrait;

   
    protected $fillable = [
            'first_name',
            'last_name',
            'username',
            'mobile',
            'status',
            'user_image',
            'email',
            'password',
    ];
    public $searchable = [
        'columns' => [
            'users.first_name' => 10,
            'users.last_name' => 10,
            'users.username' => 10,
            'users.email' => 10,
            'users.mobile' => 10,
        ]
    ];
    protected $appends=['full_name'];
  
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getFullNameAttribute() :string
    {
        return ucfirst($this->first_name). ' '. ucfirst($this->last_name);
     }
     public function reviews(): HasMany
     {
         return $this->hasMany(ProductReview::class);
     }
     public function status(): string
     {
         return $this->status ? 'Active' : 'Inactive';
     }
     public function addresses(): HasMany
     {
         return $this->hasMany(UserAddress::class);
     }
     public function orders(): HasMany
     {
         return $this->hasMany(Order::class);
     }
   
}
