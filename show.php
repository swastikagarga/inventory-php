 <?php
$sesid=$_SESSION['userid'];


include('header.php');
include('conn.php');

$rs=mysqli_query($conn,"select count(*) as m from materials");
$row=mysqli_fetch_array($rs);
$res=mysqli_query($conn,"select count(*) as d from damage");
$row1=mysqli_fetch_array($res);
$resu=mysqli_query($conn,"select count(*) as u from users");
$row2=mysqli_fetch_array($resu);
$rsu=mysqli_query($conn,"select count(*) as i from issue");
$row3=mysqli_fetch_array($rsu);

$select_activity = "select * from activity order by id desc limit 3";
    $all_activity = mysqli_query($conn, $select_activity);
    

?>                
            
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">overview</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php echo $row['m']; ?></h2>
                                                <span>Total Stocks</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-shopping-cart"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php echo $row1['d']; ?></h2>
                                                <span>Damaged</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php echo $row2['u']; ?></h2>
                                                <span>Total Users</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-shopping-cart"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php echo $row3['i']; ?></h2>
                                                <span>Total Issued</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
								<div class="card">
									<div class="card-header">
										<strong class="card-title">Activities</strong>
									</div>
									<div class="card-body">
										<div class="sufee-alert alert with-close alert-primary alert-dismissible fade show">
                                            <span class="badge badge-pill badge-primary">Success</span>
                                            
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            
												<span aria-hidden="true">&times;</span>
											</button>
										</div>

										<div class="sufee-alert alert with-close alert-secondary alert-dismissible fade show">
											<span class="badge badge-pill badge-secondary">Success</span>
											You successfully read this important alert.
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>

										<div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
											<span class="badge badge-pill badge-success">Success</span>
											You successfully read this important alert.
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>

										
										<div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
											<span class="badge badge-pill badge-danger">Success</span>
											You successfully read this important alert.
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>

										<div class="sufee-alert alert with-close alert-warning alert-dismissible fade show">
											<span class="badge badge-pill badge-warning">Success</span>
											You successfully read this important alert.
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>

										<div class="sufee-alert alert with-close alert-info alert-dismissible fade show">
											<span class="badge badge-pill badge-info">Success</span>
											You successfully read this important alert.
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>

										<div class="sufee-alert alert with-close alert-light alert-dismissible fade show">
											<span class="badge badge-pill badge-light">Success</span>
											You successfully read this important alert.
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>

										<div class="sufee-alert alert with-close alert-dark alert-dismissible fade show">
											<span class="badge badge-pill badge-dark">Success</span>
											You successfully read this important alert.
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>

									</div>
								</div>

           