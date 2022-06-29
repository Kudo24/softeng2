<?php

class AddUserContr extends AddUser
{

    private $fname;
    private $mname;
    private $lname;
    private $address;
    private $contact;
    private $email;
    private $password;
    private $passwordRepeat;

    public function __construct($fname, $mname, $lname, $address, $email, $password, $contact, $passwordRepeat)
    {
        $this->fname = $fname;
        $this->mname = $mname;
        $this->lname = $lname;
        $this->address = $address;
        $this->contact = $contact;
        $this->email = $email;
        $this->password = $password;
        $this->passwordRepeat = $passwordRepeat;
    }

    public function addUser()
    {
        if ($this->Isempty() == false) {
            header("Location: ../view/addUser.php?error=emptyinput");
            exit;
        }

        if ($this->invalidEmail() == false) {
            header("Location: ../view/addUser.php?error=InvalidEmail");
            exit;
        }

        if ($this->pwdMatch() == false) {
            header("Location: ../view/addUser.php?error=PwdnotMatch");
            exit;
        }
        if ($this->emailTakenCheck() == false) {
            header("Location: ../view/addUser.php?error=EmailTaken");
            exit;
        }

        if ($this->StrongPwd() == false) {
            header("Location: ../view/addUser.php?error=WeakPassword");
            exit;
        }

        $this->setUser($this->fname, $this->mname, $this->lname, $this->address, $this->contact, $this->email, $this->password);
    }

    private function Isempty()
    {
        if (empty($this->fname) || empty($this->mname) || empty($this->lname) || empty($this->address) || empty($this->contact) || empty($this->email) || empty($this->password) || empty($this->passwordRepeat)) {
            return false;
        }
        return true;
    }

    private function invalidEmail()
    {
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            return false;
        }

        return true;
    }

    private function pwdMatch()
    {
        if ($this->password !== $this->passwordRepeat) {
            return false;
        }

        return true;
    }

    private function emailTakenCheck()
    {
        if (!$this->checkUser($this->email)) {
            return false;
        }

        return true;
    }

    private function StrongPwd()
    {
        if (!preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).*$#", $this->password)) {
            return false;
        }

        return true;
    }
}
