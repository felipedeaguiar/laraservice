<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends BaseModel
{
    use HasFactory;

    protected $fillable = ['name', 'url', 'price', 'description'];

    public static $rules = [
        'name' => "required|min:3|max:255",
        'description' => 'nullable|min:3|max:255',
        'price' => 'required',
    ];

    public function search($filter)
    {
       return $this->
            where('name', 'LIKE', "%{$filter}%")
            ->orWhere('description',  'LIKE', "%{$filter}%")
            ->paginate();
    }

    public function beforeCreate()
    {
        return parent::beforeCreate(); // TODO: Change the autogenerated stub
    }
}