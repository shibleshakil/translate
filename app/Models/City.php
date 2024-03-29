<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class City extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ['deleted_at'];

    /**

     * Write code on Method

     *

     * @return response()

     */

    protected $fillable = [

        'title', 'country_id', 'zip_code'

    ];


    public function country(){
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }
}
