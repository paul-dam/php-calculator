<?php

class Complex
{
    public function __construct($re = 0, $im = 0)
    {
        $this->_re = $re;
        $this->_im = $im;
    }

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
