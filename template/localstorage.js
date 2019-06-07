$(document).ready(function()
{
	var total=0;

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
			var j=1;

			$.each(mycart,function (i,v) 
			{
				if (v) 
				{
					var result; var sst;
					var id = v.id;
					var title = v.title;
					var price = v.price;
					var photo = v.photo;
					var author = v.author;
					var genre = v.genre;
					var qty = v.qty;

					var subtotal = parseInt(price) * parseInt(qty);



					mytable +='<tr>'+
								'<td class="text-center">'+j+
									'<br><button class="btn btn-default remove"> <i class="fa fa-times text-danger"> </i> </button>'+
								'</td>'+
								'<td><div class="media">'+
										'<div class="d-flex">'+
											'<img src="'+photo+'" alt="" style="width:100px; height:150px">'+
										'</div>'+
										'<div class="media-body">'+
											'<h4>'+title+'</h4>'+
											'<p>Author : '+author+' </p>'+
											'<p>Genre : '+genre+'</p>'+
										'</div>'+
									'</div></td>'+
								'<td>'+price+'</td>'+
								'<td>'+
										'<div class="product_count">'+
										'<input type="text" name="qty" id="sst" maxlength="12" value="'+qty+'" title="Quantity:" class="input-text qty">'+
										'<button class="plus increase items-count " data-id='+id+' type="button">'+
											'<i class="lnr lnr-chevron-up"></i>'+
										'</button>'+
										'<button id="delete_btn" class="reduced items-count minus" data-id='+id+' type="button">'+
											'<i class="lnr lnr-chevron-down"></i>'+
										'</button></div> '+
								'</td>'+
								'<td>'+subtotal+'</td>'+
								'</tr>'
					j++;

					total += subtotal++;

				}


			});

			mytable += '<tr>'+
						'<td></td>'+
						'<td></td>'+
						'<td></td>'+

						'<td><h5>Subtotal</h5></td>'+
						'<td><h5>'+total+'</h5></td></tr>';

			mytable +='<tr class="out_button_area">'+
						'<td></td>'+
						'<td></td>'+
						'<td></td>'+
						'<td></td>'+
						'<td> <div class="checkout_btn_inner">'+
								'<a class="gray_btn" href="">Continue Shopping</a>'+
								'<a class="main_btn">Proceed to checkout</a>'+
							  '</div> </td>'+
							'</tr>'

			$('tbody').html(mytable);

		}

	}

	// Add Quantity
	$('tbody').on('click','.plus',function(){
        var id=$(this).data('id');
        var localstorageitem=localStorage.getItem('cart');
        var localstorageitem=JSON.parse(localstorageitem);
        var mycart = localstorageitem.mycart;

        $.each(mycart,function (i,v) 
		{
			if (v.id == id) 
			{
				v.qty++;
			}
		})
		
		cart = JSON.stringify(localstorageitem);
		localStorage.setItem('cart',cart);
		showtable();
    });

    // Minus Quantity
	$('tbody').on('click','.minus',function(){
        var id=$(this).data('id');
        var localstorageitem=localStorage.getItem('cart');
        var localstorageitem=JSON.parse(localstorageitem);
        var mycart = localstorageitem.mycart;

        $.each(mycart,function (i,v) 
		{
			var cartid = v.id;
			if (v.id == id) 
			{				
				v.qty--;
				if (v.qty === 0) 
				{
					console.log(cartid);
				}
			}
		})
		
		cart = JSON.stringify(localstorageitem);
		localStorage.setItem('cart',cart);
		showtable();
    });
	

	$('tbody').on('click','.main_btn',function(){
        var localstorageitem=localStorage.getItem('cart');
        var cart=JSON.parse(localstorageitem);

        totalamount = total;
        var filepath = "confirm"; 

        $.ajax({
              type:'POST',
              url:'addtocart',
              data:{cart:cart,total:totalamount},
              success:function(data)
              {
                localStorage.clear();
				window.location.href=filepath;
              }

        })

	});

})