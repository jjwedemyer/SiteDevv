<?php
  /**
   * User Object class
   * holds data related to user
   */
  class User
  {
    public function __construct($id, $name)
    {
      $u_name = $name;
      $handle = creHandle($name);
    }

    function creHandle($value)
    {
      $handle = strtolower($value);
      $handle = str_replace(' ', '_', $handle);
      return $handle;
    }
    function setFB($value='')
    {
      global $fbuname = $value;
      if(global $uuid == )
    }
    public $uuid      =; //if created with fb == fbuuid otherwise dunno
    public $u_name    =; // Real Name
    public $handle    =; // username...
    public $fbuname   =; //Facebook user name
    public $fbuuid    =; //if not in uuid then save here
    public $scuname   =; //snapchat user name
    public $twuname   =; //twitter handle
    public $tumbuname =; //tumblr
    public $perid     =; // periscope

  }


 ?>
