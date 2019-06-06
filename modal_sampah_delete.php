<!-- MODAL DELETE TAMU -->
<div class="modal" id="popUpDelete-Sampah_<?php echo $row['id_sampah']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content animated faster jello">
            <div class="modal-header bg-light">
                <h3 class="modal-title" id="exampleModalLabel">Hapus Sampah <?php  echo $row['nama_sampah'];?> ?  </h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button>
                <a href="proses_sampah_delete.php?id_sampah=<?php echo $row['id_sampah']; ?>" class="btn btn-danger">Hapus Data</a>
            </div>
        </div>
    </div>
</div>