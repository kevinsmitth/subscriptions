<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubscriptionBenefits extends Model
{
    use HasFactory;

    protected $fillable = [
        'subscription_id',
        'benefits_id',
        'check',
        'quantity'
    ];

    public function assinatura()
    {
        return $this->hasOne(Subscription::class, 'id', 'subscription_id');
    }

    public function beneficios()
    {
        return $this->hasOne(Benefits::class, 'id','benefits_id');
    }
}
