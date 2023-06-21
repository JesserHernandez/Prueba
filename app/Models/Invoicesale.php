<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Invoicesale
 *
 * @property $Id_InvoiceSale
 * @property $InvoiceSaleCode
 * @property $BroadcastDate
 * @property $Id_Sale
 * @property $Id_Configuration
 * @property $created_at
 * @property $updated_at
 *
 * @property Configuration $configuration
 * @property Sale $sale
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Invoicesale extends Model
{
    
    static $rules = [
		'Id_InvoiceSale' => 'required',
		'InvoiceSaleCode' => 'required',
		'BroadcastDate' => 'required',
		'Id_Sale' => 'required',
		'Id_Configuration' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Id_InvoiceSale','InvoiceSaleCode','BroadcastDate','Id_Sale','Id_Configuration'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function configuration()
    {
        return $this->hasOne('App\Models\Configuration', 'Id_Configuration', 'Id_Configuration');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sale()
    {
        return $this->hasOne('App\Models\Sale', 'Id_Sale', 'Id_Sale');
    }
    

}
