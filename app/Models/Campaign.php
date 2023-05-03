<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Campaign extends Model
{
    // use LogsActivity;
    use HasFactory;

    protected $table = 'campaigns';
    protected $guarded = [''];

    // public function getActivitylogOptions(): LogOptions
    // {
    //     return LogOptions::defaults()
    //     ->logOnly(['campaign_name']);
    //     // Chain fluent methods for configuration options
    // }

}
