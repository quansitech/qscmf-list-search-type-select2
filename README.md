# quansitech/qscmf-list-search-type-select2
```text
qscmf 列表搜索控件--select2

下拉框模糊搜索，支持多选
```

#### 安装

```php
composer require quansitech/qscmf-list-search-type-select2
```

#### 添加下拉框模糊搜索控件

+ 简单用法，添加单选下拉框模糊搜索筛选项
  + 键值对数据格式 
     ```php
    $user_list = D("User")->getField("id,name", true);
    
    (new \Qscmf\Builder\ListBuilder())
    ->addSearchItem('user_id', 'select2', '单选姓名', $user_list)
    ->display();
    
    ```
  
  + 树形结构的数据格式
    ```php
    for ($i=1;$i<=5;$i++){
      $children = [];
      for ($j=1;$j<=3;$j++){
          $children[] = ['id' => $i.'_'.$j, 'text' => $j.'子分类'];
      }
      $cate_list[] = ['text' => '父级分类'.$i, 'children' => $children];
    }
    
    (new \Qscmf\Builder\ListBuilder())
    ->addSearchItem('cate_id', 'select2', '单选分类', $cate_list)
    ->display();
    
    ```
  

+ 高级用法，可自定义下拉框宽度，支持多选等
  
  [Select2Builder使用说明](https://github.com/quansitech/qscmf-list-search-type-select2/blob/master/Select2Builder.md)
  
  ```text
  多选的数据格式为选中值以英文逗号拼接如，id1,id2,id3
  ```
    
  ```php
  $user_list = D("User")->getField("id,name", true);
  
  // 该值为Select2Builder对象 
  $select2_obj = new Select2Builder($user_list);
  $select2_obj->setPlaceholder("请选择多选姓名");
  $select2_obj->setMultiple(true);
  $select2_obj->setWidth("100");
  
  (new \Qscmf\Builder\ListBuilder())
  ->addSearchItem('select2_obj', 'select2', '多选姓名', $select2_obj)
  ->display();  
  ```  
