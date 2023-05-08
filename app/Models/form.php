<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;


class form extends Model
{
    use HasFactory;
    protected $fillable = [
      'full_name',

      'roll',
      'email',
      'departmant',
      'student_id',
      'semester',
      'address',
      'gender',
      'father_name',
      'mother_name',
      'country',
      'phone',
      'blood',
      'city',
      'language',
      'dob',
      'hobby',
      'file'
      ];
    
      protected $table = 'form';
}
