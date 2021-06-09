<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public array $pages;

    public function __construct()
    {
        $this->pages = [
            [
                'slug' => 'first_post',
                'head' => 'First Post',
                'text' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s,  when an unknown printer took a galley of type and scrambled it to make a type specimen book.  It has survived not only five centuries, but also the leap into electronic typesetting, remaining   essentially unchanged...'
            ],
            ['slug' => 'second_post',
            'head' => 'Second Post',
            'text' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English...'
        ],
        [ 'slug' => 'third_post',
        'head' => 'Third Post',
        'text' => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at   Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum    passage, and going through the cites of the word in classical literature, discovered the undoubtable source...'
    ], 
    ];
            }
        public function index()
        {
            return view('pages', ['pages' => $this->pages]);
        }

        public function show($slug)
        {
            return view('page', ['page' => collect($this->pages)->where('slug', $slug)->first()]);

        }



    }
