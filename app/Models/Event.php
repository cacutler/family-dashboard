<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
#[Fillable(['name', 'location', 'start_date', 'end_date', 'start_time', 'end_time', 'description'])]
class Event extends Model {
    
}