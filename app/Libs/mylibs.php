<?php
//日本語	
namespace App\Libs;

class mylibs
{
	public function aa(){
	  echo("aa");
	}
	//
//	public function arrDebug($arr ){
	public function arr_dump($arr ){
		echo( "count=" . count($arr) . "<br />");
		echo("======== dump_start ========" . "<br />") ;
		foreach($arr as $key =>$value ){
		  echo($key . ":" . $value . "<br />" );
	//	  var_dump("key=". $key . ", v=" . $value . "<br />" );
//		  var_dump($key . ":" . $value . "<br />" );
		  #echo($value . "<br />");
		}
		echo("======== dump_end ========" . "<br />") ;
	}

}