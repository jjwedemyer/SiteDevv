<?php
  /**
   * User Object class
   * holds data related to user
   */
  class User
  {
    public function __construct($id, $name, $fblog, $twlog) //constructor used for creating object
    {
      $u_name = $name;
      $handle = creHandle($name);
      $u_mail = setMail();
    }

    function creHandle($value) // creates user handle based on RealName.
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
    public $uuid        =; //if created with fb == fbuuid otherwise dunno
    public $u_mail      =; //User email
    public $displayName =; // Real Name
    public $handle      =; // username...
    public $fbuname     =; //Facebook user name
    public $fbuuid      =; //if not in uuid then save here
    public $scuname     =; //snapchat user name
    public $twuname     =; //twitter handle
    public $tumbuname   =; //tumblr
    public $perid       =; // periscope
    public $meerkatid   =; //meerkat

  }


 ?>
