<?php
namespace Qs\ListSearchType;

use Bootstrap\Provider;
use Bootstrap\RegisterContainer;
use Qs\ListSearchType\Select2\Select2;

class Select2Provider implements Provider
{

    public function register()
    {
        RegisterContainer::registerListSearchType('select2', Select2::class);
        RegisterContainer::registerSymLink(WWW_DIR . '/Public/list_search_select2', __DIR__ . '/../asset');
    }

}