<?php 
$q=mysqli_query($conn,"select * from notice where user='".$_SESSION['user']."'");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red;margin-left: 390px;'>Result is not published yet !!!</h2>";
}
else
{
?>
<div style="width: 500px; height: auto;margin-left: 350px; margin-top:100px;">
<h2>Your results</h2>

<table class="table table-bordered">
	<Tr style="background-color: pink" class="success">
		<th>Sr.No</th>
		<th>Subject</th>
		<th>Details</th>
		<th>Date</th>
		</Tr>
		<?php

$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<Tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['subject']."</td>";
echo "<td>".$row['Description']."</td>";
echo "<td>".$row['Date']."</td>";

echo "</Tr>";
$i++;
}
		?>

</table>
</div>
<?php }?>
