<?php

namespace App\Models;

use CodeIgniter\Model;

class GuestModel extends Model
{
    protected $table = 'lvlim_MyGuests';

    protected $allowedFields = ['name', 'email', 'website', 'comment', 'gender'];

	
	 public function getGuest()
    {     
        return $this->findAll();
    }
}