<div class="allboxsp1" style="float: left;">
	<h1 class="h1-title">Kiểm tra bảo hành</h1>
	<div class="line-title">
		<div class="left-30">&nbsp;</div>
		<div class="left-70">&nbsp;</div>
	</div>

	<div class="ttincongghe">
		<div class="sreentieude" style="width: 675px; margin-left: 0;">
			<div class="tieude" style="font-size: 16px; font-weight: bold;">
				<form class="timeWarranty">
					<input type="text" name="search" class="search" placeholder="Vui lòng nhập số điện thoại...">
					<button>Kiểm tra</button>
				</form>
			</div>
			<div align="justify" class="noidungchitiet timeWarrantyBody" style="width: 675px; margin-top: 50px; float: left; margin-bottom: 30px;">
			</div>
		</div>
	</div>
	<div class="time-warranty-note" style="width: 670px; float: left; font-size: 14px;">
	Quý khách hàng vui lòng nhập số điện thoại để kiểm tra bảo hành: </br>
	- Đối với các máy sửa chữa phần cứng, thay thế linh kiện, Chúng tôi áp dụng chế độ bảo hành từ 1 - 6 tháng. </br>
	- Quý khách hàng tham thảo thêm thông tin chính sách bảo hành của Chúng tôi.</br>
	- Mọi thắc mắc hoặc cần tư vấn, Quý khách hàng vui lòng liên hệ: 0901 260 260 
	</div>

	<style type="text/css">
		form.timeWarranty {
			margin: 0 auto; width: 430px;
		}
		form.timeWarranty input{
			height: 30px; line-height: 30px; width: 300px; padding-left: 10px; margin: 0 auto; font-size: 14px; margin-right: 10px; float: left;
		}
		form.timeWarranty button{
			height: 32px; width: 100px; float: right; border: none; cursor: pointer; text-transform: uppercase;     font-size: 15px; background-color: #263e81; color: #ffffff;
		}
		.timeWarrantyBody>p.msg {
			font-size: 14px;
		}
		.timeWarrantyBody>p.message {
			color: #263e81; font-weight: 600;
		}
		.table {
			width: 94%;
			padding: 0 3%;
		    border: 1px solid #cccccc;
		    float: left;
		}
		.table .row {
			width: 100%;
		    float: left;
		    border-bottom: 1px solid #cccccc;
		    padding: 10px 0;
		}
		.table .row:last-child {
			border-bottom: none;
		}
		.table .row .cell {
			float: left;
    		width: 33.33%;
		}
		.table .row .cell p {
			line-height: 20px;
		}
		.table .row .cell b {
			width: 85px;
		    display: inline-block;
		}
	</style>

	<script type="text/javascript">
		$(document).ready(function() {
			$( ".timeWarranty button" ).click(function( event ) {
				event.preventDefault();
				$.ajax({
				    type: "POST",
				    url: "http://dienthoaivungtau.com/searchHistory",
				    data: 'q=' + $('.timeWarranty .search').val(),
				    dataType: "text",
				    success: function(resultData){
				        $('.timeWarrantyBody').html(resultData);
				        $('.time-warranty-note').hide();
				    }
				});
			});
		})
	</script>

</div>