<?php 
      session_start();
        $auto_some;
        $answer=$_SESSION["auto_sum"];
        echo $answer;
        /* Form Handling*/
       if(isset($_POST['submit_contact']) || isset($_POST['submit_home']) || isset($_POST['submit_modal'])){
        $name=trim($_POST["name"]);
        $mobile=trim($_POST["mobile"]);
        $email = trim($_POST["email"]);
        $message=trim($_POST["message"]);
        echo $name.$mobile.$email.$message;
        $to = "ranpc06@gmail.com";
        $subject = "Enquiry From ranpc06@gmail.com";
        $headers =  'MIME-Version: 1.0' . "\r\n"; 
        $headers .= 'From: ahe.com' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $full_message = "<html>
                        <head><title>Enquiry Data</title></head>
                        <body>
                        <table>
                            <tr>
                            <td>Name</td>
                            <td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                            <td> $name</td>
                            </tr>
                            <tr>
                            <td>Mobile No</td>
                            <td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                            <td> $mobile</td>
                            </tr>
                            <td>Email Id</td>
                            <td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                            <td> $email</td>
                            </tr>
                            <tr>
                            <td>Message</td>
                            <td>&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;</td>
                            <td> $message</td>
                            </tr>
                        </table>
                        </body>
                        </html>";
        $user=$email;
        $user_subject= "Thank You $name";
        $user_headers= 'From: ranpc06@gmail.com.com' . "\r\n";
        $user_message="Dear $name.\nWelcome to Aryaman Higher Education\n We have got your query.We will reach you soon.\nThank You!";
        $uanswer=intval(trim($_POST["uanswer"]));
        if($uanswer == $answer){
            if(mail($to,$subject,$full_message,$headers)){
                mail($user,$user_subject,$user_message,$user_headers);
                $_SESSION["response"]="<h3>Dear <span class='text-info'>$name</span>,</h3><blockquote><p>We have got your query. We will contact you soon.<br/>For Quick Enquiry <span class='text-warning'>Call Us</span> at <span class='text-info'><i class='fas fa-phone fa-rotate-90 px-2 '></i><span>  +91 9905417686 / +91 9308819517</span></span></p>
                <p>Thank You!</p></blockquote>";
            }else{
                echo $name.$mobile.$email.$message;
                $_SESSION["response"]="<h3>Dear <span class='text-info'>$name</span>,</h3><blockquote><p>Something is wrong. It seems like internet is not working well.<br/>For Quick Enquiry <span class='text-warning'>Call Us</span> at <span class='text-info'><i class='fas fa-phone fa-rotate-90 px-2 '></i><span>  +91 9905417686 / +91 9308819517</span></span></p>
                <p>Please, try again!</p><p>Thank You!</p></blockquote>";
            }
        }else{
            $_SESSION["response"]="<h3>Dear <span class='text-info'>$name</span>,</h3><blockquote><p>You have entered wrong <u class='text-warning'>captcha value</u>. Please Enter the correct value.<br/>For Quick Enquiry <span class='text-warning'>Call Us</span> at <span class='text-info'><i class='fas fa-phone fa-rotate-90 px-2 '></i><span> +91 9905417686 / +91 9308819517</span></span></p>
            <p>Please, try again!</p><p>Thank You!</p></blockquote>";
        }
        header("Location:response.php");
       
       }
       
    ?>