{literal}
<SCRIPT language=javascript1.1>
 var ie4 = (document.all)
 if (!ie4)
  document.write("<" + "script SRC=\"../dhtmllib2.js\"><\/script>")
 else
  setup = new Function()
</SCRIPT>

<SCRIPT language=javascript1.2>
 function lead0(val)
 {
  return val<10 ? "0"+val.toString() : val
 }

 function buildTime() {
  var time = new Date()
  var ampm = "AM"
  var h=time.getHours()
  if (h > 12) {h = h - 12; ampm = " PM";}
   return h+":"+lead0(time.getMinutes())+":"+ lead0(time.getSeconds()) + ampm
 }

 function tick() {
  document.all.clock.innerHTML = buildTime()
 }    
     function doLoad() {
       setup()
       setInterval("tick()",900)
     }
     window.onload = doLoad;
</SCRIPT>
{/literal}

