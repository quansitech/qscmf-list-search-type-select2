## Select2Builder
```text
设置select2的属性
```

#### 实例化类
```php
// 参数说明
// array $data 下拉框选项
$data = ['1' => '数据1', '3' => '数据3'];
new Select2Builder($data);
```
```text
支持的数据格式
```
+ 键值对
  ```php
  $data = ['1' => '数据1', '3' => '数据3'];
  ```
+ 含有子级数据
  ```php
  $data = [
    ['text' => '父级1', 'children' => [['id' => '1', 'text' => '子级11'],['id' => '2', 'text' => '子级12']]],
    ['text' => '父级2', 'children' => [['id' => '4', 'text' => '子级21'],['id' => '5', 'text' => '子级22']]],
  ];
  ```

#### getGid
```text
获取gid，可根据此值获取组件dom
```
```php
->getGid()
```

#### setData
```text
设置下拉框选项
```
```php
// 参数说明
// array $data 下拉框选项
$data = ['1' => '数据1', '3' => '数据3'];
->setData($data)
```

#### getData
```text
获取下拉框选项
```
```php
->getData()
```

#### setPlaceholder
```text
设置下拉框提示
```
```php
// 参数说明
// string $placeholder 下拉框提示
$placeholder = "请选择";
->setPlaceholder($placeholder)
```

#### getPlaceholder
```text
获取下拉框提示
```
```php
->getPlaceholder()
```

#### setMultiple
```text
设置多选，默认为false
```
```php
// 参数说明
// bool $is_multiple 是否可以多选
$is_multiple = true;
->setMultiple($is_multiple)
```

#### setWidth
```text
设置下拉框宽度，默认为250
```
```php
// 参数说明
// string $width 下拉框宽度
$width = '100';
->setWidth($width)
```