<?php

if (isset($_POST['pilih'])) {
    if ($_POST['laporan'] == 'pengguna') {
?>
        <script>
            // document.location.href = "<?= BASE_URL; ?>/pages/laporan/lap-pengguna.php";
            window.open('<?= BASE_URL; ?>/pages/laporan/lap-pengguna.php', '_blank')
        </script>
<?php
    }
}

?>

<h1 class="h3 mb-4 text-gray-800">Data Laporan</h1>
<div class="row">
    <div class="col">
        <div class="card mb-4">
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="laporan">Jenis Laporan</label>
                        <select class="form-control" id="laporan" name="laporan">
                            <option value="pengguna">Laporan Pengguna</option>
                        </select>
                    </div>
                    <div class="mt-5">
                        <button type="submit" class="btn btn-success tombol-simpan" name="pilih">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- <script>
    let keyword = document.getElementById('keyword');
    let tableContent = document.getElementById('table-content');

    keyword.addEventListener('keyup', () => {

        let xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = () => {

            if (xhttp.readyState == 4 && xhttp.status == 200) {

                console.log(xhttp.ResponseText);
                // tableContent.innerHTML = xhttp.ResponseText;
            }
        }

        xhttp.open('POST', 'pages/rekening/cari.php', true);
        xhttp.send();

    });
</script> -->
<!-- <script>
    $(document).ready(function() {

        $('#keyword').on('keyup', function() {
            $('#table-content').load('pages/rekening/cari.php?keyword=' + $('#keyword').val());
        });

    });
</script> -->