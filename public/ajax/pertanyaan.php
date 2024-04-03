       <?php

        $conn = mysqli_connect("localhost", "root", "", "ospekraasekh");

        function kueri($query)
        {
            global $conn;
            $result = mysqli_query($conn, $query);
            $rows = [];
            while ($row = mysqli_fetch_assoc($result)) {
                $rows[] = $row;
            }
            return $rows;
        }
        $keyword = $_GET['keyword'];
        $queries = "SELECT * FROM faqs WHERE faq_pertanyaan LIKE '%$keyword%'";
        $barangs = kueri($queries);
        ?>
       <!-- Jika ada hasilnya -->
       <?php if (count($barangs) > 0) : ?>
       <!-- perulangan -->
       <?php $i = 1; ?>
       <?php foreach ($barangs as $faq) : ?>
       <div class="accordion-item">
           <h2 class="accordion-header">
               <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                   data-bs-target="#collapse<?= $i ?>" aria-expanded="false" aria-controls="collapse<?= $i ?> ">
                   👥 : "<?= $faq['faq_pertanyaan'] ?>"
               </button>
           </h2>
           <div id="collapse<?= $i ?>" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
               <div class="accordion-body">
                   <?= $faq['faq_jawaban'] ?>
               </div>
           </div>
       </div>
       <?php $i++; ?>
       <?php endforeach ?>
       <!-- else -->
       <?php else : ?>
       <h1>Tidak ada hasil yang ditemukan !!</h1>
       <?php endif; ?>