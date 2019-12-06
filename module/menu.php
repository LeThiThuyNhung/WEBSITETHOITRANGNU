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
<div class="clr"></div>
<div class="menu">
	<ul class="menucap0">
		<li><a href="index.php">Trang chủ</a></li>
		<li class="divider"></li>
		<li><a href="">Sản phẩm</a>
			<ul class="menucap1">
				<li><a href="">ÁO</a>
					<ul class="menucap2">
						<?php
                			while($dong_sp=mysql_fetch_array($query))
                			{
            			?>
                		<li><a href="index.php?xem=sp&maloaisp=<?php echo $dong_sp['MALOAI']?>"><?php echo $dong_sp['TENLOAI']?></a></li>
            			<?php
                			}
            			?>
					</ul>
				</li>
				<li><a href="">CHÂN VÁY</a>
                    <ul class="menucap2">
                        <?php
               				while($dong_sp=mysql_fetch_array($query1))
                			{
            			?>
                		<li><a href="index.php?xem=sp&maloaisp=<?php echo $dong_sp['MALOAI']?>"><?php echo $dong_sp['TENLOAI']?></a></li>
            			<?php
                			}
            			?>
                    </ul>
				</li>
				<li><a href="">ĐẦM</a>
                    <ul class="menucap2">
                        <?php
                			while($dong_sp=mysql_fetch_array($query2))
                			{
            			?>
                		<li><a href="index.php?xem=sp&maloaisp=<?php echo $dong_sp['MALOAI']?>"><?php echo $dong_sp['TENLOAI']?></a></li>
           				 <?php
                			}
            			?>
                    </ul>
                </li>
                <li><a href="">QUẦN</a>
                    <ul class="menucap2">
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
			</ul>
        </li>
		<li class="divider"></li>
		<li><a href="index.php?xem=gt">Giới thiệu</a></li>
		<li class="divider"></li>
		<li><a href="module/center/lienhe.php">Liên hệ</a></li>
     	<div>
        <form action="index.php" method="post" enctype="multipart/form-data">
			<div class = "search">
				<input type="search" id="search" name="searchtext" placeholder="Tìm kiếm sản phẩm..." />
                <input type="submit" id="searchbtn" name="search" value="Tìm kiếm"/>
			</div>
        </form>
		</div>
	</ul>
</div>