<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Register</title>

    <!-- Icons font CSS-->
    <link href="daftar/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="daftar/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="daftar/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="daftar/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="daftar/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registrasi</h2>
                    <form method = "POST" action = "{{route('prosesDaftar')}}">
                        @csrf
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Nama" name="nama_pembeli">
                        
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-2" type="date" placeholder="Tanggal Lahir" name="tanggal_lahir_pembeli">
                                   
                                </div>
                            </div>
                           
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="jenis_kelamin_pembeli">
                                            <option disabled="disabled" selected="selected">Jenis Kelamin</option>
                                            <option>Laki-laki</option>
                                            <option>Perempuan</option>
                                            
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                           
                        </div>
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                </div>
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Alamat" name="alamat_pembeli">
                        </div>
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="No HP" name="no_hp_pembeli">
                        </div>

                         <div class="input-group">
                              <div class="rs-select2 js-select-simple select--no-search">
                                </div>
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Email" name="email_pembeli">
                        </div>
                        <div class="input-group">
                              <div class="rs-select2 js-select-simple select--no-search">
                                </div>
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Password" name="password_pembeli">
                        </div>
                        <div class="input-group">
                        <input class="input--style-2" type="text" placeholder="Nomer Identitas" name="no_identitas_pembeli">
                        </div>
                        <div class="p-t-30">
                            <button class="btn btn--radius btn--green" type="submit">SUBMIT</button>
                        </div>
                    </form>
                
            
    

    <!-- Jquery JS-->
    <script src="daftar/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="daftar/vendor/select2/select2.min.js"></script>
    <script src="daftar/vendor/datepicker/moment.min.js"></script>
    <script src="daftar/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="daftar/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->