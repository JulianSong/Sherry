<?php
class MysSqlDateManager{
    private $host='';
    private $port='';
    private $user='';
    private $pass='';
    private static $instance=null;
    private $con=null;
    private  function __construct($dbConf){
        $this->host=$dbConf['HOST'];
        $this->port=$dbConf['PORT'];
        $this->user=$dbConf['USER'];
        $this->pass=$dbConf['PASS'];
    }
    /**
     * 获得单例对象的静态方法
     */
    public  static  function getInstance($dbConf){
        if (is_null(self::$instance) || !isset(self::$instance)) {
            self::$instance = new self($dbConf);
        }
        print_r($instance);
        return self::$instance;
    }
    /**
     *
     * Enter description here ...
     */
    public function connection(){
    	try{
        	$this->con = mysql_connect($this->host.':'.$this->port,$this->user,$this->pass);
        	mysql_query("SET NAMES 'UTF8'");
        	mysql_query("SET CHARACTER SET UTF8");
        	mysql_query("SET CHARACTER_SET_RESULTS=UTF8'");
        	if(!$this->con)
        	{
        		throw new DataException('Could not connect: ' . mysql_error(), $code, $previous);
        	}
    	}catch(Exception $e){
    		throw new DataException($message, $code, $previous);
    	}
    }
    /**
     * 执行一个查询
     * @param unknown_type $sqlString
     */
    public function query($sqlString){
        $this->connection();
        $result= mysql_query($sqlString,$this->con);
        if(!$result)
        {
            die('Could not connect: ' . mysql_error());
        }
        return $result;
    }
    
    /**
     * 执行一个查询并以数组为结果集返回数据
     * @param  $sqlString sql语句
     */
    public function getArray($sqlString){
        $dataArray=array();
        $result=$this->query($sqlString);
        while ($row=mysql_fetch_row($result)){
            array_push($dataArray, $row);
        }
        return $dataArray;
        mysql_close($con);
    }
}