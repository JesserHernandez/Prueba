<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Laboratory
 *
 * @property $Id_Laboratory
 * @property $LaboratoryCode
 * @property $Laboratory
 * @property $Description
 * @property $Condition
 * @property $created_at
 * @property $updated_at
 *
 * @property Medicine[] $medicines
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Laboratory extends Model
{

    static $rules = [
		'LaboratoryCode' => 'required',
		'Laboratory' => 'required',
    ];
    static $messages = ['Laboratory.required' => 'El nombre del laboratorio es obligatorio',
    'Laboratory.min' => 'El nombre del laboratorio debe de tener más de 3 caracteres',
    'LaboratoryCode.required' => 'El código del laboratorio es obligatorio',
    'LaboratoryCode.min' => 'El código del laboratorio debe de tener más de 3 caracteres',
    ];

    protected $primaryKey = 'Id_Laboratory';
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Id_Laboratory','LaboratoryCode','Laboratory','Description','Condition'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function medicines()
    {
        return $this->hasMany('App\Models\Medicine', 'Id_Laboratory', 'Id_Laboratory');
    }


}
