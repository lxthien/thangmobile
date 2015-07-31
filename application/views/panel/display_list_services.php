<?php

$page_link = base_url() . $this->uri->segment(1) . '/' . $this->uri->segment(2);

?>

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

    

    var link = <?php echo '"'.$page_link.'"'; ?>;

    

    function filter(){

        location = link + '/index/' + $('#category').val();

    }



</script>

<table width='100%' border='0' cellspacing='0' cellpadding='0' align='center'>

    <tr>

        <td height='55' background='<?php echo RES_PATH; ?>images/panel/admin-blue_08.gif' valign='middle' style='padding-left:20px'>

        <p class='toTop'><a href='<?php echo base_url() . "panel/admin_services/add" ?>'>Add News</a></p>

        </td>

        <td align="right" background='<?php echo RES_PATH; ?>images/panel/admin-blue_08.gif' valign='middle' style='padding-right:10px'>

        </td>
    </tr>

</table>



<form action='<?php echo $page_link.'/delete';?>' method='post' name='form1' style='margin:0px'>

    <table width="100%" cellspacing="0" cellpadding="5" align="center" border="0">

        <tr class="tr_title_bg">

            <td width="10%" class="td_title_main" align="left">No.</td>

            <td class="td_title_main" align="left">Name</td>

            <td width="30%" class="td_title_main" align="left"></td>

            <td width="20%" class="td_title_main" align="left">Actions</td>

        </tr>

    </table>

    <table width='100%' cellspacing='0' cellpadding='5' align='center' class='table_border_line'>

        <?php

        $index = 1;

        foreach ($list_items as $row) {



            $bg_color = "";

            if ($index % 2) {

                $bg_color = '#F3E2A7';

            }

            else {

                $bg_color = '#FFF1BC';

            }

            echo "<tr" . $bg_color . ">";

            echo "<td width='10%'  align='left'>" . $index . "</td>";            

            echo "<td width='30%'  align='left'><a href='". base_url() . "panel/admin_services/edit/" . $row->id_news."'>". $row->title . "</a></td>";

            echo "<td align='left'>" . "<a "."style = 'color:black' href ='" . $page_link .'/index/' . $row->id_news_category ."'></a></td>";

            echo "<td width='5%'  align='left'><a href='" . base_url() . "panel/admin_services/edit/" . $row->id_news . "'>Edit</a></td>";

            echo "<td width='5%' align='left'><img src='" . RES_PATH . "images/panel/recycle.gif' onclick='deleteRecord(" . $row->id_news . ")' width='14' height='16' border='0' title='Delete'/></td>";

            echo "</tr>";

            $index++;

        }

        echo "";

        echo "";

        ?>

    </table>

    <p class='toTop'><a href='<?php echo base_url() . "panel/admin_services/add" ?>'>Add News</a></p>

    <input type='hidden' name='hiddelete' id='hiddelete' value=''/>

</form>