@extends(backpack_view('blank'))

@php
	$projectCount = App\Models\Project::count();
	$formationCount = App\Models\Formation::count();
	$skillCount = App\Models\Skill::count();
    $lastProject = App\Models\Project::orderBy('updated_at', 'DESC')->first();
    $lastProjectDaysAgo = \Carbon\Carbon::parse($lastProject->date)->diffInDays(\Carbon\Carbon::today());

    $widgets['before_content'][] = [
        'type'         => 'alert',
        'class'        => 'alert alert-warning mb-2',
        'heading'      => 'Back-office en développement',
        'content'      => "Les données actuelles sont susceptibles d'êtres remise à zéro avec les seeders, changer les informations ici n'est conseillé qu'en cas de testing. Si vous souhaitez insérer des données sans risque qu'elles soient effacées, il est préférable de modifier les seeders du projet.",
        'close_button' => true, // show close button or not
    ];
    $widgets['before_content'][] = 
    [
        'type' => 'div',
        'class' => 'row',
        'content' => 
        [ // widgets
            [
                'type' => 'card',
                // 'wrapperClass' => 'col-sm-6 col-md-4', // optional
                // 'class' => 'card bg-dark text-white', // optional
                'content' => [
                    'header' => '<i class="fa fa-share-alt mr-2"></i> <b>Portfolio</b>', // optional
                    'body' =>
                        "<div>
                            Partie front du
                            <a
                                href='https://portfolio.ewilan-riviere.com'
                                target='_blank'
                                class='font-weight-bold invisible-link'
                            >
                                portfolio <i class='fas fa-external-link-alt'></i>
                            </a>
                            d'Ewilan Rivière, réalisé en NuxtJS
                        </div>",
                ]
            ],
            [
                'type' => 'card',
                // 'wrapperClass' => 'col-sm-6 col-md-4', // optional
                // 'class' => 'card bg-dark text-white', // optional
                'content' => [
                    'header' => '<i class="fa fa-seedling mr-2"></i> <b>Monstera</b>', // optional
                    'body' => 
                    "<div>
                        Partie front du
                        <a
                            href='https://monstera.ewilan-riviere.com'
                            target='_blank'
                            class='font-weight-bold invisible-link'
                        >
                            projet Monstera <i class='fas fa-external-link-alt'></i>
                        </a>
                        de la <i>Waffle Team</i>, réalisé en ReactJS
                    </div>",
                ]
            ],
        ]
	];
    $widgets['before_content'][] = [
        'type'        => 'jumbotron',
        'wrapperClass'=> 'shadow-xs',
        // 'heading'     => trans('backpack::base.welcome'),
        // 'content'     => trans('backpack::base.use_sidebar'),
        'heading' => '',
        'content' => '<img src="/images/async-data-with-nuxtjs.png" width="350" height="100%"/>',
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
