<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Form Nilai Mahasiswa</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-body">      
            <form action="hasil_nilai.php" method="POST" >
            <div class="form-group row">
                <label for="nama " class="col-4 col-form-label">Nama Mahasiswa</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text"></div>
                    </div> 
                    <input id="nama " name="nama " placeholder=" Masukan Nama Lengkap " type="text" required="required" class="form-control"> 
                    <div class="input-group-append">
                    <div class="input-group-text">
                        <i class="fa "></i>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="nim " class="col-4 col-form-label">NIM</label> 
                <div class="col-8">
                <input id="nim " name="nim " placeholder="Masukkan Nim " type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="rombel " class="col-4 col-form-label">Rombel</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa "></i>
                    </div>
                    </div> 
                    <input id="rombel " name="rombel " placeholder="masukan rombel" type="text" required="required" class="form-control"> 
                    <div class="input-group-append">
                    <div class="input-group-text">
                        <i class="fa "></i>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
                <div class="col-8">
                <select id="matkul" name="matkul" required="required" class="custom-select">
                    <option value="BASIS DATA ">BASIS DATA</option>
                    <option value="Pemrograman web 2 ">Pemrograman web 2</option>
                    <option value="Jaringan Komputer ">Jaringan Komputer</option>
                    <option value="UI UX">UI UX</option>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="tugas " class="col-4 col-form-label">Nilai Tugas</label> 
                <div class="col-8">
                <input id="tugas " name="tugas " placeholder="Masukan nilai tugas " type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="uts" class="col-4 col-form-label">Nilai UTS</label> 
                <div class="col-8">
                <input id="uts" name="uts" placeholder="masukkan NILAI UTS " type="text" required="required" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="u" class="col-4 col-form-label">NILAI UAS</label> 
                <div class="col-8">
                <input id="u" name="u" placeholder="Masukkan nilai UAS " type="text" required="required" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            </form>
            </div>
        </div>
    </div>
</body>
</html>