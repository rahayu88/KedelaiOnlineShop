<?php

namespace App;
use Illuminate\Notifications\Notifiable;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pembeli extends Authenticatable
{    //
    use Notifiable;

    protected $fillable = [
    	'id_pembeli', 'nama_pembeli', 'alamat_pembeli', 'tanggal_lahir_pembeli', 'jenis_kelamin_pembeli', 'no_identitas_pembeli', 'no_hp_pembeli', 'email_pembeli', 'password_pembeli'
    ];

    protected $table = 'pembeli';

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setPasswordAttribute($value)
    {
      $this->attributes['password'] = bcrypt($value);
    }


}
