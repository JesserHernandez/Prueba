<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Customer
 *
 * @property $Id_Customer
 * @property $CustomerCode
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
 * @property Order[] $orders
 * @property Sale[] $sales
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Customer extends Model
{

    static $rules = [
		'CustomerCode' => 'required',
		'Names' => 'required',
		'FirstSurName' => 'required',
		'SecondSurName' => 'required',
		'IdentificationCard' => 'required',
		'Age' => 'required',
		'Gender' => 'required',
		'City' => 'required',
		'Municipality' => 'required',
		'Condition' => 'required',
		'Id_User' => 'required',
    ];
    static $messages = ['CustomerCode.required' => 'El código del cliente es obligatorio',
    'CustomerCode.min' => 'El código del cliente debe de tener más de 3 caracteres',
    'Names.required' => 'El nombre del cliente es obligatorio',
    'Names.min' => 'El nombre del cliente debe de tener más de 3 caracteres',
    'FirstSurName.required' => 'El apellido del cliente es obligatorio',
    'FirstSurName.min' => 'El apellido del cliente debe de tener más de 3 caracteres',
    'IdentificationCard.required' => 'La cédula del cliente es obligatoria',
    'IdentificationCard.min' => 'La cédula del cliente debe de tener más de 3 caracteres',
    'Age.required' => 'La edad del cliente es obligatoria',
    'Gender.required' => 'El género del cliente es obligatorio',
    'Gender.min' => 'El género del cliente debe de tener más de 3 caracteres',
    'City.required' => 'La ciudad del cliente es obligatoria',
    'City.min' => 'La ciudad del cliente debe de tener más de 3 caracteres',
    'Municipality.required' => 'El municipio del cliente es obligatorio',
    'Municipality.min' => 'El municipio del cliente debe de tener más de 3 caracteres',
    'Condition.required' => 'El estado del cliente es obligatorio',
    'users.required' => 'El usuario del cliente es obligatorio',
    'users.min' => 'El usuario del cliente debe de tener más de 3 caracteres'
];
    protected $primaryKey = 'Id_Customer';
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Id_Customer','CustomerCode','Names','FirstSurName','SecondSurName','IdentificationCard','Age','Gender','Address','PhoneNumber','EmailAddress','City','Municipality','Image','Condition','Id_User'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orders()
    {
        return $this->hasMany('App\Models\Order', 'Id_Customer', 'Id_Customer');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sales()
    {
        return $this->hasMany('App\Models\Sale', 'Id_Customer', 'Id_Customer');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'Id_User');
    }


}
