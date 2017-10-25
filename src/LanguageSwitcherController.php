<?php


namespace Throllm\LaravelTemplates;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Redirect;

class LanguageSwitcherController extends BaseController
{
    /**
     * Set the language and redirect
     * @param $language
     * @return mixed
     */
    public function switchLang($language)
    {
        session(['al' => $language]);
        return Redirect::back();
    }
}
