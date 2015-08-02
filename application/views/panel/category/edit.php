<?php

$con_link = base_url() . $this->uri->segment(1) . '/' . $this->uri->segment(2);
echo form_open_multipart($con_link . '/save');
if (isset($error)) {
    echo form_label($error);
}
echo form_fieldset('Category:');
echo '<table width="80%" border="0" cellspacing="0" cellpadding="5" align="left">';
/*
echo '<tr><td align="right" valign="top" width="10%" class="field_name">';
echo form_label('Image');
echo '</td><td>';
if (strlen($new_item->image) > 0) {
    echo '<div class="picdoitac"><div class="opacity30"><img src="' . base_url(BANNER_PATH . $new_item->image) . '"></div></div>
';
}

$data_upload = array('name' => 'image',
    'id' => 'image',
    'class' => 'form field');
echo form_upload($data_upload);
echo '</td>';
echo '</tr>';
*/
$options = array(
    'small'  => 'Small Shirt',
    'med'    => 'Medium Shirt',
    'large'   => 'Large Shirt',
	'xlarge' => 'Extra Large Shirt',
);
echo '<tr><td align="right" valign="top" width="10%" class="field_name">';
echo form_label('Danh mục cha:');
echo '</td><td>';
$data_url = array(
    'name' => 'parentcat_id',
    'id' => 'parentcat_id',
    'value' => $new_item->parentcat_id,
    'class' => 'form field',
);
echo form_dropdown('parentcat_id', $options, 'med');
echo '</td><td width="40%">';
echo form_error('url');
echo '</td></tr>';

echo '<tr><td align="right" valign="top" width="10%" class="field_name">';
echo form_label('Tên danh mục:');
echo '</td><td>';
$data_url = array(
    'name' => 'name',
    'id' => 'name',
    'value' => $new_item->name,
    'class' => 'form field',
);
echo form_input($data_url);
echo '</td><td width="40%">';
echo form_error('url');
echo '</td></tr>';

echo '<tr><td align="right" valign="top" width="10%" class="field_name">';
echo form_label('Url:');
echo '</td><td>';
$data_url = array(
    'name' => 'url',
    'id' => 'url',
    'value' => $new_item->url,
    'class' => 'form field',
);
echo form_input($data_url);
echo '</td><td width="40%">';
echo form_error('url');
echo '</td></tr>';

echo '<tr><td align="right" valign="top" width="10%" class="field_name">';
echo form_label('Seo Title:');
echo '</td><td>';
$data_url = array(
    'name' => 'seo_title',
    'id' => 'seo_title',
    'value' => $new_item->seo_title,
    'class' => 'form field',
);
echo form_input($data_url);
echo '</td><td width="40%">';
echo form_error('url');
echo '</td></tr>';

echo '<tr><td align="right" valign="top" width="10%" class="field_name">';
echo form_label('Seo Description:');
echo '</td><td width="29%">';
$data_title = array(
    'name'        => 'seo_description',
    'id'          => 'seo_description',
    'value'       => $new_item->seo_description,
    'rows'        => '5',
    'cols'        => '10',
    'style'       => 'width:100%',
    'class' => 'form class'
);
echo form_textarea($data_title);

echo '<tr><td align="right" valign="top" width="10%" class="field_name">';
echo form_label('Seo Keyword:');
echo '</td><td>';
$data_url = array(
    'name' => 'seo_keyword',
    'id' => 'seo_keyword',
    'value' => $new_item->seo_keyword,
    'class' => 'form field',
);
echo form_input($data_url);
echo '</td><td width="40%">';
echo form_error('url');
echo '</td></tr>';

echo '</td></tr>';
echo '<tr><td align="right" valign="top" width="10%" class="field_name">';
echo form_label('Active');
echo '</td><td width="10%">';
$active_data = array('name' => 'active', 'id' => 'active', 'value' => 'TRUE', 'checked' => $new_item->active);
echo form_checkbox($active_data);
echo '</td>';
echo '</tr>';

echo '<tr><td></td><td>';
echo form_submit('save', 'Save');
if (isset($new_item->id)) {
    echo form_hidden('item_id', $new_item->id);
}
echo '</td></tr>';
echo '</table>';
echo form_fieldset_close();

echo form_close();
?>