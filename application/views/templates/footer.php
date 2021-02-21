<script src="<?= base_url(); ?>assets/bootstrap/js/jquery.min.js" crossorigin="anonymous"></script>
<script src="<?= base_url(); ?>assets/bootstrap/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="<?= base_url(); ?>assets/font_awesome/js/all.js"></script>
<script src="<?= base_url(); ?>assets/font_awesome/js/brands.js"></script>
<script src="<?= base_url(); ?>assets/font_awesome/js/solid.js"></script>
<script src="<?= base_url(); ?>assets/font_awesome/js/fontawesome.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#example').DataTable();

        $(".hapus_supplier").on('click', function() {
            const kode = $(this).data('kode');

            $('.kode_supplier').val(kode);
            $('#modalHapus').modal('show');
        });

        $(".edit_supplier").on('click', function() {
            const kode = $(this).data('kode');
            const nama = $(this).data('nama');
            const alamat = $(this).data('alamat');

            $('.kode').val(kode);
            $('.nama').val(nama);
            $('.alamat').val(alamat);
            $('#modalEdit').modal('show');
        });
    });
</script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>