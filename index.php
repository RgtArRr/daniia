<?php

/**
 * CREATE TABLE personas
 * (
 * 		id serial NOT NULL,
 * 		nombre text NOT NULL,
 * 		apellido text,
 * 		ci text NOT NULL,
 * 		CONSTRAINT id_pk PRIMARY KEY (id)
 * );
 *
 * CREATE TABLE oficina
 * (
 * 		id serial NOT NULL,
 * 		id_personas integer,
 * 		oficina text,
 * 		CONSTRAINT id_pk_oficina PRIMARY KEY (id)
 * );
 *
 */


foreach ([
	"USER" =>"root",
	"PASS" =>"",
	"SCHEMA" =>"test",
	"DSN" =>"mysql:port=3306;host=localhost;dbname=test",
	] as $key => $value
) { define(strtoupper($key),$value); }

//foreach ([
//	"USER" =>"postgres",
//	"PASS" =>"123",
//	"SCHEMA" =>"public",
//	"DSN" =>"pgsql:port=5432;host=localhost;dbname=postgres",
//	]
//as $key => $value
//) { define(strtoupper($key),$value); }

require("Daniia/Daniia.php");
require("Daniia/BaseDB.php");

use Daniia\Daniia;
use Daniia\BaseDB;

class P extends BaseDB {
	protected $table = "personas";
	protected $primaryKey = "id";
}

$DB = new Daniia();
$P  = new P;

/**
 * COLUMNS
 **/
//$columns = $DB->columns('personas');
//var_dump($columns);
//echo "<hr>";
//
//$columns = $DB->table('personas')->columns();
//var_dump($columns);
//echo "<hr>";

/**
 * TRUNCATE
 **/
//$r = $DB->table("personas")->truncate();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";


/**
 * INSERT
 **/
//$r = $DB->table("personas")->insert(["ci"=>1,"nombre"=>"Carlos","apellido"=>"Garcia","otros"=>"otros"]);
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
////
//$r = $DB->table("personas")->insert([
//		["ci"=>1,"nombre"=>"Carlos","apellido"=>"Garcia","otros"=>"otros"],
//		["ci"=>2,"nombre"=>"Carlos","apellido"=>"Garcia"],
//		["ci"=>3,"nombre"=>"Carlos","apellido"=>"Garcia","otros"=>"otros"],
//	]);
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
////
//$r = $DB
//	->table("personas")
//	->insertGetId(["ci"=>date("Ymdms"),"nombre"=>"Carlos","apellido"=>"Garcia"]);
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";

/**
 * UPDATE
 **/
