<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Enquiry extends Model
{
    use HasFactory, SoftDeletes;

    public function service(){
        return $this->belongsTo(Service::class, 'service_id', 'id');
    }

    // public function subService(){
    //     return $this->belongsTo(Service::class, 'sub_service_id', 'id');
    // }
}
