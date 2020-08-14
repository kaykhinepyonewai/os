$(document).ready(function()
{
	var num=1;
	getData();
	count();
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	$('.row').on('click','.view_detail',function()
	{
		var id = $(this).data('id');
		var name = $(this).data('name');
		var unit_price = $(this).data('price');
		var discount = $(this).data('discount');
		var brand_name = $(this).data('brand');
		var sub_name = $(this).data('subcategory');
		var photo = $(this).data('photo');
		var des = $(this).data('description');
		// if (discount) 
		// {
		// 	var show = unit_price;
		// 	var price_show=discount+show;
			
		// }else{
		// 	var price_show = unit_price;
			
		// }
		$(".pid").val(id);
		$(".pimg").attr('src',"backend/"+photo);
		$(".pname").text(name);
		$(".pprice").text(unit_price);
		$(".pdiscount").text(discount);
		$(".pbrandname").text(brand_name);
		$(".psubname").text(sub_name);
		$(".pdes").text(des);
		
		
	})

	$('.max').click(function()
	{

		num++;

		$("#qty").text(num);

	})

	$('.min').click(function()
	{
			// num--;

			if (num>0) 
			{
				num--;
				$("#qty").text(num);
			}
			else
			{
				$("#qty").text(0);
			}


		})


	$('.addTo').click(function()
	{
		var item_id = $(".pid").val();
		console.log(item_id);
		var item_name = $(".pname").text();
		var item_price = $(".pprice").text();
		var discount = $(".pdiscount").text();

		var item_discount=0;
		if (discount) 
		{
			item_discount = $(".pdiscount").text();
		}
		else
		{
			item_discount;
		}
		// var item_brandname = $(".pbrandname").text();
		// var item_subcategoryname = $(".psubname").text();
		// var item_des = $(".pdes").text();
		var item_photo = $(".photo").attr('src');
		var item_qty = $("#qty").text();
		
		

		// console.log(item_id,item_name,item_price,item_brandname,item_subcategoryname,item_des,item_photo,item_qty);

		var item = 
		{
			id: item_id,
			name: item_name,
			price: item_price,
			discount: item_discount,
			// brand_name: item_brandname,
			// subcategory_name: item_subcategoryname,
			// des: item_des,
			photo: item_photo,
			qty: item_qty
		}
		var itemString = localStorage.getItem("oshop_item");
		var itemArry;
		if (itemString == null) 
		{
			itemArry = Array();
		}
		else
		{
			 itemArry = JSON.parse(itemString);
		}

		var status = false;

		$.each(itemArry,function(i,v)
		{
			if (item_id == v.id) 
			{
				status = true;
				v.qty = parseInt(v.qty) + parseInt(item_qty);
			}
		})

		if(status == false)
		{
			itemArry.push(item);

		}

		var itemData = JSON.stringify(itemArry);
		localStorage.setItem("oshop_item",itemData);

		
		$("#qty").text(1);
		num=1;
		getData();
		count();


	})


	$('.addTo1').click(function()
	{
		var item_id = $(this).data('id');
		console.log(item_id);
		var item_name = $(this).data('name');
		var item_price = $(this).data('price');
		var discount = $(this).data('discount');
		var item_discount=0;
		if (discount) 
		{
			item_discount = $(this).data('discount');
		}
		else
		{
			item_discount;
		}
		
				var item_photo = $(this).data('photo');
		var item_qty = 1;
		
		

		// console.log(item_id,item_name,item_price,item_brandname,item_subcategoryname,item_des,item_photo,item_qty);

		var item = 
		{
			id: item_id,
			name: item_name,
			price: item_price,
			discount: item_discount,
			
			photo: item_photo,
			qty: item_qty
		}
		var itemString = localStorage.getItem("oshop_item");
		var itemArry;
		if (itemString == null) 
		{
			itemArry = Array();
		}
		else
		{
			 itemArry = JSON.parse(itemString);
		}

		var status = false;

		$.each(itemArry,function(i,v)
		{
			if (item_id == v.id) 
			{
				status = true;
				v.qty = parseInt(v.qty) + parseInt(item_qty);
			}
		})

		if(status == false)
		{
			itemArry.push(item);

		}

		var itemData = JSON.stringify(itemArry);
		localStorage.setItem("oshop_item",itemData);

		getData();
		$("#qty").text(1);
		num=1;
		count();


	})

	function count()
	{
		var itemString =  localStorage.getItem("oshop_item");
		if(itemString)
		{
			var itemArry = JSON.parse(itemString);
			if(itemArry!=0)
			{
				var count = itemArry.length;
				// console.log(count);
				$("#item_count").text('('+count+')');
			}

		}
		else{
			$("#item_count").text('()');
		}
	}


	function getData()
		{
			var itemString = localStorage.getItem("oshop_item");
			// console.log(itemString);


			if (itemString) {
				var itemArry = JSON.parse(itemString);
				var html = '';
				var no=1;
				var total=0;


				$.each(itemArry,function(i,v)
				{
					var name = v.name;
					var photo = v.photo;
					var unit_price = v.price;
					var discount = v.discount;
					var qty = v.qty;

					if (discount>0) {
						var price_show=discount+'<del class="d-block">'+unit_price+'</del>';
						var price = discount;
					}else{
						var price_show = unit_price;
						var price = unit_price;
					}


					html +=`
					<tr>
					<td>${no++}</td>
					<td><img src="${photo}" class="img-fluid w-25"></td>
					<td>${name}</td>
					
					<td>${price_show}</td>
					
					
				

					<td><button class="btn-light min" data-item_i="${i}">-<button> ${qty} <button class="btn-light max" data-item_i="${i}">+</button></td>
					
					<td>${price*qty}</td>
					</tr>`


					total += price * qty;
				})

				html += `
				<tr>
				<td colspan="4" class="text-right home">Total</td>
				<td>${total}</td>
				</tr>
				`	

				$("#tbody").html(html);	
				$(".total").val(total);

			}

			else
			{
				html = '';
				$("#tbody").html(html);
			}
			count();
		}

		$("#tbody").on('click', '.max' , function()
		{
			var item_i = $(this).data('item_i');
			var itemString = localStorage.getItem("oshop_item");
			if(itemString)
			{
				var itemArry = JSON.parse(itemString);
				$.each(itemArry,function(i,v)
				{
					if(item_i == i)
					{
						v.qty++;
					}

					var itemData = JSON.stringify(itemArry);
					localStorage.setItem("oshop_item",itemData);
					getData();
				})
			}
		})


		$("#tbody").on('click', '.min' , function()
		{
			var item_i = $(this).data('item_i');
			var itemString = localStorage.getItem("oshop_item");
			if(itemString)
			{
				var itemArry = JSON.parse(itemString);
				$.each(itemArry, function(i,v)
				{
					if(item_i == i)
					{
						v.qty--;
						if(v.qty == 0)
						{
							itemArry.splice(item_i,1);
						}
					}

					var itemData = JSON.stringify(itemArry);
					localStorage.setItem("oshop_item",itemData);
					getData();

				})
			}
		})

		// For Buy Now

		$('.buy_now').on('click',function()
		{
			var notes = $('.notes').val();
			// var total = $('.total').val();

			var itemString = localStorage.getItem("oshop_item");
			if (itemString) {
				// itemArry = JSON.parse(itemString);

				$.post('/orders',{item_data:itemString,notes:notes},function(response)   //  /orders---url
				{
					if (response) 
					{
						alert(response);
						localStorage.clear();
						getData();
						location.href="/";
					}
					
				})
			}

		})




			






})