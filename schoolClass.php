<?php
include 'connection.php';

 class schoolClass extends connection{

    private $conn  = null;
    private $query   = null;
    private $statement   = null;


    public function __construct(){
        try {
            $dbConn  = new connection();
            $this->conn = $dbConn->connectingToServer();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }


    public function selectAllInformationRelatedToTheStudent($studentId){
        try {

            $this->query = "SELECT * FROM marks_first_term WHERE st_id=?";
            $this->statement = $this->conn->prepare($this->query);
            $this->statement->bindParam(1,$studentId);
            $this->statement->execute();

            $arrayOfData  = array();
            while ($hofInfo  = $this->statement->fetchAll()) {
                $arrayOfData  = $hofInfo;
            }
            return $arrayOfData;

        }  catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function selectAllInformationRelatedToTheStudentSecondTerm($studentId){
        try {

            $this->query = "SELECT * FROM marks_second_term WHERE st_id=?";
            $this->statement = $this->conn->prepare($this->query);
            $this->statement->bindParam(1,$studentId);
            $this->statement->execute();

            $arrayOfData  = array();
            while ($hofInfo  = $this->statement->fetchAll()) {
                $arrayOfData  = $hofInfo;
            }
            return $arrayOfData;

        }  catch (Exception $e) {
            echo $e->getMessage();
        }
    }


    public function selectAllInformationRelatedToTheStudentThirdTerm($studentId){
        try {

            $this->query = "SELECT * FROM marks_third_term WHERE st_id=?";
            $this->statement = $this->conn->prepare($this->query);
            $this->statement->bindParam(1,$studentId);
            $this->statement->execute();

            $arrayOfData  = array();
            while ($hofInfo  = $this->statement->fetchAll()) {
                $arrayOfData  = $hofInfo;
            }
            return $arrayOfData;

        }  catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function selectAllStudentInformation($studentId){
        try {

            $this->query = "SELECT * FROM student WHERE st_id=?";
            $this->statement = $this->conn->prepare($this->query);
            $this->statement->bindParam(1,$studentId);
            $this->statement->execute();

            $arrayOfData  = array();
            while ($hofInfo  = $this->statement->fetchAll()) {
                $arrayOfData  = $hofInfo;
            }
            return $arrayOfData;

        }  catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function selectAllInformationRelatedParentOfStudent($studentId){
        try {

            $this->query = "SELECT * FROM parents WHERE st_id=?";
            $this->statement = $this->conn->prepare($this->query);
            $this->statement->bindParam(1,$studentId);
            $this->statement->execute();

            $arrayOfData  = array();
            while ($hofInfo  = $this->statement->fetchAll()) {
                $arrayOfData  = $hofInfo;
            }
            return $arrayOfData;

        }  catch (Exception $e) {
            echo $e->getMessage();
        }
    }



// SOD Lv4 


public function selectAllInformationRelatedToTheStudentSODLV4SM1($studentId){
    try {

        $this->query = "SELECT * FROM report_first WHERE st_id=?";
        $this->statement = $this->conn->prepare($this->query);
        $this->statement->bindParam(1,$studentId);
        $this->statement->execute();

        $arrayOfData  = array();
        while ($hofInfo  = $this->statement->fetchAll()) {
            $arrayOfData  = $hofInfo;
        }
        return $arrayOfData;

    }  catch (Exception $e) {
        echo $e->getMessage();
    }
}


public function selectAllInformationRelatedToTheStudentSODLV4SM2($studentId){
    try {

        $this->query = "SELECT * FROM report_second WHERE st_id=?";
        $this->statement = $this->conn->prepare($this->query);
        $this->statement->bindParam(1,$studentId);
        $this->statement->execute();

        $arrayOfData  = array();
        while ($hofInfo  = $this->statement->fetchAll()) {
            $arrayOfData  = $hofInfo;
        }
        return $arrayOfData;

    }  catch (Exception $e) {
        echo $e->getMessage();
    }
}


public function selectAllInformationRelatedToTheStudentSODLV4SM3($studentId){
    try {

        $this->query = "SELECT * FROM report_third WHERE st_id=?";
        $this->statement = $this->conn->prepare($this->query);
        $this->statement->bindParam(1,$studentId);
        $this->statement->execute();

        $arrayOfData  = array();
        while ($hofInfo  = $this->statement->fetchAll()) {
            $arrayOfData  = $hofInfo;
        }
        return $arrayOfData;

    }  catch (Exception $e) {
        echo $e->getMessage();
    }
}


//  All  Guardian who have student in LV3 


public function selectAllInformationRelatedParentWhoHaveStudentInSODlv3(){
    try {

        $this->query = "SELECT * FROM parents WHERE st_id=?";
        $this->statement = $this->conn->prepare($this->query);
        $this->statement->bindParam(1,$studentId);
        $this->statement->execute();

        $arrayOfData  = array();
        while ($hofInfo  = $this->statement->fetchAll()) {
            $arrayOfData  = $hofInfo;
        }
        return $arrayOfData;

    }  catch (Exception $e) {
        echo $e->getMessage();
    }
}




//  Change Here




public function selectAllInformationRelatedToTheStudentSM1($studentId){
    try {

        $this->query = "SELECT * FROM report_first WHERE st_id=?";
        $this->statement = $this->conn->prepare($this->query);
        $this->statement->bindParam(1,$studentId);
        $this->statement->execute();

        $arrayOfData  = array();
        while ($hofInfo  = $this->statement->fetchAll()) {
            $arrayOfData  = $hofInfo;
        }
        return $arrayOfData;

    }  catch (Exception $e) {
        echo $e->getMessage();
    }
}


public function selectAllInformationRelatedToTheStudentSM2($studentId){
    try {

        $this->query = "SELECT * FROM report_second WHERE st_id=?";
        $this->statement = $this->conn->prepare($this->query);
        $this->statement->bindParam(1,$studentId);
        $this->statement->execute();

        $arrayOfData  = array();
        while ($hofInfo  = $this->statement->fetchAll()) {
            $arrayOfData  = $hofInfo;
        }
        return $arrayOfData;

    }  catch (Exception $e) {
        echo $e->getMessage();
    }
}


public function selectAllInformationRelatedToTheStudentSM3($studentId){
    try {

        $this->query = "SELECT * FROM report_third WHERE st_id=?";
        $this->statement = $this->conn->prepare($this->query);
        $this->statement->bindParam(1,$studentId);
        $this->statement->execute();

        $arrayOfData  = array();
        while ($hofInfo  = $this->statement->fetchAll()) {
            $arrayOfData  = $hofInfo;
        }
        return $arrayOfData;

    }  catch (Exception $e) {
        echo $e->getMessage();
    }
}






 }






?>