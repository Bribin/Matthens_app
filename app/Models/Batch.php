<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Carbon\CarbonPeriod;


class Batch extends Model
{
    use HasFactory;
    protected $dates = ['start_date','end_date','date'];
    protected $fillable =[

        'date'
    ];



    /**
     * Interact with the user's first name.
     *
     * @param  string  $value
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function startDate(): Attribute
    {
        return new Attribute(
            get: fn ($value) =>  Carbon::parse($value)->format('d - M Y'),
            set: fn ($value) =>  Carbon::parse($value)->format('Y-m-d'),
        );
    }
    protected function endDate(): Attribute
    {
        return new Attribute(
            get: fn ($value) =>  Carbon::parse($value)->format('d - M Y'),
            set: fn ($value) =>  Carbon::parse($value)->format('Y-m-d'),
        );
    }

    protected function startTime(): Attribute
    {
        return new Attribute(
            get: fn ($value) =>  Carbon::parse($value)->format('h:i A'),
            set: fn ($value) =>  Carbon::parse($value)->format('H:i:s'),
        );
    }


//    protected function Date(): Attribute
//    {
//        return new Attribute(
//            get: fn ($value) =>  Carbon::parse($value)->format('d/m/Y'),
//            set: fn ($value) =>  Carbon::parse($value)->format('Y-m-d'),
//
//
//        );
//
//
//
//
//    }

//    public function getDateFormat($value) {
//        return Carbon::createFromFormat('Y-m-d', $this->attributes['date'] );
//    }

    public  function getType(){

        $type = $this->type;
        switch ($type) {
            case "0":
                echo 'Weekend';
                break;
            case "1":
                echo 'Weekday';
                break;
            case "2":
                echo 'DRAFT';
                break;
        }

    }




    public  function getMode(){

        $mode = $this->mode;
        switch ($mode) {
            case "0":
                echo 'Live Online Classes';
                break;
            case "1":
                echo 'Offine Clasees';
                break;

        }

    }

    public function courses()
    {
        return $this->belongsToMany(Course::Class,'course_batches');
    }



    public function batchTimings()
    {
        return $this->hasMany(BatchTiming::class);
    }
}
