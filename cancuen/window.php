<html>
<script type="text/javascript">
<?php
echo "function openwindow(){\n";
echo "  window.open (\"$PARAMTOPRINT\",\"Help\",\"toolbar=no,location=no,directories=no,status=no,scrollbars=yes,resizable=no,copyhistory=no,width=600,height=400\");\n";
echo "}\n";
?>
</script>
<body>
<?php print_r( $PARAMTOPRINT ); ?>
      
[ <a href="javascript:openwindow()">Online manual</a> ]
</body>
</html>
