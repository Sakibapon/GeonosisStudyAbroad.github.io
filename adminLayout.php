<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
	<h3 style="text-align: center;">Add an item</h3>
	<form method="post" action="admin.php" enctype="multipart/form-data">
		<table class="table table-bordered">
			<tr class="warning">
				<td>
					<label>Category</label>
				</td>
				<td>
					<select name="type">
						<option value="mb">Macbook</option>
						<option value="mbpro">Macbook Pro</option>
						<option value="mbair">MacBook Air</option>
						<option value="imac">iMac</option>
						<option value="iphone">iPhone</option>
						<option value="ipad">iPad</option>
						<option value="accessories">Accessories</option>
						<option value="windows">Windows Laptops</option>
					</select>
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Brand</label>
				</td>
				<td>
					<input type="text" name="brand" placeholder="Ex: Apple">
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Model</label>
				</td>
				<td>
					<input type="text" name="model" placeholder="Macbook Pro">
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Year</label>
				</td>
				<td>
					<input type="text" name="year" placeholder="Ex: 2019">
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Sizes</label>
				</td>
				<td>
					<input type="radio" name="sizes" value="Built-in" id="built-in"><label for="Built-in"> Built-In" </label>
					<input type="radio" name="sizes" value="9" id="9"><label for="9"> 9" </label>
					<input type="radio" name="sizes" value="10" id="10"><label for="10"> 10" </label>
					<input type="radio" name="sizes" value="11" id="11"><label for="11"> 11" </label>
					<input type="radio" name="sizes" value="12" id="12"><label for="12"> 12" </label>
					<input type="radio" name="sizes" value="13" id="13"><label for="13"> 13" </label>
					<input type="radio" name="sizes" value="14" id="14"><label for="14"> 14" </label>
					<input type="radio" name="sizes" value="15" id="15"><label for="15"> 15" </label>
					<input type="radio" name="sizes" value="16" id="16"><label for="16"> 16" </label>
					<input type="radio" name="sizes" value="17" id="17"><label for="17"> 17" </label>
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Processor</label>
				</td>
				<td>
					<input type="text" name="processor" placeholder="Ex: Intel i5/Apple A10">
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>RAM</label>
				</td>
				<td>
					<input type="text" name="ram" placeholder="Ex: 8GB">
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Storage</label>
				</td>
				<td>
					<input type="text" name="storage" placeholder="Ex: 256GB">
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Graphics</label>
				</td>
				<td>
					<input type="text" name="gpu" placeholder="Ex: Intel Iris 640">
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Condition</label>
				</td>
				<td>
					<input type="text" name="cond" placeholder="Ex: 1 Month Used">
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Battery Cycle Count</label>
				</td>
				<td>
					<input type="number" name="batteryCycle" placeholder="Enter only number">
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Bulk Price</label>
				</td>
				<td>
					<input type="number" name="bulkPrice" placeholder="Ex: Dealer Price">
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Selling Price</label>
				</td>
				<td>
					<input type="number" name="sellPrice" placeholder="Ex: Retail Price">
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Thumbnail Images</label>
				</td>
				<td>
					<input type="file" name="a_img">
					<input type="file" name="b_img">
					<input type="file" name="c_img">
					<input type="file" name="d_img">
					<input type="file" name="e_img">
					<input type="file" name="f_img">
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Description</label>
				</td>
				<td>
					<textarea name="description" placeholder="Ex: Small dent on edge"></textarea>
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Is everything okay ?</label>
				</td>
				<td>
					<input type="hidden" name="pass" value="asdfghjkl"></input>
					<button type="submit" class="btn btn-success" name="add_item" value="submit">Add Item</button>
				</td>
			</tr>

		</table>
	</form>
	<h3 class="text-center">Order Management</h3>
		<table class="table table-bordered">
			<tr class="warning">
				<td class="text-center">
					<a class="btn btn-primary" href="manageOrders.php">Manage Orders</a>
				</td>
			</tr>

		</table>
</div>





																			<!- Modify item ->






