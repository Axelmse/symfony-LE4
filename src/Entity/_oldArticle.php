<?php
namespace App\Entity;

use DateTime;

class oldArticle {

    private $_title;
    private $_subTitle;
    private $_createAt;
    private $_author;
    private $_body;
    private $_image;

    public function title():string {
        return $this->_title;
    }

    public function subtitle():string {
        return $this->_subTitle;
    }

    public function createdAt():DateTime {
        return $this->_createAt;
    }

    public function author():string {
        return $this->_author;
    }

    public function body():string {
        return $this->_body;
    }

    public function image():string {
        return $this->_image;
    }

    public function setTitle(string $foo) {
        $this->_title = $foo;
    }

    public function setSubtitle(string $foo) {
        $this->_subTitle = $foo;
    }

    public function setCreatedAt(DateTime $foo) {
        $this->_createAt = $foo;
    }

    public function setAuthor(string $foo) {
        $this->_author=$foo;
    }

    public function setBody(string $foo) {
        $this->_body=$foo;
    }

    public function setImage(string $foo) {
        $this->_image;
    }
}
?>