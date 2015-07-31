<?php
$config_mini = array();
$config_mini['toolbar'] = array(
    array('Source', '-', 'Bold', 'Italic', 'Underline', 'Strike', '-', 'Link', 'Unlink', 'Anchor', 'Image')
);
$config_mini = array(
    array('Source', '-', 'Bold', 'Italic', 'Underline', '-', 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo', '-', 'NumberedList', 'BulletedList'));
//---- Hoáº·c tÃ¹y biáº¿n kÃ­ch thÆ°á»›c
$this->ckeditor->config['width'] = '730px';
$this->ckeditor->config['height'] = '300px';

/* Y la configuraciÃ³n del kcfinder, la debemos poner asÃ­ si estamos trabajando en local */
$config_mini['filebrowserBrowseUrl'] = base_url() . "ckeditor/ckfinder/browse.php";
$config_mini['filebrowserImageBrowseUrl'] = base_url() . "ckeditor/ckfinder/browse.php?type=images";
$config_mini['filebrowserUploadUrl'] = base_url() . "ckeditor/ckfinder/upload.php?type=files";
$config_mini['filebrowserImageUploadUrl'] = base_url() . "ckeditor/ckfinder/upload.php?type=images";


$con_link = base_url() . $this->uri->segment(1) . '/' . $this->uri->segment(2);
echo form_open_multipart($con_link . '/save');
if (isset($error)) {
    echo form_label($error);
}
echo form_fieldset('Điện thoại:');
echo '<table width="50%" border="0" cellspacing="0" cellpadding="5" align="left">';
if ($new_item->id !== '1') {
    echo '<tr>';
    echo'<td align="right" valign="top" width="10%" class="field_name">';
    echo form_label('Nhà sản xuất:');
    echo '</td>';
    echo '<td>';
    $data_producer = array(
    	'name' => 'producer',
    	'id' => 'producer',
    	'value' => $new_item->producer,
    	'class' => 'form_field',
    	'onchange' => "copy2friendlyURLPhone('#producer', '#model');",
    	'onkeyup' => "if (isArrowKey(event)) return; copy2friendlyURLPhone('#producer', '#model');"
    );
    echo form_input($data_producer);
//    form_dr
    //echo form_dropdown('position_id', $position_names, set_value('position_id', $new_item->position_id), array('style' => 'border:1px solid #F6BA00')), '<br>';
    echo '</td></tr>';
    }
echo '<tr><td align="right" valign="top" width="10%" class="field_name">';
echo form_label('Thể loại:');
echo '</td><td>';

echo form_dropdown('category',$Cname, set_value('category', $new_item->product_category_id)) . '<br>';
echo '</td></tr>';


echo '<tr><td align="right" valign="top" width="10%" class="field_name">';
echo form_label('Kiểu điện thoại:');
echo '</td><td>';
	$data_model = array(
		'name' => 'model',
		'id' => 'model',
		'value' => $new_item->model,
		'class' => 'form_field',
			'onchange' => "copy2friendlyURLPhone('#producer', '#model');",
			'onkeyup' => "if (isArrowKey(event)) return; copy2friendlyURLPhone('#producer', '#model');"

	);
echo form_input($data_model);
echo '</td></tr>';

echo '<tr><td align="right" valign="top" width="10%" class="field_name">';
echo form_label('Giá cũ:');
echo '</td><td>';
$data_modela = array(
		'name' => 'gia_cu',
		'id' => 'gia_cu',
		'value' => $new_item->gia_cu,
		'class' => 'form_field'
);
echo form_input($data_modela);
echo '</td></tr>';


echo '<tr><td align="right" valign="top" width="10%" class="field_name">';
echo form_label('Giá mới:');
echo '</td><td>';
	$data_model = array(
		'name' => 'price',
		'id' => 'price',
		'value' => $new_item->price,
		'class' => 'form_field'
	);
echo form_input($data_model);
echo '</td></tr>';



//echo '<tr>';
//echo'<td align="right" valign="top" width="10%" class="field_name">';
//echo form_label('Category');
//echo '</td>';
//echo '<td>';
////    form_dr
//echo form_dropdown('category', $Cname, set_value('category', $new_item->category_id), array('style' => 'border:1px solid #F6BA00')), '<br>';
//echo '</td></tr>';
//    echo '<tr>';
//    echo'<td align="right" valign="top" width="10%" class="field_name">';
//    echo form_label('Icon');
//    echo '</td>';
//    echo '<td>';
//
//    $data_news_icon = array(
//        'name' => 'news_icon',
//        'id' => 'news_icon',
//        'value' => $new_item->news_icon,
//        'class' => 'form field',
//    );
//    echo form_input($data_news_icon);
//    echo '</td></tr>';
////echo $new_item->logo;
//echo '<td></td></tr>';
//if (!isset($new_item->id) || strlen($new_item->id) === 0) {
//    just show upload fill in case create new
echo '<tr><td align="right" valign="top" width="10%" class="field_name">';
echo form_label('Hình:');
echo '</td><td>';
if (strlen($new_item->logo) > 0) {
    echo '<div class="picdoitac"><div class="opacity30"><img src="' . base_url(PARTNER_LOGO . '/ads/' . $new_item->logo) . '"></div></div>
';
}
//echo '</td><td>';
$data_upload = array('name' => 'logo',
    'id' => 'logo',
    'class' => 'form field');
echo form_upload($data_upload);
//$text=array('name'=>'content',
//            'rows'=>'5',
//            'colums'=>'10'
//        );
//echo form_textarea($text,$news['content']),'<br>';
echo '</td>';
echo '</tr>';

echo '<tr><td align="right" valign="top" width="10%" class="field_name">';
echo form_label('Mô tả:');
echo '</td><td colspan="3">';
echo $this->ckeditor->editor('description', $new_item->description, $config_mini);
echo '</td><td>';
echo form_error('url');
echo '</td></tr>';

echo '<tr><td align="right" valign="top" width="10%" class="field_name">';
echo form_label('Giới thiệu:');
echo '</td><td colspan="3">';
echo $this->ckeditor->editor('introduction', $new_item->introduction, $config_mini);
echo '</td><td>';
echo form_error('url');
echo '</td></tr>';

echo '<tr><td align="right" valign="top" width="10%" class="field_name">';
echo form_label('Được kích hoạt:');
echo '</td><td width="10%">';
$active_data = array('name' => 'active', 'id' => 'active', 'value' => 'TRUE', 'checked' => $new_item->active);
echo form_checkbox($active_data);
echo '</td>';
echo '</tr>';

// echo '<tr><td align="right" valign="top" width="10%" class="field_name">';
// echo form_label('Khoảng giá:');
// echo '</td><td>';
// echo form_input(array('name'=>'approx_price','class'=>'form field'), $new_item->approx_price), '<br>';
// echo '</td><td>';
// echo form_error('approx_price');
// echo '</td></tr>';

echo '<tr><td align="right" valign="top" width="10%" class="field_name">';
echo form_label('Tình trạng:');
echo '</td><td>';
echo form_input(array('name'=>'status','class'=>'form field'), $new_item->status), '<br>';
echo '</td><td>';
echo form_error('status');
echo '</td></tr>';

echo '<tr><td align="right" valign="top" width="10%" class="field_name">';
echo form_label('Thời hạn bảo hành:');
echo '</td><td>';
echo form_input(array('name'=>'time_warranty','class'=>'form field'), $new_item->time_warranty), '<br>';
echo '</td><td>';
echo form_error('time_warranty');
echo '</td></tr>';


echo '<tr><td align="right" valign="top" width="10%" class="field_name">';
echo form_label('Sản phẩm cao cấp:');
echo '</td><td>';
echo form_checkbox( array('name'=>'isHight','class'=>'form', 'value'=>1, 'checked'=>$new_item->isHight) ), '<br>';
echo '</td><td>';
echo form_error('isHight');
echo '</td></tr>';

echo '<tr><td align="right" valign="top" width="10%" class="field_name">';
echo form_label('Sản phẩm trung cấp:');
echo '</td><td>';
echo form_checkbox( array('name'=>'isIntermediate','class'=>'form', 'value'=>1, 'checked'=>$new_item->isIntermediate) ), '<br>';
echo '</td><td>';
echo form_error('isIntermediate');
echo '</td></tr>';

echo '<tr><td align="right" valign="top" width="10%" class="field_name">';
echo form_label('Hàng mới về:');
echo '</td><td width="10%">';
$bestSell_data=array('name' => 'best_sell', 'id'=>'best_sell', 'value'=>'TRUE', 'checked' => $new_item->best_sell);
echo form_checkbox($bestSell_data);
echo '</td></tr>';

echo '<tr><td align="right" valign="top" width="10%" class="field_name">';
echo form_label('Mới về:');
echo '</td><td width="10%">';
$moiVe_data=array('name' => 'moi_ve', 'id'=>'moi_ve', 'value'=>'TRUE', 'checked' => $new_item->moi_ve);
echo form_checkbox($moiVe_data);
echo '</td></tr>';

echo '<tr><td align="right" valign="top" width="10%" class="field_name">';
echo form_label('Sắp về:');
echo '</td><td width="10%">';
$sapve_data=array('name' => 'sap_ve', 'id'=>'sap_ve', 'value'=>'TRUE', 'checked' => $new_item->sap_ve);
echo form_checkbox($sapve_data);
echo '</td></tr>';

echo '<tr><td align="right" valign="top" width="10%" class="field_name">';
echo form_label('Giá tốt:');
echo '</td><td width="10%">';
$giatot_data=array('name' => 'gia_tot', 'id'=>'gia_tot', 'value'=>'TRUE', 'checked' => $new_item->gia_tot);
echo form_checkbox($giatot_data);
echo '</td></tr>';

echo '<tr><td align="right" valign="top" width="10%" class="field_name">';
echo form_label('Có quà tặng:');
echo '</td><td width="10%">';
$quatang_data=array('name' => 'qua_tang', 'id'=>'qua_tang', 'value'=>'TRUE', 'checked' => $new_item->qua_tang);
echo form_checkbox($quatang_data);
echo '</td></tr>';

echo '<tr><td align="right" valign="top" width="10%" class="field_name">';
echo form_label('Khuyến mãi:');
echo '</td><td width="10%">';
//$saleoff_data=array('name' => 'sale_off', 'id'=>'sale_off', 'value'=>'TRUE', 'checked' => $new_item->sale_off);
//echo form_checkbox($saleoff_data);
echo form_textarea(array('name'=>'sale_off','class'=>'form field','cols'=>'160', 'rows' =>'6'), $new_item->sale_off), '<br>';
echo '</td></tr>';

echo '<tr><td align="right" valign="top" width="10%" class="field_name">';
echo form_label('Phụ kiện:');
echo '</td><td>';
echo form_textarea(array('name'=>'accesory','class'=>'form field','cols'=>'160', 'rows' =>'4'), $new_item->accesory), '<br>';
echo '</td><td>';
echo form_error('accesory');
echo '</td></tr>';

echo '<tr><td align="right" valign="top" width="10%" class="field_name">';
echo form_label('Sản phẩm thông thường:');
echo '</td><td width="10%">';
$isnew_data=array('name' => 'is_new', 'id'=>'is_new', 'value'=>'TRUE', 'checked' => $new_item->is_new);
echo form_checkbox($isnew_data);
echo '</td></tr>';

echo '<tr><td align="right" valign="top" width="10%" class="field_name">';
echo form_label('Link Rewrite:');
echo '</td><td>';
$data_link_rewrite = array(
		'name' => 'link_rewrite',
		'id' => 'link_rewrite',
		'value' => $new_item->link_rewrite,
		'class' => 'form field',
);
echo form_input($data_link_rewrite);
echo '</td><td width="40%">';
echo form_error('link_rewrite');
echo '</td></tr>';

echo '<tr><td align="right" valign="top" width="10%" class="field_name">';
echo form_label('Meta Title:');
echo '</td><td>';
echo form_input(array('name'=>'meta_title','class'=>'form field'), $new_item->meta_title), '<br>';
echo '</td><td>';
echo form_error('meta_title');
echo '</td></tr>';

//echo '<tr><td align="right" valign="top" width="10%" class="field_name">';
//echo form_label('Description:');
//echo '</td><td>';
//echo form_textarea(array('name' => 'description', 'class' => 'form field', 'cols' => '80', 'rows' => '2'), $new_item->description), '<br>';
//echo '</td><td>';
echo '<tr><td align="right" valign="top" width="10%" class="field_name">';
echo form_label('Meta description:');
echo '</td><td>';
echo form_textarea(array('name'=>'meta_description','class'=>'form field','cols'=>'160', 'rows' =>'6'), $new_item->meta_description), '<br>';
echo '</td><td>';
echo form_error('meta_description');
echo '</td></tr>';
echo '<tr><td align="right" valign="top" width="10%" class="field_name">';
echo form_label('Keywords');
echo '</td><td>';
echo form_input(array('name'=>'meta_keywords','class'=>'form field'), $new_item->meta_keywords), '<br>';
echo '</td><td>';
echo form_error('meta_keywords');
echo '</td></tr>';
echo '<tr><td></td><td>';


echo form_submit('save', 'Lưu');
if (isset($new_item->id)) {
    echo form_hidden('item_id', $new_item->id);
}
echo '</td></tr>';
echo '</table>';
echo form_fieldset_close();


echo form_close();
// echo 'identifier: '.$new_item->id;
//upload images for product.
if(isset($new_item->id) && $new_item->id !== ""){
	echo '<div id ="upload_panel" class="upload_panel" style="width: 500px">';
	echo $this->load->view('panel/upload_pimage');
	echo '</div>';
}

?>

