
    <canvas id="myChart"></canvas>
    <?php
    // Koneksikan ke database

    //Inisialisasi nilai variabel awal
    $nama_bar_kat= "";
    $jumlah=null;
    //Query SQL
    $sql="SELECT thn_aprove,COUNT(*) as 'total' from psb where kelulusan=1 AND thn_aprove != 0 GROUP by thn_aprove";
    $hasil=mysqli_query($con,$sql);

    while ($data = mysqli_fetch_array($hasil)) {
        //Mengambil nilai jurusan dari database
        $jur=$data['thn_aprove'];
        $nama_bar_kat .= "'$jur'". ", ";
        //Mengambil nilai total dari database
        $jum=$data['total'];
        $jumlah .= "$jum". ", ";

    }
    ?>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',
        // The data for our dataset
        data: {
            labels: [<?php echo $nama_bar_kat; ?>],
            datasets: [{
                label:'Data Kelulusan Siswa ',
                backgroundColor: ['rgb(255, 99, 132)', 'rgba(56, 86, 255, 0.87)', 'rgb(60, 179, 113)','rgb(175, 238, 239)','rgb(0, 156, 148)','rgb(255, 49, 49)','rgb(161, 181, 18) '],
                borderColor: ['rgb(255, 99, 132)'],
                data: [<?php echo $jumlah; ?>]
            }]
        },

        // Configuration options go here
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
</script>