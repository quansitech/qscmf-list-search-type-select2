<?php
namespace Qs\ListSearchType\Select2;

use Qs\ListSearchType\Select2Builder;
use Think\View;
use Qscmf\Builder\ListSearchType\ListSearchType;

class Select2 implements ListSearchType
{
    public function build(array $item){
        $options = $item['options'] instanceof Select2Builder ? $item['options'] :
        $this->buildDefBuilder($item['options']);

        !$options->getPlaceholder() && $options->setPlaceholder($item['title']);

        $view = new View();
        $view->assign('item', $item);
        $view->assign('gid', $options->getGid());
        $view->assign('options', $options->getData());
        $view->assign('select2_opt', $options->toArray());
        $view->assign('value', I('get.'.$item['name']));
        $content = $view->fetch(__DIR__ . '/select2.html');
        return $content;
    }

    protected function buildDefBuilder(array $options):Select2Builder{
        return new Select2Builder($options);
    }
}