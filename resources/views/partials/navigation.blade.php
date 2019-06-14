<?php
	$menu_items = ["about", "posts"];
?>

@foreach($menu_items as $item)
	<li class="nav-item"><a href="/{{ $item }}">{{ ucfirst($item) }}</a></li>
@endforeach