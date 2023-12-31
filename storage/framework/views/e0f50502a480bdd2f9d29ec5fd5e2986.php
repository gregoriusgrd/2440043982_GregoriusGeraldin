<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5">
        <div class="col-lg-6">
            <a href="/list-umkm" class="btn btn-success">List UMKM</a>
            <form action="<?php echo e(route('submit_form')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <label class="form-label">Nama UMKM:</label>
                <input type="text" name="nama_umkm" id="nama_umkm" value="<?php echo e(old('nama_umkm')); ?>"
                    class="form-control">
                <label class="form-label">Deskripsi UMKM: </label>
                <input type="text" name="desc_umkm" id="desc_umkm" value="<?php echo e(old('desc_umkm')); ?>"
                    class="form-control">
                <label class="form-label">Alamat UMKM: </label>
                <input type="text" class="form-control" name="alamat_umkm" id="alamat_umkm" value="<?php echo e(old('alamat_umkm')); ?>">
                <label for="form-label">Kategori UMKM</label>
                <select name="category_umkm" id="category_umkm" class="form-control">
                    <option value="kategori1" <?php echo e(old('kategori_umkm') === 'kategori1' ? 'selected' : ''); ?>>Kategori 1</option>
                    <option value="kategori2" <?php echo e(old('kategori_umkm') === 'kategori2' ? 'selected' : ''); ?>>Kategori 2</option>
                    <option value="kategori3" <?php echo e(old('kategori_umkm') === 'kategori3' ? 'selected' : ''); ?>>Kategori 3</option>
                    </option>
                </select>
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
        </div>

    </div>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>


</html>
<?php /**PATH C:\Users\GERALD\Downloads\2440043982-GregoriusGeraldin-master\resources\views/welcome.blade.php ENDPATH**/ ?>