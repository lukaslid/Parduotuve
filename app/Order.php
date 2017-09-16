<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable =['full_name', 'number', 'email', 'completed'];
    public function Complete()
    {
        $this->completed = true;
        $this->save();
    }
    public function UnComplete()
    {
        $this->completed = false;
        $this->save();
    }
}
