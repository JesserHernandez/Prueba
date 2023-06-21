<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Brand
 *
 * @property $Id_Brand
 * @property $BrandCode
 * @property $Brand
 * @property $Description
 * @property $Condition
 * @property $created_at
 * @property $updated_at
 *
 * @property Medicine[] $medicines
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Brand extends Model
{

    static $rules = [
		'BrandCode' => 'required',
		'Brand' => 'required',
    ];
    static $messages = ['BrandCode.required' => 'El código de la marca es obligatorio',
    'BrandCode.min' => 'El código de la marca debe de tener más de 3 caracteres',
    'Brand.required' => 'El nombre de la marca es obligatorio',
    'Brand.min' => 'El nombre de la marca debe de tener más de 3 caracteres',
];

    protected $primaryKey = 'Id_Brand';
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Id_Brand','BrandCode','Brand','Description','Condition'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function medicines()
    {
        return $this->hasMany('App\Models\Medicine', 'Id_Brand', 'Id_Brand');
    }


}
