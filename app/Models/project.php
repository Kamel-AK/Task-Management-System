<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class project extends Model
{
    /** @use HasFactory<\Database\Factories\ProjectFactory> */

    protected $fillable = ['image_path', 'name', 'description', 'status', 'due_date', 'created_by', 'updated_by'];
    use HasFactory;
    public function tasks(){
        return $this->hasMany(Task::class);
    }
    public function createdBy (){
        return $this->belongsTo(User::class,'created_by');
    }
    public function updatedBy (){
        return $this->belongsTo(User::class,'updated_by');
    }
}
