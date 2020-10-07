<h1 class="h3 mb-4 text-gray-800">Data pengguna</h1>
<div class="row">
    <div class="col">
        <div class="card mb-4">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-6">
                        <a href="<?= BASE_URL; ?>/pengguna/tambah" class="btn btn-sm btn-primary">Tambah</a>
                    </div>
                    <div class="col-auto ml-auto">
                        <?php if (isset($_GET["keyword"])) { ?>
                            <form method="POST" action="">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light" id="keyword" name="keyword" placeholder="Cari Data..." autocomplete="off" value="<?= $_GET['keyword']; ?>">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit" id="search" name="search">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        <?php } else { ?>
                            <form method="POST" action="">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light" id="keyword" name="keyword" placeholder="Cari Data..." autocomplete="off">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit" id="search" name="search">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        <?php } ?>
                    </div>
                </div>
                <div id="table-content">
                    <?php include 'pages/pengguna/_table-pengguna.php'; ?>
                </div>
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

        xhttp.open('POST', 'pages/pengguna/cari.php', true);
        xhttp.send();

    });
</script> -->
<!-- <script>
    $(document).ready(function() {

        $('#keyword').on('keyup', function() {
            $('#table-content').load('pages/pengguna/cari.php?keyword=' + $('#keyword').val());
        });

    });
</script> -->