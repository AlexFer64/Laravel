<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    use HasFactory;

    Protected $primaryKey ='Matricule';
	Protected $fillable = ['Matricule', 'modele', 'prix', 'disponible'];

	public function Reservation(){
	return $this->belongTo('App\Reservation');
     }

	public function vehicules(){
	return $this->belongstoMany('App\Vehicule');
     }
}
