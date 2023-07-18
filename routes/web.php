<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(){
    return view('home');
});

Route::get('/students-list', function () {
    $data = [
        'students' => [
            [
                'name' => 'Alessio',
                'surname' => 'Di nardo',
                'img' => 'https://ca.slack-edge.com/T91QPE3BP-U04V602JWJW-36409e18db0b-512',
            ],
            [
                'name' => 'Alessio',
                'surname' => 'Giovinetti',
                'img' => 'https://ca.slack-edge.com/T91QPE3BP-U04V6A17XMG-314fc10f699f-512',
            ],
            [
                'name' => 'Alex',
                'surname' => 'Timoncini',
                'img' => 'https://ca.slack-edge.com/T91QPE3BP-U04V63FVAF5-84d142d5fc85-512',
            ],
            [
                'name' => 'Cosimo Damiano',
                'surname' => 'Colucci',
                'img' => 'https://ca.slack-edge.com/T91QPE3BP-U0504H6KK9P-807fb249928f-512',
            ],
            [
                'name' => 'Cuono',
                'surname' => 'Maione',
                'img' => 'https://ca.slack-edge.com/T91QPE3BP-U04V8PFGXMJ-4746b4a2bd9d-512',
            ],
            [
                'name' => 'Daniel',
                'surname' => 'Marella',
                'img' => 'https://ca.slack-edge.com/T91QPE3BP-U04VB6C45CL-b0b243847546-512',
            ],
            [
                'name' => 'Dario',
                'surname' => 'La Seta',
                'img' => 'https://ca.slack-edge.com/T91QPE3BP-U04V2T0M1HT-4a4322621cb1-512',
            ],
            [
                'name' => 'Denise',
                'surname' => 'Dichiara',
                'img' => 'https://ca.slack-edge.com/T91QPE3BP-U04V8B73A68-8d4d952aae2d-512',
            ],
            [
                'name' => 'Eligio',
                'surname' => 'Biasi',
                'img' => 'https://ca.slack-edge.com/T91QPE3BP-U04UZ6DLM8E-858c87a88f9a-512',
            ],
            [
                'name' => 'Emanuela',
                'surname' => 'Pau',
                'img' => 'https://ca.slack-edge.com/T91QPE3BP-U050FFF9L2C-de325728fa15-512',
            ],
            [
                'name' => 'Emanuele',
                'surname' => 'Farelli',
                'img' => 'https://ca.slack-edge.com/T91QPE3BP-U04V5R5HR7C-g13aaa988112-512',
            ],
            [
                'name' => 'Ericson',
                'surname' => 'Manalo',
                'img' => 'https://ca.slack-edge.com/T91QPE3BP-U04V5QWAG7M-1b5291432e0e-512',
            ],
            [
                'name' => 'Federico',
                'surname' => 'Rosso',
                'img' => 'https://ca.slack-edge.com/T91QPE3BP-U04V2QRUBU5-g7328c7bd311-512',
            ],
            [
                'name' => 'Flavio',
                'surname' => 'Vitale',
                'img' => 'https://ca.slack-edge.com/T91QPE3BP-U0504GJJR6D-g48ce7a84b2c-512',
            ],
            [
                'name' => 'Francesco',
                'surname' => 'Bifero',
                'img' => 'https://ca.slack-edge.com/T91QPE3BP-U050FJ1B0LQ-15cb7f8f1e4d-512',
            ],
            [
                'name' => 'Francesco',
                'surname' => 'Ruggeri',
                'img' => 'https://ca.slack-edge.com/T91QPE3BP-U050FMCSD96-03b5c530aa8b-512',
            ],
            [
                'name' => 'Francesco',
                'surname' => 'Troiano',
                'img' => 'https://ca.slack-edge.com/T91QPE3BP-U04V6662WF5-d58fe297a605-512',
            ],
            [
                'name' => 'Francesco',
                'surname' => 'Valentino',
                'img' => 'https://ca.slack-edge.com/T91QPE3BP-U0504U09UL9-131773ffba2a-512',
            ],
            [
                'name' => 'Gabriele',
                'surname' => 'Grossi',
                'img' => 'https://ca.slack-edge.com/T91QPE3BP-U04UZC425T8-e1462e560482-512',
            ],
            [
                'name' => 'Gabriele',
                'surname' => 'Majocchi',
                'img' => 'https://ca.slack-edge.com/T91QPE3BP-U04UZB80JHL-688697285d9e-512',
            ],
            [
                'name' => 'Giuseppe',
                'surname' => 'La Maestra',
                'img' => 'https://ca.slack-edge.com/T91QPE3BP-U04V3E2FX5K-2a8f7609cfd1-512',
            ],
            [
                'name' => 'Jacopo',
                'surname' => 'Grippiotti',
                'img' => 'https://ca.slack-edge.com/T91QPE3BP-U050G0LAB1N-07f7d66c667a-512',
            ],
            [
                'name' => 'Jean Patrick',
                'surname' => 'Nana Hell',
                'img' => 'https://ca.slack-edge.com/T91QPE3BP-U04V2R4265B-g47956cbdcbb-512',
            ],
            [
                'name' => 'Juan Francisco',
                'surname' => 'Markán',
                'img' => 'https://ca.slack-edge.com/T91QPE3BP-U04UREKT5QX-943309550372-512',
            ],
            [
                'name' => 'Leonardo',
                'surname' => 'Pascale',
                'img' => 'https://ca.slack-edge.com/T91QPE3BP-U04664NHK8A-0da5a5d3ebe8-512',
            ],
            [
                'name' => 'Lisa',
                'surname' => 'Kozumi Cipolla',
                'img' => 'https://ca.slack-edge.com/T91QPE3BP-U04V60Q06G2-f4660c247f61-512',
            ],
            [
                'name' => 'Louis',
                'surname' => 'Assane Faye',
                'img' => 'https://ca.slack-edge.com/T91QPE3BP-U050H04FT24-g540a2d62e7d-512',
            ],
            [
                'name' => 'Luca',
                'surname' => 'Mazzola',
                'img' => 'https://ca.slack-edge.com/T91QPE3BP-U04URSENGBH-e860fa706717-512',
            ],
            [
                'name' => 'Manuel',
                'surname' => 'Camaioni',
                'img' => 'https://ca.slack-edge.com/T91QPE3BP-U0504ESREUR-6b87b6164a38-512',
            ],
            [
                'name' => 'Mario',
                'surname' => 'Santoro',
                'img' => 'https://ca.slack-edge.com/T91QPE3BP-U0504DP02Q1-8d6c262892a3-512',
            ],
            [
                'name' => 'Matteo',
                'surname' => 'Didonè',
                'img' => 'https://ca.slack-edge.com/T91QPE3BP-U04V65ZRDHR-d4ebe4900d77-512',
            ],
            [
                'name' => 'Mohamed',
                'surname' => 'Jebali',
                'img' => 'https://ca.slack-edge.com/T91QPE3BP-U04UZ5DJ8J2-e6cc425f8763-512',
            ],
            [
                'name' => 'Simona',
                'surname' => 'Cartolina',
                'img' => 'https://ca.slack-edge.com/T91QPE3BP-U0504U2987K-15f32fa17a18-512',
            ],
            [
                'name' => 'Simone',
                'surname' => 'Scoca',
                'img' => 'https://ca.slack-edge.com/T91QPE3BP-U04US00BX1D-db481581761b-512',
            ],
            [
                'name' => 'Toni',
                'surname' => 'Virgilio',
                'img' => 'https://ca.slack-edge.com/T91QPE3BP-U0504TT3J5P-aec598f825c1-512',
            ],
            [
                'name' => 'Vito',
                'surname' => 'Pizzulli',
                'img' => 'https://ca.slack-edge.com/T91QPE3BP-U04V2VADETF-ed6f44a77db8-512',
            ],
        ]
    ];

    return view('students', $data);
})->name('students');


