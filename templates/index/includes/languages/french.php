<?php
function lang($phrase)
{
    static $lang = array(
        // nav bar titles
        'Home' => 'home',
        'AboutUs' => 'about us',
        'ContactUs' => 'contact us',
        'Services' => 'services',
        'nav1' => 'series',
        'nav2' => 'mag',
        'nav3' => 'doc',
        'nav4' => 'cinema',
        'nav5' => 'brands',
        'nav6' => 'monkey',
        'nav7' => 'contact',
        'fr' => 'fr',
        'ar' => 'ar',
        // about us 
        'au-subtitle' => 'we started out just like you, helped friends and family just like you, then built',
        'au-subtitle1' => 'werenerl',
        'au-subtitle2' => 'sDenerls',
        'au-desp1' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste iusto nulla repellendus architecto amet minus. Earum suscipit voluptatum dolore inventore libero tempore. Nisi eveniet eius beatae ut voluptatibus cupiditate. Et.',
        'au-desp2' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste iusto nulla repellendus architecto amet minus. Earum suscipit voluptatum dolore inventore libero tempore. Nisi eveniet eius beatae ut voluptatibus cupiditate. Et.',
        // contact us 
        'cu-subtitle2' => 'level up your brand',
        'cu-descp2-1' => 'you can reach us anytime via',
        'name' => 'name',
        'your name' => 'your name',
        'email' => 'email',
        'subject' => 'subject',
        'subject-placeholder' => 'your subject',
        'msg' => 'how can we help?',
        'msg-placeholder' => 'tell us a little about the project...',
        'agree' => 'you agree to our friendly <u>privacy policy</u>.',
        'send msg' => 'send message',
        'cu-subtitle1' => 'get in touch',
        'cu-descp1-1' => 'we love to hear from you. Our friendly team always here to chat',
        'cu-sub11' => 'chat to us',
        'cu-descp12' => 'hi@example.com',
        'cu-sub21' => 'office',
        'cu-descp22' => '100 douzi street<br>algiers algeria 16000 AU',
        'cu-sub31' => 'phone',
        'cu-descp32' => '(+123) 0778 01 31 10',
        'touch' => 'get in touch',
        'touch-descp' => 'we\'ll create high-quality linkable content and build at least 40 high-authority links to each asset, paving the way for you to grow your rankings, improve brand.',
        // services 
        's-subtitle' => 'all services:',
        'ser1' => 'Nous faisons battre le cœur de l’innovation pour que la',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        // footer 
        'menu' => 'Menu',
        'social' => 'social media',
        'copyright' => '',
        'copyright' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
    );

    return $lang[$phrase];
}