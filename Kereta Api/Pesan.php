<?php
function hasil () {
    $nomor = $_POST ['nomor'];
    $nama = $_POST ['nama'];
    $tanggal = $_POST ['tanggal'];
    $tujuan = $_POST ['tujuan'];
    $surabaya;
    $yogyakarta;
    $jumlah = $_POST ['jumlah'];
    $kereta = $_POST ['kereta'];
    $turangga = 250000;
    $argowillis = 240000;
    $mutiaraselatan = 150000;
    $lodaya = 75000;
    $diskon;
    $total;
    error_reporting(0);

        //output program dan pemanggilan array
        foreach($nama as $key => $val) {
            ?>
                <table border="0" width="500" cellpadding="1" cellspacing="1">

                    <tr>
                        <td><?php echo '&nbsp NomorPemesan';?></td>
                        <td><?php echo '&nbsp : ';?></td>
                        <td><?php echo '&nbsp'.$nomor[$key];?></td>
                    </tr>

                    <tr>
                        <td><?php echo '&nbsp Nama Pemesan';?></td>
                        <td><?php echo '&nbsp : ';?></td>
                        <td><?php echo '&nbsp'.$nama[$key];?></td>
                    </tr>

                    <tr>
                        <td><?php echo '&nbsp Tanggal Berangkat';?></td>
                        <td><?php echo '&nbsp : ';?></td>
                        <td><?php echo '&nbsp'.$tanggal;?></td>
                    </tr>

                    <tr>
                        <td><?php echo '&nbsp Tujuan';?></td>
                        <td><?php echo '&nbsp : ';?></td>
                        <td><?php echo '&nbsp'.$tujuan;?></td>
                    </tr>

                    <tr>
                        <td><?php echo '&nbsp Jumlah Tiket';?></td>
                        <td><?php echo '&nbsp : ';?></td>
                        <td><?php echo '&nbsp'.$jumlah;?></td>
                    </tr>

                    <tr>
                        <td><?php echo '&nbsp Diskon';?></td>
                        <td><?php echo '&nbsp : ';?></td>
                        <td>
                            <?php
                            //menentukan diskon
                            if($kereta){
                                if($jumlah == ""){
                                    echo "Jumlah Tiket Belum Diisi";
                                }elseif($kereta == "Turangga"){
                                    $hasil = $turangga * $jumlah;
                                    $hasil;
                                }elseif($kereta == "Argo Willis"){
                                    $hasil = $argowillis * $jumlah;
                                    $hasil;
                                }elseif($kereta == "Mutiara Selatan"){
                                    $hasil = $mutiaraselatan * $jumlah;
                                    $hasil;
                                }elseif($kereta == "Lodaya"){
                                    $hasil = $lodaya * $jumlah;
                                    $hasil;
                                }

                                if($hasil >= 250000){
                                    $diskon = (20/100)*$hasil;
                                    $total = $hasil - $diskon;
                                    echo "&nbspPotongan diskon sebesar 20%";
                                }elseif($hasil >= 150000){
                                    $diskon = (10/100)*$hasil;
                                    $total = $hasil - $diskon;
                                    echo "&nbspPotongan diskon sebesar 10%";
                                }else{
                                    echo "&nbspAnda tidak mendapat potongan diskon";
                                }
                            }?>
                        </td>
                    </tr>

                    <tr>
                            <td><?php echo '&nbsp Total Biaya';?></td>
                            <td><?php echo '&nbsp : ';?></td>
                            <td>
                                <?php
                                //menentukan total biaya
                                if($kereta){
                                    if($jumlah == ""){
                                        echo "Jumlah Tiket Belum diisi";
                                    }elseif($kereta == "1"){
                                        $hasil = $turangga * $jumlah;
                                        $hasil;
                                    }elseif($kereta == "2"){
                                        $hasil = $argowillis * $jumlah;
                                        $hasil;
                                    }elseif($kereta == "3"){
                                        $hasil = $mutiaraselatan * $jumlah;
                                        $hasil;
                                    }elseif($kereta == "4"){
                                        $hasil = $lodaya * $jumlah;
                                        $hasil;
                                    }

                                    if($hasil >= 250000){
                                        $diskon = (20/100)*$hasil;
                                        $total = $hasil - $diskon;
                                        echo "&nbsp".$total;
                                    }elseif($hasil >= 150000){
                                        $diskon = (10/100)*$hasil;
                                        $total = $hasil - $diskon;
                                    }else{
                                        echo "&nbsp".$hasil;
                                    }
                                    
                                }?>
                            </td>
                    </tr>
                </table>    
                <?php
                                }
}?>

<html>
    <form method="POST" name="frmpost" action="">
    <table width="500" border="1" cellpadding="0" cellspacing="0" align="center">
    <tr>
        <th><h2>Form Pemesanan Tiket</h2></th>
    </tr>
    <tr>
        <td>
            <table width="500" border="0" cellpadding="6" cellspacing="6" align="center">

                <tr height="40">
                    <td width="200" valign="center">Nomor Pemesan</td>
                    <td width="10" valign="center"> : </td>
                    <td><input type="text" name="nomor[]"></td>
                </tr>

                <tr height="30">
                    <td width="200" valign="center">Nama Pemesan</td>
                    <td width="10" valign="center"> : </td>
                    <td><input name="nama[]" type="text" size="20"/></td>
                </tr>

                <tr height="30">
                    <td width="200" valign="center">Tanggal Pesan</td>
                    <td width="10" valign="center"> : </td>
                    <td><input type="date" name="tanggal"></td>
                <tr>

                <tr height="30">
                    <td width="200" valign="center">Tujuan</td>
                    <td width="10" valign="center"> : </td>
                    <td>
                        <select name="tujuan">
                            <option name="-" value="-" hidden>-</option>
                            <option name="surabaya" value="Surabaya">Surabaya</option>
                            <option name="yogyakarta" value="Yogyakarta">Yogyakarta</option>
                        </select>    
                    </td>
                </tr>

                <tr height="30">
                    <td width="200" valign="center">Jenis Kereta</td>
                    <td width="10" valign="center"> : </td>
                    <td>
                        <select name="kereta">
                            <option name="-" value="-" hidden>-</option>
                            <option name="turangga" value="Turangga">Turangga</option>
                            <option name="argowillis" value="Argowillis">Argo Willis</option>
                            <option name="mutiaraselatan" value="Mutiaraselatan">Mutiara Selatan</option>
                            <option name="lodaya" value="Lodaya">Lodaya</option>
                    </td>
                <tr>

                <tr height="30">
                    <td width="200" valign="center">Jumlah Tiket</td>
                    <td width="10" valign="center"> : </td>
                    <td><input name="jumlah" type="text" size="10"/></td>
                </tr>

                <tr>
                    <td align="right" colspan="3"><input type="submit" name="btnOk" value="Simpan" /></td>
                    <td><input type="reset" name="btnCancel" value="Cancel"/></td>
                </tr>

              </table>
              </table>
              <br>
              <br>

        <table width="500" border="0" cellpadding="0" cellspacing="0" align="center">
            <tr>
            <td>
            <?php
            hasil();
            ?>
            </td>
            </tr>
        </table>
        </td>
    </tr>

</form>    
</html>