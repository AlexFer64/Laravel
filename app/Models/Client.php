<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $primaryKey = 'NumeroClient';
	protected $fillable = ['NumeroClient', 'nom', 'email', 'cartebancaire'];

	public function reservation(){
	 return $this->hasMany('App\Reservation');	
	}
}
