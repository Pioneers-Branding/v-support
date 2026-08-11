<?php


$subject = "V-Supporting Lives Website Leads Details";
                $message = "<table style='border-collapse: collapse' border='1' cellspacing='0' cellpadding='6'>
                    <tbody>
                        <tr style='background: #47B7E8; color: #ffffff;'>
                            <th colspan='2'>Contact Information</th>
                        </tr>
            
                        <tr style='background: #eee;'>
                            <td>Name</td><td>{$_POST['name']}</td>
                        </tr>
                        <tr style='background: #eee;'>
                            <td>Phone</td><td>{$_POST['phone']}</td>
                        </tr> 
                        <tr style='background: #eee;'>
                            <td>Subject</td><td>{$_POST['subject']}</td>
                        </tr>
                        <tr style='background: #eee;'>
                            <td>Email</td><td>{$_POST['email']}</td>
                        </tr>  
                        
                         <tr style='background: #eee;'>
                            <td>Message</td><td>{$_POST['message']}</td>
                        </tr>
                        
                        
                    </tbody>
                </table>";
                
                
              
                    
                    $to = "Littleflowerkidzeemedia.123@gmail.com,formquery@convicare.com,bpwithlinux@gmail.com";
                    $from = "infor@brandingpioneers.co.in";
                   
                    $headers .= 'MIME-Version: 1.0'."\r\n";
                    $headers ="From: $from \r\n";
                    $headers .= 'Content-type:text/html;charset=iso-8859-1'."\r\n"; 
                    if(@mail($to,$subject,$message,$headers)){
                        $redirect = 'index';
                        echo "<script>window.location='{$redirect}';</script>";
                   
                    }



?>