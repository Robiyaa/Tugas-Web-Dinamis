<?php
 
$data = array(
 
'Data Saudara 1' => array('Nama' => array('Lutvi Prasetya Admaja'), 'Jenis Kelamin' => array('Laki-laki')), 
'Data Saudara 2' => array('Nama' => array('Krisan Prastiwi Utami'), 'Jenis Kelamin' => array('Perempuan')), 
'Data Saudara 3' =>array('Nama' => array('Budi Tri Utami'), 'Jenis Kelamin' => array('Perempuan')), 
'Data Saudara 4' =>array('Nama' => array('Rachman Prasetya'), 'Jenis Kelamin' => array('Laki-laki')),
'Data Saudara 5' =>array('Nama' => array('Robiyaa Ahmad Qusyairi'), 'Jenis Kelamin' => array('Laki-laki')),
'Data Saudara 6' =>array('Nama' => array('Firman Sukma Adiningrat'), 'Jenis Kelamin' => array('Laki-laki')),
);

//menampilkan perulangan array multidimensi
foreach($data as $name => $data){
 echo $name . '<br/>';
 foreach($data as $name2 => $value){
 echo $name2 . ' : ' . $value[0] .'<br> ';
 
 }
 
 echo'<br/>';
}
echo '============================================================================================';
 echo '<br/>';

$alamat = array(
 
'Data Alamat 1' => array('Nama' => array('Lutvi Prasetya Admaja'), 'Alamat' => array('Blitar, Jawa Timur')), 
'Data Alamat 2' => array('Nama' => array('Krisan Prastiwi Utami'), 'Alamat' => array('Klaten, Jawa Tengah')), 
'Data Alamat 3' =>array('Nama' => array('Budi Tri Utami'), 'Alamat' => array('DI.Yogyakarta')), 
'Data Alamat 4' =>array('Nama' => array('Rachman Prasetya'), 'Alamat' => array('Klaten, Jawa Tengah')),
'Data Alamat 5' =>array('Nama' => array('Robiyaa Ahmad Qusyairi'), 'Alamat' => array('Blitar, Jawa Timur')),
'Data Alamat 6' =>array('Nama' => array('Firman Sukma Adiningrat'), 'Alamat' => array('Blitar, Jawa Timur')),
);

//menampilkan perulangan array multidimensi
foreach($alamat as $name => $data){
 echo $name . '<br/>';
 foreach($data as $name2 => $value){
 echo $name2 . ' : ' . $value[0] .'<br> ';
 }
 echo '<br/>';
 }
 echo '============================================================================================';
 echo '<br/>';
 
 $umur = array(
 
'Data umur 1' => array('Nama' => array('Lutvi Prasetya Admaja'), 'umur' => array('37')), 
'Data umur 2' => array('Nama' => array('Krisan Prastiwi Utami'), 'umur' => array('36')), 
'Data umur 3' =>array('Nama' => array('Budi Tri Utami'), 'umur' => array('30')), 
'Data umur 4' =>array('Nama' => array('Rachman Prasetya'), 'umur' => array('27')),
'Data umur 5' =>array('Nama' => array('Robiyaa Ahmad Qusyairi'), 'umur' => array('19')),
'Data umur 6' =>array('Nama' => array('Firman Sukma Adiningrat'), 'umur' => array('16')),
);

//menampilkan perulangan array multidimensi
foreach($umur as $name => $data){
 echo $name . '<br/>';
 foreach($data as $name2 => $value){
 echo $name2 . ' : ' . $value[0] .'<br> ';
 }
 echo '<br/>';
}
echo '============================================================================================';
 echo '<br/>';
 
 $hobi = array(
 
'Data hobi 1' => array('Nama' => array('Lutvi Prasetya Admaja'), 'hobi' => array('Brmain Musik')), 
'Data hobi 2' => array('Nama' => array('Krisan Prastiwi Utami'), 'hobi' => array('Memasak')), 
'Data hobi 3' =>array('Nama' => array('Budi Tri Utami'), 'hobi' => array('Berdagang')), 
'Data hobi 4' =>array('Nama' => array('Rachman Prasetya'), 'hobi' => array('Bermain Game')),
'Data hobi 5' =>array('Nama' => array('Robiyaa Ahmad Qusyairi'), 'hobi' => array('Olahraga')),
'Data hobi 6' =>array('Nama' => array('Firman Sukma Adiningrat'), 'hobi' => array('Bela Diri')),
);

//menampilkan perulangan array multidimensi
foreach($hobi as $name => $data){
 echo $name . '<br/>';
 foreach($data as $name2 => $value){
 echo $name2 . ' : ' . $value[0] .'<br> ';
 }
 echo '<br/>';
}
echo '============================================================================================';
 echo '<br/>';
?>