//$r = $DB->table("personas")->where("id",1)->update(["ci"=>"1111111","nombre"=>"aaaa","apellido"=>"aaaa","otro"=>"otro"]);
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->table("personas")->primaryKey("id")->where(1,1)->update([
//		["id"=>1,"ci"=>4,"nombre"=>"Petra","apellido"=>"","otros"=>"otros"],
//		["id"=>2,"ci"=>5,"nombre"=>"José","apellido"=>"Jill"],
//		["id"=>3,"ci"=>6,"nombre"=>"Jhon","apellido"=>"Peña","otros"=>"otros"],
//	]);
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";

/**
 * DELETE
 **/
//$r = $DB->table("personas")->where("id",2)->delete();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->primaryKey('id')->table("personas")->delete([3]);
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->primaryKey('id')->table("personas")->where("id",4)->delete(1);
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->primaryKey('id')->table("personas")->where("id",5)->delete(6,7);
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->primaryKey('id')->table("personas")->find([8])->where("id",9)->delete();
//var_dump($DB->sql);
//var_dump($DB->data);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->primaryKey('id')->table("personas")->where("id",10)->find([11,12,13])->where("id",14)->delete();
//var_dump($DB->sql);
//var_dump($DB->data);
//var_dump($r);
//echo "<hr>";



/**
 * SELECT
 **/
//$r = $DB->table('personas')->select('*')->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->table('personas')->select('COUNT(*) AS registros')->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->table('personas')->select('ci','nombre')->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->table('personas')->select(['ci','nombre'])->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->table('personas')->select('ci AS cedula',"CONCAT(nombre, ' ', apellido) AS nomapel")->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->table('personas')->select(['ci AS cedula',"CONCAT(nombre, ' ', apellido) AS nomapel"])->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";

/**
 * OPERADORES VALIDOS
 **/
//$r = $DB->table("personas")->where("id","4")->first();// POR DEFECTO ES '='
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->table("personas")->where("id",'=',"4")->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->table("personas")->where("id",'<',"4")->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->table("personas")->where("id",'<=',"4")->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->table("personas")->where("id",'>',"4")->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->table("personas")->where("id",'>=',"4")->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->table("personas")->where("id",'<>',"4")->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->table("personas")->where("id",'!=',"4")->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->table("personas")->where("id",'like',"4")->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->table("personas")->where("id",'not like',"4")->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->table("personas")->where("nombre",'ilike',"carlos")->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->table("personas")->where("id",["4"])->first();// si es un array por default es 'IN'
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->table("personas")->where("id",'in',["4"])->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->table("personas")->where("id",'is',"true",false)->first();// el parametro 'false' indica no escapar valor
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->table("personas")->where("id",'is not',"null",false)->first();// el parametro 'false' indica no escapar valor
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->table("personas")->where("id",'between',$DB->quote(3)." AND ".$DB->quote(5),false)->first();// el parametro 'false' indica no escapar valor
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->table("personas")->where("id",'not between',$DB->quote(3)." AND ".$DB->quote(5),false)->first();// el parametro 'false' indica no escapar valor
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";

/**
 * TABLE
 **/
//$r = $DB->table('personas')->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->table('personas','oficina')->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->table(['personas'])->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->table(['personas','oficina'])->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";


/**
 * FROM
 **/
//$r = $DB->table('personas')->from()->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";

//$r = $DB->from('personas')->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";

//$r = $DB->from(['personas'])->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";

//$r = $DB->from('personas','oficina')->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->from(['personas','oficina'])->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";

//$r = $DB->from(['personas','oficina'])->where('personas.id','oficina.id_personas')->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";

//$r = $DB->from(function (Daniia $daniia) {
//		$daniia->table("personas");
//	})->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";

//$r = $DB->table("AliasForFROM")->from(function (Daniia $daniia) {
//		$daniia->table("personas");
//	})->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";

//$r = $DB->select("personas.id","personas.nombre","personas.apellido")->from(function (Daniia $daniia) {
//		$daniia->table("personas")->select("personas.id","personas.nombre","personas.apellido");
//	})->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";

//$r = $DB->select("id_personas","id_oficinas")->from(function (Daniia $daniia) {
//		$daniia->table("oficina")->select("id_personas","id AS id_oficinas")->where("id_personas",'<=',4);
//	})->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";

//$r = $DB->table("A")->from(function (Daniia $daniia) {
//	$daniia->table("B")->from(function (Daniia $daniia) {
//		$daniia->table("C")->from(function (Daniia $daniia) {
//			$daniia->table("personas");
//		});
//	});
//})->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";


/**
 * JOIN, LEFTJOIN, RIGHTJOIN
 **/
//$r = $DB->table('personas','oficina')->where('personas.id','oficina.id_personas',false)->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->table('personas')->join("oficina","personas.id","oficina.id_personas")->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->table('personas')->join("oficina","personas.id","=","oficina.id_personas")->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->table('personas')->leftJoin("oficina","personas.id","=","oficina.id_personas")->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->table('personas')->rightJoin("oficina","personas.id","=","oficina.id_personas")->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->table('personas')->rightJoin("oficina","personas.id",[1,2,3,4])->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->table('personas')->join("oficina a","personas.id","a.id_personas")->leftJoin("oficina b","personas.id","b.id_personas")->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB
//	->table("personas")
//	->join('oficina',"personas.id",function(Daniia $query) {
//		$query
//			->select("personas.id")
//			->from("personas")
//			->where("personas.id","4")
//			->limit(1);
//	})->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->table('personas')->join("oficina",function(Daniia $daniia) {
//	$daniia
//		->on("personas.id",[1,2,3,4])
//		->on("personas.id","oficina.id_personas")
//		->orOn("personas.id",'<>',"oficina.id_personas")
//		->andOn("personas.id","1",true)
//		->orOn("personas.id","<>","oficina.id_personas");
//})->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->table('personas')
//	->join("oficina alias_a",function(Daniia $daniia) {
//		$daniia->on(function(Daniia $daniia) {
//			$daniia->on("personas.id","alias_a.id_personas");
//		});
//	})
//	->join("oficina alias_b",function(Daniia $daniia) {
//		$daniia->on("personas.id",'=',function(Daniia $daniia) {
//			$daniia->table('oficina')->select('id_personas')->where('id_personas',4);
//		});
//	})
//	->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->table('personas')
//	->join("oficina",function(Daniia $daniia) {
//		$daniia
//		->on("personas.id",function(Daniia $daniia) {
//			$daniia
//				->select("personas.id")
//				->from("personas")
//				->where("personas.id","4")
//				->limit(1);
//		});
//})->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";



/**
 * GET, GETARRAY, LIST
 **/
//$r = $DB->table('personas')->get();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->table('personas')->getArray();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
////
//$DB->table('personas')->lists('nombre');
//var_dump($DB->sql);
//var_dump($DB->data);
//echo "<hr>";
////
//$DB->table('personas')->lists('nombre','id');
//var_dump($DB->sql);
//var_dump($DB->data);
//echo "<hr>";



/**
 * FIND
 **/
//
//$r = $DB->primaryKey('id')->table('personas')->find(1);
//var_dump($DB->sql);
//var_dump($r->data);
//echo "<hr>";
//
//$r = $DB->primaryKey('id')->table('personas')->find(1,2);
//var_dump($DB->sql);
//var_dump($r->data);
//echo "<hr>";
//
//$r = $DB->primaryKey('id')->table('personas')->find([2]);
//var_dump($DB->sql);
//var_dump($DB->id);
//var_dump($DB->ci);
//var_dump($DB->nombre);
//var_dump($DB->apellido);
//var_dump($DB->data);
//echo "<hr>";
//


/**
 * FIRST, FIRSTARRAY
 **/
//$DB->table('personas')->first();
//var_dump($DB->sql);
//var_dump($DB->data);
//echo "<hr>";
//
//$DB->table('personas')->firstArray();
//var_dump($DB->sql);
//var_dump($DB->data);
//echo "<hr>";
//
//$DB->table('personas')->where('id',1)->first();
//var_dump($DB->sql);
//var_dump($DB->data);
//echo "<hr>";
//
//$DB->table('personas')->where('id',1)->firstArray();
//var_dump($DB->sql);
//var_dump($DB->data);
//echo "<hr>";
//
//$r = $DB->table('personas')->primaryKey('id')->find([1,2])->first();
//var_dump($DB->sql);
//var_dump($DB->data);
//echo "<hr>";
//
//$r = $DB->table('personas')->primaryKey('id')->find([1,2])->firstArray();
//var_dump($DB->sql);
//var_dump($DB->data);
//echo "<hr>";


/**
 * SAVE
 **/
//$DB->primaryKey('id')->table('personas')->find(2);
//$DB->nombre = "yyyyyyyy";
//$r = $DB->save();//UPDATE
//var_dump($DB->sql);
//var_dump($DB->data);
//var_dump($r);
//echo "<hr>";
//
//$DB->primaryKey('id')->table('personas')->find(1,2)->first();
//$DB->nombre = "yyyyyyyy";
//$r = $DB->save();//UPDATE
//var_dump($DB->sql);
//var_dump($DB->data);
//var_dump($r);
//echo "<hr>";
//
//$DB->primaryKey('id')->table('personas')->find('00')->first();// registro no existe..
//$DB->ci       = "123456789";
//$DB->nombre   = "Carlos";
//$DB->apellido = "Garcia";
//$r = $DB->save();//INSERT
//var_dump($DB->sql);
//var_dump($DB->data);
//var_dump($r);
//echo "<hr>";
//
//$DB->primaryKey('id')->table('personas');
//$DB->ci       = "123456789";
//$DB->nombre   = "Carlos";
//$DB->apellido = "Garcia";
//$r = $DB->save();//INSERT
//var_dump($DB->sql);
//var_dump($DB->data);
//var_dump($r);
//echo "<hr>";


/**
 * ORDER
 **/
//$r = $DB->table("personas")->orderBy("ci")->get();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->table("personas")->orderBy("apellido","nombre")->get();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->table("personas")->orderBy("apellido","nombre",'desc')->get();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->table("personas")->orderBy(["ci"])->get();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->table("personas")->orderBy(["apellido","nombre"])->get();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->table("personas")->orderBy(["apellido","nombre",'desc'])->get();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";


/**
 * LIMIT
 **/
//$r = $DB->table("personas")->limit("1","0")->get();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->table("personas")->limit("1")->get();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->table("personas")->limit(["1","0"])->get();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->table("personas")->limit(["1"])->get();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";


/**
 * GROUP
 **/
//$r = $DB->table("personas")->groupBy("ci")->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->table("personas")->groupBy("apellido","nombre")->get();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->table("personas")->groupBy(["ci"])->get();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->table("personas")->groupBy(["apellido","nombre"])->get();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";


/**
 * WHERE
 **/
////['=', '<', '>', '<=', '>=', '<>', '!=','like', 'not like', 'in']

//$r = $DB->table("personas")->where("id",'like',"%1%")->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->table("personas")->where("id","1")->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->table("personas")->where("id",'=',"1")->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->table("personas")->where("id",'=',"4")->where("id",'=',"4",false)->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->table("personas")->where("id",4)->andWhere("id",4,false)->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->table("personas")->where("id",'=',4)->orWhere("id",'=',4)->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->table("personas")->where("id",[4,5,6,7])->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->table("personas")->where("id",'in',[4,5,6,7])->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB
//	->table("personas")
//	->where(function (Daniia $daniia) {
//		$daniia
//			->where("id",4)
//			->andWhere("apellido","LIKE","%garcia%");
//	})
//	->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB
//	->table("personas")
//	->where(function (Daniia $daniia) {
//		$daniia
//			->where("id",4)
//			->orWhere("apellido","LIKE","%garcia%");
//	})
//	->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB
//	->table("personas")
//	->where(function (Daniia $daniia) {
//		$daniia
//			->where("id",4);
//	})
//	->orWhere(function (Daniia $daniia){
//		$daniia
//			->where("id",4);
//	})
//	->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB
//	->table("personas")
//	->where(function (Daniia $daniia) {
//		$daniia
//			->where("id","1")
//			->orWhere(function (Daniia $daniia) {
//				$daniia
//					->where("id","2")
//					->andWhere(function (Daniia $daniia) {
//						$daniia
//							->where("id","3");
//					});
//			});
//	})
//	->orWhere(function (Daniia $daniia){
//		$daniia
//			->where("id","4");
//	})
//	->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB
//	->table("personas")
//	->where("personas.id",function($query) {
//		$query
//			->table("personas")
//			->select("id")
//			->where("id",4)
//			->limit(1)
//		;
//	})->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB
//	->table("personas")
//	->where("personas.id","=",function($query) {
//		$query
//			->table("personas")
//			->select("id")
//			->where("id",4)
//			->limit(1);
//	})->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->table("personas")->where("id",'in',function(Daniia $daniia){
//	$daniia->table('personas')->select('id');
//})->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";


/**
 * HAVING
 **/
////['=', '<', '>', '<=', '>=', '<>', '!=','like', 'not like', 'in']

//$r = $DB->table("personas")->having("id",'like',"%1%")->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->table("personas")->having("id","1")->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->table("personas")->having("id",'=',"1")->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->table("personas")->having("id",'=',"4")->andHaving("id",'=',"4",false)->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->table("personas")->having("id",4)->orHaving("id",4,false)->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->table("personas")->having("id",'=',4)->where("id",'=',4)->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->table("personas")->having("id",[4,5,6,7])->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->table("personas")->having("id",'in',[4,5,6,7])->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";

//$r = $DB
//	->table("personas")
//	->having(function (Daniia $daniia) {
//		$daniia
//			->having("id",4)
//			->andHaving("apellido","LIKE","%garcia%");
//	})
//	->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB
//	->table("personas")
//	->having(function (Daniia $daniia) {
//		$daniia
//			->having("id",4)
//			->orHaving("apellido","LIKE","%garcia%");
//	})
//	->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB
//	->table("personas")
//	->having(function (Daniia $daniia) {
//		$daniia
//			->having("id",4);
//	})
//	->orHaving(function (Daniia $daniia){
//		$daniia
//			->having("id",4);
//	})
//	->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB
//	->table("personas")
//	->having(function (Daniia $daniia) {
//		$daniia
//			->having("id","1")
//			->orHaving(function (Daniia $daniia) {
//				$daniia
//					->having("id","2")
//					->andHaving(function (Daniia $daniia) {
//						$daniia
//							->having("id","3");
//					});
//			});
//	})
//	->orHaving(function (Daniia $daniia){
//		$daniia
//			->having("id","4");
//	})
//	->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB
//	->table("personas")
//	->having("personas.id",function($query) {
//		$query
//			->table("personas")
//			->select("id")
//			->having("id",4)
//			->limit(1)
//		;
//	})->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB
//	->table("personas")
//	->having("personas.id","=",function($query) {
//		$query
//			->table("personas")
//			->select("id")
//			->having("id",4)
//			->limit(1);
//	})->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
//
//$r = $DB->table("personas")->having("id",'in',function(Daniia $daniia){
//	$daniia->table('personas')->select('id');
//})->first();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";



/**
 * UNION
 **/
//$r = $DB
//	->table("personas")->where('id',1)
//	->union(function (Daniia $daniia) {
//		$daniia->table("personas")->where('id',1);
//	})
//	->get();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";

//$r = $DB
//	->table("personas")->select('id')
//	->union(function (Daniia $daniia) {
//		$daniia->table("oficina")->select('id_personas AS id');
//	})
//	->get();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";

//$r = $DB
//	->table("personas")->select('id')->where('id',1)
//	->union(function (Daniia $daniia) {
//		$daniia->table("oficina")->select('id_personas AS id')->where('id_personas',4);
//	})
//	->get();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";

//$r = $DB
//	->table("personas")->where('id',1)
//	->union(function (Daniia $daniia) {
//		$daniia->table("personas")->where('id',1);
//	})
//	->union(function (Daniia $daniia) {
//		$daniia->table("personas")->where('id',1);
//	})
//	->limit(1)
//	->get();
//var_dump($DB->sql);
//var_dump($r);
//echo "<hr>";
