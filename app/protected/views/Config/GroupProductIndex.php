<div class="panel panel-info" style="margin: 10px">
  <div class="panel-heading">
    <b class="glyphicon glyphicon-list-alt"></b>
    ข้อมูลประเภทสินค้า
  </div>
  <div class="panel-body">
    <a href="index.php?r=Config/GroupProductForm" class="btn btn-info">
      <i class="glyphicon glyphicon-plus"></i>
      เพิ่มรายการ
    </a>
    
    <?php
    $this->widget("zii.widgets.grid.CGridView", array(
        'dataProvider' => $model,
        "pagerCssClass" => "pagination",
        "pager" => array(
          "selectedPageCssClass" => "active",
          "firstPageCssClass" => "previous",
          "lastPageCssClass" => "next",
          "hiddenPageCssClass" => "disabled",
          "header" => "",
          "htmlOptions" => array(
            "class" => "pagination"
          )
        ),
        'itemsCssClass' => 'table table-bordered table-striped',
        'columns' => array(
            array(
                'name' => 'group_product_code',
                'htmlOptions' => array(
                    'width' => '150px',
                    'align' => 'center'
                )
            ),
            array(
                'name' => 'group_product_name',
                'type' => 'raw',
                'value' => 'CHtml::link($data->group_product_name, array("Config/ProductIndex", "group_product_id" => $data->group_product_id))',
                'htmlOptions' => array('width' => '300px')
            ),
            'group_product_detail',
            array(
                'class' => 'CButtonColumn',
                'template' => '{edit} {del}',
                'buttons' => array(
                    'edit' => array(
                        'label' => '
                          <span class="btn btn-info">
                            <i class="glyphicon glyphicon-pencil"></i> 
                          </span>',
                        'url' => 'Yii::app()->createUrl("Config/GroupProductForm", array(
                          "id" => $data->group_product_id
                        ))',
                        'options' => array(
                            'style' => 'text-decoration: none',
                            'title' => 'แก้ไข'
                        )
                    ),
                    'del' => array(
                        'label' => '
                          <span class="btn btn-danger">
                            <i class="glyphicon glyphicon-remove"></i> 
                          </span>',
                        'url' => 'Yii::app()->createUrl("Config/GroupProductDelete", array(
                          "id" => $data->group_product_id
                        ))',
                        'options' => array(
                            'onclick' => 'return confirm("ยืนยันการลบ")',
                            'title' => 'ลบ'
                        )
                    )
                ),
                'htmlOptions' => array(
                    'width' => '110px',
                    'align' => 'center'
                )
            )
        )
    ));
    ?>
  </div>
</div>

