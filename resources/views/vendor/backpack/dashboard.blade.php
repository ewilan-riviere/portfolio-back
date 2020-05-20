@extends(backpack_view('blank'))

@php
	// $formationsCount = App\Models\Formation::count();
	// $applicationsCount = App\Models\Application::count();
	// $reassurancesCount = App\Models\Reassurance::count();
    // $postsCount = App\Models\Post::count();
    // $lastSubmissions = App\Models\Submission::orderBy('updated_at', 'DESC')->limit(5)->get();
    // $lastCandidacies = App\Models\Candidacy::orderBy('updated_at', 'DESC')->limit(5)->get();

    $widgets['before_content'][] = [
        'type'        => 'jumbotron',
        'heading'     => "
        <div>
            <img src=".asset('css/logo.png')." alt='portfolio' />
            <span class='font-weight-bold'>Back-office</span>
        </div>
        ",
        'content'     => "&nbsp;",
        'button_link' => backpack_url('logout'),
        'button_text' => trans('backpack::base.logout'),
    ];
    $widgets['before_content'][] = 
    [
        'type' => 'div',
        'class' => 'row',
        'content' => 
        [
            [
                'type' => 'card',
                'content' => [
                    'header' => 
                        "<i class='fa fa-book mr-2'></i> <b>Documentation API</b>",
                    'link' => config('app.url')."/api/documentation",
                ]
            ],
            [
                'type' => 'card',
                'content' => [
                    'header' => 
                        "<i class='fa fa-globe mr-2'></i> <b>Site Web</b>",
                    'link' => config('app.url'),
                ]
            ],
            [
                'type' => 'card',
                'content' => [
                    'header' => 
                        "<i class='fa fa-envelope mr-2'></i> <b>Sarbacane</b>",
                    'link' => 'https://app.sarbacane.com/',
                ]
            ],
        ]
	];

	$widgets['before_content'][] = [
        'type' => 'div',
        'class' => 'row',
        'content' => [
            [
                'type'        => 'last-submissions',
                'class'       => 'card border-0 mb-2',
                // 'data'       => $lastSubmissions,
                'description' => 'Offres',
                // 'progress'    => (int)$offersCount/10*100,
                'progressClass' => 'progress-bar bg-primary',
            ],
        ]
    ];
    
    $widgets['before_content'][] = [
        'type' => 'div',
        'class' => 'row',
        'content' => [
            [
                'type'        => 'progress_white',
                'class'       => 'card border-0 mb-2',
                // 'link' => backpack_url('formations'),
                // 'value'       => $formationsCount,
                'description' => 'Formations',
                // 'progress'    => (int)$formationsCount/10*100,
                'progressClass' => 'progress-bar bg-primary',
            ],
        ]
	];
@endphp

@section('content')
@endsection
