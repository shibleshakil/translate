<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pricing extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ['deleted_at'];

    /**

     * Write code on Method

     *

     * @return response()

     */

    protected $fillable = [

        'language_id',
        'sector_id',
        'client_rate',
        'client_min_price',
        'professionals_rate'

    ];


    public function language(){
        return $this->belongsTo(Language::class, 'language_id', 'id');
    }

    public function sector(){
        return $this->belongsTo(Sector::class, 'sector_id', 'id');
    }

}
