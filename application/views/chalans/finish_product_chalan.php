<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.ico">
    
    <title> Chalan </title>

    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="<?=base_url()?>assets/plugin/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/jquery.dataTables.min.css"/>
 
    <link rel="stylesheet" href="<?=base_url()?>assets/css/responsive.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/stylesheet.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style>
      .action{ margin:0px 2px; }
  </style>


</head>

<?php   $user_info = $this->session->userdata('user_info');?>  

<body class="hold-transition">
    <!-- Site wrapper -->
    <div class="wrapper">

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->



             <section class="content">
                <div class="container pt-3 pb-3" style="background-color:#ffffff;">
                <div class="row">
                     <div class="col-xl-12 col-12">
                    <?php
                            if($chalan['status']=='unverified'){
                                echo '<div class="alert alert-warning">This Chalan is Unverified ! </div>';
                            }else{
                                echo '<div class="alert alert-success">This Chalan is Verified ! </div>';
                            }

                    ?>
                    </div>
                    <div class="col-xl-12 col-12 pr-0 text-center">
                        <div class="">
                            <h2>Anjum Metal Ind.</h2>
                            <h4> Finish Product chalan </h4>
                        </div>
                    </div>
                    <div class="col-xl-12 col-12 ">
                        

                        <div class="row">
                            <div class="col"><hr/></div>                          
                        </div>
                        <div class="row">
                            <div class="col">Chalan No: <b><?=$chalan['chalan_no']?></b> </div>
                            <div class="col text-right">Date: <b><?=date('d-m-Y',strtotime($chalan['chalan_date']))?></b></div>
                        </div>
                        
                        <div class="row">
                            <div class="col"><hr/></div>                          
                        </div>
                    </div>

                    <div class="col-xl-12 col-12">
                       
                        <div class="row">
                            <div class="col-xl-12 col-12">
                                <table class="table">
                                    <thead>
                                        <th>Sl.</th>
                                        <th>Item</th>
                                        <th>Qty</th>
                                        <th>Price</th>
                                        <th  class="text-right">Weight</th>
                                        <th class="text-right">Subtotal</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $total =0;
                                        $totWht=0;
                                            if(!empty($items)){
                                                foreach($items as $key=>$val){
                                                    echo '<tr>';
                                                    echo '<td>'.++$key.'</td>';
                                                    echo '<td>'.get_product($val['product_id'])['product_name'].'</td>';
                                                    echo '<td>'.$val['qty'].'</td>';
                                                    echo '<td>'.$val['price'].'</td>';


                                                    $wht =  floatval($val['weight']);
                                                      if($wht > 0.00){
                                                        $sub =  $val['qty'] * $wht;
                                                      }else{
                                                        $sub = $val['qty'] * 1;
                                                      }
                                                      echo '<td class="text-right">'.$sub.'</td>';
                                                      $totWht += $sub;
                                                    

                                                    echo '<td class="text-right">'.$val['subtotal'].'</td>';
                                                    echo '</tr>';
                                                    $total += floatval($val['subtotal']);


                                                }

                                                echo '<tr><td colspan="5" class="text-right">'.$totWht.'</td><td class="text-right bg-default">'.$val['subtotal'].'</td></tr>';
                                            }
                                        ?>
                                    </tbody>

                                </table>
                                
                            </div>
                        </div>
                        
                    </div>



                </div>
            </div>
            </section>    







            <!-- /.content -->

        </div>

        <!-- /.content-wrapper -->



    </div>

    <!-- ./wrapper -->

    <script>

        var url = '<?=base_url()?>';

     </script>   

    <!-- jQuery 3 -->

    <script src="<?=base_url()?>assets/plugin/jquery/dist/jquery.min.js"></script>



    <!-- popper -->

    <script src="<?=base_url()?>assets/plugin/popper/dist/popper.min.js"></script>



    <!-- Bootstrap 4.0-->

    <script src="<?=base_url()?>assets/plugin/bootstrap/js/bootstrap.min.js"></script>

    <script src="<?=base_url()?>assets/js/jquery.dataTables.min.js"></script>




</body>



</html>