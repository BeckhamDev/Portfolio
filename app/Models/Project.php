<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['skill_id', 'name', 'project_url', 'image'];

    public function Skill()
    {
        return $this->belongsTo(Skill::class);
    }
}
