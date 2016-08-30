<?php namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Auth\DefaultPasswordHasher;
class HashPasswordComponent extends Component
{
    /**
     * hashing password.
     * @return
     */		
Public function _setPassword($password)
{
if (strlen($password) > 0) {
return (new DefaultPasswordHasher)->hash($password);
																}
}
}