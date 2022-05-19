<!doctype html> 
<html lang="ru">
	<head> 
		<meta charset="UTF-8">
		<title>Музеи мира</title> 
		<link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css"><!--подключаем файл стилей-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	</head>
	
	<body>
		


<!-- < ?php 
			print_r($data); выводит всю таблицу из бд
		?> -->
			 <!--блок навигации, одинаковый для все страниц сайта-->
 <!--@foreach ($data as $item)
< ?php print_r($item->name); print_r($item->title); ?>

@endforeach -->

 <nav>

  <ul class="menu">
  @foreach($menu_data as $item)
  
  @if($item->parent==0)
  <li><a style="color:black;" href="/{{$item->name}}">{{$item->title}}</a>
  	<ul class="submenu">
  
  	<?php 
  	$attachdata = DB::table("posts")->where("parent", "=", $item->id)->get();  
  	?>
  	@if($attachdata !=null)
     @foreach($attachdata as $parentss)
      <li><a a style="color:black;" href="/{{$parentss->name}}">{{$parentss->title}}</a></li>
     @endforeach
  	@endif
  	</ul>
  @endif

</li>
@endforeach	
	<li><a a style="color:black;" href="/console">КОНСОЛЬ</a></li>

  </ul>
</nav>  


			<!--  <nav>
				<ul class="menu">
					<li><a href="/muzeisite/public">ГЛАВНАЯ</a></li>
					<li><a href="/muzeisite/public/velikie-muzei">ВЕЛИКИЕ МУЗЕИ</a>
					<li><a href="/muzeisite/public/novosti">НОВОСТИ</a>	
					<li><a href="/muzeisite/public/zhivopis">ЖИВОПИСЬ</a>
						<ul class="submenu">
							<li><a href="/muzeisite/public/zhivopis/russkaya-zhivopis">РУССКАЯ ЖИВОПИСЬ</a></li>
							<li><a href="/muzeisite/public/zhivopis/ispanskaya-zhivopis">ИСПАНСКАЯ ЖИВОПИСЬ</a></li>
							<li><a href="/muzeisite/public/zhivopis/italyanskaya-zhivopis">ИТАЛЬЯНСКАЯ ЖИВОПИСЬ</a></li>
							<li><a href="/muzeisite/public/zhivopis/gollandskaya-zhivopis">ГОЛЛАНДСКАЯ ЖИВОПИСЬ</a></li>
						</ul>
					</li>  
					<li><a href="/muzeisite/public/skulptura">СКУЛЬПТУРА</a></li>
					<li><a href="/muzeisite/public/goroda">ГОРОДА</a>
						<ul class="submenu">
							<li><a href="/muzeisite/public/goroda/barselona">БАРСЕЛОНА</a></li>
							<li><a href="/muzeisite/public/goroda/london">ЛОНДОН</a></li>
							<li><a href="/muzeisite/public/goroda/moskva">МОСКВА</a></li>
							<li><a href="/muzeisite/public/goroda/parizh">ПАРИЖ</a></li>
						</ul>
					</li>
					<li><a href="/muzeisite/public/neobychnye-muzei-mira">НЕОБЫЧНЫЕ МУЗЕИ</a></li>
					<li><a href="/muzeisite/public/console">КОНСОЛЬ</a></li>
				</ul>
			</nav> -->						 
			<!--блок содержит раздел навигации и контент страницы-->		
			<div class="wrapper">			
			<div class="content"> 
				<div class="row">

					@yield('content')

				</div>
			</div>			
		</div>
		
		<footer><!--подвал сайта-->
		<div>
			<p><i>Музеи мира и картины известных художников.<br/>
			Заметили ошибку на странице?<br/>
			Выделите её мышкой и нажмите Ctrl+Enter	</i></p>
		</div>
		</footer>
	</body>
</html>