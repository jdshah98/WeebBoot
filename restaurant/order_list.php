﻿<!doctype html>
<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Food Delivery System | Restaurant</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet" />

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet" />


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />
    <script src="https://www.gstatic.com/firebasejs/5.5.3/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.5.3/firebase-database.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.5.3/firebase-functions.js"></script>


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
        .form-group.required .control-label:after {
            content: "*";
            color: red;
        }
    </style>
</head>
<body>
    <div class="wrapper">

        <div class="sidebar" data-color="purple" data-image="./assets/img/sidebar-5.jpg">
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="#" class="simple-text">
                        Food Delivery System
                    </a>
                </div>

                <ul class="nav">
                    <li>
                        <a href="dashboard.html">
                            <i class="pe-7s-graph"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="add_items.html">
                            <i class="pe-7s-news-paper"></i>
                            <p>Add New Items</p>
                        </a>
                    </li>
                    
                    
                    <li>
                        <a href="./php/list_items.php">
                            <i class="pe-7s-notebook"></i>
                            <p>List Items </p>
                        </a>
                    </li>

                    <li class="active">
                        <a href="order_list.php">
                            <i class="pe-7s-notebook"></i>
                            <p>Order List </p>
                        </a>
                    </li>

                </ul>
            </div>
        </div>

        <div class="main-panel">
            <nav class="navbar navbar-default navbar-fixed">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">User</a>
                    </div>
                </div>
            </nav>

			<div class="content">

                <div class="container-fluid">

                    <div class="card">

                        <table class="table table-hover table-striped " id="table-int">
                            <thead>
                                <tr>
                                    <td>Customer</td>
                                    
                                    <td>food</td>
                                    <td>Quantity</td>
                                   
                                </tr>
                            </thead>
                            <tbody id="int-tbody">
                               <?php

                                $rid = $_SESSION['rid'];
                                require './php/connection.php';
                                $stmt = "select * from cart where rid = " . $rid;
                                $result = mysqli_query($conn, $stmt);
                                while ($row = mysqli_fetch_row($result)) {
                                    $id = $row[0];
                                    $cid = $row[1];
                                    $rid = $row[2];
                                    $fid = $row[3];
                                    $qty = $row[4];
									
                                    $stmt1 = "select cName from customer where cid = " . $cid;
									$result1 = mysqli_query($conn, $stmt1);
									$row1 = mysqli_fetch_row($result1);
									$customer=$row1[0];
									$stmt1 = "select name from food where fid = " . $fid;
									$result1 = mysqli_query($conn, $stmt1);
									$row1 = mysqli_fetch_row($result1);
									$food=$row1[0];
                                    echo '
                                    <tr>
                                        
                                        <td>' . $customer . '</td>
                                        <td>' . $food . '</td>
                                        <td>' . $qty . '</td>
                                     </tr>';
                                }
                                ?>
                            </tbody>
                        </table>

                    </div>

                </div>

            </div>
			        </div>
    </div>




</body>

</html>
