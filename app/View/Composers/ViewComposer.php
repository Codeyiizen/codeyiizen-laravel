<?php

namespace App\View\Composers;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;


class ViewComposer
{

    /**
     * Bind data to the view.
     */
    public function compose(View $view)
    {
        $view->with('metaTagHome',[
                                'title' => 'home page title metatag',
                                'description' => 'Codeyiizen is a fast growing Web development, Website designing, Mobile Apps development, CMS and Wordpress Development Company in Delhi, India. Own company also deals with US, UK, Canada and Australia.',
                                'keyword' => 'Best Web development Company in Delhi,Best Website Designing Company in Delhi,Software Development Services in Delhi India',
                               ]);
         $view->with('metaTagAboutUs',[
                                'title' => 'about page title metatag',
                                'description' => 'Codeyiizen is a fast growing Web development, Website designing, Mobile Apps development, CMS and Wordpress Development Company in Delhi, India. Own company also deals with US, UK, Canada and Australia.',
                                'keyword' => 'Best Web development Company in Delhi,Best Website Designing Company in Delhi,Software Development Services in Delhi India',
                               ]);
        $view->with('metaTagContactUs',[
                                'title' => 'contact us page title metatag',
                                'description' => 'Codeyiizen is a fast growing Web development, Website designing, Mobile Apps development, CMS and Wordpress Development Company in Delhi, India. Own company also deals with US, UK, Canada and Australia.',
                                'keyword' => 'Best Web development Company in Delhi,Best Website Designing Company in Delhi,Software Development Services in Delhi India',
                               ]);                       
    }
}
