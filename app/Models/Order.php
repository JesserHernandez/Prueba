<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 *
 * @property $Id_Order
 * @property $OrderCode
 * @property $PhoneNumber
 * @property $Address
 * @property $Condition
 * @property $Id_Medicine
 * @property $Id_Customer
 * @property $Id_Employee
 * @property $created_at
 * @property $updated_at
 *
 * @property Customer $customer
 * @property Employee $employee
 * @property Medicine $medicine
 * @property Sale[] $sales
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Order extends Model
{

    static $rules = [
		'OrderCode' => 'required',
		'PhoneNumber' => 'required',
		'Address' => 'required',
		'Condition' => 'required',
		'Id_Medicine' => 'required',
		'Id_Customer' => 'required',
    ];
    static $messages = ['OrderCode.required' => 'El código del pedido es obligatorio',
    'OrderCode.min' => 'El código del pedido debe de tener más de 3 caracteres',
    'PhoneNumber.required' => 'El número telefónico del pedido es obligatorio',
    'PhoneNumber.min' => 'El número telefónico del pedido debe de tener más de 3 caracteres',
    'Address.required' => 'La dirección del pedido es obligatorio',
    'Address.min' => 'La dirección del pedido debe de tener más de 3 caracteres',
    'Id_Medicine.required' => 'El medicamento del pedido es obligatoria',
    'Id_Customer.required' => 'El cliente del pedido es obligatoria',
    'Condition.required' => 'El estado del pedido es obligatorio',
];
    protected $primaryKey = 'Id_Order';
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Id_Order','OrderCode','PhoneNumber','Address','Condition','Id_Medicine','Id_Customer','Id_Employee'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function customer()
    {
        return $this->hasOne('App\Models\Customer', 'Id_Customer', 'Id_Customer');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function employee()
    {
        return $this->hasOne('App\Models\Employee', 'Id_Employee', 'Id_Employee');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function medicine()
    {
        return $this->hasOne('App\Models\Medicine', 'Id_Medicine', 'Id_Medicine');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sales()
    {
        return $this->hasMany('App\Models\Sale', 'Id_Order', 'Id_Order');
    }


}
