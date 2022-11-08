<?php

    $pegrograman_php = array ("Andi","Budi","Wati","Gunawan","Baco","Becce","Fatma",);

    $pegrograman_python = array ("Andi","Fatma","Fadli","Haris","Baco",);

    sort($pegrograman_php);
    rsort($pegrograman_python);

    $pegrograman_python->Reset();
    for($no=0; $no < count ($pegrograman_python) ; $no++)
    {
            array_push($pegrograman_python,$i);
    }
    $pegrograman_python->Finish();
    echo $pegrograman_python->GetDiff();
?>