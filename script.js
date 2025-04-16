$('.customer-btn').click(function(){
    $('nav ul .customer-show').toggleClass("show");
    $('nav ul .first').toggleClass("rotate");
});

$('.subscribe-btn').click(function(){
    $('nav ul .subscribe-show').toggleClass("show");
    $('nav ul .second').toggleClass("rotate");
});

$('nav ul li').click(function(){
    $(this).addClass("active").siblings().removeClass("active");
});

document.addEventListener("DOMContentLoaded", function () {
    const serviceTable = document.getElementById("serviceTable").getElementsByTagName("tbody")[0];

    // Event listener untuk tombol + di baris header
    document.querySelector(".add-row").addEventListener("click", function (e) {
        e.preventDefault();

        // Buat baris baru
        const newRow = document.createElement("tr");

        // Isi kolom dengan input field dan tombol remove
        newRow.innerHTML = `
            <td></td>
            <td><input type="text" name="serviceName[]" placeholder="Service Name"></td>
            <td><input type="text" name="installationID[]" placeholder="Installation ID"></td>
            <td><input type="number" name="monthlyAmount[]" placeholder="Monthly Amount"></td>
            <td><input type="date" name="startServiceDate[]"></td>
            <td><input type="date" name="nextBillingDate[]"></td>
            <td>
                <select name="paymentStatus[]">
                    <option value="Unpaid">Unpaid</option>
                    <option value="Paid">Paid</option>
                    <option value="Pending">Pending</option>
                </select>
            </td>
            <td><button type="button" class="remove-row">Remove</button></td>
        `;

        // Menambahkan baris baru ke tabel
        serviceTable.appendChild(newRow);

        // Event listener untuk tombol "Remove" yang ada pada setiap baris
        newRow.querySelector(".remove-row").addEventListener("click", function () {
            serviceTable.removeChild(newRow);
        });
    });
});
