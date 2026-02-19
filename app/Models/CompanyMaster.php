<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyMaster extends Model
{
    use HasFactory;

    public $table = 'companymaster';
    protected $primaryKey = 'iCompanyId';
    protected $keyType = 'int';
    public $incrementing = true;   // if iCompanyId is AUTO_INCREMENT (most likely yes)
    public $timestamps = false;    // your table seems not using created_at/updated_at

    protected $fillable = [
        'strCompanyPrefix',
        'strOEMCompanyName',
        'strOEMCompanyId',
        'ContactPerson',
        'EmailId',
        'ContactNo',
        'Address1',
        'Address2',
        'Address3',
        'Pincode',
        'iStateId',
        'iCityId',
        'strGSTNo',
        'strEntryDate',
        'strIP',
        'iEntryBy',
        'iUserId',
        'iAllowedCallCount'
    ];
}