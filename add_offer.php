<!DOCTYPE html>
<html>
<head>
	<title>||ADD OFFER PAGE||</title>
</head>
<body>
	<h3 >You are login as ADMIN</h3>
	<a href="sign_in_up.php"><button>LOGOUT</button></a>

	<form action="" method="post"> 
		<table align="center" width="80%" >
			<h3 align="center">ADD OFFER</h3>
			<td  align="right" width="35%">
					OFFER Product Id
				</td>
				<td align="right" width="5%">:</td>
				<td align="left" width="40%">
					<input type="text" name="offer_product_id" >
				</td>
			</tr>
			<tr>
				<td  align="right" width="35%">
					OFFER Name
				</td>
				<td align="right" width="5%">:</td>
				<td align="left" width="40%">
					<input type="text" name="offer_name" >
				</td>
			</tr>
			<tr>
				<td  align="right" width="35%">
					OFFER Type
				</td>
				<td align="right" width="5%">:</td>
				<td align="left" width="40%">
					<input type="radio" name="offer_type" value="buy1get1">Buy One Get One
					<input type="radio" name="offer_type" value="discount">Discount
				</td>
			</tr>
			<tr>
				<td  align="right" width="35%">
					OFFER Duration
				</td>
				<td align="right" width="5%">:</td>
				<td align="left" width="40%">
					<input type="text" name="offer_duration" >
				</td>
			</tr>
			

			<td  align="right" width="35%">
					OFFER Product Picture
				</td>
				<td align="right" width="5%">:</td>
				<td align="left" width="40%">
					<input type="file" name="offer_product_picture"/>
				</td>
			</tr>
			<tr>
				<td colspan="3" align="center" >
					<input  type="submit" name="add_offer_product" value="ADD OFFER" style="width:200px;background-color:orange">
				</td>
			</tr>
		</table>
	</form>	
</body>
</html>