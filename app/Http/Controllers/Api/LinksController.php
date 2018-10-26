<?php

namespace App\Http\Controllers\Api;

use App\Models\Link;
use App\Transformers\LinkTransformer;
use Illuminate\Http\Request;

class LinksController extends Controller
{
    public function index(Link $link)
    {
        $link = $link->getAllCached();

        return $this->response->collection($link, new LinkTransformer());
    }
}
