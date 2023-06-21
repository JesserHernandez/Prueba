<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Medicationlow
 *
 * @property $Id_MedicationLow
 * @property $MedicationLowCode
 * @property $Motive
 * @property $Observations
 * @property $DateLeaving
 * @property $Id_Medicine
 * @property $created_at
 * @property $updated_at
 *
 * @property Medicine $medicine
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Medicationlow extends Model
{
    
    static $rules = [
		'Id_MedicationLow' => 'required',
		'MedicationLowCode' => 'required',
		'Motive' => 'required',
		'Observations' => 'required',
		'DateLeaving' => 'required',
		'Id_Medicine' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Id_MedicationLow','MedicationLowCode','Motive','Observations','DateLeaving','Id_Medicine'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function medicine()
    {
        return $this->hasOne('App\Models\Medicine', 'Id_Medicine', 'Id_Medicine');
    }
    

}
