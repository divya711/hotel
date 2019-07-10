<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language=javascript src="function.js">
	</script>
	<script language=javascript>
		function checkout()
		{
			var i=0;
	for(x=0;x<document.f1.elements.length;x++)
	{
		if(document.f1.elements[x].value=="")
		{
			f1.txtname.focus();
			alert("Pls Enter All Value");
			i=1;
			break;
		}
	}
	if(i==0)
	{
		f1.method="POST";
		f1.action="addres.php";
		f1.submit();
	}
		}
	</script></head>
<body bgcolor="#fff2e5">
<?php
	include "connection.php";
	include "header.php";
?>
	<section class="section-padding-bottom">
		<div class="container">
			<div class="row">
				<div class="tm-section-header section-margin-top">
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
					<div class="col-lg-4 col-md-6 col-sm-6"><h2 class="tm-section-title">Booking</h2></div>
					<div class="col-lg-4 col-md-3 col-sm-3"><hr></div>	
				</div>				
			</div>
			<div class="row">
				<!-- contact form -->
				<font><center>
<pre>Thank you for your intrest in hotel<em><font color="#7c0000">HOLIDAY
</font></em>please fill  your room requirements.</pre>
<form action="addres.php" method="POST" name="f1">

<table border=0 align=center>
<tr>
	<th align=left>CHECKIN DT   :</th>
	<td>
		
		<?php
                  echo "<select name='cmdday'>";
		for($i=01;$i<=31;$i++)
			if($i==date("d"))
			{
				echo "<option value='$i' selected>$i</option>";
			}
			else
			{
				echo "<option value='$i'>$i</option>";
			}
                   echo "</select>";
				  
				 
		?>
				   


		
		<?php
                  echo "<select name='cmdmonth'>";
		for($i=01;$i<=12;$i++)
			if($i==date("m"))
			{
				echo "<option value='$i' selected>$i</option>";
			}
			else
			{
				echo "<option value='$i'>$i</option>";
			}
                  echo "</select>";
		?>
		
		<?php
		echo "<select name='cmdyear'>";
		for($i=2010;$i<=2020;$i++)
		{
			if($i==date("Y"))
			{
				echo "<option value='$i' selected>$i</option>";
			}
			else
			{
				echo "<option value='$i'>$i</option>";
			}
		}
		echo "</select>";
		?>
		
	</td>
</tr>
<tr>
	<th align=left>CHECKOUT DT   :</th>
	<td>
	<?php
	echo "<select name='cmbday'>";
	
		for($i=1;$i<=31;$i++)
			if($i==date("d"))
			{
				echo "<option value='$i' selected>$i</option>";
			}
			else
			{
				echo "<option value='$i'>$i</option>";
			}
	echo "</select>";	
	
	?>
	
	<?php
	
	echo "<select name='cmbmonth'>";
		
		for($i=1;$i<=12;$i++)
			if($i==date("m"))
			{
				echo "<option value='$i' selected>$i</option>";
			}
			else
			{
				echo "<option value='$i'>$i</option>";
			}
		
	echo "</select>";
	
			
	?>
		
		<?php
		echo "<select name='cmbyear'>";
		for($i=2010;$i<=2020;$i++)
		{
			if($i==date("Y"))
			{
				echo "<option value=$i selected>".$i."</option>";
			}
			else
			{
				echo "<option value=$i>".$i."</option>";
			}
		}
		echo "</select>";
		?>
	</td>
</tr>
<tr>
	<th align=left>NO OF ROOMS   :</th>
	<td><select name=txtroom>
	<?php
	for($i=1;$i<=20;$i++)
	{
		echo "<option value=$i>$i</option>";
	}
	?>
	</select></td>
	<th align=left>TYPE   :</th>
	<td>
	<?php
		echo "<select name=txttype>";
		$qup="select * from tariff where avroom > 0";
		$rs=mysql_query($qup);
		while($res=mysql_fetch_row($rs))
		{
			echo "<option value='".$res[0]."'>".$res[0]."</option>";
		}
		echo "<select>";
		echo "</td>";
	?>
	<td><a href=tariff.php>Tariff</a></td>
</tr>
<tr>
	<th align=left>FULL NAME   :</th>
	<td colspan=4><input type=text name=txtname size=50></td>
</tr>
<tr>
	<th align=left>EMAIL   :</th>
	<td colspan=4><input type="text" name="txtemail" size=50></td>
</tr>
<tr>
	<th align=left>COMPANY   :</th>
	<td colspan=4><input type=text name=txtcompany size=50 onkeyPress="validcompany()"></td>
</tr>
<tr>
	<th align=left>TELEPHONE   :</th>
	<td colspan=4><input type="text" name="txtnumber" size=15 ></td>
</tr>
<tr>
	<th align=left valign=top>ADDRESS   :</th>
	<td colspan=4><textarea name=txtaddress rows=5 cols=40></textarea></td>
</tr>
<tr>
	<th align=left>SPECIAL REQUIREMENT IF ANY   :</th>
	<td colspan=4><textarea name=txtspanyreq rows=5 cols=40></textarea>
</tr>
<tr>
	<td colspan=2 align=center><input type=button name=s1 value="submit" onClick="checkout()">
	<input type=reset name=s2 value="clear"><a href=reservation.php></a></td>
</tr>
<tr align=center>
	<td><a href=edres.php>Edit</a></td>
</tr>
<tr align=center>
	<td><a href=delres.php>Delete</a></td>
</tr>
</table>
</form>
						</div>
					</div>
				</div>
				
			</div>		
		</div>
        </div>
	</section>		
	


<?php
include("footer.php")
?>

</body>
</html>