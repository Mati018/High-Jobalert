<style>
  @media (min-width: 68px) {
  .col-mdd-4 {
    -ms-flex: 0 0 33.333333%;
        flex: 0 0 50%;
    max-width: 50%;
  }
  .col-md-8 {
    -ms-flex: 0 0 66.666667%;
        flex: 0 0 66.666667%;
    max-width: 66.666667%;
  }
}
  .col-md-4, .col-md-8{
  position: relative;
  width:100%;
  min-height: 1px;
  padding-right: 15px;
  padding-left: 15px;
}
</style>
<div class="row">
<div class="col-mdd-4">
    <div class="card mb-4">
    <h5 class="card-header">Admit Cards</h5>
        <div class="card-body">
            <ul class="mb-0">
<?php
$query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.CategoryId=25 and tblposts.Is_Active=1 limit 8");
while ($row=mysqli_fetch_array($query)) {

?>

  <li>
                      <a href="job-details.php?nid=<?php echo htmlentities($row['pid'])?>"><?php echo htmlentities($row['posttitle']);?></a>
                    </li>
            <?php } ?>
          </ul>
        </div>
    </div>
</div>

<div class="col-mdd-4">
    <div class="card mb-4">
    <h5 class="card-header">Results</h5>
        <div class="card-body">
            <ul class="mb-0">
<?php
$query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.CategoryId=12 and tblposts.Is_Active=1 limit 8");
while ($row=mysqli_fetch_array($query)) {

?>

  <li>
                      <a href="job-details.php?nid=<?php echo htmlentities($row['pid'])?>"><?php echo htmlentities($row['posttitle']);?></a>
                    </li>
            <?php } ?>
          </ul>
        </div>
    </div>
</div>

</div>