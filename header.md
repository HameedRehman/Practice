<html>
	<head>
		<title>jQuery Food</title>
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script type="text/javascript">
    $(function() {

	// Listening to keyup events for customer name
	$("#customer_name").keyup(function(e) {
		$("#customer_name_preview").text($("#customer_name").val());
	});

	// Listening to keyup events for customer address
	$("#customer_address").keyup(function(e) {
		$("#customer_address_preview").text($("#customer_address").val());
	});

	// Listening to keyup events for customer phone
	$("#customer_phone").keyup(function(e) {
		$("#customer_phone_preview").text($("#customer_phone").val());
	});

	// Add item in Preview Order when any item's "Select" button is clicked
	$(".select_item").click(function(e) {
		var parent = $(this).parent().parent();
		var id   = parent.find(".item_id").text();
		var name = parent.find(".item_name").text();
		var price = parseInt(parent.find(".item_price").attr("data-price"));

		if ($("#preview_item_" + id).length >= 1) {
			var preview_item = $("#preview_item_" + id);
			var quantity = parseInt(preview_item.find(".preview_item_quantity").text());
			quantity += 1;

			var new_price = quantity * price;

			preview_item.find(".preview_item_quantity").text(quantity);
			preview_item.find(".preview_item_price").attr("data-price", new_price).text("Rs. " + new_price + "/=");
		} else {
			var new_preview_item = "<tr id='preview_item_" + id + "' class='preview_item'>";
			new_preview_item += "<td id='item2_name'>" + name + "</td>";
			new_preview_item += "<td class='preview_item_quantity'>" + 1 + "</td>";
			new_preview_item += "<td class='preview_item_price item2_price' data-price=" + price + " id=''>Rs. " + price + "/=</td>";
                        new_preview_item += "<td>" + "<button class='btn btn-info Delete' value='Delete'>"+"Delete"+"</button>"+ "</td>";
			new_preview_item += "</tr>";

			$("#preview_items").append(new_preview_item);
		}

		// Calculating total
		var total = 0;
		$("#preview_items").find(".preview_item").each(function(index, item) {
			console.log($(this).find(".preview_item_price").attr("data-price"));
			total += parseInt($(this).find(".preview_item_price").attr("data-price"));
		});
		$("#order_total").text(total);
                
            $(".Delete").click(function(){
               
                 var del = $(this).parent().parent();
                 var del_price = del.find(".item2_price").text();
                 del_price = del_price.replace("Rs. ", "");
                 del_price= del_price.replace("/=","")
                 del_price = parseInt(del_price);
                 total = total - del_price;
                  
                 $(this).parent().parent().remove();
                 $("#order_total").text(total);
                    
            });

	});

});
    </script>
		<style type="text/css">
			.main {
				float: left;
				height: 90%;
				margin-right: 10px;
                                
			}
                        #button{
                            background-color: red;
                            height: 30px;
                            width: 60px;
                            text-align: right;
                        }
		</style>
	</head>
	<body>
		<center>
			<h1>jQuery Food</h1>
		</center>
		
		<div id="menu_items" class="main" style="width: 25%">
			<center>
				<h4>Items Menu</h4>
				<hr />
			</center>
			<table class="table table-striped">
				<thead>
					<tr>
						<td>#</td>
						<td>Name</td>
						<td>Price</td>
						<td>Action</td>
					</tr>
				</thead>
				<tbody>
					<tr class="menu_item">
						<td class="item_id">1</td>
						<td class="item_name">Chicken Karhaei</td>
						<td class="item_price" data-price="800">Rs. 800/=</td>
						<td><button class="btn btn-success select_item">Select</button></td>
					</tr>
					<tr class="menu_item">
						<td class="item_id">2</td>
						<td class="item_name">Mutton Karhaei</td>
						<td class="item_price" data-price="1800">Rs. 1800/=</td>
						<td><button class="btn btn-success select_item">Select</button></td>
					</tr>
					<tr class="menu_item">
						<td class="item_id">3</td>
						<td class="item_name">Chicken Tikka</td>
						<td class="item_price" data-price="180">Rs. 180/=</td>
						<td><button class="btn btn-success select_item">Select</button></td>
					</tr>
					<tr class="menu_item">
						<td class="item_id">4</td>
						<td class="item_name">Daal Maash</td>
						<td class="item_price" data-price="80">Rs. 80/=</td>
						<td><button class="btn btn-success select_item">Select</button></td>
					</tr>
					<tr class="menu_item">
						<td class="item_id">5</td>
						<td class="item_name">Salad</td>
						<td class="item_price" data-price="50">Rs. 50/=</td>
						<td><button class="btn btn-success select_item">Select</button></td>
					</tr>
				</tbody>
			</table>
		</div>

		<div id="order" class="main" style="width: 45%">
			<div class="container" style="width: 100%;">
				<center>
					<h4>Customer Details</h4>
					<hr />
				</center>
				<form class="form-inline" style="text-align: center">
					<fieldset>

						<div class="control-group">
							<div class="controls">
								<label class="control-label">Name: </label>
								<br />
								<input type="text" name="customer_name" id="customer_name" value="" />
							</div>
						</div>

						<br />
						<div class="control-group">
							<div class="controls">
								<label class="control-label">Address: </label>
								<br />
								<textarea rows="8" cols="20" id="customer_address"></textarea>
							</div>
						</div>

						<br />
						<div class="control-group">
							<div class="controls">
								<label class="control-label">Phone Number: </label>
								<br />
								<input type="text" name="customer_phone" id="customer_phone" value="" />
							</div>
						</div>
					</fieldset>
				</form>
			</div>
		</div>

		<div id="preview" class="main" style="width: 25%">
			<center>
				<h4>Preview Order</h4>
				<hr />
			</center>
			<div>
				<strong>Name:</strong> <span id="customer_name_preview"></span> <br />
				<strong>Address:</strong> <span id="customer_address_preview"></span> <br />
				<strong>Phone:</strong> <span id="customer_phone_preview"></span> <br />
			</div>

			<br />

			<table id="preview_items" class="table table-striped">
				<thead>
					<td>Name</td>
					<td>Quantity</td>
					<td>Price</td>
                                        <td>Action</td>
				</thead>
			</table>

			<div>
				<strong>Order Total: Rs.</strong> <span id="order_total">0</span>/=
			</div>
		</div>

	</body>
</html>
