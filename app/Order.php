<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model {

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function orderItems()
    {
        return $this->hasMany('App\OrderItem');
    }

    public function products()
    {
        return $this->belongsToMany('App\Product');
    }
}