<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
	<h3 style="text-align: center;">Modify an item</h3>
	<form method="post"  enctype="multipart/form-data">
		<table class="table table-bordered">
			<tr class="warning">
				<td>
					<label>Product ID</label>
				</td>
				<td>
					<input type="number" name="id">
					<input class="hidden" type="button" name="idBtn" value="Get Details">
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Category</label>
				</td>
				<td>
					<select name="m_type">
						<option value="mb">Macbook</option>
						<option value="mbpro">Macbook Pro</option>
						<option value="mbair">MacBook Air</option>
						<option value="imac">iMac</option>
						<option value="iphone">iPhone</option>
						<option value="ipad">iPad</option>
						<option value="accessories">Accessories</option>
						<option value="windows">Windows Laptops</option>
					</select>
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Brand</label>
				</td>
				<td>
					<input id="brandField" type="text" name="m_brand">
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Model</label>
				</td>
				<td>
					<input type="text" name="m_model">
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Year</label>
				</td>
				<td>
					<input type="text" name="m_year">
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Sizes</label>
				</td>
				<td>
					<input type="radio" name="sizes" value="Built-in" id="built-in"><label for="Built-in">Built-In" </label>
					<input type="radio" name="sizes" value="9" id="9"><label for="9"> 9" </label>
					<input type="radio" name="m_sizes" value="10" id="10"><label for="10"> 10" </label>
					<input type="radio" name="m_sizes" value="11" id="11"><label for="11"> 11" </label>
					<input type="radio" name="m_sizes" value="12" id="12"><label for="12"> 12" </label>
					<input type="radio" name="m_sizes" value="13" id="13"><label for="13"> 13" </label>
					<input type="radio" name="m_sizes" value="14" id="14"><label for="14"> 14" </label>
					<input type="radio" name="m_sizes" value="15" id="15"><label for="15"> 15" </label>
					<input type="radio" name="m_sizes" value="16" id="16"><label for="16"> 16" </label>
					<input type="radio" name="m_sizes" value="17" id="17"><label for="17"> 17" </label>
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Processor</label>
				</td>
				<td>
					<input type="text" name="m_processor">
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>RAM</label>
				</td>
				<td>
					<input type="text" name="m_ram">
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Storage</label>
				</td>
				<td>
					<input type="text" name="m_storage">
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Graphics</label>
				</td>
				<td>
					<input type="text" name="m_gpu">
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Condition</label>
				</td>
				<td>
					<input type="text" name="m_cond">
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Battery Cycle Count</label>
				</td>
				<td>
					<input type="number" name="m_batteryCycle" placeholder="Enter number only">
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Bulk Price</label>
				</td>
				<td>
					<input type="number" name="m_bulkPrice">
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Selling Price</label>
				</td>
				<td>
					<input type="number" name="m_sellPrice">
				</td>
			</tr>


			<tr class="warning">
				<td>
					<label>Description</label>
				</td>
				<td>
					<textarea name="m_description"></textarea>
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Is everything okay ?</label>
				</td>
				<td>
					<input type="hidden" name="pass" value="asdfghjkl"></input>
					<button type="submit" name="modify_item" class="btn btn-warning">Modify Item</button>
				</td>
			</tr>

		</table>
	</form>
</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
	<h3 style="text-align: center;">Mark availability</h3>
	<form method="post"  enctype="multipart/form-data">
		<table class="table table-bordered">
			<tr class="warning">
				<td>
					<label>Product ID</label>
				</td>
				<td>
					<input type="number" name="a_id">
					<input class="hidden" type="button" name="idBtn" value="Get Details">
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Availability</label>
				</td>
				<td>
					<input type="number" name="m_availability" placeholder="Type 1 or 0"></input>
					<input type="hidden" name="pass" value="asdfghjkl"></input>
				</td>
			</tr>

			<tr class="warning">
				<td>
					<label>Is everything okay ?</label>
				</td>
				<td>
					<button type="submit" name="modify_availability" class="btn btn-info">Modify Availability</button>
					<button type="submit" name="delete_item" class="btn btn-danger">Delete Item</button>
				</td>
			</tr>

		</table>
	</form>
</div>



</div>