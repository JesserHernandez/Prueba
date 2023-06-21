<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Supplier
 *
 * @property $Id_Supplier
 * @property $SupplierCode
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
 * @property Purchase[] $purchases
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Supplier extends Model
{

    static $rules = [
		'SupplierCode' => 'required',
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
    static $messages = ['SupplierCode.required' => 'El código del proveedor es obligatorio',
    'SupplierCode.min' => 'El código del proveedor debe de tener más de 3 caracteres',
    'Names.required' => 'El nombre del proveedor es obligatorio',
    'Names.min' => 'El nombre del proveedor debe de tener más de 3 caracteres',
    'FirstSurName.required' => 'El apellido del proveedor es obligatorio',
    'FirstSurName.min' => 'El apellido del proveedor debe de tener más de 3 caracteres',
    'IdentificationCard.required' => 'La cédula del proveedor es obligatoria',
    'IdentificationCard.min' => 'La cédula del proveedor debe de tener más de 3 caracteres',
    'Age.required' => 'La edad del proveedor es obligatoria',
    'Gender.required' => 'El género del proveedor es obligatorio',
    'Gender.min' => 'El género del proveedor debe de tener más de 3 caracteres',
    'City.required' => 'La ciudad del proveedor es obligatoria',
    'City.min' => 'La ciudad del proveedor debe de tener más de 3 caracteres',
    'Municipality.required' => 'El municipio del proveedor es obligatorio',
    'Municipality.min' => 'El municipio del proveedor debe de tener más de 3 caracteres',
    'PhoneNumber.required' => 'El número telefónico del proveedor es obligatorio',
    'PhoneNumber.min' => 'El número telefónico del proveedor debe de tener más de 3 caracteres',
    'Address.required' => 'La dirección del proveedor es obligatoria',
    'Address.min' => 'La dirección del proveedor debe de tener más de 3 caracteres',
    'EmailAddress.required' => 'El correo electrónico del proveedor es obligatorio',
    'EmailAddress.min' => 'El correo electrónico del proveedor debe de tener más de 3 caracteres',
    'Condition.required' => 'El estado del proveedor es obligatorio',
    'users.required' => 'El usuario del proveedor es obligatorio',
    'users.min' => 'El usuario del proveedor debe de tener más de 3 caracteres'
];
    protected $primaryKey = 'Id_Supplier';
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Id_Supplier','SupplierCode','Names','FirstSurName','SecondSurName','IdentificationCard','Age','Gender','Address','PhoneNumber','EmailAddress','City','Municipality','Image','Condition','Id_User'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function purchases()
    {
        return $this->hasMany('App\Models\Purchase', 'Id_Supplier', 'Id_Supplier');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'Id_User');
    }


}
