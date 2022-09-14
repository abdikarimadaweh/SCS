<html>
    <head>
        <title>Smart Customer Serivce System - Miantian</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>

    <body>
        <div class="container box">
            <h3 align="center">Backend Managment</h3><br>
            <div class="responsive_table">
                <table id="item_list" class="table table-bordered table-striped">
					<h3>Item table for mangment</h3>
                    <thead>
                        <th>Item ID</th>
                        <th>Item Name</th>
                        <th>Item Price</th>
                        <th>Made In</th>
                        <th>Department Code</th>
                    </thead>
                    <tbody></tbody>
                </table>
                <br>
                <br>
            </div>

            <div class="responsive_table">
                <table id="uset_list" class="table table-bordered table-striped">
					<h3>User table for mangment</h3>
                    <thead>
                        <th>User ID</th>
                        <th>User Name</th>
                        <th>User Email</th>
                        <th>User Address</th>
                        <th>City Code</th>
                        <th>Password</th>
                    </thead>
                    <tbody></tbody>
                </table>
                <br>
                <br>
            </div>
			
			<div class="responsive_table">
                <table id="order_list" class="table table-bordered table-striped">
					<h3>Order table for mangment</h3>
                    <thead>
                        <th>Order ID</th>
                        <th>Date Issue</th>
                        <th>Date Resceived</th>
                        <th>Total Price</th>
                        <th>Payment Code</th>
                    </thead>
                    <tbody></tbody>
                </table>
                <br>
                <br>
            </div>
			
			<div class="responsive_table">
                <table id="trip_list" class="table table-bordered table-striped">
					<h3>Trip table for mangment</h3>
                    <thead>
                        <th>Trip ID</th>
                        <th>Source Code</th>
                        <th>Destination Code</th>
                        <th>Distance</th>
                        <th>Truck ID</th>
						<th>Trip Price</th>
                    </thead>
                    <tbody></tbody>
                </table>
                <br>
                <br>
            </div>
			
			<div class="responsive_table">
                <table id="ttruck_list" class="table table-bordered table-striped">
					<h3>Truck table for mangment</h3>
                    <thead>
                        <th>Truck ID</th>
                        <th>Truck Code</th>
                        <th>Availability Code</th>
                    </thead>
                    <tbody></tbody>
                </table>
                <br>
                <br>
            </div>
			
			<div class="responsive_table">
                <table id="shopping_list" class="table table-bordered table-striped">
					<h3>Shopping table for mangment</h3>
                    <thead>
                        <th>Receipt ID</th>
                        <th>Store Code</th>
                        <th>Total Price</th>
                    </thead>
                    <tbody></tbody>
                </table>
                <br>
                <br>
            </div>

        </div>
    </body>
</html>

<script type="text/javascript" language="javascrpit">
    $(document).ready(function(){
        var itemTable = $('#itemTable').DataTable({
            "processing": true,
            "serverSide": true,
            "item": [],
            "ajax": {
                url:"fetch.php",
                type:"POST"
            },
            drawCallback: function(settings){
                $('#total_order').html(settings.json.total);
            }
        });
    });
</script>