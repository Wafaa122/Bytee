﻿
<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$hostname = "localhost";
$db_username = "root";
$dbpassword = "";
$databaseName = "Baytee";

$connection = mysqli_connect($hostname,$db_username,$dbpassword,$databaseName);
$query = "select * from admin ";
mysqli_query($connection,"SET CHARACTER SET utf8");
 $result= mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($result);

?>


<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
		<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Web development project</title>
     <link href="css1/styles.css" rel="stylesheet" type="text/css">
	<link href="css1/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css1/core.css" rel="stylesheet" type="text/css">
	<link href="css1/components.css" rel="stylesheet" type="text/css">	
	<script type="text/javascript" src="js1/jquery.min.js"></script>
	<script type="text/javascript" src="js1/bootstrap.min.js"></script>	
	<script type="text/javascript" src="js1/app.js"></script>
    <script type="text/javascript" src="js1/datatables/datatables.min.js"></script>
    <script type="text/javascript" src="js1/datatables_advanced.js"></script>



</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-inverse">
		<div class="navbar-header">
			<!--<a class="navbar-brand" href="index.html"><img src="img/logo_light.png" alt=""></a>-->

			<ul class="nav navbar-nav visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				<li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>				
			</ul>
			<div class="navbar-right">
				<ul class="nav navbar-nav">
					

					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="icon-bubbles4"></i>
							<span class="visible-xs-inline-block position-right"></span>
							<span class="badge bg-warning-400">2</span>
						</a>
						
						<div class="dropdown-menu dropdown-content width-350">
							<div class="dropdown-content-heading">
								Messages
								<ul class="icons-list">
									<li><a href="#"><i class="icon-compose"></i></a></li>
								</ul>
							</div>

							<ul class="media-list dropdown-content-body">
								<li class="media">
									<div class="media-left">
										<img src="img/placeholder.jpg" class="img-circle img-sm" alt="">
										<span class="badge bg-danger-400 media-badge">5</span>
									</div>

									<div class="media-body">
										<a href="#" class="media-heading">
											<span class="text-semibold">سهاد نصار  </span>
											<span class="media-annotation pull-right">04:58</span>
										</a>

										<span class="text-muted">أرسلت رسالة للموقع .........</span>
									</div>
								</li>

								<li class="media">
									<div class="media-left">
										<img src="img/placeholder.jpg" class="img-circle img-sm" alt="">
										<span class="badge bg-danger-400 media-badge">4</span>
									</div>

									<div class="media-body">
										<a href="#" class="media-heading">
											<span class="text-semibold">إسراء عبد الهادي </span>
											<span class="media-annotation pull-right">12:16</span>
										</a>

										<span class="text-muted">أرسلت رسالة للموقع .........</span>
									</div>
								</li>

								<li class="media">
									<div class="media-left"><img src="img/placeholder.jpg" class="img-circle img-sm" alt=""></div>
									<div class="media-body">
										<a href="#" class="media-heading">
											<span class="text-semibold"> سماح أبو خضرة</span>
											<span class="media-annotation pull-right">22:48</span>
										</a>

										<span class="text-muted">أرسلت رسالة للموقع ..........</span>
									</div>
								</li>

								<li class="media">
									<div class="media-left"><img src="img/placeholder.jpg" class="img-circle img-sm" alt=""></div>
									<div class="media-body">
										<a href="#" class="media-heading">
											<span class="text-semibold">Beatrix وفاء أبو دحروج</span>
											<span class="media-annotation pull-right">Tue</span>
										</a>

										<span class="text-muted">أرسلت رسالة للموقع ..........</span>
									</div>
								</li>

								<li class="media">
									<div class="media-left"><img src="img/placeholder.jpg" class="img-circle img-sm" alt=""></div>
									<div class="media-body">
										<a href="#" class="media-heading">
											<span class="text-semibold">أحلام لبد </span>
											<span class="media-annotation pull-right">Mon</span>
										</a>
										
										<span class="text-muted">أرسلت رسالة للموقع ..........</span>
									</div>
								</li>
                                <li class="media">
                                    <div class="media-left"><img src="img/placeholder.jpg" class="img-circle img-sm" alt=""></div>
                                    <div class="media-body">
                                        <a href="#" class="media-heading">
                                            <span class="text-semibold">ألاء أبو قينص  </span>
                                            <span class="media-annotation pull-right">Mon</span>
                                        </a>

                                        <span class="text-muted">أرسلت رسالة للموقع ..........</span>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-left"><img src="img/placeholder.jpg" class="img-circle img-sm" alt=""></div>
                                    <div class="media-body">
                                        <a href="#" class="media-heading">
                                            <span class="text-semibold">إسلام أبو عطيوي  </span>
                                            <span class="media-annotation pull-right">Mon</span>
                                        </a>

                                        <span class="text-muted">أرسلت رسالة للموقع ..........</span>
                                    </div>
                                </li>
							</ul>

							<div class="dropdown-content-footer">
								<a href="#" data-popup="tooltip" title="All messages"><i class="icon-menu display-block"></i></a>
							</div>
						</div>
					</li>

					<li class="dropdown dropdown-user">
						<a class="dropdown-toggle" data-toggle="dropdown">
							<img src="img/placeholder.jpg" alt="">
							<span>مدير الموقع </span>
							<i class="caret"></i>
						</a>

						<ul class="dropdown-menu dropdown-menu-right">
						  <li><a href="Account.php"><i class="icon-cog5"></i> تغيير كلمة المرور</a></li>

                            <li class="divider"></li>
							<li><a href="logout.php"><i class="icon-switch2"></i> تسجيل الخروج</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<div class="sidebar sidebar-main">
				<div class="sidebar-content">

					<!-- User menu -->
					<div class="sidebar-user">
						<div class="category-content">
							<div class="media">
								<a href="#" class="media-left"><img src="img/placeholder.jpg" class="img-circle img-sm" alt=""></a>
								<div class="media-body">
									<span class="media-heading text-semibold">مدير الموقع </span>
									<div class="text-size-mini text-muted">
										<i class="icon-pin text-size-small"></i> &nbsp; غزة, فلسطين
									</div>
								</div>

								
							</div>
						</div>
					</div>
					<!-- /user menu -->


					<!-- Main navigation -->
                    <div class="sidebar-category sidebar-category-visible">
                        <div class="category-content no-padding">
                            <ul class="navigation navigation-main navigation-accordion">
                                <!-- Main -->
                                <li><a href="#"><i class="icon-home4"></i> <span>الصفحة الرئيسية</span></a></li>

                                <li>
                                    <a href="#"><i class="icon-stack3"></i> <span>المنتجات </span></a>
                                    <ul>
                                        <li><a href="Category.php">إضافة أصناف<i class="icon-folder-plus"></i></a></li>
                                        <li><a href="AddProducts.php">إضافة منتج جديد<i class="icon-stack-plus"></i> </a></li>
                                        <li><a href="Productlist.php"><i class="icon-list2"></i>عرض المنتجات  </a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-users"></i> <span>الزبائن </span></a>
                                    <ul>
                                        <li><a href="userList.php"> <i class="icon-list"></i>  عرض مشتريات الزبائن</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-link"></i> <span>العروض الترويجية </span></a>
                                    <ul>
                                        <li><a href="AddPromotions.php">إضافة عرض خصم <i class="icon-plus-circle2"></i> </a></li>
                                        <li><a href="Promotionlist.php">إدارة الخصومات <i class="icon-checkbox-checked2"></i> </a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-file-empty2"></i> <span>المقالات </span></a>
                                    <ul>
                                        <li><a href="AddBlog.php"><i class="icon-file-plus2"></i>إضافة مقال جديد </a></li>
                                        <li><a href="Bloglist.php"><i class="icon-library2"></i>عرض المقالات </a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#"><i class="icon-mail5"></i> <span>رسائل تواصل معنا  </span></a>
                                    <ul>

                                        <li><a href="ContactList.php"> <i class="icon-insert-template"></i>عرض الرسائل</a></li>
                                    </ul>
                                </li>


                            </ul>
                        </div>
                    </div>
					<!-- /main navigation -->

				</div>
			</div>
			<!-- /main sidebar -->


			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header page-header-default">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-right6 position-left"></i> 
                               تغيير كلمة المرور
                                </h4>
						</div>

						
					</div>

					
				</div>
				<!-- /page header -->


				<!-- Content area -->
                <div class="panel col-md-8 col-md-offset-2">

                    <div class=" panel-body">
                  

                            <div class="row">
							<form action="update.php" method="POST">
                                <div class="col-lg-12">
                                    <div class="form-group">
									<?php   If(isset($_GET['error']) && $_GET['error'] == 1){ ?>
										<center><br /><font  color="#FF0000">أعد كتابة كلمة المرور </font><br /> <br/>  </center>
												<?php } ?>
                                        <label  class="col-sm-2">  كلمة المرور الحالية</label>
                                        <div class="col-sm-4">
                                            <input name="oldpass" type="text" class="form-control" value="<?php echo $row['password'];?>" />

                                        </div>
                                       
                                       
                                       
                                    </div>
                                </div>
                              
                               
                            </div>
                        <br />
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="col-sm-2">  كلمة المرور الجديدة</label>
                                    <div class="col-sm-4">
                                        <input type="password"  name ="Newpass"class="form-control" />

                                    </div>



                                </div>
                            </div>


                        </div>
                        <br />
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="col-sm-2"> تأكيد كلمة المرور </label>
                                    <div class="col-sm-4">
                                        <input type="password" name ="Newpass1"class="form-control" />

                                    </div>
                            


                                </div>
                            </div>


                        </div>
                        <br />
                     <div class="row">
                         <div class="col-sm-3 col-sm-offset-4">
                             <input type="submit"name="submit" value="تغيير كلمة المرور" class="btn btn-success">
								 </form>
                         </div>
                     </div>
					 

                            

                    </div>
                    

                </div>

				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>
</html>
