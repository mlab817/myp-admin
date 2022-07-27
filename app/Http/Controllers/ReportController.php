<?php

namespace App\Http\Controllers;

use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        return Admin::content(function (Content $content) {

            // optional
            $content->header('Reports');

            // optional
            $content->description('Download reports');

            // add breadcrumb since v1.5.7
            $content->breadcrumb(
                ['text' => 'Reports']
            );

            // Fill the page body part, you can put any renderable objects here
//            $content->body('hello world');
//
//            // Add another contents into body
//            $content->body('foo bar');
//
//            // method `row` is alias for `body`
//            $content->row('hello world');

            // Direct rendering view, Since v1.6.12
            $content->view('dashboard', ['data' => 'foo']);
        });
    }
}
