<p class="caution">
Hello World<br />
</p>
<div id="helloworld" style="right:0%;top:0px;position:absolute;padding:5px;font-size:32px;font-weight:bold;">
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
Hello World
