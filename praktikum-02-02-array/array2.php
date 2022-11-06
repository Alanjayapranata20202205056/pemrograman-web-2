<?php
    $pegrograman_php = array ("Andi","Budi","Wati","Gunawan","Baco","Becce","Fatma",);
    sort($pegrograman_php);

    $pegrograman_python = array ("Andi","Fatma","Fadli","Haris","Baco",);
    sort($pegrograman_python);

    //bagian a
    echo "<h4>bagian A <h4/>";
    for($no=0; $no < count ($pegrograman_php) ; $no++)
    {
        echo $pegrograman_php[$no];
        echo "<br/>";
    }

    echo "<hr/>";

    //bagian b
    echo "<h4>bagian B <h4/>";
    for($no=0; $no < count ($pegrograman_python) ; $no++)
    {
        echo $pegrograman_python[$no];
        echo "<br/>";
    }

    echo "<hr/>";

    //bagian c
    echo "<h4>bagian C <h4/>";
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
    echo "<h4>bagian D <h4/>";
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
    echo "<h4>bagian E <h4/>";
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
    echo "<h4>bagian F <h4/>";
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
?>