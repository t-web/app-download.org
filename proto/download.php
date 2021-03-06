<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin 0.9.4
// Source: download.proto
//   Date: 2014-08-14 21:39:40

namespace  {

  class DownloadMessageA extends \DrSlump\Protobuf\Message {

    /**  @var \DownloadMessageB */
    public $next = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, '.DownloadMessageA');

      // REQUIRED MESSAGE next = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "next";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REQUIRED;
      $f->reference = '\DownloadMessageB';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <next> has a value
     *
     * @return boolean
     */
    public function hasNext(){
      return $this->_has(1);
    }
    
    /**
     * Clear <next> value
     *
     * @return \DownloadMessageA
     */
    public function clearNext(){
      return $this->_clear(1);
    }
    
    /**
     * Get <next> value
     *
     * @return \DownloadMessageB
     */
    public function getNext(){
      return $this->_get(1);
    }
    
    /**
     * Set <next> value
     *
     * @param \DownloadMessageB $value
     * @return \DownloadMessageA
     */
    public function setNext(\DownloadMessageB $value){
      return $this->_set(1, $value);
    }
  }
}

namespace  {

  class DownloadMessageB extends \DrSlump\Protobuf\Message {

    /**  @var \DownloadMessageC */
    public $next = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, '.DownloadMessageB');

      // REQUIRED MESSAGE next = 4
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 4;
      $f->name      = "next";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REQUIRED;
      $f->reference = '\DownloadMessageC';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <next> has a value
     *
     * @return boolean
     */
    public function hasNext(){
      return $this->_has(4);
    }
    
    /**
     * Clear <next> value
     *
     * @return \DownloadMessageB
     */
    public function clearNext(){
      return $this->_clear(4);
    }
    
    /**
     * Get <next> value
     *
     * @return \DownloadMessageC
     */
    public function getNext(){
      return $this->_get(4);
    }
    
    /**
     * Set <next> value
     *
     * @param \DownloadMessageC $value
     * @return \DownloadMessageB
     */
    public function setNext(\DownloadMessageC $value){
      return $this->_set(4, $value);
    }
  }
}

namespace  {

  class DownloadMessageC extends \DrSlump\Protobuf\Message {

    /**  @var \DownloadMessageD */
    public $next = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, '.DownloadMessageC');

      // REQUIRED MESSAGE next = 39
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 39;
      $f->name      = "next";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REQUIRED;
      $f->reference = '\DownloadMessageD';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <next> has a value
     *
     * @return boolean
     */
    public function hasNext(){
      return $this->_has(39);
    }
    
    /**
     * Clear <next> value
     *
     * @return \DownloadMessageC
     */
    public function clearNext(){
      return $this->_clear(39);
    }
    
    /**
     * Get <next> value
     *
     * @return \DownloadMessageD
     */
    public function getNext(){
      return $this->_get(39);
    }
    
    /**
     * Set <next> value
     *
     * @param \DownloadMessageD $value
     * @return \DownloadMessageC
     */
    public function setNext(\DownloadMessageD $value){
      return $this->_set(39, $value);
    }
  }
}

namespace  {

  class DownloadMessageD extends \DrSlump\Protobuf\Message {

    /**  @var \DownloadInformation */
    public $downloadInformation = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, '.DownloadMessageD');

      // REQUIRED MESSAGE downloadInformation = 8
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 8;
      $f->name      = "downloadInformation";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REQUIRED;
      $f->reference = '\DownloadInformation';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <downloadInformation> has a value
     *
     * @return boolean
     */
    public function hasDownloadInformation(){
      return $this->_has(8);
    }
    
    /**
     * Clear <downloadInformation> value
     *
     * @return \DownloadMessageD
     */
    public function clearDownloadInformation(){
      return $this->_clear(8);
    }
    
    /**
     * Get <downloadInformation> value
     *
     * @return \DownloadInformation
     */
    public function getDownloadInformation(){
      return $this->_get(8);
    }
    
    /**
     * Set <downloadInformation> value
     *
     * @param \DownloadInformation $value
     * @return \DownloadMessageD
     */
    public function setDownloadInformation(\DownloadInformation $value){
      return $this->_set(8, $value);
    }
  }
}

namespace  {

  class DownloadInformation extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $url = null;
    
    /**  @var \Cookie */
    public $cookie = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, '.DownloadInformation');

      // REQUIRED STRING url = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "url";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_REQUIRED;
      $descriptor->addField($f);

      // REQUIRED MESSAGE cookie = 5
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 5;
      $f->name      = "cookie";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REQUIRED;
      $f->reference = '\Cookie';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <url> has a value
     *
     * @return boolean
     */
    public function hasUrl(){
      return $this->_has(3);
    }
    
    /**
     * Clear <url> value
     *
     * @return \DownloadInformation
     */
    public function clearUrl(){
      return $this->_clear(3);
    }
    
    /**
     * Get <url> value
     *
     * @return string
     */
    public function getUrl(){
      return $this->_get(3);
    }
    
    /**
     * Set <url> value
     *
     * @param string $value
     * @return \DownloadInformation
     */
    public function setUrl( $value){
      return $this->_set(3, $value);
    }
    
    /**
     * Check if <cookie> has a value
     *
     * @return boolean
     */
    public function hasCookie(){
      return $this->_has(5);
    }
    
    /**
     * Clear <cookie> value
     *
     * @return \DownloadInformation
     */
    public function clearCookie(){
      return $this->_clear(5);
    }
    
    /**
     * Get <cookie> value
     *
     * @return \Cookie
     */
    public function getCookie(){
      return $this->_get(5);
    }
    
    /**
     * Set <cookie> value
     *
     * @param \Cookie $value
     * @return \DownloadInformation
     */
    public function setCookie(\Cookie $value){
      return $this->_set(5, $value);
    }
  }
}

namespace  {

  class Cookie extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $name = null;
    
    /**  @var string */
    public $value = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, '.Cookie');

      // REQUIRED STRING name = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "name";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_REQUIRED;
      $descriptor->addField($f);

      // REQUIRED STRING value = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "value";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_REQUIRED;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <name> has a value
     *
     * @return boolean
     */
    public function hasName(){
      return $this->_has(1);
    }
    
    /**
     * Clear <name> value
     *
     * @return \Cookie
     */
    public function clearName(){
      return $this->_clear(1);
    }
    
    /**
     * Get <name> value
     *
     * @return string
     */
    public function getName(){
      return $this->_get(1);
    }
    
    /**
     * Set <name> value
     *
     * @param string $value
     * @return \Cookie
     */
    public function setName( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <value> has a value
     *
     * @return boolean
     */
    public function hasValue(){
      return $this->_has(2);
    }
    
    /**
     * Clear <value> value
     *
     * @return \Cookie
     */
    public function clearValue(){
      return $this->_clear(2);
    }
    
    /**
     * Get <value> value
     *
     * @return string
     */
    public function getValue(){
      return $this->_get(2);
    }
    
    /**
     * Set <value> value
     *
     * @param string $value
     * @return \Cookie
     */
    public function setValue( $value){
      return $this->_set(2, $value);
    }
  }
}

