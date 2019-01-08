<?php

function check_session()
{
    if(!isset($_SESSION['userdata']))
    {
        redirect('login');
    }
    else
    {

       if(isset($_SESSION['userdata']->id_member))
       {
         $_SESSION['userdata']->level = 0;
       }
       if(isset($_SESSION['userdata']->id_user))
       {
        $_SESSION['userdata']->level = 1;
       }
    }
  

}

function base_foto()
{
    return base_url('img/barang/');
}

function base_fotointf()
{
    return base_url('img/');
}

function base_fotobukti()
{
    return base_url('img/bukti_transaksi/');
}


?>
