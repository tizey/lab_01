<?php

$password = $_POST["password"];
$login = $_POST["login"];
$user_data = $login ." ". $password;
//echo "$user_data";

class  User
{
    public $name;
    public $surname;
    public $role;
    public $pass;
    public $log;


}

class Admin extends User
{
    function  __construct()
    {
        $this->pass = "qwe123";
        $this->log = "Adminchik228";
        $this->role = "Админ";
        $this->name = "Ада";
        $this->surname = "Байрон";

    }

    public function printInfo()
    {
        echo "Здравствуйте " . $this->role . " " . $this->name . " " . $this->surname . " " . "Вы можете на сайте делать всё";
    }
//Здравствуйте админ Ада Байрон. Вы можете на сайте делать всё
}


class Client extends User
{
    function  __construct()
    {
        $this->pass = "12345678";
        $this->log = "Clientik1488";
        $this->role = "Клиент";
        $this->name = "Афанасий ";
        $this->surname = "Авдотьев";

    }

    public function printInfo()
    {
        echo "Здравствуйте " . $this->role . " " . $this->name . " " . $this->surname . " " . "Вы можете на сайте просматривать информацию доступную пользователям";
    }
//Здравствуйте клиент Афанасий Авдотьев. Вы можете на сайте просматривать информацию доступную пользователям
}


class Manager extends User
{
    function  __construct()
    {
        $this->pass = "zxccxz";
        $this->log = "Manageer1337";
        $this->role = "Менеджер";
        $this->name = "Иван ";
        $this->surname = "Иванов";

    }

    public function printInfo()
    {
        echo "Здравствуйте " . $this->role . " " . $this->name . " " . $this->surname . " " . "Вы можете на сайте изменять, удалять и создавать клиентов";
    }
//Здравствуйте клиент Афанасий Авдотьев. Вы можете на сайте просматривать информацию доступную пользователям
}

if ($login == "Adminchik228" and $password == "qwe123") {
    $adm = new Admin();
    $adm -> printInfo();
}
elseif ($login == "Clientik1488" and $password == "12345678") {
    $cli = new Client();
    $cli -> printInfo();
}
elseif ($login == "Manageer1337" and $password == "zxccxz") {
    $man = new Manager();
    $man -> printInfo();
}else {
    echo "Неверный логин или пароль";
}


?>