<?php
namespace Application\Models;

class Article{
    //Articles id.
    protected $id;
    //Article title.
    protected $title;
    //Article content.
    protected $content;
    //The name of tharticle's photo.
    protected $photo;
    
    public function setId($id){
        $this->id = $id;
    }
    
    public function setTitle($title){
        $this->title = $title;
    }
    
    public function setcontent($content){
        $this->content = $content;
    }
    
    public function setPhotoName($photo_name){
        $this->photo = $photo_name;
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function getTitle(){
        return $this->title;
    }
    
    public function getcontent(){
        return $this->content;
    }
    
    public function getPhotoName(){
        return $this->photo;
    }
    
    //A set function to initialize all the ARTICLE properties.
    public function setValues($arrayOfValues){
        $this->id = $arrayOfValues['ID'];
        $this->title = $arrayOfValues['title'];
        $this->content = $arrayOfValues['article'];
        $this->photo = $arrayOfValues['photo'];
    }
}

