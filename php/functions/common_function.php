<?php
//include connect file
include('./includes/connect.php');
 
                

//get searching products
function search_product(){
   
     global $con;
    if (isset($_GET['search_data_product'])) {
        $search_data_value = mysqli_real_escape_string($con, $_GET['search_data']); // Sanitize the input

        $search_query = "SELECT * FROM `item` WHERE Item_keywords LIKE '%$search_data_value%'";
        $result_query = mysqli_query($con, $search_query);
        $num_of_rows=mysqli_num_rows($result_query);
       

       echo "<div class='categories__container'>
		<div class='sidebar'>
			<!-- <h3>BidWiz</h3> -->
			<div class='filter'>
				<h3>CATEGORIES</h3>
				<div id='btns'></div>
			</div>
		</div>";
         if( $num_of_rows==0){
            echo "<h2 style='color:red;margin-left: 40%;margin-top:40px;' >Sorry! No result match.Try aother item.</h2>";
        }
        while ($row = mysqli_fetch_assoc($result_query)) {
        $ItemNumber=$row['ItemNumber'];
       
        $Item_Title=$row['Item_Title'];
         $Starting_bid_price=$row['Starting_bid_price'];
          $Start_date=$row['Start_date'];
           $End_date=$row['End_date'];
            // $Biding_Increment=$row['Biding_Increment'];
             $Seller_id=$row['Seller_id'];
              $Description=$row['Description'];
    
  
            echo"  
            <head>
                <!-- Add Bootstrap CSS -->
    
            <style>
            @import url('https://fonts.googleapis.com/css2?family=Merriweather+Sans&display=swap');

            *{
                font-family: 'Merriweather Sans';
                font-style: normal;
                font-weight: 400;
                font-display: swap;
            }

            h2{
                text-align: center;
                padding-bottom: 10px;
            }
            
            .all-products{
                display: flex;
                align-items: center;
                justify-content: center;
                flex-wrap: wrap;
            }
            
            .product{
                overflow: hidden;
                background: aliceblue;
                color: #21201e;
                text-align: center;
                width: 80%;
                height: 200px;
                padding: 2rem;
                display: flex;
                align-items: center;
                justify-content: space-around;
                border-radius: 1.2rem;
                margin: 2rem;
            }

            
            .products h2{
            
                color: #4d4d4d;
                text-align: center;
                padding-top: 4%;
            }
            
            .product .product-title, .product .product-price{
                font-size: 18px;
            }
            
            .product:hover img{
                scale:  1.1;
            }
            
            .product:hover {
                box-shadow: 5px 15px 25px #eeeeee;
            }
            
            .product img {
                height: 200px;
                margin: 1rem;
                transition: all 0.3s;
            }
            
            .product a:link, .product a:visited{
                color: #ececec;
                display: inline-block;
                text-decoration: none;
                background-color: #2c3e50;
                padding: 1.2rem 3rem;
                border-radius: 1rem;
                margin-top: 1rem;
                font-size: 14px;
                transition: all 0.2s;
            }
            
            .product a:hover{
                transform: scale(1.1);
            }
            
            </style>
            </head>
            </div>

                <div class='all-products'>
               <div class='product' >
                        <img class='images' src='{$row['Item_image']}'></img>
                        <h2>{$Item_Title}</h2>
                        <p>Starting Bid: {$Starting_bid_price}.00 LKR</p>
                        <a href='item_description.php?item_id={$ItemNumber}' class='btn btn-primary'>Bid Now</a>
                    </div>
                </div>
                </div>
            
       
       ";
       
        }
   
            
}
}
