<form id="form_mahasiswa">
    <label for="prodi">Prodi</label>
    <select name="prodi" id="prodi">
        <option value="" disabled="" selected="">Pilih Program Studi</option>
        <option value="IF">Teknik Informatika</option>
        <option value="EL">Teknik Elektro</option>
        <option value="ME">Teknik Mesin</option>
        <option value="TG">Teknik Geofisika</option>
        <option value="GL">Teknik Geologi</option>
    </select>
</form>

<div id="tampil">
    <table id="tabel" border="1">
        <tr>
            <th>No.</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Program Studi</th>
        </tr>
    </table>
</div>

<script src = "https://code.jquery.com/jquery-3.6.1.min.js"
        integrity = "sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
        crossorigin = "anonymous">
</script>

<script>
    $(document).ready(function() {
        $('#prodi').change(function() {
            var value = $(this).val();
            $.ajax({
                url: "tampil.php",
                type: "POST",
                data: "request=" + value,
                success: function(data) {
                    $("#tampil").html(data);
                }
            })
        });
    });
</script>