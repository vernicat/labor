<?php
if($total > 1):
	#две назад
	if(($p - 2) > 0):
	  $ptwoleft = "<a class='first_page_link' href='?p=".($p - 2)."'>".($p - 2)."</a>  ";
	else:
	  $ptwoleft = null;
	endif;
			
	#одна назад
	if(($p - 1) > 0):
	  $poneleft = "<a class='first_page_link' href='?p=".($p - 1)."'>".($p - 1)."</a>  ";
	  $ptemp = ($p - 1);
	else:
	  $poneleft = null;
	  $ptemp = null;
	endif;
			
	#две вперед
	if(($p + 2) <= $total):
	  $ptworight = "  <a class='first_page_link' href='?p=".($p + 2)."'>".($p + 2)."</a>";
	else:
	  $ptworight = null;
	endif;
			
	#одна вперед
	if(($p + 1) <= $total):
	  $poneright = "  <a class='first_page_link' href='?p=".($p + 1)."'>".($p + 1)."</a>";
	  $ptemp2 = ($p + 1);
	else:
	  $poneright = null;
	  $ptemp2 = null;
	endif;		
			
	# в начало
	if($p!=1 && $ptemp!=1 && $ptemp!=2):
	  $prevp="<a href='/' class='first_page_link' title='В начало'>В начало</a> ";
	else:
	  $prevp=null;
	endif;   
			
	#в конец (последняя)
	if($p != $total && $ptemp2 != ($total - 1) && $ptemp2 != $total):
	  $nextp = " ...  <a href='?p=".$total."' class='first_page_link'>$total</a>";
	else:
	  $nextp = null;
	endif;
		
	print 	$prevp.
			$ptwoleft.
			$poneleft.
			'<span class="num_page_not_link"><b>'.$p.'</b></span>'.
			$poneright.
			$ptworight.
			$nextp;
	endif;
	mysql_close();
?>