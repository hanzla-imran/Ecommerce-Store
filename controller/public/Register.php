<?php
include "config/env.php";
// $name = $last_name = $email = $password = $hpassword = $image = "";
// $namee = $lnamee = $emaile = $passworde = $passwordee = $imageerror = $x = "";
// $uploadok = 0;
// $login = false;
if (isset($_POST['email'])) {
    $namee = $lnamee = $emaile = $passworde = $passwordee = '';

    if (!empty($_POST['first-name'])) {
        $name = $_POST['first-name'];
    } else {
        echo '0';
        exit();
    }

    if (empty($_POST['last-name'])) {
        $lnamee = "Enter your last name";
    } else {
        $last_name = $_POST['last-name'];
    }

    if (empty($_POST['email'])) {
        $emaile = "Enter your email";
    } else {
        $email = $_POST['email'];
    }

    if (empty($_POST['phone'])) {
        $phon = "Enter your phone number";
    } else {
        $phone = $_POST['phone'];
    }

    if (empty($_POST['password'])) {
        $passworde = "Enter your password";
    } else {
        $password = $_POST['password'];
    }

    if (empty($_POST['confirm-password'])) {
        $passwordee = "Confirm your password";
    } else {
        $cpassword = $_POST['confirm-password'];

        if ($password !== $cpassword) {
            $passwordee = "Passwords do not match";
        }
    }

    if (!empty($name) && !empty($last_name) && !empty($email) && !empty($password) && $password === $cpassword) {
        $hpassword = password_hash($password, PASSWORD_DEFAULT);

        $exist_sql = $h->table('users')->select()->where('email', $email)->fetchAll();

        $exist_num = 0;

        foreach ($exist_sql as $row) {
            $exist_num = $row['email'];
        }

        if ($exist_num > 0) {
            $emaile = "This email already exists";
        } else {
            $result = $h->insert('users')->values([
                'first_name' => $name,
                'last_name' => $last_name,
                'phone' => $phone,
                'email' => $email,
                'password' => $hpassword
            ])->run();

            if ($result) {
                echo '1';
                exit();
            } else {
                $error = "There was an error registering the user";
            }
        }
    } else {
        echo '2';
        exit();
    }
}

