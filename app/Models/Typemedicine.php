<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Typemedicine
 *
 * @property $Id_Typemedicine
 * @property $TypeMedicineCode
 * @property $TypeMedicine
 * @property $Description
 * @property $Condition
 * @property $created_at
 * @property $updated_at
 *
 * @property Medicine[] $medicines
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Typemedicine extends Model
{

    static $rules = [
		'TypeMedicineCode' => 'required',
		'TypeMedicine' => 'required',
    ];
    static $messages = ['TypeMedicineCode.required' => 'El código de la tipo de medicamento es obligatorio',
    'TypeMedicineCode.min' => 'El código de la tipo de medicamento debe de tener más de 3 caracteres',
    'TypeMedicine.required' => 'El nombre de la tipo de medicamento es obligatorio',
    'TypeMedicine.min' => 'El nombre de la tipo de medicamento debe de tener más de 3 caracteres',
];

    protected $primaryKey = 'Id_Typemedicine';
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Id_Typemedicine','TypeMedicineCode','TypeMedicine','Description','Condition'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function medicines()
    {
        return $this->hasMany('App\Models\Medicine', 'Id_TypeMedicine', 'Id_Typemedicine');
    }


}
