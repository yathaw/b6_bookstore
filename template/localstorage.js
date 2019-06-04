$(document).ready(function()
{
	cartnoti();

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

	

})