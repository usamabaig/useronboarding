<?php

namespace App\Http\Controllers\Test;
use App\Http\Controllers\Controller;
use App;
use Illuminate\Http\Request;

/* 
 * All of the routes in the TestUIFrameworks Controller will be inaccessible on production
 */
class TestUIFrameworksController extends Controller
{
    public function __construct()
    {
        if (App::environment(['production'])) {
            return abort(404);
        }
    }

    public function index()
    {
        return view('test.ui_frameworks.index');
    }

    public function testTailwindComponents()
    {
        return view('test.ui_frameworks.test_tailwind_components');
    }

    public function testIViewUIFramework()
    {
        return view('test.ui_frameworks.test_iview_ui_framework');
    }

    public function testElementUIFramework()
    {
        return view('test.ui_frameworks.test_element_ui_framework');
    }

    public function testCombinedIViewElementUIFrameworks()
    {
        return view('test.ui_frameworks.test_combined_iview_element_ui_frameworks');
    }

    public function testSemantic()
    {
        return view('test.ui_frameworks.test_semantic_ui');
    }
     
    public function testMaterializeCss()
    {
        return view('test.ui_frameworks.test_materialize_css');
    }

    public function testSemanticMaterialize()
    {
        return view('test.ui_frameworks.test_semantic_materialize');
    }

}
