
<!-- Printable Content -->
<div class="container-flude" id="printArea">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center heading-custom"style="color:green;"><span style="border-bottom:4px solid green;"> Camwel Solution LLP</span></h3>

            <table class="table display data-table text-nowrap" id="listItem">
                <thead>
                    <tr class="bg-success text-white m-0 p-0">
                        <th>Si-No.</th>
                        <th>Emp-Id</th>
                        <th>Emp Name</th>
                        <th>Mobile Number</th>
                        <th>Email-Id</th>
                        <th>Address</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td><td>EMP101</td><td>John Doe</td><td>1234567890</td><td>john@example.com</td><td>New York</td><td>Active</td><td>Edit</td>
                    </tr>
                    <tr>
                        <td>2</td><td>EMP102</td><td>Jane Smith</td><td>9876543210</td><td>jane@example.com</td><td>Los Angeles</td><td>Inactive</td><td>Edit</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Print Styles -->
<style>
@media print {
    body * {
        visibility: hidden;
    }

    #printArea, #printArea * {
        visibility: visible;
    }

    #printArea {
        position: absolute;
        left: 0;
        top: 0;
        width: 240mm;
        min-height: 297mm;
        padding: 5mm 5mm;
        border: 1px solid #000;
        box-sizing: border-box;
        background: #fff;
    }

    .heading-custom {
        background-color: red;
        color: white;
        padding: 8px 14px;
        margin-bottom: 20px;
        border-radius: 4px;
        text-align: center;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        border: 1px solid #000;
    }

    th, td {
        border: 1px solid #000;
        padding: 3px 8px;
        text-align: center;
    }

    .bg-success {
        background-color: #28a745 !important;
        color: white;
    }

    .text-white {
        color: white !important;
    }

    /* Limit to first two rows if needed */
    tbody tr:nth-child(n+3) {
        display: none;
    }
    th{
      background-color:red;
      color:green;
    }
}
</style>


