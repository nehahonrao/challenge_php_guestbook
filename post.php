<?php
class post{
public $title;
public $content;
public $date;
public $author_name;


    public function __construct(array $data) 
    {
        $this->title= isset($data['title'] ? trim($title) : null;
        $this->content = isset($data['content'] ? trim($content) : null;
        $this->data = isset($data['author_name']) ? trim($author_name) : null;

}
 // Setters and getters defined here as well
 public function getName() {
    return $this->name;
}

public function setName($name) {
    $this->name = trim($name);
}

}

}
?>


<!-- // $age = array("title"=>35, "message"=>37, "date"=>43);
// echo json_encode($age);


// $result=json_decode($post1);
// echo $result->title; -->

