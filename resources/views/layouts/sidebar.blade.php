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
        <span class="font-weight-bold" onclick="Fold(this)">
            <a>{{$status->month}} {{$status->year}} ({{$status->published}})</a>
    </span>
            <ol class="list-unstyled mb-0 hidden sidebar-links-list">
                @foreach($archives as $link)
                    @if($status->month == $link->month && $status->year == $link->year)
                        <li class="sidebar-links">
                            <a href="/{{$type}}/{{$link->slug}}">{{$link->name}}</a>
                        </li>
                    @endif
                @endforeach
            </ol>
        </li>
        @endforeach
    </ol>
</aside>