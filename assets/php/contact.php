<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $headers = "";
                $to = $_POST['email'];
                $subject = "New email from your site!";
                $name_field = $_POST['name'];
                $email_field = $_POST['email'];
                $message = $_POST['message'];
                $mail_subject = $_POST['subject'];

                $headers .= "MIME-Version: 1.0\r\n";
                $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

                $title = '<h3>Hello, sir! You have received a new mail via <span style="color: #3498db;">slatetnd</span> on your awesome website!</h3>';

                $body = "$title
                        <br/>
                        <b>From:</b> $name_field
                        <br/>
                        <b>E-Mail:</b> $email_field
                        <br/>
                        <b>Subject:</b> $mail_subject
                        <br/>
                        <b>Message:</b>\n$message
                        <br/>
                        <br/>";

                mail($to, $subject, $body, $headers);
        }
?>