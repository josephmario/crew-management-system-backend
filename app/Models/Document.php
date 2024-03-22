<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $fillable = ['id_crew', 'document_name', 'document_number', 'issued_date', 'expiry_date', 'file_path'];
    public function crewMember()
    {
        return $this->belongsTo(CrewMember::class, 'id_crew');
    }
}
