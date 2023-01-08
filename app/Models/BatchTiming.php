<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Carbon\Carbon;

class BatchTiming extends Model
{
    use HasFactory;

     protected $fillable =[

            'date'
         ];

    protected function date(): Attribute
    {
        return Attribute::make(
            get: fn ($value) =>  Carbon::parse($value)->format('Y-m-d'),
        );
    }

//    public function setTimeFormat($value) {
//        $this->attributes['time'] = Carbon::createFromFormat('g:i a', $value)->format('H:i:s');
//    }

//    public function getDateFormat($value) {
//      return Carbon::createFromFormat('Y-m-d', $this->attributes['date'] );
//    }


    /**
     * Get the batch that owns the timtings.
     */
    public function batchTimings()
    {
        return $this->belongsTo(Batch::Class,'batch_id');
    }
}
