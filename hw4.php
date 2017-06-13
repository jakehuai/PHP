<?php
$month=$_GET["month"];


$datetime = new Datetime("now",new DateTimeZone('Asia/Taipei')); 

$s_date="now";

	echo "current time:"."</br>";
	echo $datetime->format("H:i:s")."</br>";
	echo $datetime->format("T")."</br>";
	echo "current date:"."</br>";
	echo $datetime->format('Y-m-d')."</br>";
	echo "2017年12月31日是世界末日，還距離現在相差:";

$second1=floor((strtotime($e_date)-strtotime($s_date)));
	echo floor($second1/86400).'day';
	echo floor(($second1%86400)/3600).'hour';
	echo floor((($second1%86400)%3600)/60).'minute';
	echo floor((($second1%86400)%3600)%60)."second<br>";
	
		switch ($month) {
		case "1月":
			echo "January<br>";
			echo "<body background='http://www.cciweb.org.uk/wp-content/uploads/2016/01/january750x295.jpg'>";
			break;

		case "2月":
			echo "February<br>";
			echo "<body background='http://3.bp.blogspot.com/-looQ09S5_Sw/URUpDOG2lHI/AAAAAAAABiU/qoDoair2WrA/s1600/DJI_Whimzee_Feb_February.jpg'>";
			break;

		case "3月":
			echo "March<br>";
			echo "<body background='https://az616578.vo.msecnd.net/files/2016/03/21/635941214149302934907038437_March.jpg'>";
			break;

		case "4月":
			echo "April<br>";
			echo "<body background='https://c.tadst.com/gfx/750w/the-month-april.jpg?1'>";
			break;

		case "5月":
			echo "May<br>";
			echo "<body background='https://c.tadst.com/gfx/750w/the-month-may.jpg?1'>";
			break;

		case "6月":
			echo "June<br>";
			echo "<body background='https://c.tadst.com/gfx/750w/the-month-june.jpg?1'>";
			break;

		case "7月":
			echo "July<br>";
			echo "<body background='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQOROambExMoha4CCoTRndOljhc3zZcgOL87pex8HDwyVUxB6lF'>";
			break;

		case "8月":
			echo "August<br>";
			echo "<body background='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTV5PVRIUAgh85qMJzQ7NEc_pc_bxTMYp2vRdMp7F51EPJx30B7'>";
			break;

		case "9月":
			echo "September<br>";
			echo "<body background='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQT_7hEduxEzIclBsHxUTzmAEU3u8R5IH1GLLLslVI2gKoBMely7w'>";
			break;

		case "10月":
			echo "October<br>";
			echo "<body background='https://woodstocknbrecreation.files.wordpress.com/2016/09/october.jpg'>";
			break;

		case "11月":
			echo "November<br>";
			echo "<body background='http://chezwawa.com/images/news/25-1477602712.jpg'>";
			break;

		default:
			echo "December<br>";
			echo "<body background='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTgotK1PQ--aLhmqjQZRrrflJiLFFniFaaOvJ-d3MVbdXU_Qr9rkQ'>";
			break;
		
}

?>
