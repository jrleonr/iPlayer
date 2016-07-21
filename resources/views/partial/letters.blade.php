
<div class="row">
    <div class="col-sm-12  Letters">

        <a class="Letters__box" href="/0">0-9</a>
       

        @for($letter = 'a'; $letter < 'z'; $letter++)
            <a class="Letters__box" href="/{{$letter}}">{{ $letter }}</a>
        @endfor

        <a class="Letters__box" href="/z">z</a>

    </div>
</div>
