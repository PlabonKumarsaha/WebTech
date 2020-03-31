<html>
  <head>
    <meta charset="utf-8">
    <title>Food Menu Selector</title>
  </head>
  <body>
    <select id="food_select" name="menu" onchange="calculatePrice();">
	  <option value="chicken">Chicken - [BDT: 100]</option>
      <option value="beef">Beef - [BDT: 200]</option>
      <option value="fish">Fish - [BDT: 300]</option>
    </select>

    <input onkeyup="calculatePrice();" type="number" name="qty" value="" placeholder="Amount" id="food_qty">

    <h1 id="total_price">0</h1>
	
	<script>
	
		function calculatePrice(){
			
			var chickenPrice = 100;
			var beefPrice = 200;
			var fishPrice = 300;
			
			var total_price;
			
			var selectedFood = document.getElementById('food_select').value;
			var qtyInput = document.getElementById('food_qty').value;
			
			if(selectedFood == "chicken"){ total_price = chickenPrice * qtyInput; }
			else if(selectedFood == "beef"){ total_price = beefPrice * qtyInput;  }
			else if(selectedFood == "fish"){ total_price = fishPrice * qtyInput; }
			
			document.getElementById('total_price').innerText = total_price;
			
		}		
	
	</script>

  </body>
</html>








