<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php";?>
 <div class="container">
      <div class="row">
            <div class="col-md-12">
               <div class="jumbotron">
                <font face="times new roman"><font size="4">
              <h1>Wisuda XXIV UNPAN: Ajak Wisudawan Menelisik Peran AI dalam Meningkatkan Produktivitas Kerja</h1>
              <center><img src="gambar/wisuda2.jpg" width="700px"></center><br><br>
              <p>Universitas Pandawara(UNPAN) kembali menyelenggarakan wisuda. Wisuda UNPAN selalu mengangkat tema yang dapat dijadikan bekal bagi para wisudawan untuk menghadapi dunia kerja. Pada wisuda XXIV kali ini, panitia mengajak para wisudawan untuk melihat peran Artificial Intelligence (AI) atau kecerdasan buatan dalam meningkatkan produktivitas kerja.</p><br>

              <p>Rektor UNPAN, Dr. Ninok Leksono, M.A., dalam sambutannya menyampaikan selamat kepada para wisudawan. Ia juga menyinggung bahwa tema wisuda kali ini sangat relevan dengan kondisi terkini. Hal ini bisa menjadi tantangan sekaligus peluang bagi khususnya wisudawan.</p><br>

              <p>“AI hari-hari ini sedang menjadi tema hangat di dunia, mulai di bidang keilmuan hingga pekerjaan, dari industri hingga pendidikan. Jadi tema AI ini saya pandang relevan dengan perkembangan yang ada sekarang ini. Pendidikan terpengaruh salah satunya antara lain dengan munculnya chat GPT,” ujar Ninok.</p><br>

              <p>Ninok juga menyampaikan harapan dan pesannya kepada para wisudawan agar tidak hanya menjadi pribadi cendekia namun juga menjadi wisudawan yang berbekal Ilmu dan keterampilan yang mampu menerapkannya di dunia kerja.</p><br>
              
              <p>“Harapan saya terhadap wisudawan adalah menjadi insan yg tidak saja cendekia, tetapi penuh dengan wawasan, mengikuti perkembangan iptek secara bijaksana, dan mencermati perkembangan industri, sehingga dimanapun akan berkiprah wisudawan tidak gamang dan kehilangan arah. Jadikan momen wisuda sebagai tonggak untuk meneguhkan niat untuk menghadapi masa depan dengan optimis berbekal ilmu dan keterampilan yg diperoleh di UNPAN” tutup Ninok.</p><br>

              <p>Ketua panitia wisuda XXIV UNPAN, Susana Krisma Marganing Astuti, S.H., menyampaikan bahwa tema AI yang diangkat di wisuda kali ini merupakan refleksi bersama mengenai peran AI yang semakin penting dalam dunia bisnis dan juga industri kedepannya. Kolaborasi manusia dan kecerdasan buatan dapat mengubah cara kerja dan membantu menyelesaikan pekerjaan secara signifikan, sehingga dengan integrasi yang tepat dapat meningkatkan produktivitas dan efisiensi kerja.</p><br>

              <p>“Tetaplah menjadi insan yang kreatif, inovatif, positif dan produktif yang membanggakan almamater, orang tua bangsa dan negara. Besar harapan kami agar para wisudawan wisudawati dapat berperan aktif di dunia kerja masing-masing dan memiliki keterbukaan atas peluang AI yang muncul agar seluruh aktivitas pekerjaan bisa semakin efektif dan efisien”, tutup Krisma.</p><br><br>
          </font>
        </font>
            </div>
         </div>
      </div>
   </div>
   <?php include "footer.php";?>