<?php

class Complex
{
    protected $_re;
    protected $_im;

    public function getRe() {
        return $this->_re;
    }   

    public function setRe($value) {
        $this->_re = $value;
    }

    public function getIm() {
        return $this->_im;
    }

    public function setIm($value) {
        $this->_im = $value;
    }
}
