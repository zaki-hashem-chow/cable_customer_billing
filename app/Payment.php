<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
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
        'customer_services_id',
        'amount_received',
        'received_for_service',
        'transaction_date',
        'current_due',
        'sms_sent_status',
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
     * Get the CustomerService that owns the payments.
     */
    public function customerService()
    {
        return $this->belongsTo('App\CustomerServices');
    }

}
