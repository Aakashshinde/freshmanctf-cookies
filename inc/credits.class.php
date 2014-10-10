<?php

class Credits {

    public function __construct() {
        session_start();
        if (!isset($_SESSION['wat'])) {
            $_SESSION['wat'] = 'wat';
            setcookie('credits', '', time() - 3600, '/');
        }
    }

    public function getCount() {
        if (!isset($_COOKIE['credits']))
            setcookie('credits', '100', 0, '/');
        return $_COOKIE['credits']? $_COOKIE['credits'] : 100;
    }

    public function pay($cost) {
        $credits = $this->getCount();

        if ($cost > $credits) {
            return false;
        } else {
            setcookie('credits', $credits - $cost, 0, '/');
            return true;
        }
    }

}
?>