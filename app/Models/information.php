<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class information extends Model
{
    use HasFactory;
    protected $table = 'informations';
    protected $fillable = [
        'id','Nom','Prenom','Email','Tele', 'CNI', 'Periode_loc'
    ];
}
