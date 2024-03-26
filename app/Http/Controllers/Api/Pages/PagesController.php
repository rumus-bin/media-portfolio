<?php

namespace App\Http\Controllers\Api\Pages;

use App\Http\Controllers\ApiController;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use RumusBin\AttributesRouter\RoteAttributes\Get;

class PagesController extends ApiController
{
    #[Get('/pages', name: 'index-pages')]
    public function index(Request $request): JsonResponse
    {
        return response()->json([
            [
                'title' => 'Hello from the API',
                'content' => 'This is a simple API response',
                'slug' => 'hello-from-the-api',
                'created_at' => now(),
                'components' => [
                    'header' => [
                        'title' => 'This is the header',
                        'type' => 'header',
                        'order' => 1,
                    ],
                    'content' => [
                        'title' => 'This is the content',
                        'type' => 'content',
                        'order' => 2,
                    ],
                    'footer' => [
                        'name' => 'This is the footer',
                        'type' => 'footer',
                        'order' => 3,
                    ],
                ]
            ],
            [
                'title' => 'Another page',
                'content' => 'This is another page',
                'slug' => 'another-page',
                'created_at' => now(),
                'components' => [
                    'header' => [
                        'title' => 'This is the header',
                        'type' => 'header',
                        'order' => 1,
                    ],
                    'content' => [
                        'title' => 'This is the content',
                        'type' => 'content',
                        'order' => 2,
                    ],
                    'footer' => [
                        'name' => 'This is the footer',
                        'type' => 'footer',
                        'order' => 3,
                    ],
                ]
            ]
        ]);
    }
}