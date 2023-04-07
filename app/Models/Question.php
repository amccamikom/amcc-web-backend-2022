<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    
    // Menentukan nama tabel
    protected $table = 'questions';

    // Menentukan primary key
    protected $primaryKey = 'id';

    // Menentukan kolom yang boleh diisi
    protected $fillable = ['username', 'title', 'content'];
    
}
