<div class="col-sm-6">
    <ul class="card mb-2 pl-3">
        <div class="card-header font-weight-bold">
            <a href="{{ backpack_url('candidacies') }}">
                <i class='fa fa-envelope mr-2'></i> Dernières candidatures reçues (pour {{ App\Models\JobOffer::getCount() }} offres)
            </a>
        </div>
        <div class="card-body">
            @isset($widget['data'])
                @foreach ($widget['data'] as $item)
                    <li>
                        {{ $item->firstname }} {{ $item->lastname }} depuis le <b>{{ date_format($item->created_at,"d.m.Y") }}</b>, pour <b>{{ $item->spontaneous ? $item->getJobOfferReference($item->job_offer_id) : 'une candidature spontanée' }}</b>
                    </li>
                @endforeach
            @else
                invalid infos
            @endisset
        </div>
    </ul>
</div>