<?php
	$sql_dm="SELECT MALOAI, TENLOAI FROM loaisp where TENLOAI like 'Áo%'";
	$query=mysql_query($sql_dm);
?>
<?php
	$sql_dm1="SELECT MALOAI, TENLOAI FROM loaisp where TENLOAI like 'Chân váy%'";
	$query1=mysql_query($sql_dm1);
?>
<?php
	$sql_dm2="SELECT MALOAI, TENLOAI FROM loaisp where TENLOAI like 'Đầm%'";
	$query2=mysql_query($sql_dm2);
?>
<?php
	$sql_dm3="SELECT MALOAI, TENLOAI FROM loaisp where TENLOAI like 'Quần%'";
	$query3=mysql_query($sql_dm3);
?>
<div class="title_box"><a href="">DANH MỤC</a>
	<li><a href="">ÁO</a>
		<ul class="menucap1">
			<?php
                while($dong_sp=mysql_fetch_array($query))
                {
            ?>
                <li><a href="index.php?xem=sp&maloaisp=<?php echo $dong_sp['MALOAI']?>"><?php echo $dong_sp
                ['TENLOAI']?></a></li>
            <?php
                }
            ?>
		</ul>
	</li>
	<li><a href="">CHÂN VÁY</a>
		<ul class="menucap1">
            <?php
                while($dong_sp=mysql_fetch_array($query1))
                {
            ?>
                <li><a href="index.php?xem=sp&maloaisp=<?php echo $dong_sp['MALOAI']?>"><?php echo $dong_sp
                ['TENLOAI']?></a></li>
            <?php
                }
            ?>
		</ul>
	</li>
	<li><a href="">ĐẦM</a>
    	<ul class="menucap1">
            <?php
                while($dong_sp=mysql_fetch_array($query2))
                {
            ?>
                <li><a href="index.php?xem=sp&maloaisp=<?php echo $dong_sp['MALOAI']?>"><?php echo $dong_sp
                ['TENLOAI']?></a></li>
            <?php
                }
            ?>
    	</ul>
    </li>
	<li><a href="">QUẦN</a>
		<ul class="menucap1">
			<?php
                while($dong_sp=mysql_fetch_array($query3))
                {
            ?>
                <li><a href="index.php?xem=sp&maloaisp=<?php echo $dong_sp['MALOAI']?>"><?php echo $dong_sp
                ['TENLOAI']?></a></li>
            <?php
                }
            ?>
		</ul>
	</li>
</div>