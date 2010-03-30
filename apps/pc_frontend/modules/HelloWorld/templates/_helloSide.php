<div id="helloworld" style="left:0%;top:0px;position:absolute;padding:5px;font-size:40px;font-weight:bold;color:#F9F80D;">
Hello World
</div>
<script type="text/javascript">
var helloworld = document.getElementById("helloworld");
function helloworld_scroll() {
      var _top = document.documentElement.scrollTop || document.body.scrollTop;
        helloworld.style.top = _top + "px";
          setTimeout(helloworld_scroll, 200);
}
helloworld_scroll();
</script>
