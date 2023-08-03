<?php
//include connect file
include('../includes/connect.php');
 
                

//get searching products
function search_product(){
   
     global $con;
    if (isset($_GET['search_data_product'])) {
        $search_data_value = mysqli_real_escape_string($con, $_GET['search_data']); // Sanitize the input

        $search_query = "SELECT * FROM `item` WHERE Item_Title LIKE '%$search_data_value%'";
        $result_query = mysqli_query($con, $search_query);

       echo "<div class='categories__container'>
		<div class='sidebar'>
			<!-- <h3>BidWiz</h3> -->
			<div class='filter'>
				<h3>CATEGORIES</h3>
				<div id='btns'></div>
			</div>
		</div>";
        
        while ($row = mysqli_fetch_assoc($result_query)) {
        $ItemNumber=$row['ItemNumber'];
       
        $Item_Title=$row['Item_Title'];
         $Starting_bid_price=$row['Starting_bid_price'];
          $Start_date=$row['Start_date'];
           $End_date=$row['End_date'];
            $Biding_Increment=$row['Biding_Increment'];
             $Seller_id=$row['Seller_id'];
              $Description=$row['Description'];
    
  
            echo"  </div>

               <div class='box' style=' align-items: left;margin-left:395px;width: 330px;margin-top:50px' >
                    <h3>{$Item_Title}</h3>
                    <div class='img-box' >
                        <img class='images' src='../images/items/catogories/{$ItemNumber}.jpg'></img>
                    </div>
                    <div class='bottom'>
                        <h2>$ {$Starting_bid_price}.00</h2>
                        <button>Bid Now!</button>
                    </div>
                </div>
            
       
       ";
       
        }
   
            
}
}
?>

	