<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title></title>

</head>
<body>

<div class="TTWForm-container">
     
     
     <form action="process_form.php" class="TTWForm" method="post" novalidate="">
          
          
          <div id="field2-container" class="field f_100">
               <label for="field2">
                    Common Name (CN)
               </label>
               <input name="common name" id="field2" required="required" type="text">
          </div>
          
          
          <div id="field3-container" class="field f_100">
               <label for="field3">
                    Organization (O)
               </label>
               <input name="organization" id="field3" required="required" type="text">
          </div>
          
          
          <div id="field4-container" class="field f_100">
               <label for="field4">
                    Organization unit (OU)
               </label>
               <input name="organization unit" id="field4" required="required" type="text">
          </div>
          
          
          <div id="field1-container" class="field f_100">
               <label for="field1">
                    Email Address
               </label>
               <input name="field1" id="field1" required="required" type="email">
          </div>
          
          
          <div id="field5-container" class="field f_100 radio-group required">
               <label for="field5-1">
                    Validity (days)
               </label>
               
               
               <div class="option clearfix">
                    <input name="validity" id="field5-1" value="365" type="radio">
                    <span class="option-title">
                         365
                    </span>
               </div>
               
               
               <div class="option clearfix">
                    <input name="validity" id="field5-2" value="730" type="radio">
                    <span class="option-title">
                         730
                    </span>
               </div>
          </div>
          
          
          <div id="form-submit" class="field f_100 clearfix submit">
               <input value="Submit" type="submit">
          </div>
     </form>
</div>

</body>
</html>