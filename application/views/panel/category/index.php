<script language="Javascript">
    function deleteRecord(id)
    {
        var answer = window.confirm('Do you want to delete this record?');
        if (answer==false)
        {
            return false;
        }
        else
        {
            document.form1.hiddelete.value=id;
            document.form1.submit();
            return true;
        }
    }
</script>
<table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>
    <tr>
        <td height='55' background='<?php echo RES_PATH; ?>images/panel/admin-blue_08.gif' valign='middle' style='padding-left:20px'>Quản lí danh mục</td>
        <td align="right" background='<?php echo RES_PATH; ?>images/panel/admin-blue_08.gif' valign='middle' style='padding-right:10px'>&nbsp;</td>
    </tr>
</table>

<form action='' method='post' name='form1' style='margin:0px'>
    <table width="100%" cellspacing="0" cellpadding="5" align="center" border="0">
        <tr class="tr_title_bg">
            <td width="5%" class="td_title_main" align="left">No.</td>
            <td width="30%" class="td_title_main" align="left">Name</td>
            <td width="20%" class="td_title_main" align="left">Danh mục cha</td>            
            <td width="20%" class="td_title_main" align="left">Hình ảnh</td>            
            <td width="15%" class="td_title_main" align="left">Actions</td>
        </tr>
    </table>
    <table width='100%' cellspacing='0' cellpadding='5' align='center' class='table_border_line'>
        <tr>
        	<td width="5%" align="left">1</td>
            <td width="30%" align="left">Sửa chữa Iphone</td>
            <td width="20%" align="left">Sửa chữa</td>            
            <td width="20%" align="left">Hình ảnh</td>            
            <td width="15%" align="left">
            	<a href="<?php echo base_url().'panel/admin_category/edit/100' ; ?>">Edit</a>
            	<img src="<?php echo base_url().'assets/images/panel/recycle.gif'; ?>" onclick='deleteRecord(" . $row->id . ")' width='14' height='16' border='0' title='Delete'/>
            </td>
        </tr>
        <tr>
        	<td width="5%" align="left">2</td>
            <td width="30%" align="left">Sửa chữa Samsung</td>
            <td width="20%" align="left">Sửa chữa</td>            
            <td width="20%" align="left">Hình ảnh</td>            
            <td width="15%" align="left">
            	<a href="<?php echo base_url().'panel/admin_category/edit/100' ; ?>">Edit</a>
            	<img src="<?php echo base_url().'assets/images/panel/recycle.gif'; ?>" onclick='deleteRecord(" . $row->id . ")' width='14' height='16' border='0' title='Delete'/>
            </td>
        </tr>
    </table>
    <p class='toTop'><a href='<?php echo  base_url(). "panel/admin_category/add" ?>'>Thêm danh mục</a></p>
    <input type='hidden' name='hiddelete' id='hiddelete' value=''/>
</form>