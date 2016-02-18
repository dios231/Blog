<?php
namespace Application\Models\Mappers;

class ArticleMapper{
    //Database connection instance.
    protected $connection;
    
    //User object;
    protected $article;
    /**
     * Initialize the connection.
     * @param type $connection MySQLi connection object.
     */
    public function __construct($dbhProvider){
        $this->connection = $dbhProvider();
    }
    
    //Fetch the current Article from the Database.
    public function fetch($article){
        $this->article = $article;
        $articleValues = $this->getArticle();
        $article->setValues($articleValues);
    }
    
    //Return the number of the Article entries that stored in the Database.
    public function articleCounter(){
        $sql = 'SELECT * FROM ARTICLES';
        $result = $this->connection->query($sql);
        return $result->num_rows;
    }


    /**
     * Method that select from the database the current user.
     * @return type array. An array with the user values.
     */
    protected function getArticle(){
        $sql = 'SELECT * FROM ARTICLES WHERE ID=' . $this->article->getId();
        $result = $this->connection->query($sql);
        
        if ($row = $result->fetch_assoc()){
            return $row;
        }
        else{
            echo 'No article found';
        }
    }
}