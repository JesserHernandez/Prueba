<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Medicine
 *
 * @property $Id_Medicine
 * @property $MedicineCode
 * @property $Medicine
 * @property $Indication
 * @property $Ingredient
 * @property $Contraindication
 * @property $SideEffect
 * @property $Dosage
 * @property $Storage
 * @property $Interaction
 * @property $Precaution
 * @property $Quality
 * @property $PurchasePrice
 * @property $SalePrice
 * @property $Image
 * @property $ExpirationDate
 * @property $Amount
 * @property $Condition
 * @property $Id_Brand
 * @property $Id_TypeMedicine
 * @property $Id_TypemedicineSales
 * @property $Id_Laboratory
 * @property $created_at
 * @property $updated_at
 *
 * @property Brand $brand
 * @property Laboratory $laboratory
 * @property Medicationlow[] $medicationlows
 * @property Order[] $orders
 * @property Purchase[] $purchases
 * @property Typemedicine $typemedicine
 * @property Typemedicinesale $typemedicinesale
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Medicine extends Model
{

    static $rules = [
		'MedicineCode' => 'required',
		'Medicine' => 'required',
		'Indication' => 'required',
		'Ingredient' => 'required',
		'Contraindication' => 'required',
		'SideEffect' => 'required',
		'Dosage' => 'required',
		'Storage' => 'required',
		'Interaction' => 'required',
		'Precaution' => 'required',
		'Quality' => 'required',
		'PurchasePrice' => 'required',
		'SalePrice' => 'required',
		'ExpirationDate' => 'required',
		'Amount' => 'required',
		'Condition' => 'required',
		'Id_Brand' => 'required',
		'Id_TypeMedicine' => 'required',
		'Id_TypemedicineSales' => 'required',
		'Id_Laboratory' => 'required',
    ];
    static $messages = ['MedicineCode.required' => 'El código del medicamento es obligatorio',
    'MedicineCode.min' => 'El código del medicamento debe de tener más de 3 caracteres',
    'Medicine.required' => 'El nombre del medicamento es obligatorio',
    'Medicine.min' => 'El nombre del medicamento debe de tener más de 3 caracteres',
    'Indication.required' => 'Las indicaciones del medicamento son obligatorias',
    'Indication.min' => 'Las indicaciones del medicamento deben de tener más de 3 caracteres',
    'Ingredient.required' => 'Los ingredientes del medicamento son obligatorios',
    'Ingredient.min' => 'Los ingredientes del medicamento deben de tener más de 3 caracteres',
    'Contraindication.required' => 'Las contraindicaciones del medicamento son obligatorias',
    'Contraindication.min' => 'Las contraindicaciones del medicamento deben de tener más de 3 caracteres',
    'SideEffect.required' => 'Los efectos secundarios del medicamento son obligatorios',
    'SideEffect.min' => 'Los efectos secundarios del medicamento deben de tener más de 3 caracteres',
    'Dosage.required' => 'La dosis del medicamento es obligatoria',
    'Dosage.min' => 'La dosis del medicamento debe de tener más de 3 caracteres',
    'Storage.required' => 'El tipo de almacenamiento del medicamento es obligatorio',
    'Storage.min' => 'El tipo de almacenamiento debe de tener más de 3 caracteres',
    'Interaction.required' => 'La interaccion del medicamento es obligatorio',
    'Interaction.min' => 'La interaccion del medicamento debe de tener más de 3 caracteres',
    'Precaution.required' => 'Las precauciones del medicamento son obligatorias',
    'Precaution.min' => 'Las precauciones del medicamento deben de tener más de 3 caracteres',
    'PurchasePrice.required' => 'El precio de compra del medicamento es obligatorio',
    'PurchasePrice.min' => 'El precio de compra del medicamento debe de tener más de 3 caracteres',
    'SalePrice.required' => 'El precio de venta del medicamento es obligatorio',
    'SalePrice.min' => 'El precio de venta del medicamento debe de tener más de 3 caracteres',
    'ExpirationDate.required' => 'La dirección del medicamento es obligatoria',
    'ExpirationDate.min' => 'La dirección del medicamento debe de tener más de 3 caracteres',
    'Amount.required' => 'La cantidad de medicamento es obligatoria',
    'Amount.min' => 'La cantidad del medicamento debe de tener más de 3 caracteres',
    'Condition.required' => 'La condición del medicamento es obligatoria',
    'Id_Brand.required' => 'La marca del medicamento es obligatorio',
    'Id_TypeMedicine.required' => 'El tipo de medicamento es obligatorio',
    'Id_TypemedicineSales.required' => 'El tipo de medicamento venta es obligatorio',
    'Id_Laboratory.required' => 'El laboratorio del medicamento es obligatorio',
];
    protected $primaryKey = 'Id_Medicine';
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Id_Medicine','MedicineCode','Medicine','Indication','Ingredient','Contraindication','SideEffect','Dosage','Storage','Interaction','Precaution','Quality','PurchasePrice','SalePrice','Image','ExpirationDate','Amount','Condition','Id_Brand','Id_TypeMedicine','Id_TypemedicineSales','Id_Laboratory'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function brand()
    {
        return $this->hasOne('App\Models\Brand', 'Id_Brand', 'Id_Brand');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function laboratory()
    {
        return $this->hasOne('App\Models\Laboratory', 'Id_Laboratory', 'Id_Laboratory');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function medicationlows()
    {
        return $this->hasMany('App\Models\Medicationlow', 'Id_Medicine', 'Id_Medicine');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function orders()
    {
        return $this->hasMany('App\Models\Order', 'Id_Medicine', 'Id_Medicine');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function purchases()
    {
        return $this->hasMany('App\Models\Purchase', 'Id_Medicine', 'Id_Medicine');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function typemedicine()
    {
        return $this->hasOne('App\Models\Typemedicine', 'Id_Typemedicine', 'Id_TypeMedicine');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function typemedicinesale()
    {
        return $this->hasOne('App\Models\Typemedicinesale', 'Id_TypemedicineSales', 'Id_TypemedicineSales');
    }


}
