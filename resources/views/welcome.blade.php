@extends('template')
@section('content')
    <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">
            @if (session()->has('success'))
                <div class="alert alert-primary border-dark alert-dismissible fade show my-3" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>
            @endif
            <div class="row justify-content-center ">
                <!-- Area Chart -->

                <div class="col-xl-6 col-lg-5">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div id="headingOne" class="card-header d-flex flex-row align-items-center justify-content-between"
                            data-toggle="collapse" data-target=".collapseOne" aria-controls="one two">
                            <h3 class="m-0 font-weight-bold text-primary">Transaction</h3>
                        </div>
                        <!-- Card Body -->
                        <div id="one" class="card-body collapseOne collapse show" aria-labelledby="headingOne">
                            <div class="chart-area d-flex flex-column justify-content-center">
                                <div class="transaction ">
                                    <div class="form-group row mb-2">
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-5 mb-3 mb-sm-0 mx-0">
                                            <input type="text" class="form-control form-control-transaction"
                                                id="idCostumer" name="id" placeholder="Id Costumer">
                                        </div>
                                        <div class="col-sm-4 input-group">
                                            <input type="text" class="form-control form-control-transaction"
                                                id="idVoc" name="voucer" placeholder="ID voucer">
                                        </div>
                                        <div class="col-sm-3 ">
                                            <div onclick="useVoucer()" class=" btn btn-primary btn-transaction btn-block">
                                                Gunakan Voucer
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-5 mb-3 mb-sm-0 mx-0">
                                            <input type="text" class="form-control form-control-transaction"
                                                id="namaBarang" name="namaBarang" placeholder="Nama Barang">
                                        </div>
                                        <div class="col-sm-4 input-group">
                                            <div class="input-group-text input-group-transaction">Rp.</div>
                                            <input type="number" class="form-control form-control-transaction"
                                                id="harga" name="harga" placeholder="Harga">
                                        </div>
                                        <div class="col-sm-3 ">
                                            <div onclick="addButton()" class=" btn btn-primary btn-transaction btn-block">
                                                Tambah barang
                                            </div>
                                        </div>
                                    </div>
                                    <p id="warning" class="text-danger"></p>

                                    <hr>
                                    <form method="post" action="{{ route('invoice.add') }}">
                                        @csrf
                                        @method('POST')
                                        <input type="numer" id="total" name="total" hidden>
                                        <button type="submit" class="btn btn-primary btn-transaction btn-block">
                                            Bayar
                                        </button>
                                    </form>
                                    <div class=" d-flex flex-column mt-5">
                                        <h3 class="mb-0">TOTAL:</h3>
                                        <h1 id="sh-total" class="fw-bolder">Rp.0</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header d-flex flex-row align-items-center justify-content-between">
                            <h3 class="m-0 font-weight-bold text-primary">Reciept</h3>
                        </div>
                        <!-- Card Body -->
                        <div id="two" class="card-body collapseOne collapse show" aria-labelledby="headingOne">
                            <div class="chart-area overflow-auto">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama Barang</th>
                                            <th scope="col">Harga</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody id="tabReceipt">
                                        {{-- <th>nasi</th>
                                                <td>nasi</td>
                                                <td><button>nasi</button></td> --}}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-10">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div id="headingTwo" class="card-header d-flex flex-row align-items-center justify-content-between"
                            data-toggle="collapse" data-target=".collapseTwo">
                            <h3 class="m-0 font-weight-bold text-primary">Register</h3>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body collapseTwo collapse show" aria-labelledby="headingTwo">
                            <div class="redeem-area d-flex flex-column justify-content-start">
                                <div class="transaction">
                                    <form method="post" action="/costumer">
                                        @csrf
                                        @method('POST')
                                        <div class="form-group row mx-2">
                                            <div class="col-sm-12 mb-2 mb-sm-0 ">
                                                <input type="text" class="form-control form-control-transaction"
                                                    id="nama" name="nama" placeholder="Nama Costumer">
                                            </div>

                                        </div>
                                        <div class="form-group row mx-2">
                                            <div class="col-sm-12 mb-2 mb-sm-0">
                                                <input type="text" class="form-control form-control-transaction"
                                                    id="alamat" name="alamat" placeholder="alamat">
                                            </div>
                                        </div>
                                        <p id="warning" class="text-danger"></p>

                                        <hr>

                                        <input type="numer" id="total" name="total" hidden>
                                        <button type="submit" class="btn btn-primary btn-transaction btn-block">
                                            Register
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-10">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div id="headingTwo"
                            class="card-header d-flex flex-row align-items-center justify-content-between"
                            data-toggle="collapse" data-target=".collapseTwo">
                            <h3 class="m-0 font-weight-bold text-primary">Redeem Voucer</h3>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body collapseTwo collapse show" aria-labelledby="headingTwo">
                            <div class="redeem-area d-flex flex-column justify-content-center">
                                <div class="transaction">
                                    <form method="post" action="{{ route('voucer.add') }}">
                                        @csrf
                                        @method('POST')
                                        <div class="form-group row mx-2">
                                            <div class="col-sm-3 mb-2 mb-sm-0 ">
                                                <input type="text" class="form-control form-control-transaction"
                                                    id="idCostumen" name="costumer_id" placeholder="ID Costumer">
                                            </div>
                                            <div class="col-sm-5 mb-2 mb-sm-0">
                                                <input type="text" class="form-control form-control-transaction"
                                                    id="idInvoice" name="idInvoice" placeholder="ID Invoice">
                                            </div>
                                            <div class="col-sm-4 ">
                                                <div onclick="addInvoice()"
                                                    class=" btn btn-primary btn-transaction btn-block">
                                                    Check voucer
                                                </div>
                                            </div>
                                        </div>
                                        <p id="warningVoucer" class="text-danger"></p>

                                        <hr>
                                        <div class="form-group row">
                                            <div class="col-sm-3 d-flex flex-column">
                                                <h5 class="mb-0">TOTAL:</h5>
                                                <h4 id="in-total" class="fw-bolder">Rp.0</h4>
                                            </div>
                                        </div>
                                        <button id="redeemBut" type="submit"
                                            class="btn btn-primary btn-transaction btn-block" disabled>
                                            Redeem
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
@endsection

