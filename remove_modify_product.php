<!DOCTYPE html>
<html>
<head>
	<title>||REMOVE / MODIFY PRODUCT PAGE||</title>
</head>
<body>
	<h3 >You are login as ADMIN</h3>
	<a href="sign_in_up.php"><button>LOGOUT</button></a>

	<form action="" method="post"> 
		<table align="center" width="80%" >
			<h3 align="center">REMOVE / MODIFY PRODUCT</h3>
			<tr>
				<td  align="right" width="35%">
					Product Id
				</td>
				<td align="right" width="5%">:</td>
				<td align="left" width="40%">
					<input type="text" name="product_id" >
				</td>
			</tr>
			<tr>
				<td  align="right" width="35%">
					Product Price
				</td>
				<td align="right" width="5%">:</td>
				<td align="left" width="40%">
					<input type="text" name="Product_price" >
				</td>
			</tr>
			<tr>
				<td  align="right" width="35%">
					Product Quantity
				</td>
				<td align="right" width="5%">:</td>
				<td align="left" width="40%">
					<input type="text" name="Product_quantity" >
				</td>
			</tr>

			<tr>
				<td  align="right" width="35%">
					Product Warrenty
				</td>
				<td align="right" width="5%">:</td>
				<td align="left" width="40%">
					<input type="text" name="Product_warrenty" >
				</td>
			</tr>

			<td  align="right" width="35%">
					 Product Picture
				</td>
				<td align="right" width="5%">:</td>
				<td align="left" width="40%">
					<input type="file" name="product_picture"/>
				</td>
			</tr>

			<tr>
			<td  align="right" width="30%">
				Delete Product 
			</td>
			<td align="right" width="10%">:</td>
			<td align="left" width="40%">
				<button style="height: 30px;width: 200px;">
				Delete product </button>
			</td>
		</tr>

			
			<tr>
				<td colspan="3" align="center" >
					<input  type="submit" name="add_offer_product" value="SUBMIT" style="width:200px;background-color:orange">
				</td>
			</tr>
		</table>
	</form>	
</body>
</html>