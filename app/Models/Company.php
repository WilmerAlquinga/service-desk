<?php 
namespace App\Models;

use CodeIgniter\Model;

class Company extends Model{
    protected $table      = 'COMPANY';
    protected $primaryKey = 'ID_COMPANY';

    protected $allowedFields = ['NAME', 'DESCRIPTION', 'CREATION_DATE', 'REPRESENTATIVE', 'LOGO'];
}