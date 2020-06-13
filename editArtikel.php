<?php

    include "koneksi.php";



    $time = date("d M Y, H:i");

    //$lead = str_replace("\r\n","<br>",$lead);

    //$content = str_replace("\r\n","<br>",$content);

    $lead = $_GET['lead'];

    $content = $_GET['content];

    $title = $_GET['title'];

    $author = $_GET['author'];



    $update="UPDATE articles SET judul='$title', penulis='$author', lead='$lead', content='$content', waktu='$time' WHERE articleID ='$ID'";



    $hasil=mysqli_query($connect,$update);



    if ($hasil) {



        echo "Artikel berhasil di update<br>";

        echo "<a href=\"tampil_articles.php\">List</a>";

        

    } else {



        echo "Artikel gagal di update";



    }

?> 
