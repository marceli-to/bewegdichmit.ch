<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
  protected $fillable = [
    'category',
    'start_time',
    'entry_fee',
    'firstname',
    'name',
    'street',
    'location',
    'phone',
    'email',
    'group_name',
    'number_of_members',
    'remarks',
    'buddy',
  ];
}
