<?php
  require 'db_conf.inc.php';
  /**
   * User Object class
   * holds data related to user
   */
  class User
  {
    public function __construct($id, $name, $mail) //constructor used for creating object
    {
      $this->u_name = $name;
      $this->handle = creHandle($name);
      $this->u_mail = setMail($mail);
      $this->uuid   = $id;
    }
    public static function create()
    {
      $instance = new self();
      return $instance;
    }


    function creHandle($value) // creates user handle based on RealName.
    {
      $handle = strtolower($value);
      $handle = str_replace(' ', '_', $handle);
      return $handle;
    }
    function setMail($mail)
    {
      if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        return $mail;
      }
      else {
        return "error";
      }
    }
    function setFB($username)
    {

    }

    public function writeDB()
    {
      $con  = mysql_connect($db_host, $db_user, $db_pass);
      if(! $con ) {
        die('Could not connect: ' . mysql_error());
      }
      $date = time();
      $sql  = "INSERT INTO user".
              "(UUID,realname,handle,mail,bg,fbuname,fbuuid,insta,snap,sncode,twitterhandle,peris,meerkatid,tumblr,join_date)".
              "VALUES('$this->uuid','$this->displayName','$this->handle','$this->mail','$this->bg','$this->fbuname','$this->fbuuid','$this->insta','$this->scuname','$this->sccode','$this->twhandle','$this->perid','$this->meerkatid','$this->tumbuname',NOW())";
      mysql_select_db('rage');
      $retval = mysql_query( $sql, $con );
      if(! $retval ) {
        die('Could not enter data: ' . mysql_error());
      }

      echo "Entered data successfully\n";

      mysql_close($con);
    }

    public $uuid        =; //if created with fb == fbuuid otherwise dunno
    public $u_mail      =; //User email
    public $displayName =; // Real Name
    public $handle      =; // username...
    public $bg          =; //Background pciture
    public $fbuname     =; //Facebook user name
    public $fbuuid      =; //if not in uuid then save here
    public $insta       =; // Instagram handle
    public $scuname     =; //snapchat user name
    public $sccode      =; //snapcope
    public $twhandle     =; //twitter handle
    public $tumbuname   =; //tumblr
    public $perid       =; // periscope
    public $meerkatid   =; //meerkat
    public $tagline     =;

  }


 ?>
