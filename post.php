<?php


declare(strict_types=1);
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);

class Post {
    private string $title;
    private string $author;
    private string $guestMessage;
    private string $date;

    /**
     * Post constructor.
     * @param string $author
     * @param string $guestMessage
     */
    public function __construct(string $title,string $author, string $guestMessage)
    {
        $this->title= $title;
        $this->author = $author;
        $this->guestMessage = $guestMessage;
        $this->date = date('y-m-d h:i:s');
    }
    public function getTitle()
    {
        return $this->title;
    }

    public function getContent()
    {
        return $this->guestMessage;
    }

    public function getAuthor()
    {
        return $this->author;
    }
    public function getDate()
    {
        return $this->date;
    }
    

    

}
?>
