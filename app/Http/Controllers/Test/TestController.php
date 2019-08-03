<?php

namespace App\Http\Controllers\Test;
use App\Http\Controllers\Controller;

use App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail; // used by testMailables()
use DB;

/* 
 * All of the routes in the Test Controller will be inaccessible on production
 */
class TestController extends Controller
{
    public function __construct()
    {
        if (App::environment(['production'])) {
            return abort(404);
        }
    }

    public function all()
    {
        return view('test.test_all');
    }

    public function testParallax()
    {
        return view('test.test_parallax');
    }

    public function testTemplate()
    {
        return view('test.test_template');
    }

    public function styleguide()
    {
        return view('test.test_styleguide');
    }

    public function testStyleguide()
    {
        return view('test.test_styleguide');
    }

    public function testSvgAnimationsStandalone()
    {
        return view('test.test_svg_animations_standalone');
    }

    public function testLogoAnimation()
    {
        return view('test.test_logo_animation');
    }

    public function testAnimejsAnimation()
    {
        return view('test.test_animejs_animation');
    }

    public function testWaveAnimation()
    {
        return view('test.test_wave_animation');
    }

    public function testTestimonials()
    {
        return view('test.test_testimonials');
    }

    public function testPageTransitions()
    {
        return view('test.test_page_transitions');
    }

    // this references the live site
    public function testProdigy()
    {
        return view('test.test_prodigy');
    }

    public function testThriva()
    {
        return view('test.test_thriva');
    }

    // vue.js demos and inspiration
    public function testVue()
    {
        return view('test.test_vue');
    }

    // fullscreen video background
    public function testVideoBackground()
    {
        return view('test.test_video_background');
    }

    // codrops demo links, for example: most hearted pens of 2018
    public function testCodrops()
    {
        return view('test.test_codrops');
    }
    
    public function ghost_blog_index()
    {
        $posts[] = array();
        for ($i=0; $i<20; $i++) {
            $blogPost = new \stdClass();
            $blogPost->slug = "/do-not-track-act-2019/";
            $blogPost->featured_image = "https://42f2671d685f51e10fc6-b9fcecea3e50b3b59bdc28dead054ebc.ssl.cf5.rackcdn.com/illustrations/good_team_m7uu.svg";
            $blogPost->title = "The Do-Not-Track Act of 2019";
            $blogPost->excerpt = "Hundreds of millions of people worldwide are using the \"Do Not Track\" browser setting and yet most all sites ignore it. We're proposing draft legislation that can serve as a starting point to fix this unfortunate reality.";
            $blogPost->author_name = "Kenny the Brainiac";
            $blogPost->author_url = "/author/kenny/";
            $blogPost->author_image_url = "/img/ghost_blog/profile_images/kenny.gif";
            $blogPost->article_length_minutes = "4";
            $blogPost->publish_date = "publish_date";

            $posts[$i] = $blogPost;
        }
        foreach ($posts as $id => $item) {
            // If there's no featured image, use the default placeholder
            if ($item->featured_image == NULL) {
                $posts[$id]->featured_image = '/img/blog/blog_placeholder_image.png';
            }
        }

        $tags = array(
            '0' => array(
                'url' => '/',
                'text_default' => 'Home',
                'text_mobile' => 'Home',
            ),
            '1' => array(
                'url' => '/tag/device-privacy-tips/',
                'text_default' => 'Device Privacy Tips',
                'text_mobile' => 'Tips',
            ),
            '2' => array(
                'url' => '/tag/privacy-newsletter/',
                'text_default' => 'Privacy Crash Course',
                'text_mobile' => 'Newsletter',
            ),
            '3' => array(
                'url' => '/tag/research/',
                'text_default' => 'Privacy Research',
                'text_mobile' => 'Research',
            ),
            '4' => array(
                'url' => '/tag/duckduckgo/',
                'text_default' => 'DuckDuckGo News',
                'text_mobile' => 'News',
            ),
            '5' => array(
                'url' => '/tag/opinion/',
                'text_default' => 'Opinion',
                'text_mobile' => NULL,
            ),
            '6' => array(
                'url' => '/about',
                'text_default' => 'About',
                'text_mobile' => NULL,
            ),
        );

        return view('test.ghost_blog.blog_index', [
            'prefix' => 'blogdev',
            'posts' => $posts,
            'tags' => $tags,
        ]);
    }

    public function ghost_blog_view()
    {
        return view('test.ghost_blog.blog_view');
    }

    // Note that this uses the Notification Facade: 
    // https://laravel.com/docs/master/notifications#sending-notifications
    public function testSlackNotifications()
    {        
        // using https://webomnizz.com/sending-slack-notification-with-laravel/
        \Notification::route('slack', env('SLACK_WEBHOOK1'))->notify(new App\Notifications\TestSlackNotification());
        //Notification::route('slack', env('SLACK_WEBHOOK2'))->notify(new App\Notifications\TestSlackNotification());

        echo "Slack Notification sent.";
    }

}
