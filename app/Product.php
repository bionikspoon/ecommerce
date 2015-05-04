<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $guarded = ['id'];

    protected $fillable = ['name', 'stock', 'price'];

    public function orders()
    {
        return $this->belongsToMany('App\Order');
    }

    public function orderItems()
    {
        return $this->hasMany('App\OrderItem');
    }

    public function category()
    {

        return $this->belongsTo('App\Category');
    }

}
