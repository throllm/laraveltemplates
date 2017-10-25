<?php

namespace Throllm\LaravelTemplates\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;

class ContentController extends Controller
{
    
    /**
     * Create a new instance.
     *
     */
    public function __construct()
    {

    }

    /**
     * Display all Templates.
     *
     * @return view
     */
    public function listtemplates()
    {
            return view('PHANTOM::home');
    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('PHANTOM::home');
    }

    /**
     * Display Template verdi.
     *
     * @return view
     */
    public function verti($sub = "")
    {
        switch($sub)
        {
            case "nosidebar";
            return view('VERTI::nosidebar');            
            break;
            case "leftsidebar";
            return view('VERTI::leftsidebar');            
            break;     
            case "rightsidebar";
            return view('VERTI::rightsidebar');            
            break;            
            default:
            return view('VERTI::home');
        };
    }

    /**
     * Display Template Phantom.
     *
     * @return view
     */
    public function phantom($sub = "")
    {
        switch($sub)
        {
            case "generic";
            return view('PHANTOM::generic');            
            break; 
            case "elements";
            return view('PHANTOM::elements');            
            break;             
            default:
            return view('PHANTOM::home');
        };
    }


    /**
     * Display Template Telephasic.
     *
     * @return view
     */
    public function telephasic($sub='')
    {

        switch($sub)
        {
            case "nosidebar";
            return view('TELEPHASIC::nosidebar');            
            break;
            case "leftsidebar";
            return view('TELEPHASIC::leftsidebar');            
            break;     
            case "rightsidebar";
            return view('TELEPHASIC::rightsidebar');            
            break;            
            default:
            return view('TELEPHASIC::home');
        };
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }
}
