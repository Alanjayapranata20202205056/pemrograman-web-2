<?php
    $pegrograman_php = array ("Andi","Budi","Wati","Gunawan","Baco","Becce","Fatma",);

    $pegrograman_python = array ("Andi","Fatma","Fadli","Haris","Baco",);

    sort($pegrograman_php);
    rsort($pegrograman_python);

    //bagian a
    echo "bagian A <br/>";
    foreach ($pegrograman_php as $key) 
    {
        echo $key. "<br/>";
    }

    echo "<hr/>";
    //bagian b
    echo "bagian B <br/>";
    foreach ($pegrograman_python as $kuy)
    
    {
        echo $kuy. "<br/>";
    }

    echo "<hr/>";

    //bagian c
    echo "bagian C <br/>";
    for($no=0; $no < count ($pegrograman_php) ; $no++)
    {
        if(!in_array($pegrograman_php[$no], $pegrograman_python))
        {
        echo $pegrograman_php[$no];
        echo "<br/>";
        }
    }

    echo "<hr/>";

    //bagina d
    echo "bagian D <br/>";
    for($no=0; $no < count ($pegrograman_python) ; $no++)
    {
        if(!in_array($pegrograman_python[$no], $pegrograman_php))
        {
        echo $pegrograman_python[$no];
        echo "<br/>";
        }
    }

    echo"<hr/>";

    //bagian e
    echo "bagian E <br/>";
    for($no=0; $no < count ($pegrograman_php) ; $no++){
    for($nu=0; $nu < count ($pegrograman_python) ; $nu++){
        if ($pegrograman_php[$no] == $pegrograman_python[$nu])
            {
            echo $pegrograman_php[$no];
            echo"<br/>";
            }
        }
    }

    echo "<hr/>";

    //bagian f
    echo "bagian F <br/>";
    // datanya dimerge dulu / disatukan
    $datakeduanya = array_merge($pegrograman_php, $pegrograman_python);
    // data array dihapus jika terdapat duplikat
    $datapisah = array_unique($datakeduanya);
    //membuat urutan index array menjadi normal setelah sebelumnya berantakan akibat melakukan fungsi unique
    $databaru = array_values($datapisah);

    for($no=0; $no < count ($databaru) ; $no++){
    echo $databaru[$no];
    echo "<br/>";
    }
    echo "<hr/>";


?>