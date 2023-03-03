<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DossierLocation extends Model
{
    use HasFactory;

    Protected $primaryKey ='idLocation';
	Protected $fillable = ['idLocation', 'Paye'];

	public function Reservation(){
	return $this->belongTo('App\Reservation');
    }
    
}
