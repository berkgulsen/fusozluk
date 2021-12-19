<div class="border-end bg-white" id="sidebar-wrapper">
    <div class="sidebar-heading border-bottom bg-light">Fü Sözlük</div>
    <div class="list-group list-group-flush">
        @foreach($titles as $title)
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="{{$title->slug}}">{{$title->title}}</a>
        @endforeach
    </div>
</div>
