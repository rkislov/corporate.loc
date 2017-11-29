@if($menu)
<div class="menu classic">
    <ul id="nav" class="menu">
        @include(env('THEME').'.CustomMenuItems', ['items'=>$menu->roots()])
    </ul>
</div>
@endif
