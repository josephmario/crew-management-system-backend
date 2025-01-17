<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CrewMember extends Model
{
    use HasFactory;
    public function documents()
    {
        return $this->hasMany(Document::class, 'id_crew');
    }
}
