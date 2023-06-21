<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Employee
 *
 * @property $Id_Employee
 * @property $EmployeeCode
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
 * @property Purchase[] $purchases
 * @property Sale[] $sales
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Employee extends Model
{

    static $rules = [
		'Id_Employee' => 'required',
		'EmployeeCode' => 'required',
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
    static $messages = ['EmployeeCode.required' => 'El código del empleado es obligatorio',
    'EmployeeCode.min' => 'El código del empleado debe de tener más de 3 caracteres',
    'Names.required' => 'El nombre del empleado es obligatorio',
    'Names.min' => 'El nombre del empleado debe de tener más de 3 caracteres',
    'FirstSurName.required' => 'El apellido del empleado es obligatorio',
    'FirstSurName.min' => 'El apellido del empleado debe de tener más de 3 caracteres',
    'IdentificationCard.required' => 'La cédula del empleado es obligatoria',
    'IdentificationCard.min' => 'La cédula del empleado debe de tener más de 3 caracteres',
    'Age.required' => 'La edad del empleado es obligatoria',
    'Gender.required' => 'El género del empleado es obligatorio',
    'Gender.min' => 'El género del empleado debe de tener más de 3 caracteres',
    'City.required' => 'La ciudad del empleado es obligatoria',
    'City.min' => 'La ciudad del empleado debe de tener más de 3 caracteres',
    'Municipality.required' => 'El municipio del empleado es obligatorio',
    'Municipality.min' => 'El municipio del empleado debe de tener más de 3 caracteres',
    'PhoneNumber.required' => 'El número telefónico del empleado es obligatorio',
    'PhoneNumber.min' => 'El número telefónico del empleado debe de tener más de 3 caracteres',
    'Address.required' => 'La dirección del empleado es obligatoria',
    'Address.min' => 'La dirección del empleado debe de tener más de 3 caracteres',
    'EmailAddress.required' => 'El correo electrónico del empleado es obligatorio',
    'EmailAddress.min' => 'El correo electrónico del empleado debe de tener más de 3 caracteres',
    'Condition.required' => 'El estado del empleado es obligatorio',
    'users.required' => 'El usuario del empleado es obligatorio',
    'users.min' => 'El usuario del empleado debe de tener más de 3 caracteres'
];
    protected $primaryKey = 'Id_Employee';
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Id_Employee','EmployeeCode','Names','FirstSurName','SecondSurName','IdentificationCard','Age','Gender','Address','PhoneNumber','EmailAddress','City','Municipality','Image','Condition','Id_User'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orders()
    {
        return $this->hasMany('App\Models\Order', 'Id_Employee', 'Id_Employee');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function purchases()
    {
        return $this->hasMany('App\Models\Purchase', 'Id_Employee', 'Id_Employee');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sales()
    {
        return $this->hasMany('App\Models\Sale', 'Id_Employee', 'Id_Employee');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'Id_User');
    }


}
