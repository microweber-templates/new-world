<?php
namespace MicroweberPackages\Template\NewWorld\tests;

use Illuminate\Support\Facades\Auth;
use MicroweberPackages\App\Http\Controllers\FrontendController;
use MicroweberPackages\Core\tests\TestCase;
use MicroweberPackages\Page\Models\Page;
use MicroweberPackages\User\Models\User;

class BasicTemplateTest extends TestCase
{
    public $template_name = 'new-world';

    public function testHomepage()
    {
        $this->assertTrue(true);
    }


}
