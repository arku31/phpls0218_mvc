<?php

namespace App;

use Symfony\Component\DomCrawler\Crawler;

class Courses extends MainController
{
    public function php()
    {
        echo 'PHP IS HERE';
    }

    public function index()
    {
        $userModel = new User();
        $users = $userModel->all();
        $data = [
            'users' => $users
        ];
        $data['moredata'] = 'moredata';

        $this->view->render('course_users', $data);
    }

    public function crawler()
    {
        $html = file_get_contents('https://loftschool.com');
        $crawler = new Crawler($html);
        $parsedContent = $crawler->filter('.course__list .course__title a');
        $courses = [];
        foreach ($parsedContent as $parsed) {
            $courses[]= [
                'name' => $parsed->textContent,
                'url' => $parsed->getAttribute('href')
            ];
        }
        return $courses;
    }

    public function show()
    {
        $data['courses'] = $this->crawler();
//        $this->view->twigLoad('courses', $data);
        $this->view->render('courses', $data);
    }

    public function showrecaptcha()
    {
        $sitekey = '6LdFaS0UAAAAAIVagd7U4qsNf0vO-oOZjFAMCk41';
        $this->view->twigLoad('capt_index', [
            'sitekey' => $sitekey,
            'url' => '/courses/submit'
        ]);
    }

    public function submit()
    {
        $remoteIp = $_SERVER['REMOTE_ADDR'];
        $gRecaptchaResponse = $_REQUEST['g-recaptcha-response'];
        $recaptcha = new \ReCaptcha\ReCaptcha("6LdFaS0UAAAAAKK8_v2qiYuNf_Cq6BHjo17B_b95");
        $resp = $recaptcha->verify($gRecaptchaResponse, $remoteIp);
        if ($resp->isSuccess()) {
            echo "Успех, капча пройдена";
        } else {
            echo "Поражен вашей неудачей, сударь";
        }
    }
}
