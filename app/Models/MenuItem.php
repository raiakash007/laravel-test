<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{

		use HasFactory;

    protected $parentColumn = 'parent_id';

    public function parent()
    {
        return $this->belongsTo(MenuItem::class,$this->parentColumn);
    }

    public function children()
    {
        return $this->hasMany(MenuItem::class, $this->parentColumn);
    }

    public function allChildren()
    {
        return $this->children()->with('allChildren');
    }

}
