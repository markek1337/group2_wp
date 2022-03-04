<?php
include "header.php";
?>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="background-color:#1cb49a; color:white; border-color:#1cb49a; padding-top:10px;">
                    <div class="card-header" style="background-color:#1cb49a;border-color:#1cb49a;">
                        <h4>Find your destination</h4>
                    </div>
                </div>
            </div>

            <!-- destination List  -->
            <div class="col-md-3">
                <form action="" method="GET">
                    <div class="card shadow mt-3">
                        <div class="card-header">
                            <h5>Filter destinations 
                                <button type="submit" class="btn btn-sm float-end" style="background-color:#1cb49a; color:white;">Search</button>
                            </h5>
                        </div>
                        <div class="card-body">
                            <?php
                                $con = mysqli_connect("db","root","password","project_db");
                                ?>
                                <h6>Countries</h6>
                                <hr>
                                <?php
                                $destinationCountry_query = "SELECT * FROM destinations";
                                $destinationCountry_query_success  = mysqli_query($con, $destinationCountry_query);

                                if(mysqli_num_rows($destinationCountry_query_success) > 0)
                                {
                                    foreach($destinationCountry_query_success as $destinationCountrylist)
                                    {
                                        $checked = [];
                                        if(isset($_GET['countries']))
                                        {
                                            $checked = $_GET['countries'];
                                        }
                                        ?>
                                            <div>
                                                <input type="checkbox" name="countries[]" value="<?= $destinationCountrylist['destination_ID']; ?>" 
                                                    <?php if(in_array($destinationCountrylist['destination_ID'], $checked)){ echo "checked"; } ?>
                                                 />
                                                <?= $destinationCountrylist['country']; ?>
                                            </div>
                                            
                                        <?php
                                    }
                                }
                                else
                                {
                                    echo "No Countries Found";
                                }
                            ?>
                            <br>
                            <h6>Price Categories</h6>
                                <hr>
                                <?php
                                $price_query = "SELECT * FROM destinations";
                                $price_query_success  = mysqli_query($con, $price_query);

                                if(mysqli_num_rows($price_query_success) > 0)
                                {
                                    foreach($price_query_success as $pricelist)
                                    {
                                        $checked = [];
                                        if(isset($_GET['prices']))
                                        {
                                            $checked = $_GET['prices'];
                                        }
                                        ?>
                                            <div>
                                                <input type="checkbox" name="prices[]" value="<?= $pricelist['destination_ID']; ?>" 
                                                    <?php if(in_array($pricelist['destination_ID'], $checked)){ echo "checked"; } ?>
                                                 />
                                                <?= $pricelist['price_cat']; ?>
                                            </div>
                                            
                                        <?php
                                    }
                                }
                                else
                                {
                                    echo "No price categories Found";
                                }
                            ?>
                            <br>
                            <h6>Seasonal</h6>
                            <hr>
                                <?php
                                $seasonal_query = "SELECT * FROM destinations";
                                $seasonal_query_success  = mysqli_query($con, $seasonal_query);

                                if(mysqli_num_rows($seasonal_query_success) > 0)
                                {
                                    foreach($seasonal_query_success as $seasonallist)
                                    {
                                        $checked = [];
                                        if(isset($_GET['seasonal']))
                                        {
                                            $checked = $_GET['seasonal'];
                                        }
                                        ?>
                                            <div>
                                                <input type="checkbox" name="seasonal[]" value="<?= $seasonallist['destination_ID']; ?>" 
                                                    <?php if(in_array($seasonallist['destination_ID'], $checked)){ echo "checked"; } ?>
                                                 />
                                                <?= $seasonallist['seasonal']; ?>
                                            </div>
                                            
                                        <?php
                                    }
                                }
                                else
                                {
                                    echo "No price categories Found";
                                }
                            ?>    
                        </div>
                    </div>
                </form>
            </div>

            <!-- Brand Items - Products -->
            <div class="col-md-9 mt-3">
                <div class="card ">
                    <div class="card-body row">
                        <?php
                            if(isset($_GET['countries']))
                            {
                                $destinationchecked = [];
                                $destinationchecked = $_GET['countries'];
                                foreach($destinationchecked as $rowdestination)
                                {
                                    // echo $rowbrand;
                                    $destinations = "SELECT * FROM destinations WHERE destination_id IN ($rowdestination)";
                                    $destinations_success = mysqli_query($con, $destinations);
                                    if(mysqli_num_rows($destinations_success) > 0)
                                    {
                                        foreach($destinations_success as $destinationitems) :
                                            ?>
                                                <div class="loading-overlay" style="display: none;"><div class="overlay-content">Loading.....</div></div>
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Destination</th>
                                                            <th>Country</th>
                                                            <th>Price category</th>
                                                            <th>Price</th>
                                                            <th>Seasonal</th>
                                                            <th>Link</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="userData">		
                                                                <tr>
                                                                <td><?php echo $destinationitems['name'];?></td>
                                                                <td><?php echo $destinationitems['country'];?></td>
                                                                <td><?php echo $destinationitems['price_cat'];?></td>
                                                                <td><?php echo $destinationitems['price'];?></td>
                                                                <td><?php echo $destinationitems['seasonal'];?></td>
                                                                <td><a href="<?php echo $destinationitems['link'];?>" class="btn" role="button" aria-pressed="true" style="background-color:#4f7fa3; color:white;">Visit</a>
                                                                </td>
                                                                </tr>
                                                                
                                                    </tbody>
                                                        </table>	
                                                    </div>
                                            <?php
                                        endforeach;
                                    }
                                }
                            } if(isset($_GET['prices']))
                            {
                                $destinationchecked = [];
                                $destinationchecked = $_GET['prices'];
                                foreach($destinationchecked as $rowdestination)
                                {
                                    // echo $rowbrand;
                                    $destinations = "SELECT * FROM destinations WHERE destination_id IN ($rowdestination)";
                                    $destinations_success = mysqli_query($con, $destinations);
                                    if(mysqli_num_rows($destinations_success) > 0)
                                    {
                                        foreach($destinations_success as $destinationitems) :
                                            ?>
                                                <div class="loading-overlay" style="display: none;"><div class="overlay-content">Loading.....</div></div>
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Destination</th>
                                                            <th>Country</th>
                                                            <th>Price category</th>
                                                            <th>Price</th>
                                                            <th>Seasonal</th>
                                                            <th>Image</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="userData">		
                                                        <?php			
                                                            echo '
                                                                <tr>
                                                                <td>'.$destinationitems['name'].'</td>
                                                                <td>'.$destinationitems['country'].'</td>
                                                                <td>'.$destinationitems['price_cat'].'</td>
                                                                <td>'.$destinationitems['price'].'</td>
                                                                <td>'.$destinationitems['seasonal'].'</td>
                                                                <td>'.$destinationitems['image'].'</td>
                                                                </tr>';
                                                                ?>
                                                    </tbody>
                                                        </table>	
                                                    </div>
                                            <?php
                                        endforeach;
                                    }
                                }
                            } if(isset($_GET['seasonal']))
                            {
                                $destinationchecked = [];
                                $destinationchecked = $_GET['seasonal'];
                                foreach($destinationchecked as $rowdestination)
                                {
                                    // echo $rowbrand;
                                    $destinations = "SELECT * FROM destinations WHERE destination_id IN ($rowdestination)";
                                    $destinations_success = mysqli_query($con, $destinations);
                                    if(mysqli_num_rows($destinations_success) > 0)
                                    {
                                        foreach($destinations_success as $destinationitems) :
                                            ?>
                                                <div class="loading-overlay" style="display: none;"><div class="overlay-content">Loading.....</div></div>
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Destination</th>
                                                            <th>Country</th>
                                                            <th>Price category</th>
                                                            <th>Price</th>
                                                            <th>Seasonal</th>
                                                            <th>Learn more</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="userData">		
                                                        <?php			
                                                            echo '
                                                                <tr>
                                                                <td>'.$destinationitems['name'].'</td>
                                                                <td>'.$destinationitems['country'].'</td>
                                                                <td>'.$destinationitems['price_cat'].'</td>
                                                                <td>'.$destinationitems['price'].'</td>
                                                                <td>'.$destinationitems['seasonal'].'</td>
                                                                <td>'.$destinationitems['image'].'</td>
                                                                </tr>';
                                                                ?>
                                                    </tbody>
                                                        </table>	
                                                    </div>
                                            <?php
                                        endforeach;
                                    }
                                }
                            }
                            if(isset($_GET['seasonal']) == "false" && (isset($_GET['country'])== "false"))
                                {
                                    echo "No Items Found";
                                }
                            
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>