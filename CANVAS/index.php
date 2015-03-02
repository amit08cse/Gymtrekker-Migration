<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="js/html2canvas.js"></script>
<script type="text/javascript" src="js/jquery.plugin.html2canvas.js"></script>

<form method="POST" enctype="multipart/form-data" action="save.php" id="myForm">
	<input type="hidden" name="img_val" id="img_val" value="" />
</form>
<table>
	<tr>
		<td colspan="2">
			<table width="100%">
				<tr>
					<td>
						<input type="submit" value="Take Screenshot Of Div Below" onclick="capture();" />
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td valign="top" style="padding: 10px;">
            <b>Div:</b>
		</td>
		<td>
			<div id="target">
				<table cellpadding="10">
					
					<tr>
						<div heigth="278" width="600" style="height: 278px; width: 600px; position: relative; margin: 0px auto;">
    <img src="input.jpg" heigth="278" width="600" style="display: block; height: 278px; width: 600px;" />
    <span style="background-color: #ffffff; border-radius: 5px; color: #000000; font-family: Helvetica,Arial,sans-sarif; font-size: 12px; font-style: normal; height: 17px; left: 3px; line-height: 16px; overflow: hidden; padding: 5px 10px; position: absolute; text-align: left; top: 17px; width: 140px;">Voucher No : XFCEWY12</span>
    <span style="background-color: #ffffff; border-radius: 5px; color: #000000; font-family: Helvetica,Arial,sans-sarif; font-size: 12px; font-style: normal; height: 17px; line-height: 16px; overflow: hidden; padding: 5px 10px; position: absolute; right: 17px; text-align: right; top: 17px; width: 80px;">Date:02-03-15</span>
</div>
					</tr>
				</table>
			</div>
		</td>
	</tr>
</table>
<script type="text/javascript">
	function capture() {
		$('#target').html2canvas({
			onrendered: function (canvas) {
                //Set hidden field's value to image data (base-64 string)
				$('#img_val').val(canvas.toDataURL("image/png"));
                //Submit the form manually
				document.getElementById("myForm").submit();
			}
		});
	}
</script>
<style type="text/css">
	#target {
		border: 1px solid #CCC;
		padding: 5px;
		margin: 5px;
	}
	h2, h3 {
		color: #003d5d;
	}
	p {
		color:#AA00BB;
	}
	#more {
		font-family: Verdana;
		color: purple;
		background-color: #d8da3d;
	}
</style>
