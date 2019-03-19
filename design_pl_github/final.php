<?php
        
           
            $conn = mysqli_connect("localhost","root","","hotel");
            $fname=$_GET['fname'];
            $email=$_GET['email'];
            $address=$_GET['adr'];
            $city=$_GET['city'];
            $state=$_GET['state'];
            $pin=$_GET['zip'];
            $cardname=$_GET['cname'];
            $cardno=$_GET['ccnum'];
            $expmonth=$_GET['expmonth'];
            $expyear=$_GET['expyear'];
            $cvv=$_GET['cvv'];
           
                 $start=$start;
                 $end=$end;
                 $rate=$rate;
        if(!$conn)
        {
            die ('could not connect'.mysql_error());
        }
        $query ="INSERT INTO booking ( fname,email,address,city,state,pin,cardname,cardno,expmonth,expyear,cvv,start,end,rate) VALUES ('$fname','$email','$address','$city','$state','$pin','$cardname','$cardno','$expmonth','$expyear','$cvv','$start','$end','$rate)";
        mysqli_query($conn,$query);
                       if(mysqli_query($conn,$query))
                                    {
                                     $message="Successfully Booked !!" ;
                                      $_SESSION['fname']=$_GET['fname'];
                                      $_SESSION['email']=$_GET['email'];
                                      $_SESSION['address']=$_GET['adr'];
                                      $_SESSION['city']=$_GET['city'];
                                       $_SESSION['state']=$_GET['state'];
                                        $_SESSION['pin']=$_GET['zip'];
                                        $_SESSION['cardname']=$_GET['cname'];
                                        $_SESSION['cardno']=$_GET['ccnum'];
                                        $_SESSION['expmonth']=$_GET['expmonth'];
                                        $_SESSION['expyear']=$_GET['expyear'];
                                        $_SESSION['cvv']=$_GET['cvv'];
                                        $_SESSION['ratee']=$rate;
                                         $_SESSION['start']=$start;
                                          $_SESSION['end']=$end;
                          
                              echo "<script type='text/javascript'>alert('$message');
                                     window.location.replace('receipt.php')</script>";
      
                   
                
      // $extra="hotel1/public_html/book.php/receipt.php";
       // $host=$_SERVER['HTTP_HOST'];
        //$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
     //echo  $host;// $uri;   
                //$encode="?fname=".$fname.
       // header("location:http:/$host/hotel1/public_html/book.php/receipt.php");
                  }
            
?>