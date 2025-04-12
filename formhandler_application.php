<?php session_start();

if (isset($_POST['submit'])) {
    $name = trim($_REQUEST["name"]);
    $fathername = trim($_REQUEST["fathername"]);
    $mothername = trim($_REQUEST["mothername"]);
    $mobile = trim($_REQUEST["number"]);
    $email = trim($_REQUEST["email"]);
    $dob = trim($_REQUEST["dob"]);
    $gender = trim($_REQUEST["gender"]);
    $address = trim($_REQUEST["address"]);
    $program = trim($_REQUEST["program"]);
    $qualification = trim($_REQUEST["qualification"]);
    $yoc = trim($_REQUEST["yoc"]);
    $status = trim($_REQUEST["status"]);


    if (strlen($name) >= 3 && $email != "" && strlen($mobile) == 10) {

        $to = "camwelseo@gmail.com,camwelbis@gmail.com,sales@camwel.com";
        $subject = "Demo Enquiry From Camwel.org ";
        $headers = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'From: Camwel.org' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $full_message = "<html>
                            <head><title>Application Form Enquiry Data</title></head>
                            <body>
                            <table>
                                <tr>
                                <td>Name</td>
                                <td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                                <td> $name </td>
                                </tr>
                                <tr>
                                <td>Email Id</td>
                                <td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                                <td> $email </td>
                                </tr>
                                <tr>
                                <td>Mobile Number</td>
                                <td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                                <td> $mobile </td>
                                </tr>
                                
                                <tr>
                                <td>Father Name</td>
                                <td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                                <td> $fathername </td>
                                </tr>
                                <tr>
                                <td>Mother Name</td>
                                <td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                                <td> $mothername </td>
                                </tr>
                                <tr>
                                <td>D.O.B</td>
                                <td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                                <td> $dob </td>
                                </tr>
                                <tr>
                                <td>Gender</td>
                                <td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                                <td> $gender </td>
                                </tr>
                                <tr>
                                <td>Address</td>
                                <td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                                <td> $address </td>
                                </tr>
                                <tr>
                                <td>Program</td>
                                <td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                                <td> $program </td>
                                </tr>
                                <tr>
                                <td>Qualification</td>
                                <td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                                <td> $qualification </td>
                                </tr>
                                <tr>
                                <td>Year Of Completetion</td>
                                <td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                                <td> $yoc </td>
                                </tr>
                                <tr>
                                <td>Status</td>
                                <td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                                <td> $status </td>
                                </tr>
                                
                            </table>
                            </body>
                            </html>";


        $user = $email;
        $user_subject = "Thank You $name";
        $user_headers = 'From: Camwel.Org' . "\r\n";
        $user_message = "Dear $name.\nWelcome to Ashoka Nursing\n We have got your query.We will reach you soon.\nThank You!";
        // $uanswer = intval(trim($_POST["uanswer"]));

        if (mail($to, $subject, $full_message, $headers)) {
            mail($user, $user_subject, $user_message, $user_headers);
            $_SESSION["response"] = "<h3 style='color:#80ba26'>Dear <span class='text-info'>$name</span>,</h3><blockquote><p>We have got your query. We will contact you soon.<br/>For Quick Enquiry <span class='text-warning'>Call Us</span> at <span class='text-info'><i class='fa fa-phone fa-rotate-90'></i><span> <a href='tel:+91 9430679729'>+91 9430679729, </a><a href='tel:9308819517'> 9308819517</a></span></span></p>
                                <p>Thank You!</p></blockquote>";
        } else {
            $_SESSION["response"] = "<h3 style='color:#80ba26'>Dear <span class='text-info'>$name</span>,</h3><blockquote><p>Something is wrong. It seems like internet is not working well.<br/>For Quick Enquiry <span class='text-warning'>Call Us</span> at <span class='text-info'><i class='fa fa-phone fa-rotate-90'></i><span> <a href='tel:9430679729'>+91 9430679729,</a><a href='tel:9308819517'>+91 9308819517</a></span></span></p>
                                <p>Please, try again!</p><p>Thank You!</p></blockquote>";
        }
    } else {
        $_SESSION["response"] = "<h3>Dear <span class='text-info'>$name</span>,</h3><blockquote><p>You have entered wrong <u class='text-warning'>information</u>. Please Enter the correct value.<br/>For Quick Enquiry <span class='text-warning'>Call Us</span> at <span class='text-info'><i class='fa fa-phone  px-2 '></i><span> <a href='tel:9308819517'>+91 9308819517,</a><a href='tel:9430679729'> +91 9430679729</a></span></span></p>
        <p>Please, try again!</p><p>Thank You!</p></blockquote>";
    }

    header('Location: thank_you.php');


}
