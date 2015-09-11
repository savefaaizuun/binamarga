<?php foreach($berita->result_array() as $data){
              
              $ringkasan = strip_tags($data['isi_berita']);
              
              $e = explode(' ',$ringkasan);
              echo "<div class=\"row\">
                <img class=\"img-thumbnail\" class=\"berita\" src=\"../../assets/img/berita/$data[image]\">
                <h4 class=\"judul-side\"><a href=\"$data[link]\">$data[judul_berita]</a></h4>
                <p class=\"isi_berita\">";
                  
                  
                  $jml_kata = 15;
                  for($i=0;$i<=$jml_kata;$i++){
                  echo $e[$i].' ';
                  }
                echo ". . . </p>
                <div class=\"more\">
                  <a class=\"berita\" href=\"$data[link]\">>BACA LEBIH LANJUT</a>
                </div>
              </div>
            </div>";
            } ?>