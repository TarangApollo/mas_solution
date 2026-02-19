<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyCallCount extends Model
{
    use HasFactory;

    protected $table = 'company_call_count';   // table name

    protected $primaryKey = 'id';               // primary key is id

    public $timestamps = true;                  // because created_at / updated_at exist

    protected $fillable = [
        'iOemCompannyId',
        'iTicketId',
        'iUserId',
        'iPhoneStatus',
        'iPhoneCount',
        'iWhatsAppStatus',
        'iWhatsAppCount',
        'strIP',
        'iStatus',
        'isDelete',
    ];
}
