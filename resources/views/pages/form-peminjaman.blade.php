<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage="Form Peminjaman"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Form Peminjaman"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white text-capitalize ps-3">Form Peminjaman</h6>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="container">
                                <div class="container">
                                    <form id="dataForm">
                                        <div class="mb-3">
                                            <label for="namaPeminjam" class="form-label">Nama Peminjam</label>
                                            <input type="text" class="form-control border p-2" id="namaPeminjam"
                                                name="namaPeminjam" placeholder="Enter your name" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="kelas" class="form-label">Kelas</label>
                                            <input type="text" class="form-control border p-2" id="kelas"
                                                name="kelas" placeholder="Enter your class" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="namaBarang" class="form-label">Nama Barang</label>
                                            <input type="text" class="form-control border p-2" id="namaBarang"
                                                name="namaBarang" placeholder="Enter the borrowed item" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="jenisBarang" class="form-label">Jenis Barang</label>
                                            <input type="text" class="form-control border p-2" id="jenisBarang"
                                                name="jenisBarang" placeholder="Enter the type of item" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="jumlahBarang" class="form-label">Jumlah Barang</label>
                                            <input type="number" class="form-control border p-2" id="jumlahBarang"
                                                name="jumlahBarang" placeholder="Enter the quantity" required>
                                        </div>

                                        <button type="button" class="btn btn-primary"
                                            onclick="addData()">Submit</button>
                                    </form>

                                    <div class="table-responsive p-0">
                                        <table class="table align-items-center mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Nama Peminjam</th>
                                                    <th>Kelas</th>
                                                    <th>Nama Barang</th>
                                                    <th>Jenis Barang</th>
                                                    <th>Jumlah Barang</th>
                                                </tr>
                                            </thead>
                                            <tbody id="dataTableBody">
                                                <div class="container">

                                                </div>
                                            </tbody>
                                        </table>
                                    </div>



                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
    </main>
    <script>
        function addData() {

            var namaPeminjam = document.getElementById('namaPeminjam').value;
            var kelas = document.getElementById('kelas').value;
            var namaBarang = document.getElementById('namaBarang').value;
            var jenisBarang = document.getElementById('jenisBarang').value;
            var jumlahBarang = document.getElementById('jumlahBarang').value;


            var tableRow = "<tr>" +
                "<td>" + namaPeminjam + "</td>" +
                "<td>" + kelas + "</td>" +
                "<td>" + namaBarang + "</td>" +
                "<td>" + jenisBarang + "</td>" +
                "<td>" + jumlahBarang + "</td>" +
                "</tr>";


            document.getElementById('dataTableBody').innerHTML += tableRow;

            document.getElementById('namaPeminjam').value = '';
            document.getElementById('kelas').value = '';
            document.getElementById('namaBarang').value = '';
            document.getElementById('jenisBarang').value = '';
            document.getElementById('jumlahBarang').value = '';
        }
    </script>
    <x-plugins></x-plugins>

</x-layout>
