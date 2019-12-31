@extends(backpack_view('blank'))

@php
	$projectCount = App\Models\Project::count();
	$formationCount = App\Models\Formation::count();
	$skillCount = App\Models\Skill::count();
    $lastProject = App\Models\Project::orderBy('updated_at', 'DESC')->first();
    $lastProjectDaysAgo = \Carbon\Carbon::parse($lastProject->date)->diffInDays(\Carbon\Carbon::today());

    $widgets['before_content'][] = [
        'type'        => 'jumbotron',
        'wrapperClass'=> 'shadow-xs',
        // 'heading'     => trans('backpack::base.welcome'),
        // 'content'     => trans('backpack::base.use_sidebar'),
        'heading' => '<div class="font-weight-bold">Back-office de ewilan-riviere.com</div>',
        'content' => '
            <div class="pb-5">
                Allez voir le rendu sur le <a href="https://portfolio.ewilan-riviere.com" target="_blank" class="font-weight-bold">portfolio <i class="fas fa-external-link-alt"></i></a>
            </div>',
        'button_link' => backpack_url('logout'),
        'button_text' => trans('backpack::base.logout'),
    ];

	$widgets['before_content'][] = [
        'type' => 'div',
        'class' => 'row',
        'content' => [ // widgets
            [
                'type'        => 'progress_white',
                'class'       => 'card border-0 mb-2',
                'value'       => $skillCount,
                'description' => 'Compétences',
                'progress'    => 100, // integer
                'progressClass' => 'progress-bar bg-primary',
                'hint'        => 'Great! Don\'t stop.',
            ],
            [
                'type'        => 'progress_white',
                'class'       => 'card mb-2',
                'value'       => $formationCount,
                'description' => 'Formations',
                'progress'    => (int)$formationCount/10*100, // integer
                'progressClass' => 'progress-bar bg-warning',
                'hint'        => 10-$formationCount.' more until next milestone.',
            ],
            [
                'type'        => 'progress_white',
                'class'       => 'card mb-2',
                'value'       => $projectCount,
                'description' => 'Projets',
                'progress'    => (int)$projectCount/75*100, // integer
                'progressClass' => 'progress-bar bg-info',
                'hint'        => $projectCount>75?'Easier to sell less than 75 products.':'Good. Good.',
			],
            [
                'type'        => 'progress_white',
                'class'       => 'card mb-2',
                'value'       => $lastProjectDaysAgo.' '.($lastProjectDaysAgo > 1 ? 'jours' : 'jour'),
                'description' => 'Depuis le dernier projet créé ou mis à jour',
                'progress'    => 100, // integer
                'progressClass' => 'progress-bar '.($lastProjectDaysAgo>5?'bg-warning':'bg-success'),
                'hint'        => 'Post an article every 3-4 days.',
            ],
        ]
	];
    $widgets['after_content'][] = [
        'type' => 'div',
        'class' => 'row',
        'content' => [ // widgets
            [
                'type' => 'card',
                // 'wrapperClass' => 'col-sm-6 col-md-4', // optional
                // 'class' => 'card bg-dark text-white', // optional
                'content' => [
                    'header' => 'Some card title', // optional
                    'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis non mi nec orci euismod venenatis. Integer quis sapien et diam facilisis facilisis ultricies quis justo. Phasellus sem <b>turpis</b>, ornare quis aliquet ut, volutpat et lectus. Aliquam a egestas elit. <i>Nulla posuere</i>, sem et porttitor mollis, massa nibh sagittis nibh, id porttitor nibh turpis sed arcu.',
                ]
                ],
                [
                'type' => 'card',
                // 'wrapperClass' => 'col-sm-6 col-md-4', // optional
                // 'class' => 'card bg-dark text-white', // optional
                'content' => [
                    'header' => 'Another card title', // optional
                    'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis non mi nec orci euismod venenatis. Integer quis sapien et diam facilisis facilisis ultricies quis justo. Phasellus sem <b>turpis</b>, ornare quis aliquet ut, volutpat et lectus. Aliquam a egestas elit. <i>Nulla posuere</i>, sem et porttitor mollis, massa nibh sagittis nibh, id porttitor nibh turpis sed arcu.',
                ]
                ],
                [
                'type' => 'card',
                // 'wrapperClass' => 'col-sm-6 col-md-4', // optional
                // 'class' => 'card bg-dark text-white', // optional
                'content' => [
                    'header' => 'Yet another card title', // optional
                    'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis non mi nec orci euismod venenatis. Integer quis sapien et diam facilisis facilisis ultricies quis justo. Phasellus sem <b>turpis</b>, ornare quis aliquet ut, volutpat et lectus. Aliquam a egestas elit. <i>Nulla posuere</i>, sem et porttitor mollis, massa nibh sagittis nibh, id porttitor nibh turpis sed arcu.',
                ]
            ],
        ]
	];
    // $widgets['after_content'][] = [
    //     'type'         => 'alert',
    //     'class'        => 'alert alert-warning bg-dark border-0 mb-2',
    //     'heading'      => 'Demo Refreshes Every Hour on the Hour',
    //     'content'      => '' ,
    //     'close_button' => true, // show close button or not
	// ];
@endphp

@section('content')
@endsection
