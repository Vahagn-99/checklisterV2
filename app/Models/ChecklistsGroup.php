<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ChecklistsGroup extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function checklists()
    {
        return $this->hasMany(Checklist::class, 'checklists_group_id', 'id');
    }
}
