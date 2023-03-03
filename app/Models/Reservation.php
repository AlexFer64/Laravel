<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    Protected $primaryKey = 'codeReservation';
	Protected $fillable =['codeReservation', 'dateReservation', 'dateAller', 'dateRetour'];
	
	//$timestamps = false;

	public function client(){
	return $this->belongsto('App\Client');
      }

	public function dossierLocation(){
	return $this->hasOne('App\dossierLocation');
     }

	public function vehicules(){
	return $this->belongstoMany('App\Vehicule');
     }
}
