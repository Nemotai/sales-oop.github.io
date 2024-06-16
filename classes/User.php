<?php
require_once "Database.php";

class User extends Database
{
    public function store($request)
    {
        $first_name = $request['first_name'];
        $last_name = $request['last_name'];
        $username = $request['username'];
        $password = $request['password'];

        $password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO Users(first_name, last_name, username, password)
                VALUE ('$first_name', '$last_name', '$username', '$password')";

        if($this->conn->query($sql))
        {
            header('location: ../views/index.php');
            exit;
        }else{
            die('Error creating the user: ' .$this->conn->erro);
        }
    }

    public function login($request)
    {
         $username = $request['username'];
         $password = $request['password'];

        
        $sql = "SELECT * FROM Users WHERE username = '$username'";

        $result = $this->conn->query($sql);

        #check the usrename
        if($result->num_rows == 1)
        {
            #check if the password is correct
            $user = $result->fetch_assoc();

            #check session variables for future use.
            if(password_verify($password,$user['password']))
            {
                session_start();

                $_SESSION['id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['full_name'] = $user['first_name']." " .$user['last_name'];

                header('location: ../views/dashboard.php');
                exit;
            }else{
                die('Password is incorrect.');
            }
        }else{
            die('Username no found.');
        }   
    }

    public function getUsers()
    {
        $sql = "SELECT `id`, `first_name`, `last_name`, `username`, `password` FROM `Users` ";

        if($result = $this->conn->query($sql)){
            return $result->fetch_assoc();
        }else{
            die('Error retrieving all products: ' . $this->conn->error);
        }
    }

    public function getUser()
    {
        $id = $_GET['user_id'];

        $sql = "SELECT `id`, `first_name`, `last_name`, `username`, `password` FROM `Users` WHERE id= $id";

        if($result = $this->conn->query($sql)){
            return $result->fetch_assoc();
        }else{
            die('Error retrieving all products: ' . $this->conn->error);
        }
    }

    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();

        header('location: ../views');
        exit;
    }
}

class Product extends Database
{
    

    public function getProducts()
    {
        $sql = "SELECT id, product_name, price, quantity FROM Product";

        if($result = $this->conn->query($sql)){
            return $result;
        }else{
            die('Error retrieving all products: ' . $this->conn->error);
        }
    } 

    public function getProduct()
    {
        $id = $_GET['product_id'];

        $sql = "SELECT id, product_name, price, quantity FROM Product WHERE id= $id";

        if($result = $this->conn->query($sql)){
            return $result->fetch_assoc();
        }else{
            die('Error retrieving all products: ' . $this->conn->error);
        }
    }

    public function addProduct($request)
    {
        $product_name = $request['product_name'];
        $price = $request['price'];
        $quantity = $request['quantity'];

        $sql = "INSERT INTO Product(product_name, price, quantity)
                VALUE ('$product_name', $price, '$quantity')";

        if($this->conn->query($sql))
        {
            header('location: ../views/dashboard.php');
            exit;
        }else{
            die('Error adding the product: ' .$this->conn->erro);
        }
    }

    public function updateProduct($id, $request)
    {
        $product_name = $request['product_name'];
        $price = $request['price'];
        $quantity = $request['quantity'];

        $sql = "UPDATE Product
                SET product_name = '$product_name',
                    price = '$price',
                    quantity = '$quantity'
                WHERE id = $id";

        if($this->conn->query($sql)){
            header('location: ../views/dashboard.php');
            exit;
        }else{
            die('Error uplaoding the product: ' . $this->conn->error);
        }
    }

    public function delete($request)
    {
        $id = $_GET['product_id'];
        $sql = "DELETE FROM Product WHERE id = $id";

        if($this->conn->query($sql))
        {
            header('location: ../views/dashboard.php');
            exit;
        }else{
            die('Error deleteing product: ' . $his->conn->error);
        }
    }
}


?>