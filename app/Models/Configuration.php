<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Configuration
 *
 * @property $Id_Configuration
 * @property $BisinessName
 * @property $RUC
 * @property $Address
 * @property $PhoneNumber
 * @property $EmailAddress
 * @property $created_at
 * @property $updated_at
 *
 * @property Invoicesale[] $invoicesales
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Configuration extends Model
{

    static $rules = [
		'BisinessName' => 'required',
		'RUC' => 'required',
		'Address' => 'required',
		'PhoneNumber' => 'required',
		'EmailAddress' => 'required',
    ];
    static $messages = ['BisinessName.required' => 'El nombre del negocio es obligatorio',
    'BisinessName.min' => 'El nombre del negocio debe de tener más de 3 caracteres',
    'RUC.required' => 'El RUC del negocio es obligatorio',
    'RUC.min' => 'El RUC del negocio debe de tener más de 3 caracteres',
    'Address.required' => 'La dirección del negocio es obligatoria',
    'Address.min' => 'La dirección del negocio debe de tener más de 3 caracteres',
    'PhoneNumber.required' => 'El número telefónico del negocio es obligatorio',
    'PhoneNumber.min' => 'El número telefónico del negocio debe de tener más de 3 caracteres',
    'EmailAddress.required' => 'El correo electrónico del negocio es obligatorio',
    'EmailAddress.min' => 'El correo electrónico del negocio debe de tener más de 3 caracteres',
    ];

    protected $primaryKey = 'Id_Configuration';
    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Id_Configuration','BisinessName','RUC','Address','PhoneNumber','EmailAddress'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoicesales()
    {
        return $this->hasMany('App\Models\Invoicesale', 'Id_Configuration', 'Id_Configuration');
    }


}
