<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerService extends Model
{

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'services_id',
        'discount',
        'service_start_date',
        'connection_status',
        'billing_date',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at', 'updated_at',
    ];


    /**
     * Get the User that owns the CustomerService.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the User Service that owns the CustomerService.
     */
    public function services()
    {
        return $this->belongsTo('App\Service');
    }

    /**
     * Get the payments that for the customerService.
     */
    public function payment()
    {
        return $this->hasMany('App\Payments');
    }

}
