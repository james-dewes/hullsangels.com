<aside class="col-md-2">
    <script>
        function Fold(element){
          $(element).next('ol').toggle();
         element.classList.toggle('active');
      }</script>
    <h2>Archive</h2>
    <ol class="list-unstyled mb-0">
        @foreach($archivesGroups as $status)
        <li class="text-primary pointer">
        <a onclick="Fold(this)">{{$status->month}} {{$status->year}} ({{$status->published}})</a>
            <ol class="list-unstyled mb-0 hidden">
                @foreach($archives as $link)
                    <li>
                        <a href="/{{$type}}/{{$link->slug}}">{{$link->name}}</a>
                    </li>
                @endforeach
            </ol>
        </li>
        @endforeach
    </ol>
</aside>