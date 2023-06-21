<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sale
 *
 * @property $Id_Sale
 * @property $SaleCode
 * @property $MethodPayment
 * @property $ProductQuantity
 * @property $PaymentAmount
 * @property $Descount
 * @property $Total
 * @property $Condition
 * @property $Id_Order
 * @property $Id_Customer
 * @property $Id_Employee
 * @property $created_at
 * @property $updated_at
 *
 * @property Customer $customer
 * @property Employee $employee
 * @property Invoicesale[] $invoicesales
 * @property Order $order
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Sale extends Model
{

    static $rules = [
		'SaleCode' => 'required',
		'MethodPayment' => 'required',
		'ProductQuantity' => 'required',
		'PaymentAmount' => 'required',
		'Total' => 'required',
		'Condition' => 'required',
		'Id_Order' => 'required',
		'Id_Customer' => 'required',
		'Id_Employee' => 'required',
    ];
    static $messages = ['SaleCode.required' => 'El código de la venta es obligatorio',
    'SaleCode.min' => 'El código de la venta debe de tener más de 3 caracteres',
    'MethodPayment.required' => 'El metodo de pago de la venta es obligatorio',
    'PaymentAmount.required' => 'La cantidad a pagar de la venta es obligatoria',
    'ProductQuantity.required' => 'La cantidad de medicamentos de la venta es obligatoria',
    'Total.required' => 'El total de la venta es obligatoria',
    'Id_Medicine.required' => 'El medicamento de la venta es obligatoria',
    'Id_Supplier.required' => 'El proveedor de la venta es obligatoria',
    'Condition.required' => 'El estado de la venta es obligatorio',
];
    protected $primaryKey = 'Id_Purchase';
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Id_Sale','SaleCode','MethodPayment','ProductQuantity','PaymentAmount','Descount','Total','Condition','Id_Order','Id_Customer','Id_Employee'];


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
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoicesales()
    {
        return $this->hasMany('App\Models\Invoicesale', 'Id_Sale', 'Id_Sale');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function order()
    {
        return $this->hasOne('App\Models\Order', 'Id_Order', 'Id_Order');
    }


}
