<?php
namespace App\Http\Services;


use App\Http\Resources\Resources\NewsResource;
use App\Models\News;
use Illuminate\Support\Facades\Facade;

class NewsService extends Facade
{
public static function index():mixed
{
    return NewsResource::collection(News::all());
}
}
