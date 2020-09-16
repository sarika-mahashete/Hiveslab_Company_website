<!DOCTYPE html>
<!--
      | $$ |            | $$ | $$ $$  $$  $$ $$ \ $$ \              / $$ /| $$ $$ $$ $$    /  $$ $$ $$ $$ $\
      | $$ |            | $$ | __ __  $$  __ __  \ $$ \            / $$ / | $$ __ __ __   /     __  ___ ___ |
      | $$ |            | $$ |      | $$ |        \ $$ \          / $$ /  | $$ |          | $$ |  
      | $$ |__ __ __ ___| $$ |      | $$ |         \ $$ \        / $$ /   | $$ |          | $$ | 
      | $$ $$ $$ $$ $$ $$ $$ |      | $$ |          \ $$ \      / $$ /    | $$ |___ ___   | $$ |__ __-__ _
      |     __ __ __ ___     |      | $$ |           \ $$ \    / $$ /     | $$ $$ $$ $$   | $$ $$ $$ $$ $$\
      | $$ |            | $$ |      | $$ |            \ $$ \  / $$ /      | $$ __ __ __   |__ __ __ __ _ $$\ 
      | $$ |            | $$ | __ __| $$ |__ __        \ $$ \/ $$ /       | $$ |                        \ $$| 
      | $$ |            | $$ | $$ $$  $$  $$ $$         \ $$  $$ /        | $$ |__ __ _     __ __ __ __ _|$$|
      | $$ |            | $$ | __ __  _ _ __ __          \  $$  /         | $$ $$ $$ $$    / $$ $$ $$ $$ $$ |

   WE ARE A DIGITAL AGENCY WITH CREATIVE TEAM THAT SOLVE PROBLEM OR GIVE SOLUTION FOR GROWING / ESTABLISHING THE BUSINESS.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hives Online India PVT LTD</title>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.7/darkly/bootstrap.min.css" rel="stylesheet">
    <style>
      .footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #191970;
   color: white;
   text-align: center;
}
        .clearfix:after {
  content: "";
  display: table;
  clear: both;
}

a {
  color: #5D6975;
  text-decoration: underline;
}

body {
  position: relative;
  width: 21cm;  
  height: 29.7cm; 
  margin: 0 auto; 
  color: #001028;
  background: #FFFFFF; 
  font-family: Arial, sans-serif; 
  font-size: 12px; 
  font-family: Arial;
}

header {
  padding: 10px 0;
  margin-bottom: 30px;
}

#logo {
  text-align: center;
  margin-bottom: 10px;
}

#logo img {
  width: 150px;
  height: 150px;
}

h1 {
  border-top: 1px solid  #5D6975;
  border-bottom: 1px solid  #5D6975;
  color: white;
  font-size: 2.4em;
  line-height: 1.4em;
  font-weight: normal;
  text-align: center;
  margin: 0 0 20px 0;
  background-color: #191970;
}

#project {
  float: left;
}

#project span {
  color: #5D6975;
  text-align: left;
  width: 52px;
  margin-right: 10px;
  display: inline-block;
  font-size: 0.8em;
}

#company {
  float: right;
  text-align: left;
  font-weight: bold;
}

#project div,
#company div {
  white-space: nowrap;
  font-weight: bold;        
}

        .delete-btn {
            position: relative;
        }

        .delete {
            display: block;
            color: #000;
            text-decoration: none;
            position: absolute;
            background: #EEEEEE;
            font-weight: bold;
            padding: 0px 3px;
            border: 1px solid;
            top: -6px;
            left: -6px;
            font-family: Verdana;
            font-size: 12px;
        }
        @media print {
         #hiderow{
          display: none;
         }
         #delete{
          display: none;
         }
        }
    </style>
</head>
<body>
   
    <div class="container" style="margin-top:10px; width: 800px;">
        <header class="clearfix">
      <div id="logo">
        <img src="Logo.png">
      </div>
      <h1 style="margin-right: -50px"><span style="float: left;font-size: 10px; display: inline-block; margin-left: 10px;">DATE:<p style="display: inline-block;font-size: 10px;"><?php echo date('d/m/y');?></p></span>INVOICE<span style="float: right; font-size: 10px; margin-right: 20px;">Receipt NO:<span style="margin-left: 10px;"><?php echo'#'.(rand(1111,9999));?></span></span></h1>
      
      <div id="company" class="clearfix">
        <div>Hives Online India Pvt Ltd</div>
        <div>Flat No 1, Giridhar Society, near Mayuresh Society,<br /> Baner-Balewadi Road, Baner, Pune-411045</div>
        <div>+91 9604 060 060</div>
        <div>info@eshopmarketing.in</div>
      </div>
      <div id="project">
        <div><span>Project</span><span contenteditable="true">Website development</span></div>
        <div><span>Client</span><span contenteditable="true"> ABC</span></div>
        <div><span>Customer Id</span><span contenteditable="true"> 12345</span></div>
        <div><span>Address</span><span contenteditable="true"> XYZ streat, Pune-411365</span></div>
        <div><span>Email</span><span contenteditable="true">abc@yahoo.com</span></div>
        <div><span>Contact</span><span contenteditable="true">+00 0000 000 000</span></div>
       
      </div>
    </header>
       
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="item-row">
                                <th>Service</th>
                                <th>Description</th>
                                <th>Quntity</th>
                                <th>Cost</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                        <tr id="hiderow">
                            <td colspan="4">
                                <a id="addRow" href="javascript:;" title="Add a row" class="btn btn-primary">Add a row</a>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td class="text-right"><strong>Total</strong></td>
                            <td><span id="subtotal">0.00</span></td>
                        </tr>
                       <!--  <tr>
                            <td></td>
                            <td></td>
                            <td class="text-right"><strong>Changable Cost</strong></td>
                            <td><input class="form-control" id="discount" value="0" type="text"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td class="text-right"><strong>Maintenance</strong></td>
                            <td><input class="form-control" id="shipping" value="0" type="text"></td>
                        </tr> -->
                        <!-- <tr>
                            <td></td>
                            <td></td>
                            <td class="text-right"><strong>Grand Total</strong></td>
                            <td><span id="grandTotal">0</span></td>
                        </tr> -->
                        <!-- <tr>
                            <td><strong><input class="form-control" id="shipping" value="Summary" type="text"></strong></td>
                            <td colspan="3">
                              <textarea class="form-control"></textarea>
                            </td>
                        </tr> -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div id="notices">
        <div style="font-weight: bold;"><strong><input class="form-control" id="shipping" value="Summary:" type="text"></strong></div>
        <div class="notice">
          <textarea class="form-control"></textarea>
        </div>
    </div><br><br>   
    <div id="notices">
        <div style="font-weight: bold;">NOTICE:</div>
        <div class="notice" style="font-weight: bold;">This invoice was created on a computer and is valid without the signature and seal.</div>
    </div>   
     
        <div class="footer">
          <p>Copyright © 2019 - HIVES ONLINE INDIA PVT. LTD. All Rights Reserved.</p>
        </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="jquery.invoice.js"></script>
    <script>
        jQuery(document).ready(function(){
            jQuery().invoice({
                addRow : "#addRow",
                delete : ".delete",
                parentClass : ".item-row",

                price : ".price",
                qty : ".qty",
                total : ".total",
                totalQty: "#totalQty",

                subtotal : "#subtotal",
                discount: "#discount",
                shipping : "#shipping",
                grandTotal : "#grandTotal"
            });
        });
    </script>
</body>
<!-- <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script> -->

</html>
