<?php

class Grabar {
      var $tupla;
      var $conn;
      var $query;
      var $rec;
      var $count;


      function abreConexionMySql($pServer,$pUser,$pPassword,$pDataBase) {
               $this->conn = mysql_connect($pServer,$pUser,$pPassword) or die ("Error al conectar");
               mysql_select_db($pDataBase);
      }
      
      function cierraConexionMySql() {
               mysql_close($this->conn);
      }
      
      function lista($pTabla) {
       $this->query = mysql_query("Select * from ".$pTabla);
       $this->rec = mysql_fetch_assoc($this->query) or die ("La conexion esta cerrada");
       print_r($this->rec);
      }

	  function verificaDuplicados($pCriterio) {
	  $pData = array();
      reset ($pCriterio);
      while (list ($clave, $val) = each ($pCriterio)) {
            array_push($pData,$val);
      }
		$this->query = mysql_query("Select * from user where user = '".$pData[10]."'");
		$this->count = mysql_num_rows($this->query);
		return ($this->count);
	  }

	  function obtenerTuplas($pTuplas) {
        print "El arreglo es: \n <br>";
        print_r ($pTuplas);
        print "La cantidad es: \n <br>";
      }
      
      function grabarAMySql($pReg) {
      //Contruyo el Query para que sea ejecutado
      $pData = array();

      reset ($pReg);
      while (list ($clave, $val) = each ($pReg)) {
            array_push($pData,$val);
      }

      $i=0;
      $pTabla = $pData[$i];

      for ($i=1;$i<=sizeof($pData)-2;++$i) {
        
		if ($i == 1 ) {
 		$str = "('','".$pData[$i];
        } 
		elseif ($i == 4 ){
		  if ($pTabla == 'comments') 
		 		$str .= "',".$pData[$i];
		  else $str .= "','".$pData[$i];
		}
		elseif ($i == 5 ){
		  if ($pTabla == 'comments')
 				$str .= ",'".$pData[$i];
		  else $str .= "','".$pData[$i];
	        }
		elseif ($i == 11)
		        $str .= "','".md5($pData[$i]);
        else
        $str .= "','".$pData[$i];
      }
      $str .= "');";
      $this->query = mysql_query("insert into ".$pTabla." values ".$str);
      }
}
?>
