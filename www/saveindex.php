<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
     <script type="text/javascript" src="http://www.google.com/jsapi"></script><script type="text/javascript">
/*<![CDATA[*/
google.load("jquery","1.5.2");
google.load("jqueryui","1.8.2");

/*]]>*/
</script>

        <title>save multiple</title>
    </head>
    <body>
    <div id="content">
            <div class="center">
                <style type="text/css">
    #buttondiv, #dropdowndiv {padding:10px 0;}
    label { padding:0 10px;color:#0DA2C0;}
    .choices { margin:10px 0;color:#0DA2C0;}
</style>
<script type="text/javascript">
    $(document).ready(function(){
        $counter = 0; // initialize 0 for limitting textboxes
        $('#buttonadd').click(function(){
            
                $counter++;
                $('#buttondiv').append('<div><label>Data #'+$counter+'</label><input type="text" name="textbox[]" class="textbox" value="" /></div>');
         
        });

        $('#buttonremove').click(function(){
            if ($counter){
                $counter--;
                $('#buttondiv .textbox:last').parent().remove(); // get the last textbox and parent for deleting the whole div
            }else{
                alert('No More textbox to remove');
            }
        });
    });
</script>
<div style="float:left; width:232px;">
<form action="save.php" method="get">
<div id="buttondiv">

</div>
<input name="" type="submit" value="save" style="width: 232px; />
<br>
</form>
<div class="choices">
<input name="button" type="button" id="buttonadd" value="Add Textbox"/>
<input name="button" type="button" id="buttonremove" value="Remove Textbox"/>
</div>
</div>
</body>
</html>
