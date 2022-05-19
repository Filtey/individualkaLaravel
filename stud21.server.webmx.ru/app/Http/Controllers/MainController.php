<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    // обработчик http://muzei-mira/
	public function acMain () {
		// формируем данные для представления main.blade.php
		// выполняем запрос к базе данных установленной по умолчанию
		$data = DB::table("posts")->where("name", "=", "virtualnye-muzei-mira")->first();
		$menu_data = DB::table("posts")->get();
		
		return view("main")->with(["data" => $data, "menu_data"=> $menu_data]);
	}
	
	// обработчик http://muzei-mira/velikie-muzei
	// public function acVelikieMuzei () {
	// 	// формируем данные для представления velikie-muzei.blade.php
	// 	// выполняем запрос к базе данных установленной по умолчанию
	// 	$data = DB::table("posts")->where("name", "velikie-muzei")->first();
	// 	// по идентификатору главной получим прикрепленные записи 
	// 	$attachdata = DB::table("posts")->where("parent", "=", $data->id)->get(); 
		
	// 	print_r($data);
	// 	// отдадим полученные данные в представление 
	// 	return view("velikie-muzei")->with(["data" => $data, "attachdata" => $attachdata]);
	// }
	
	//обработчик http://muzei-mira/novosti
	//public function acNovosti () {
	// 	// формируем данные для представления novosti.blade.php
	// 	// выполняем запрос к базе данных установленной по умолчанию
	// 	$datas = DB::table("posts")->where(["name" => "novosti"])->first();
	// 	// по идентификатору главной получим прикрепленные записи 
	// 	$attachdatas = DB::table("posts")->where("parent", "=", $datas->id)->get(); 
	// 	// отдадим полученные данные в представление
	// 	print_r($attachdatas);
	// //	return view("novosti", ["data" => $datas,  "attachdata" => $attachdatas]);
	// }
	
	// обработчик http://muzei-mira/zhivopis
	// public function acZhivopis () {
	// 	// формируем данные для представления zhivopis.blade.php
	// 	// выполняем запрос к базе данных установленной по умолчанию
	// 	$data = DB::table("posts")->where(["name" => "zhivopis"])->first();
	// 	// отдадим полученные данные в представление
	// 	return view ("zhivopis")->with(["data" => $data]);
	// }

	// // обработчик http://muzei-mira/zhivopis/{параметр}
	// public function acSubZhivopis ($subzhivopis) {
	// 	// формируем данные для представления по переданному параметру
	// 	// выполняем запрос к базе данных установленной по умолчанию
	// 	$data = DB::table("posts")->where("name", "=", $subzhivopis)->first();
	// 	// по идентификатору главной получим прикрепленные записи 
	// 	$attachdata = DB::table("posts")->where("parent", "=", $data->id)->get(); 
	// 	// отдадим полученные данные в представление
	// 	return view ("zhivopis")->with(["data" => $data,  "attachdata" => $attachdata]);
	// }
	
	// // обработчик http://muzei-mira/skulptura
	// public function acSkulptura () {
	// 	// формируем данные для представления skulptura.blade.php
	// 	// выполняем запрос к базе данных установленной по умолчанию
	// 	$data = DB::table("posts")->where("name", "skulptura")->first();
	// 	// по идентификатору главной получим прикрепленные записи 
	// 	$attachdata = DB::table("posts")->where("parent", "=", $data->id)->get(); 
	// 	// отдадим полученные данные в представление
	// 	return view("skulptura")->with(["data" => $data, "attachdata" => $attachdata]);
	// }
	
	// обработчик http://muzei-mira/goroda
	// public function acGoroda () {
	// 	// формируем данные для представления goroda.blade.php
	// 	// выполняем запрос к базе данных установленной по умолчанию
	// 	$data = DB::table("posts")->where("name", "goroda")->first();
	// 	// по идентификатору главной получим прикрепленные записи 
	// 	$attachdata = DB::table("posts")->where("parent", "=", $data->id)->get(); 
	// 	// отдадим полученные данные в представление
	// 	return view("goroda")->with(["data" => $data, "attachdata" => $attachdata]);
	// }

	// // обработчик http://muzei-mira/goroda/{параметр}
	// public function acSubGoroda ($subgorod) {
	// 	// формируем данные для представления по переданному параметру
	// 	// выполняем запрос к базе данных установленной по умолчанию
	// 	$data = DB::table("posts")->where("name", "=", $subgorod)->first();
	// 	// по идентификатору главной получим прикрепленные записи 
	// 	$attachdata = DB::table("posts")->where("parent", "=", $data->id)->get(); 
	// 	// отдадим полученные данные в представление
	// 	return view ("goroda")->with(["data" => $data,  "attachdata" => $attachdata]);
	// }	
	
	// обработчик http://muzei-mira/neobychnye-muzei-mira
	// public function acNeobychnyeMuzei () {
	// 	// формируем данные для представления neobychnye-muzei.blade.php
	// 	// выполняем запрос к базе данных `neobychnye-muzei-mira`
	// 	$data = DB::connection("db_neobychnyj_muzei")->table("posts")->where("name", "=", "neobychnye-muzei-mira")->first();
	// 	// по идентификатору главной получим прикрепленные записи 
	// 	$attachdata = DB::connection("db_neobychnyj_muzei")->table("posts")->where("parent", "=", $data->id)->get(); 
	// 	// отдадим полученные данные в представление
	// 	return view ("neobychnye-muzei")->with(["data" => $data,  "attachdata" => $attachdata]);
	// }


	public function acCustom ($pages) {
		// формируем данные для представления custom.blade.php
		// выполняем запрос к базе данных установленной по умолчанию
		$data = DB::table("posts")->where("name", "=", $pages)->first();
        $menu_data = DB::table("posts")->get();
		
		// по идентификатору главной получим прикрепленные записи 
		$attachdata = DB::table("posts")->where("parent", "=", $data->id)->get(); 
		// отдадим полученные данные в представление
		
		return view("custom")->with(["menu_data" => $menu_data, "data" => $data, "attachdata" => $attachdata]);
	}
	
}