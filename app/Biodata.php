<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
      protected $fillable = ['position','company','status','applicant_id'];
}
