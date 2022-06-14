<?php

namespace MicroweberPackages\Template\NewWorld\tests\Browser;

use Illuminate\Support\Facades\Auth;
use Laravel\Dusk\Browser;
use MicroweberPackages\Page\Models\Page;
use MicroweberPackages\Template\NewWorld\tests\Browser\Components\NewWorldShopProductLinksScraper;
use MicroweberPackages\User\Models\User;
use Tests\Browser\Components\AdminLogin;
use Tests\Browser\Components\ChekForJavascriptErrors;
use Tests\DuskTestCase;

class NewWorldLoginTest extends DuskTestCase
{
    public $template_name = 'new-world';

    public static $username = '';
    public static $email = '';
    public static $password = '';

    protected function setUp(): void
    {
        self::$username = uniqid();
        self::$email = self::$username.'@example.com';
        self::$password = uniqid().rand(1,100);
        parent::setUp();
    }

    public function testNewWorldUserRegisterAndLogin()
    {
        Auth::logout();


        $data = [];
        $data['option_value'] = 'y';
        $data['option_key'] = 'captcha_disabled';
        $data['option_group'] = 'users';
        save_option($data);

        $username = self::$username;
        $email = self::$email;
        $password = self::$password;

        $this->browse(function (Browser $browser) use ($username,$email,$password)  {
            $browser->visit('/');
            $browser->clickLink('Log in');
            $browser->clickLink('Register');
            $browser->pause(3000);
            $browser->click('#user_registration_form_holder input[name="email"]');
            $browser->click('#user_registration_form_holder input[name="password"]');
            $browser->pause(100);

             $browser->typeSlowly('#user_registration_form_holder input[name="email"]', $email);
            $browser->typeSlowly('#user_registration_form_holder input[name="password"]', $password);
             $browser->click('#user_registration_form_holder button[type="submit"]');

            $browser->pause(5000);
            $browser->clickLink($username);

            $browser->pause(2000);
            $browser->clickLink('Logout');
            $browser->pause(3000);


        });




        $this->browse(function (Browser $browser) use ($username,$email,$password)  {
            $browser->visit('/');
            $browser->pause(5000);

            $browser->clickLink('Log in');
            $browser->pause(300);

            $browser->clickLink('Login');
             $browser->pause(3000);
            $browser->click('#user_login_loginModalModuleLogin input[name="username"]');
            $browser->click('#user_login_loginModalModuleLogin input[name="password"]');
            $browser->pause(100);

            $browser->typeSlowly('#user_login_loginModalModuleLogin input[name="username"]', $email);
            $browser->typeSlowly('#user_login_loginModalModuleLogin input[name="password"]', $password);
            $browser->click('#user_login_loginModalModuleLogin button[type="submit"]');

            $browser->pause(5000);
            $browser->clickLink($username);

            $browser->pause(2000);
            $browser->clickLink('Logout');
            $browser->pause(3000);

        });

    }


}
