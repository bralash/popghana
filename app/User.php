<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', ''
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



    public function getDownliners() {

        $downliners = User::where('upliner_name',$this->username)->get();
        // $alldownliners = collect();
        $alldownliners = $downliners;
        // $alldownliners->merge($downliners);
            // echo '<br>'.$this->username.'=';
        foreach ($downliners as $d) {
            # code...
            // echo $d->username.'-'.$this->username.'|<br> ';
            // $alldownliners->push($d);
            // $alldownliners->merge($d->getDownliners());
            foreach ($d->getDownliners() as $dd) {
                $alldownliners->push($dd);
            }
        }

        return $alldownliners;
    }
}
