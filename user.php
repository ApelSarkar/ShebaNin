<?php
/**
 * Created by PhpStorm.
 * User: al-amin
 * Date: 2/13/19
 * Time: 10:43 PM
 */

class user
{
    var $id;
    var $name;
    var $user_name;
    var $password;
    var $role;
    var $address;
//setter functions
    function set_id($id)
    {
        $this->id=$id;
    }

    function set_name($name)
    {
        $this->id=$name;
    }

    function set_user_name($user_name)
    {
        $this->user_name=$user_name;
    }

    function set_password($password)
    {
        $this->password=$password;
    }

    function set_role($role)
    {
        $this->role=$role;
    }

    function set_address($address)
    {
        $this->address=$address;
    }

    //getter function
    function get_id()
    {
        return $this->id;
    }

    function get_name()
    {
        return $this->name;
    }

    function get_user_name()
    {
        return $this->user_name;
    }

    function get_password()
    {
        return $this->password;
    }

    function get_role()
    {
        return $this->role;
    }

    function get_address()
    {
        return $this->address;
    }


}