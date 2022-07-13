<?php

namespace App\Http\Controllers;

use App\Package\Page\Model\Page;
use App\Package\Page\service\PageService;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function get(Page $page){

        return response()->json([
            "page" => $page
        ]);

    }

}
