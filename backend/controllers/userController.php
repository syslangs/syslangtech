<?php

require_once(__DIR__ . "/../config/init.php");


class User extends Db_object
{
    // MODELS

    protected static $table = 'users';

    public $id;
    public $google_id;
    public $username;
    public $firstname;
    public $lastname;
    public $email;
    public $password;
    public $verified_at;
    public $phone;
    public $image;
    public $gender;
    public $token; 
    public $isbanned; // Boolean
    public $last_online; // DateTime
    public $preference; // json
    public $updated_at;
    public $created_at;  

    protected static $fillable = [
        'google_id',
        'username',
        'firstname',
        'lastname',
        'email',
        'password',
        'verified_at',
        'phone', 
        'image',
        'gender',
        'token',
        'isbanned',
        'last_online',
        'preference',
        'created_at',
        'updated_at',
    ];

    public $filename;
    public $tmp_path;
    public $upload_dir = "uploads".DS."users"; // Use forward slashes // Corrected path (relative to this file)
    public $errors = [];
    public $upload_errors_array = [
        UPLOAD_ERR_OK => "No errors",
        UPLOAD_ERR_INI_SIZE => "The uploaded file is larger than upload_max_filesize",
        UPLOAD_ERR_FORM_SIZE => "The uploaded file is larger than form MAX_FILE_SIZE",
        UPLOAD_ERR_PARTIAL => "The uploaded file was partially uploaded",
        UPLOAD_ERR_NO_FILE => "",
        UPLOAD_ERR_NO_TMP_DIR => "Missing temporary directory",
        UPLOAD_ERR_CANT_WRITE => "Can't write to disk",
        UPLOAD_ERR_EXTENSION => "File upload stopped by extension"
    ];


    // MODELS END

      public function __construct()
      {
          $this->created_at = date('Y-m-d H:i:s');
          $this->updated_at = date('Y-m-d H:i:s');
      }
  
      public function save()
      {
          $this->updated_at = date('Y-m-d H:i:s');
          return parent::save();
      }

    public static function getTotalCustomerCount(){
        $userCount = self::all();
        return $userCount->count();
    }








}