Route::get('/teachers-list', function () {
    $data = [
        'teachers' => [
            [
                'name' => 'Antonio',
                'surname' => 'Sagoleo',
                'role' => 'Teacher Assistant',
                'img' => 'https://ca.slack-edge.com/T91QPE3BP-U04SRMW57L5-f69897790ce2-512',
            ],[
                'name' => 'Riccardo',
                'surname' => 'Petricca',
                'role' => 'Teacher',
                'img' => 'https://ca.slack-edge.com/T91QPE3BP-U021P1AKF71-54d4eb983323-512',
            ],[
                'name' => 'Samuel',
                'surname' => 'Panicucci',
                'role' => 'Teacher Assistant',
                'img' => 'https://ca.slack-edge.com/T91QPE3BP-U04P3BZSS15-7390d1d984cb-512',
            ],[
                'name' => 'Stefano',
                'surname' => 'Cappellini',
                'role' => 'Lead Teacher Assistant',
                'img' => 'https://ca.slack-edge.com/T91QPE3BP-U02HYRKL8E5-ca77aa4493a4-512',
            ],[
                'name' => 'Thomas',
                'surname' => 'de Luca',
                'role' => 'Teacher Assistant',
                'img' => 'https://ca.slack-edge.com/T91QPE3BP-U01MH7KH1DZ-08f6f6a78cbc-512',
            ],
        ]
    ];

    return view('teachers', $data);
})->name('teachers');

Route::get('/advisors-list', function () {
    $data = [
        'advisors' => [
            [
                'name' => 'Elisabetta',
                'surname' => 'Dahò',
                'role' => 'Teacher Coordinator',
                'img' => 'https://ca.slack-edge.com/T91QPE3BP-U014JPTQT4Y-5cf3a5f89015-512'
            ],[
                'name' => 'Eugenia',
                'surname' => 'Faiola',
                'role' => 'Team Boolean',
                'img' => 'https://ca.slack-edge.com/T91QPE3BP-U02JZ1TSZ0U-4054f2f77576-512'
            ],[
                'name' => 'Filippo',
                'surname' => 'Mangione',
                'role' => 'Head of Teaching',
                'img' => 'https://ca.slack-edge.com/T91QPE3BP-U02525XDF0Q-4c1c4ddddd8d-512'
            ],[
                'name' => 'Margherita',
                'surname' => 'Ghidini',
                'role' => 'Senior Career Advisor',
                'img' => 'https://ca.slack-edge.com/T91QPE3BP-UMX6FL3NY-3128fac4bf82-512'
            ],[
                'name' => 'Marilena',
                'surname' => 'Costa',
                'role' => 'Team Boolean',
                'img' => 'https://ca.slack-edge.com/T91QPE3BP-U0234R0RM9A-3561306d844e-512'
            ],[
                'name' => 'Marta',
                'surname' => 'Seminara',
                'role' => 'Team Boolean',
                'img' => 'https://ca.slack-edge.com/T91QPE3BP-U019JFGJRGC-dad2f89178d5-512'
            ],[
                'name' => 'Simone',
                'surname' => 'Rubici',
                'role' => 'Career Advisor',
                'img' => 'https://ca.slack-edge.com/T91QPE3BP-U01N2LFCT6C-e20d06413214-512'
            ],[
                'name' => 'Valeria',
                'surname' => 'Marta',
                'role' => 'Admissions and Onboarding',
                'img' => 'https://ca.slack-edge.com/T91QPE3BP-U01A09U9L94-60401f05265d-512'
            ],
        ]
    ];

    return view('advisors', $data);
})->name('advisors');