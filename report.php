<?php
   $title = "Report"; 
   include ('header.php') ;
  ?>


<div class="container report-main">

        <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1 centered">

            	<h1 class="text-center report_title">Report a problem</h1>

                <p class="text-center">I&rsquo;d love to hear from you! Complete the form to send me an email.</p>

                
                	<form method="post" action="report.php">
                <table class="table table-bordered">
                        <tr class="danger">
                            <th>
                                <label for="name">Name</label>
                            </th>
                            <td>
                                <input type="text" name="name" id="name" class="form-control">
                            </td>
                        </tr>
                        <tr class="danger">
                            <th>
                                <label for="email">Email</label>
                            </th>
                            <td>
                                <input type="text" name="email" id="email"  class="form-control">
                            </td>
                        </tr>
                        <tr class="danger">
                            <th>
                                <label for="message">Message</label>
                            </th>
                            <td>
                                <textarea name="message" id="message"  class="form-control"></textarea>
                            </td>
                        </tr>                      
                </table>  
                          <input type="submit" value="Send" class="btn btn-default btn-lg btn-block">      
                    </form>
                

           

        </div>

    </div>



<?php include ('footer.php') ?>

