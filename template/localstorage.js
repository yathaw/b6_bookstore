$(document).ready(function()
{
	cartnoti();
	showtable();

	console.log("hello");


	function cartnoti()
	{
		var totalqty = 0;
		var cart = localStorage.getItem('cart');

			if (cart) 
			{
				var cartobj = JSON.parse(cart);
				$.each(cartobj.mycart ,function(i, v) 
				{
					var qty = v.qty;
					totalqty += parseInt(qty);
				});
			}
		
		console.log(totalqty);

		$('.count_cart').html(totalqty);
	}

	$('.addtocart').click(function(event) 
	{
		
		var id=$(this).data('id');
	 	var title=$(this).data('title');
	 	var price=$(this).data('price');
	 	var photo=$(this).data('photo');
	 	var author = $(this).data('author');
	 	var genre = $(this).data('genre');
	 	var qty = $('#sst').val();

	 	var	cart=localStorage.getItem('cart');

	 	if(!cart)
	 	{
	 		cart='{"mycart":[]}';
	 	}
	 	

	 	var mycartitem={id:id,title:title,price:price,photo:photo,author:author,genre:genre,qty:qty};
        var mycartobj=JSON.parse(cart);
        var exist=0;

        $.each(mycartobj.mycart,function(i,v)
        {
            if (id == v.id) 
            {
                v.qty++;
                exist=1;
            }
        })
        if(exist == 0)
        {
            mycartobj.mycart.push(mycartitem);
        }
        
        localStorage.setItem('cart',JSON.stringify(mycartobj));
        cartnoti();


	});

	function showtable()
	{
		var localstorageitem = localStorage.getItem('cart');
		if (localstorageitem) 
		{
			var localstorageitem = JSON.parse(localstorageitem);
			var mycart = localstorageitem.mycart;

			var mytable ='';
			var subtotal =0; var total=0;
			var j=1;

			$.each(mycart,function (i,v) 
			{
				if (v) 
				{
					var id = v.id;
					var title = v.title;
					var price = v.price;
					var photo = v.photo;
					var author = v.author;
					var genre = v.genre;
					var qty = v.qty;

					subtotal += price * qty;
					total += subtotal ++;

					console.log(total);

					mytable += '<tr>'+
								'<td>'+j+'</td>'+
								'<td>'+title+'</td>'+
								'<td>'+price+'</td>'+
								'<td>'+
										'<div class="product_count">;'+
										'<input type="text" name="qty" id="sst" maxlength="12" value="'+qty+'" title="Quantity:" class="input-text qty">'+
										'<button onclick="'+var result = document.getElementById("sst"); var sst = result.value; if( !isNaN( sst )) result.value++;return false;" class="increase items-count" type="button">'+
											'<i class="lnr lnr-chevron-up"></i>'+
										'</button>'+
										'<button onclick="var result = document.getElementById("sst"); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;" class="reduced items-count" type="button">'+
											'<i class="lnr lnr-chevron-down"></i>'+
										'</button></div> '+
								'</td>'+
								'<td>'+subtotal+'</td>'+
								'</tr>';
					j++;


				}
			});

			$('tbody').html(mytable);

		}

	}
	

})