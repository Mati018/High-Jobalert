<style>
  .navbar-navv {
	/* display: -ms-flexbox; */
	display: flex;
	-ms-flex-direction: column;
	flex-direction: column;
	padding-left: 0px;
	margin-left: 25px;
	list-style: none;
}
</style>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <!--<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">-->
        <!--  <span class="navbar-toggler-icon"></span>-->
        <!--</button>-->
        <div class="navbar" id="navbarResponsive">
          
            <li class="nav-item navbar-navv navbar-nav">
              <a class="nav-link" href="index.php">High Job Alert </a>
            </li>
            <li class="nav-item navbar-navv navbar-nav">
              <a class="nav-link" href="about-us.php"> About us</a>
            </li>
            <li class="nav-item navbar-navv navbar-nav">
              <a class="nav-link" href="contact-us.php">Contact us</a>
            </li>
          
        </div>
      </div>
    </nav>
    

     <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">
<?php $query=mysqli_query($con,"select id,CategoryName from tblcategory");
$x=0;
while($row=mysqli_fetch_array($query))
{
	if ($x==6) {
		break;
	}
?>
<li class="nav-item navbar-nav">
                      <a class="nav-link" href="category.php?catid=<?php echo htmlentities($row['id'])?>"><?php echo htmlentities($row['CategoryName']);?></a>
                      </li>
<?php
$x++;
} ?>

	<!-- <a href="#">Qualification</a>
	<a href="#">Teaching Jobs</a>
	<a href="#">Freelancing Jobs</a>
	<a href="#">Engineering Jobs</a>
	<a href="#">Railway Jobs</a>
	<a href="#">Police Jobs</a>
	<a href="#">Internship</a>
	<a href="#">Bank Jobs</a> -->
</div>
</nav>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
<div class="container">
<?php
$x=0;
while($row=mysqli_fetch_array($query))
{
	if ($x==8) {
		break;
	}
?>
<li class="nav-item navbar-nav">
                      <a class="nav-link" href="category.php?catid=<?php echo htmlentities($row['id'])?>"><?php echo htmlentities($row['CategoryName']);?></a>
                      </li>
<?php
$x++;
} ?>
</div>
</nav>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">
<?php
$x=0;
while($row=mysqli_fetch_array($query))
{
	if ($x==7) {
		break;
	}
?>
<li class="nav-item navbar-nav">
                      <a class="nav-link" href="category.php?catid=<?php echo htmlentities($row['id'])?>"><?php echo htmlentities($row['CategoryName']);?></a>
                      </li>
<?php
$x++;
} ?>
</div>
</nav>


