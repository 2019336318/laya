<?php

    $conf =$db->fetchone('conf');
    // pre($conf);
    $smarty->assign('conf',$conf);
	$smarty->display('home/footer.tpl');