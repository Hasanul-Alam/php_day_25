<?php


namespace App\classes;
use App\classes\Database;


class Student
{
    public $name, $email, $mobile, $sql, $imageName, $directory, $tempLocation, $imageUrl, $database, $queryResult, $data = [], $row;

    public function __construct($post=null, $files=null)
    {
        if(isset($post['name']))
        {
            $this->name = $post['name'];
            $this->email = $post['email'];
            $this->mobile = $post['mobile'];
            $this->imageName = time().$files['image']['name'];
            $this->directory = 'assets/img/';
            $this->imageUrl = $this->directory.$this->imageName;
            $this->tempLocation = $files['image']['tmp_name'];
        }
    }

    public function newStudent()
    {
        if(! getimagesize($this->tempLocation))
        {
            return'Please select an image.';
        }

        move_uploaded_file($this->tempLocation, $this->imageUrl);

        $this->sql = "INSERT INTO students (name, email, mobile, image) VALUE ('$this->name', '$this->email', '$this->mobile', '$this->imageUrl')";
        $this->database = new Database();
        mysqli_query($this->database->dbConnect(), $this->sql);
        return 'Data inserted successfully.';
    }

    public function getAllStudent()
    {
        $this->sql = "SELECT * FROM students";
        $this->database = new Database();
        $this->queryResult = mysqli_query($this->database->dbConnect(), $this->sql);

        while($this->row = mysqli_fetch_assoc($this->queryResult))
        {
            array_push($this->data, $this->row);
        }

        return $this->data;
    }

    public function getStudentById($id)
    {
        $this->sql = "SELECT * FROM students WHERE id = '$id'";
        $this->database = new Database();
        $this->queryResult = mysqli_query($this->database->dbConnect(), $this->sql);
        $this->row = mysqli_fetch_assoc($this->queryResult);
        return $this->row;
    }

    public function updateStudent()
    {
        $this->sql = "UPDATE students SET name='$this->name', email='$this->email', mobile='$this->mobile', WHERE id = '$id'";
        $this->database = new Database();
        $this->queryResult = mysqli_query($this->database->dbConnect(), $this->sql);
    }

}