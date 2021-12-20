<?php

namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Validation\Rules;



class OrderFulfillmentUser extends Authenticatable
{

  protected $table = 'orderfulfillment_users';
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;
  /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    /*
    protected $fillable = [
        'name',
        'u_name',
        'email',
        'password',
        'role_id',
    ];
    */
    protected $guarded=[];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */


    /**
     * The attributes that should be cast.
     *
     * @var array
     */







}
