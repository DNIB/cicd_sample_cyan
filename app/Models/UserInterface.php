<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInterface extends Model
{
    /**
     * Database Connected
     * 
     * @var string
     */
    protected $table = 'test';

    public function index()
    {
        echo "Good Greeting<br>";
    }
}
