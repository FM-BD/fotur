<!DOCTYPE html>
<html>
<head>
	<title>||ADD PRODUCT||</title>
</head>
<body>
	<table width="80%" align="center">
		<tr >
			<td align="center" colspan="4"><font size="6"   color="DarkRed">ADD Product(s)</font></td>
			</tr>
			
			<tr></tr>
			
			<tr>
			<td ><font size="4"  color="DarkRed"  > PRODUCT DETAILS:</font></td> 
			</tr>
			<tr>	
				<td ><font size="3" color= "red">*</font><font size="3">Product ID :</font></td>
				<td ><input type="text" name="product_id" >
			
				</td>
				
				
				<td></td><td></td>
			</tr>
			
			<tr>	
				<td ><font size="3" color= "red">*</font><font size="3">Product Title :</font></td>
				<td ><input type="text" name="product_title" >
			
				</td>
				
				
				<td></td><td></td>
			</tr>
			<tr>	
				<td ><font size="3" color= "red">*</font><font size="3">Product Price :</font></td>
				<td ><input type="text" name="product_price" >
			
				</td>
				
				
				<td></td><td></td>
			</tr>
				
			<tr>
				<td ><font size="3" color= "red">*</font><font size="3">Product Category :</font></td>
				<td >
				<select name="product_category" >
					<option  >Select a category</option>
					<option name="Mobile" >Mobile</option>
					<option name="Charger">Charger</option>
					<option name="Headphone">Headphone</option>
				</select>
				<td></td><td></td>
			</tr>
			
			<tr>
			<td ><font size="3" color= "red">*</font><font size="3">Product Warrenty :</font></td>
				<td>
				<select name="product_warrenty" >
					<option>Select a Warrenty</option>
					<option name="1">1 year</option>
					<option name="2">2 year</option>
					<option name="3">3 year</option>
					<option name="0">No warreenty</option>
					
				</select>
				</td>
			</tr>

			<tr>
			<td ><font size="3" color= "red">*</font><font size="3">Product Quantity :</font></td>
				<td>
				<select name="product_quantity" >
					<option>Select Quantity</option>
					<option name="1">1</option>
					<option name="2">2</option>
					<option name="3">3</option>
					<option name="4">4</option>
					<option name="5">5</option>
				</select>
				</td>
			</tr>
			
			<tr>
				<td ><font size="3" color= "red">*</font><font size="3">Product Image :</font></td>
				<td ><input type="File" name="product_image" ></td>
				<td></td><td></td>
			</tr>

			<tr>
			<td ><font size="3" color= "red">*</font><font size="3">Product Description :</font></td>
				<td ><textarea name="product_desc" cols="25" rows="5" ></textarea></td>
				<td></td><td></td>
			</tr>
			
	
			<tr>
				<td ><font color="white"> </font><input type="submit"  name="add_product" value="Add Product" style="width: 100px ;padding-left:20px;padding-right:20px"></td>
			<!-- part for add Product page ends -->
		</tr>
	</table>

</body>
</html>