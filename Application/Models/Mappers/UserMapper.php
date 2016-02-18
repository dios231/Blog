<?php
namespace Application\Models\Mappers;

class UserMapper{
    //Database connection instance.
    protected $connection;
    
    //User object;
    protected $user;
    /**
     * Initialize the connection.
     * @param type $connection MySQLi connection object.
     */
    public function __construct($dbhProvider){
        $this->connection = $dbhProvider();
    }

    //Fetch the currently user.
    public function fetch($user){
        $this->user = $user;
        $userValues = $this->getUSer();
        $user->setValues($userValues);
    }
    
    /**
     * Method that select from the database the current user.
     * @return type array. An array with the user values.
     */
    protected function getUSer(){
        $sql = 'SELECT * FROM USERS WHERE ID=' . $this->user->getId();
        $result = $this->connection->query($sql);
        
        if ($row = $result->fetch_assoc()){
            return $row;
        }
        else{
            echo 'No user found';
        }
    }
}