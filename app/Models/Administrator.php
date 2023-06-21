<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Administrator
 *
 * @property $Id_Administrator
 * @property $AdministratorCode
 * @property $Names
 * @property $FirstSurName
 * @property $SecondSurName
 * @property $IdentificationCard
 * @property $Age
 * @property $Gender
 * @property $Address
 * @property $PhoneNumber
 * @property $EmailAddress
 * @property $City
 * @property $Municipality
 * @property $Image
 * @property $Condition
 * @property $Id_User
 * @property $created_at
 * @property $updated_at
 *
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Administrator extends Model
{
    
    static $rules = [
		'Id_Administrator' => 'required',
		'AdministratorCode' => 'required',
		'Names' => 'required',
		'FirstSurName' => 'required',
		'SecondSurName' => 'required',
		'IdentificationCard' => 'required',
		'Age' => 'required',
		'Gender' => 'required',
		'Address' => 'required',
		'PhoneNumber' => 'required',
		'EmailAddress' => 'required',
		'City' => 'required',
		'Municipality' => 'required',
		'Image' => 'required',
		'Condition' => 'required',
		'Id_User' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Id_Administrator','AdministratorCode','Names','FirstSurName','SecondSurName','IdentificationCard','Age','Gender','Address','PhoneNumber','EmailAddress','City','Municipality','Image','Condition','Id_User'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'Id_User');
    }
    

}
