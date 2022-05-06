<?php
namespace Qs\ListSearchType;

namespace Qs\ListSearchType;


use Illuminate\Support\Str;

class Select2Builder
{
    protected string $gid;
    public array $data;
    public bool $allow_clear = true;
    public bool $is_multiple = false;
    public string $placeholder = '';
    public string $width = '250';

    public function __construct($data){
        $this->setGid();

        $this->setData($data);
    }

    protected function setGid(){
        $this->gid = Str::uuid()->toString();
    }

    public function getGid():string{
        return $this->gid;
    }

    public function setData(array $data):self{
//        $this->data = $this->formatData($data);
        $this->data = $data;
        return $this;
    }

    public function getData():array{
        return $this->data;
    }

    public function setPlaceholder(string $placeholder):self{
        $this->placeholder = $placeholder;
        return $this;
    }

    public function setIsMultiple(bool $is_multiple):self{
        $this->is_multiple = $is_multiple;
        return $this;
    }

    public function getPlaceholder():string{
        return $this->placeholder;
    }

    public function setWidth(string $width):self{
        $this->width = $width;
        return $this;
    }

    // 兼容键值对格式
    protected function formatData(array $data):array{
        if (count($data) === count($data, 1)) {
            $new_data = [];
            foreach($data as $key => $val){
                $new_data[] = ['id' => $key, 'text' => $val];
            }
            return $new_data;
        }else{
            return $data;
        }
    }

    public function toArray():array{
        return [
//            'data' => $this->data,
            'allowClear' => $this->allow_clear,
            'multiple' => $this->is_multiple,
            'placeholder' => $this->placeholder,
            'width' => $this->width,
        ];
    }

}