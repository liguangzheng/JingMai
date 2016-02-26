<?php

namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller {
    public function _before_index() {
        echo '============================</br>';
    }
    public function index() {
        echo 'JingMai';
    }
    public function _after_index() {
        echo '</br>============================';
    }
    public function _before_hello() {
        echo '============================</br>';
    }
    public function hello() {
        echo 'Hello World';
    }
    public function _after_hello() {
        echo '</br>============================';
    }
}