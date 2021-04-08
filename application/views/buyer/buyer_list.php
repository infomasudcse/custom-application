<?php  $this->load->view('inc/header'); ?>
<style>
    .focustd{ font-size:16px;}
    
</style>
            <section class="content-header">

                <h1>

                    Buyer List

                </h1>

                <ol class="breadcrumb">

                    <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>

                    <li class="breadcrumb-item active"><a href="#">Buyer</a></li>

                </ol>

            </section>



            <!-- Main content -->

            <section class="content">

                <div class="row">

                    <div class="col-xl-12 col-12 pr-0">

                        <div class="">

                            <?php 

                                    $alert = $this->session->flashdata('alert');

                                    $alert_type = $this->session->flashdata('alert_type');

                                    

                                if($alert!=''){

                                    echo '<div class="'.$alert_type.'">'.$alert.'</div>';

                                }

                            ?>

                        </div>

                        <!-- /.box -->

                    </div>

                    <div class="col-xl-12 col-12 pr-0">

                      

                        <div class="box box-body">

                            <div class="row">

                                <div class="col-sm-6">

                                     <h3>Buyer</h3>

                                 </div>

                                 <div class="col-sm-6">

                                     <a href="<?=base_url('new_add/people')?>" class="btn btn-sm pull-right btn-primary">Add New Buyer</a>

                                     <a href="<?=base_url('new_add/buyer_old_balance')?>" class="btn btn-sm pull-right btn-warning" style="margin:0px 10px" >Add Old Balance</a>

                                 </div>

                             </div>   

                            <table id="buyer_list" class="display table table-bordered" cellspacing="0" width="100%">

                                <thead>

                                    <tr>

                                        <th>Relation Start</th>

                                        <th>Full Name</th>

                                        <th>Mobile</th>

                                        <th>Address</th>
                                        <th>Balance</th> 

                                        <th>Status</th>                                      

                                        <th>Action.</th>                                        

                                    </tr>

                                </thead>

                               

                        </table>

                        </div>

                        <!-- /.box -->

                    </div>

                </div>

            </section>



<?php  $this->load->view('inc/footer'); ?>



            