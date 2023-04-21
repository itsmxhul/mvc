<?php

class model 
{
    public $Connection="";
    public function __construct()
    {
        $this->Connection=new mysqli("localhost","root","","bookit"); 
      // echo "<pre>";
      // print_r($this->connection);
    }
    public function insert($tbl,$data){
        // echo "<pre>";
         //print_r($data);
         $KeysData = implode(",",array_keys($data)) ;
         $ValsData = implode("','",$data) ;
        //  print_r($KeysData);
          $SQL = "INSERT INTO $tbl($KeysData)VALUES('$ValsData')";
         // echo $SQL;
          $SQLEx = $this->Connection->query($SQL);
        if ($SQLEx > 0) {
            $Respose["Code"] = "1";
            $Respose["Msg"] = "Success";
            $Respose["Data"] = "1";
        } else {
            $Respose["Code"] = "0";
            $Respose["Msg"] = "Try again";
            $Respose["Data"] = 0;
        }
        return $Respose;

    }

    public function select($tbl, $where = "")
    {
        $SQL = "SELECT * FROM $tbl"; //this is a dynamic parameter recv krya 
        if ($where != "") {
            $SQL .= " WHERE ";
            foreach ($where as $key => $value) {
                $SQL .= " $key = $value AND";
            }
            $SQL = rtrim($SQL, "AND");
        }
        // echo $SQL;
        // exit; 
        $SQLEx = $this->Connection->query($SQL);
        if ($SQLEx->num_rows > 0) {
            while ($Fetch = $SQLEx->fetch_object()) {
                $FetchData[] = $Fetch;
            }
            $Respose["Code"] = "1";
            $Respose["Msg"] = "Success";
            $Respose["Data"] = $FetchData;
        } else {
            $Respose["Code"] = "0";
            $Respose["Msg"] = "Try again";
            $Respose["Data"] = 0;
        }
        return $Respose;
        // echo $SQL; 
    }
    public function update($tbl, $data, $where)
    {
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        $SQL = "UPDATE $tbl SET ";
        foreach ($data as $key => $value) {
            $SQL .= " $key ='$value',";
        }
        $SQL = rtrim($SQL, ",");
        // echo $SQL;
        // exit;
        $SQL .= " WHERE ";
        foreach ($where as $key => $value) {
            $SQL .= " $key = $value AND";
        }
        $SQL = rtrim($SQL, "AND");
        // echo $SQL;
        $SQLEx = $this->Connection->query($SQL);
        if ($SQLEx > 0) {
            $Respose["Code"] = "1";
            $Respose["Msg"] = "Success";
            $Respose["Data"] = "1";
        } else {
            $Respose["Code"] = "0";
            $Respose["Msg"] = "Try again";
            $Respose["Data"] = 0;
        }
        return $Respose;
    }
    public function delete($tbl,$where)
    {
        $SQL = "DELETE FROM $tbl";
        $SQL .= " WHERE ";
        foreach ($where as $key => $value) {
            $SQL .= " $key = $value AND";
        }
        $SQL = rtrim($SQL, "AND");
        echo $SQL;
        $SQLEx = $this->Connection->query($SQL);
        if ($SQLEx > 0) {
            $Respose["Code"] = "1";
            $Respose["Msg"] = "Success";
            $Respose["Data"] = "1";
        } else {
            $Respose["Code"] = "0";
            $Respose["Msg"] = "Try again";
            $Respose["Data"] = 0;
        }
        return $Respose;
    }



    public function login($username,$password){
        // $SQL = "SELECT * FROM users WHERE username='test' AND password ='test'";
        // $SQL = 'SELECT * FROM users WHERE username=$uname';
        $SQL = "SELECT * FROM user WHERE password ='$password' AND (username='$username' OR email='$username' OR mobile='$username')";
            // $SQLEx = $this->Connection->query("SELECT * FROM users WHERE password ='$pass' AND (username='$uname' OR email='$uname' OR mobile='$uname')");
            $SQLEx = $this->Connection->query($SQL);
           //  echo "<pre>";
            //print_r($SQLEx);
            if ($SQLEx->num_rows > 0) {
                echo "inside if";
                // $FetchData = $SQLEx->fetch_all(); // numeric Array 
                // $FetchData = $SQLEx->fetch_array();  // numeric and assoc
                // $FetchData = $SQLEx->fetch_assoc();  //  assoc
                // $FetchData = $SQLEx->fetch_field();  //  table column
                // $FetchData = $SQLEx->fetch_row();  //  single and only numeric array
                $FetchData = $SQLEx->fetch_object();  //  object res
                // print_r($FetchData);
                $Respose["Code"] = "1";
                $Respose["Msg"] = "Success";
                $Respose["Data"] = $FetchData;
            } else {
                $Respose["Code"] = "0";
                $Respose["Msg"] = "Try again";
                $Respose["Data"] = 0;
            }
            return $Respose;
    }
}




//$model = new model;
 //$res = $model->insert('user',array("username"=>"test","password"=>"123","mobile"=>"9979545555","email"=>"hariom@gmail.com"));
 //print_r($res);
 //echo "<br>";

// $res = $model->login('mehul',"123");
//  print_r($res);
// echo "<br>";
?>