@section('script')
    <script>
        let b = 0;
        let total = 0;

        function addButton() {
            var namaBarang = document.getElementById("namaBarang").value;
            var harga = document.getElementById("harga").value;
            var onlyNumbersRegex = /^[0-9]+$/;
            // console.log(harga);
            if (namaBarang == "" || harga == "") {
                document.getElementById("warning").innerHTML = "Nama Barang atau Harga tidak boleh kosong"
            } else {
                if (!onlyNumbersRegex.test(harga)) {
                    document.getElementById("warning").innerHTML = "Harga harus dalam berbentuk huruf"
                } else {
                    b = ++b
                    var warn = document.getElementById("warning");
                    warn.innerHTML = '';
                    var hapus = document.createElement("button");
                    hapus.id = 'but' + b;
                    hapus.setAttribute("data", b);
                    hapus.className = "btn btn-danger form-control mt-1";
                    hapus.addEventListener("click", function() {
                        removeParent(this);
                    });
                    var icon = document.createElement("i");
                    icon.className = "fas fa-trash";
                    hapus.appendChild(icon);

                    function removeParent(element) {
                        // Get the parent element and remove it
                        var parId = element.getAttribute("data");
                        var parent = document.getElementById(parId);
                        if (parent) {
                            var elTotal = document.getElementById("sh-total")
                            var formTotal = document.getElementById("total")
                            let numHarga = parseInt(harga, 10)
                            total = total - numHarga;
                            formTotal.value = total;
                            elTotal.innerHTML = "Rp." + total;
                            parent.remove();
                        }
                    }


                    var element = document.createElement("tr");
                    var th = document.createElement("th");
                    var td1 = document.createElement("td");
                    var td2 = document.createElement("td");
                    var td3 = document.createElement("td");
                    var num = b;
                    th.innerHTML = b;
                    td1.innerHTML = namaBarang;
                    td2.innerHTML = harga;
                    td3.appendChild(hapus);
                    element.id = b;
                    element.appendChild(th);
                    element.appendChild(td1);
                    element.appendChild(td2);
                    element.appendChild(td3);


                    var elTotal = document.getElementById("sh-total")
                    var formTotal = document.getElementById("total")
                    let numHarga = parseInt(harga, 10)
                    total = total + numHarga;
                    formTotal.value = total;
                    elTotal.innerHTML = "Rp." + total;


                    $("#tabReceipt").append(element);
                    document.getElementById("namaBarang").value = "";
                    document.getElementById("harga").value = "";



                }
            }

        };

        function addInvoice() {
            var invtotal = document.getElementById("in-total");
            var idInvoice = document.getElementById("idInvoice").value;
            var redeemBut = document.getElementById("redeemBut");
            var warningVoucer = document.getElementById("warningVoucer");
            var totalIn = 0
            $.get("/voucer/addinvoice", {
                    id: idInvoice,
                })
                .done(function(data) {
                    console.log(data.kode);
                    if (data['success']) {
                        warningVoucer.innerHTML = '';
                        totalIn = data.data[0].total;
                        invtotal.innerHTML = "RP." + totalIn;
                        if (totalIn >= 1000000) {
                            redeemBut.removeAttribute('disabled');
                        }
                    } else {
                        // console.log(data.data);
                        warningVoucer.innerHTML = data.data;
                        // $('#sadIn').html(
                        //     'kode barang yang di inputkan salah');
                        // $('#input_scanIn').val("").focus();
                    }
                });
        }

        function useVoucer() {
            var idCostumer = document.getElementById("idCostumer").value;
            var idVoc = document.getElementById("idVoc").value;
            var redeemBut = document.getElementById("redeemBut");
            var warningVoucer = document.getElementById("warning");
            var totalIn = 0
            $.get("/voucer/use-voucer", {
                    id: idVoc,
                    costumer_id: idCostumer,
                })
                .done(function(data) {
                    if (data['success']) {
                        document.getElementById("idVoc").value = "";
                        document.getElementById("idCostumer").value = "";
                        voucer();
                    } else {
                        // console.log(data);
                        warningVoucer.innerHTML = data.data;
                        // $('#sadIn').html(
                        //     'kode barang yang di inputkan salah');
                        // $('#input_scanIn').val("").focus();
                    }
                });
        }

        function voucer() {
            var namaBarang = "voucer";
            var harga = -10000;

            b = ++b
            var warn = document.getElementById("warning");
            warn.innerHTML = '';
            var element = document.createElement("tr");
            var th = document.createElement("th");
            var td1 = document.createElement("td");
            var td2 = document.createElement("td");
            var td3 = document.createElement("td");
            var num = b;
            th.innerHTML = b;
            td1.innerHTML = namaBarang;
            td2.innerHTML = harga;
            element.id = b;
            element.appendChild(th);
            element.appendChild(td1);
            element.appendChild(td2);
            element.appendChild(td3);

            var elTotal = document.getElementById("sh-total")
            var formTotal = document.getElementById("total")
            let numHarga = parseInt(harga, 10)
            total = total + numHarga;
            formTotal.value = total;
            elTotal.innerHTML = "Rp." + total;


            $("#tabReceipt").append(element);
            document.getElementById("namaBarang").value = "";
            document.getElementById("harga").value = "";
        }
    </script>
@endsection
