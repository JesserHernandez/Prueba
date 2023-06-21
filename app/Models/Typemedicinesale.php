<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Typemedicinesale
 *
 * @property $Id_TypemedicineSales
 * @property $TypeMedicineSaleCode
 * @property $TypeMedicineSale
 * @property $Description
 * @property $Condition
 * @property $created_at
 * @property $updated_at
 *
 * @property Medicine[] $medicines
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Typemedicinesale extends Model
{

    static $rules = [
		'TypeMedicineSaleCode' => 'required',
		'TypeMedicineSale' => 'required',
    ];
    static $messages = ['TypeMedicineSaleCode.required' => 'El código de la tipo de medicamento venta es obligatorio',
    'TypeMedicineSaleCode.min' => 'El código de la tipo de medicamento venta debe de tener más de 3 caracteres',
    'TypeMedicineSale.required' => 'El nombre de la tipo de medicamento venta es obligatorio',
    'TypeMedicineSale.min' => 'El nombre de la tipo de medicamento venta debe de tener más de 3 caracteres',
];

    protected $primaryKey = 'Id_Typemedicine';
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Id_TypemedicineSales','TypeMedicineSaleCode','TypeMedicineSale','Description','Condition'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function medicines()
    {
        return $this->hasMany('App\Models\Medicine', 'Id_TypemedicineSales', 'Id_TypemedicineSales');
    }


}
