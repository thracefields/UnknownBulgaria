<?php

declare(strict_types = 1);
set_error_handler("warning_handler", E_WARNING);

function warning_handler($errno, $errstr) {
    throw new Exception($errstr);
}

class ImageUploader {

  private $uploadedFile;
  private $actualError;
  private $imageType;
  public  $imageName;
  public  $maxSize;
  public  $sendTo;
  public  $uploaded;
  public  $errorMessage;
  public  $imageFullName;
  public  $width;
  public  $height;
  public  $resizeFilter;
  
  function __construct(Array $fileRequest) {
      $this->uploadedFile = $fileRequest;
      $this->imageType = $this->getImageType();
      $this->imageName = $this->getHashName(true);
      $this->maxSize = 1;
      $this->uploaded = false;
  }

  private function getImageType(): String {
      return pathinfo($this->uploadedFile['name'], PATHINFO_EXTENSION);
  }

  private function getHashName(Bool $largeName): String {
      if($largeName) {
          return md5(uniqid((string)rand(), true)) . md5(uniqid((string)rand(), true));
      }else {
          return md5(uniqid((string)rand(), true));
      }
  }

  public function uploadImage() {
      try {
          // File too big
          if($this->uploadedFile['size'] > ($this->maxSize * 1024 * 1024)) {
              throw new Exception('File bigger than accepted. (Max: ' . $this->maxSize . ' )');

          // No path to send image
          }elseif(count($this->sendTo) < 1) {
              throw new Exception('You forgot to set an upload path. (->sendTo)');

          // maxSize isn't int or float
          }elseif(!is_numeric($this->maxSize)) {
              throw new Exception('You forgot to set a proper max size. (->maxSize)');
          }else {

              $imageFullName = $this->imageName . '.' . $this->imageType;
              $imageFullPath = $this->sendTo . $imageFullName;

              if(is_numeric($this->width) || is_numeric($this->height)) {
                  $this->resizeImage();
              }

              move_uploaded_file($this->uploadedFile['tmp_name'], $this->sendTo . $imageFullName);

              return new class($imageFullName, $imageFullPath) {
                  public $isUploaded = true;
                  public $uploadedName;
                  public $fullPath;

                  function __construct($imageFullName, $imageFullPath) {
                      $this->uploadedName = $imageFullName;
                      $this->fullPath = $imageFullPath;
                  }
              };
          }

      }catch (Exception $e) {
          $actualError = $e->getMessage();

          return new class($actualError) {
              public $isUploaded = false;
              public $errorMessage;

              function __construct($actualError) {
                  $this->errorMessage = $actualError;
              }
          };
      }
  }

  private function resizeImage() {
      if(class_exists("Imagick") || extension_loaded('imagick')) {
          $imagick = new \Imagick(realpath($this->uploadedFile['tmp_name']));
      }else {
          throw new Exception('You need Imagick installed on your server in order to resize the image');
      }

      if(is_numeric($this->width) && !is_numeric($this->height)) {
          $this->setProportionalHeight();
      }elseif(!is_numeric($this->width) && is_numeric($this->height)) {
          $this->setProportionalWidth();
      }

      if($this->resizeFilter == NULL) {
          $imagick->resizeImage($this->width, $this->height, Imagick::FILTER_CATROM, 1);
      }else {
          $imagick->resizeImage($this->width, $this->height, $filterType, 1);
      }


      $imagick->writeImage(realpath($this->uploadedFile['tmp_name']));
  }

  public function getImageRatio(String $type): Float {
      list($width, $height) = getimagesize($this->uploadedFile['tmp_name']);

      if($type === 'width') {
          return $width / $height;
      }else {
          return $height / $width;
      }
  }

  public function setProportionalHeight() {
      $ratio = $this->getImageRatio('width');
      $this->height = round($this->width / $ratio);
  }

  public function setProportionalWidth() {
      $ratio = $this->getImageRatio('height');
      $this->width = round($this->height / $ratio);
  }

}
