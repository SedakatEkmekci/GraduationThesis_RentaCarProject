<?php 
include 'header.php';


if (isset($_POST['car_id'])) {
	echo $_POST['car_id'];
    echo $_SESSION['id'];



    $sql = "INSERT INTO orders (renter_name,renter_tcid,location,pickup_date,return_date)
                VALUES ('$renter_name','$renter_tcid','$location','$pickup_date','$returnDate')";
                mysqli_query($conn, $sql);
                header("Location: BuyCar.php");
}
if(isset($_POST['submit']))
{
    $tc = $_POST['TC'];
   
}
?>
<div class="container-fluid  order_form">
    <form class="row g-4 needs-validation" novalidate>
        <div class="col-md-8">
            <label for="validationCustom01" class="form-label">Name and Surname</label>
            <input type="text" class="form-control" id="validationCustom01" placeholder="Name and Surname"
                name="renter_name" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Renter ID</label>
            <input type="text" name="TC" class="form-control" id="validationCustom02" placeholder="Renter TC ID"
                name="renter_tcid" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-3">
            <label for="validationCustom03" class="form-label">Renter Age</label>
            <input type="text" class="form-control" id="validationCustom03" placeholder="Renter Age" required>
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>

        <div class="col-md-9">
            <label for="validationCustom04" class="form-label">Pick up Location</label>
            <select class="form-select" id="validationCustom04" name="location"required>
                <option value="">Choose...</option>
                <option value="1">Adana</option>
                <option value="2">Adıyaman</option>
                <option value="3">Afyonkarahisar</option>
                <option value="4">Ağrı</option>
                <option value="5">Amasya</option>
                <option value="6">Ankara</option>
                <option value="7">Antalya</option>
                <option value="8">Artvin</option>
                <option value="9">Aydın</option>
                <option value="10">Balıkesir</option>
                <option value="11">Bilecik</option>
                <option value="12">Bingöl</option>
                <option value="13">Bitlis</option>
                <option value="14">Bolu</option>
                <option value="15">Burdur</option>
                <option value="16">Bursa</option>
                <option value="17">Çanakkale</option>
                <option value="18">Çankırı</option>
                <option value="19">Çorum</option>
                <option value="20">Denizli</option>
                <option value="21">Diyarbakır</option>
                <option value="22">Edirne</option>
                <option value="23">Elazığ</option>
                <option value="24">Erzincan</option>
                <option value="25">Erzurum</option>
                <option value="26">Eskişehir</option>
                <option value="27">Gaziantep</option>
                <option value="28">Giresun</option>
                <option value="29">Gümüşhane</option>
                <option value="30">Hakkâri</option>
                <option value="31">Hatay</option>
                <option value="32">Isparta</option>
                <option value="33">Mersin</option>
                <option value="34">İstanbul</option>
                <option value="35">İzmir</option>
                <option value="36">Kars</option>
                <option value="37">Kastamonu</option>
                <option value="38">Kayseri</option>
                <option value="39">Kırklareli</option>
                <option value="40">Kırşehir</option>
                <option value="41">Kocaeli</option>
                <option value="42">Konya</option>
                <option value="43">Kütahya</option>
                <option value="44">Malatya</option>
                <option value="45">Manisa</option>
                <option value="46">Kahramanmaraş</option>
                <option value="47">Mardin</option>
                <option value="48">Muğla</option>
                <option value="49">Muş</option>
                <option value="50">Nevşehir</option>
                <option value="51">Niğde</option>
                <option value="52">Ordu</option>
                <option value="53">Rize</option>
                <option value="54">Sakarya</option>
                <option value="55">Samsun</option>
                <option value="56">Siirt</option>
                <option value="57">Sinop</option>
                <option value="58">Sivas</option>
                <option value="59">Tekirdağ</option>
                <option value="60">Tokat</option>
                <option value="61">Trabzon</option>
                <option value="62">Tunceli</option>
                <option value="63">Şanlıurfa</option>
                <option value="64">Uşak</option>
                <option value="65">Van</option>
                <option value="66">Yozgat</option>
                <option value="67">Zonguldak</option>
                <option value="68">Aksaray</option>
                <option value="69">Bayburt</option>
                <option value="70">Karaman</option>
                <option value="71">Kırıkkale</option>
                <option value="72">Batman</option>
                <option value="73">Şırnak</option>
                <option value="74">Bartın</option>
                <option value="75">Ardahan</option>
                <option value="76">Iğdır</option>
                <option value="77">Yalova</option>
                <option value="78">Karabük</option>
                <option value="79">Kilis</option>
                <option value="80">Osmaniye</option>
                <option value="81">Düzce</option>
            </select>

            <div class="invalid-feedback">
                Please select a valid state.
            </div>

        </div>
        <div class="col-md-6">
            <label for="validationCustom05" class="form-label">Pick up Date</label>
            <input type="datetime-local" class="form-control" id="validationCustom05" name="pickup_date" required>
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-6">
            <label for="validationCustom06" class="form-label">Return Date</label>
            <input type="datetime-local" class="form-control" id="validationCustom06" name="return_date" required>
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <label class="form-check-label" for="invalidCheck">
                    Agree to terms and conditions
                </label>
                <div class="invalid-feedback">
                    You must agree before submitting.
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="form-check">
                <input type="submit" name="submit" value="Submit" class="btn btn-primary btn-send  pt-2 btn-block 
                            ">
                <div class="invalid-feedback">
                    You must agree before submitting.
                </div>
            </div>
        </div>
</div>

</div>
</form>
</div>
<?php include "footer.php"; ?>