<div class="col-sm-6">
    <ul class="card mb-2 pl-3">
        <div class="card-header font-weight-bold">
            <a href="{{ backpack_url('submissions') }}">
                <i class='fa fa-envelope mr-2'></i> Dernières demandes reçues
            </a>
        </div>
        <div class="card-body">
            @isset($widget['data'])
                @foreach ($widget['data'] as $item)
                    <li>
                        {{ $item->firstname }} {{ $item->lastname }} depuis le <b>{{ date_format($item->created_at,"d.m.Y") }}</b>, pour <b>{{ $item->context1 }}</b>
                    </li>
                @endforeach
            @else
                invalid infos
            @endisset
        </div>
    </ul>
</div>