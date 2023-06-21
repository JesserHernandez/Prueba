<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Purchase
 *
 * @property $Id_Purchase
 * @property $PurchaseCode
 * @property $MethodPayment
 * @property $PaymentAmount
 * @property $ProductQuantity
 * @property $Descount
 * @property $Total
 * @property $Condition
 * @property $Id_Medicine
 * @property $Id_Supplier
 * @property $Id_Employee
 * @property $created_at
 * @property $updated_at
 *
 * @property Employee $employee
 * @property Medicine $medicine
 * @property Supplier $supplier
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Purchase extends Model
{

    static $rules = [
		'PurchaseCode' => 'required',
		'MethodPayment' => 'required',
		'PaymentAmount' => 'required',
		'ProductQuantity' => 'required',
		'Total' => 'required',
		'Condition' => 'required',
		'Id_Medicine' => 'required',
		'Id_Supplier' => 'required',
    ];
    static $messages = ['PurchaseCode.required' => 'El código de la compra es obligatorio',
    'PurchaseCode.min' => 'El código de la compra debe de tener más de 3 caracteres',
    'MethodPayment.required' => 'El metodo de pago de la compra es obligatorio',
    'PaymentAmount.required' => 'La cantidad a pagar de la compra es obligatoria',
    'ProductQuantity.required' => 'La cantidad de medicamentos de la compra es obligatoria',
    'Total.required' => 'El total de la compra es obligatoria',
    'Id_Medicine.required' => 'El medicamento de la compra es obligatoria',
    'Id_Supplier.required' => 'El proveedor de la compra es obligatoria',
    'Condition.required' => 'El estado de la compra es obligatorio',
];
    protected $primaryKey = 'Id_Purchase';
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Id_Purchase','PurchaseCode','MethodPayment','PaymentAmount','ProductQuantity','Descount','Total','Condition','Id_Medicine','Id_Supplier','Id_Employee'];


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
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function supplier()
    {
        return $this->hasOne('App\Models\Supplier', 'Id_Supplier', 'Id_Supplier');
    }


}
