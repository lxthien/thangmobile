<?php
$left_advertise = $this->advertise_model->read_by_id(2);
$right_advertise = $this->advertise_model->read_by_id(3);
if ($left_advertise->logo != '' && $left_advertise->logo != null) {
    ?>
    <div id="divAdLeft" style="display: block; position: absolute; top: 10px; left: 0px;">
        <a href="<?php echo $left_advertise->url; ?>"><img
                src="<?php echo base_url(PARTNER_LOGO . '/ads/' . $left_advertise->logo); ?>"></a>
    </div>
<?php
}
if ($right_advertise->logo != '' && $right_advertise->logo != null) {
    ?>
    <div id="divAdRight" style="display: block; position: absolute; top: 10px;">
        <a href="<?php echo $right_advertise->url; ?>"><img
                src="<?php echo base_url(PARTNER_LOGO . '/ads/' . $right_advertise->logo); ?>"></a>
    </div>
<?php } ?>
<script>
    function FloatTopDiv() {
        startLX = ((document.body.clientWidth - MainContentW) / 2) - LeftBannerW - LeftAdjust , startLY = TopAdjust + 80;
        startRX = ((document.body.clientWidth - MainContentW) / 2) + MainContentW + RightAdjust , startRY = TopAdjust + 80;
        var d = document;

        function ml(id) {
            var el = d.getElementById ? d.getElementById(id) : d.all ? d.all[id] : d.layers[id];
            el.sP = function (x, y) {
                this.style.left = x + 'px';
                this.style.top = y + 'px';
            };
            el.x = startRX;
            el.y = startRY;
            return el;
        }

        function m2(id) {
            var e2 = d.getElementById ? d.getElementById(id) : d.all ? d.all[id] : d.layers[id];
            e2.sP = function (x, y) {
                this.style.left = x + 'px';
                this.style.top = y + 'px';
            };
            e2.x = startLX;
            e2.y = startLY;
            return e2;
        }

        window.stayTopLeft = function () {
            var objAdDivRight = document.getElementById("divAdRight");
            var objAdDivLeft = document.getElementById("divAdLeft");

            if (document.documentElement && document.documentElement.scrollTop)
                var pY = document.documentElement.scrollTop;
            else if (document.body)
                var pY = document.body.scrollTop;
            if (document.body.scrollTop > 30) {
                startLY = 3;
                startRY = 3;
            } else {
                startLY = TopAdjust;
                startRY = TopAdjust;
            }
            ;
            if (objAdDivRight != null) {
                ftlObj.y += (pY + startRY - ftlObj.y) / 16;
                ftlObj.sP(ftlObj.x, ftlObj.y);
            }
            if (objAdDivLeft != null) {
                ftlObj2.y += (pY + startLY - ftlObj2.y) / 16;
                ftlObj2.sP(ftlObj2.x, ftlObj2.y);
            }
            setTimeout("stayTopLeft()", 1);
        }
        var objAdDivRight = document.getElementById("divAdRight");
        var objAdDivLeft = document.getElementById("divAdLeft");

        if (objAdDivRight != null) ftlObj = ml("divAdRight");

        ftlObj2 = m2("divAdLeft");
        if (objAdDivLeft != null) stayTopLeft();
    }

    function ShowAdDiv() {
        var objAdDivRight = document.getElementById("divAdRight");
        var objAdDivLeft = document.getElementById("divAdLeft");
        if (document.body.clientWidth < 1000) {
            if (objAdDivRight != null) objAdDivRight.style.display = "none";
            if (objAdDivLeft != null) objAdDivLeft.style.display = "none";
        }
        else {
            if (objAdDivRight != null) objAdDivRight.style.display = "block";
            if (objAdDivLeft != null) objAdDivLeft.style.display = "block";
            FloatTopDiv();
        }
    }
</script>

<script>
    document.write("<script type='text/javascript' language='javascript'>MainContentW = 1000;LeftBannerW = 125;RightBannerW = 125;LeftAdjust = 20;RightAdjust = 20;TopAdjust = 10;ShowAdDiv();window.onresize=ShowAdDiv;;<\/script>");
</script>
<script type="text/javascript" language="javascript">
    MainContentW = 1000;
    LeftBannerW = 125;
    RightBannerW = 125;
    LeftAdjust = 20;
    RightAdjust = -5;
    TopAdjust = 10;
    ShowAdDiv();
    window.onresize = ShowAdDiv;
    ;
</script>