<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
   protected $fillable =['category_id','subcategory_id','filename','filedescription','fileimage','file','amount'];
  
}