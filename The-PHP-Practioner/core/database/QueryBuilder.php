<?php

class QueryBuilder{
    protected $pdo;
    public function __construct($pdo){
        $this->pdo = $pdo;
    }
    public function selectAll($table){
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();
        $results = $statement->fetchAll(PDO::FETCH_CLASS);
        return $results;
    }
    public function insert($table, $parameter){
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,  
            implode(',',array_keys($parameter)),
            ':'.implode(', :',array_keys($parameter))
        );
        try{
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameter);
        }
        catch (PDOEXCEPTION $e){
            die('Whoops, something went wrong.');
        }

    }
}
