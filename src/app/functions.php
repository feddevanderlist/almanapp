<?php
//checks if first letter from initials and firstname are the same (though not everyone has the same initials because of there believe)
function checkname()
{
    $ini= mb_substr($_POST['initials'],0 ,1);
    $name=mb_substr($_POST['first_name'],0 ,1);
    if($ini==$name){
        echo "<br>succes";

    }
    else{
        echo "<br>check name and initials";

        die;

    }}

    function isduchtphone()
    {
        $areacode4=['0594'.'0595'.'0596'.'0597'.'0598'.'0599'.'0111'.'0113'.'0114'.'0115'.'0117'.'0118'.'0161'.'0162'.'0164'.'0165'.'0166'.'0167'.'0168'.'0172'.'0174'.'0180'.'0181'.'0182'.'0183'.'0184'.'0186'.'0187'.'0222'.'0223'.'0224'.'0226'.'0227'.'0228'.'0229'.'0251'.'0252'.'0255'.'0294'.'0297'.'0299'.'0313'.'0314'.'0315'.'0316'.'0317'.'0318'.'0320'.'0321'.'0341'.'0342'.'0343'.'0344'.'0345'.'0346'.'0347'.'0348'.'0411'.'0412'.'0413'.'0416'.'0418'.'0475'.'0478'.'0481'.'0485'.'0486'.'0487'.'0488'.'0492'.'0493'.'0495'.'0497'.'0499'.'0511'.'0512'.'0513'.'0514'.'0515'.'0516'.'0517'.'0518'.'0519'.'0521'.'0522'.'0523'.'0524'.'0525'.'0527'.'0528'.'0529'.'0541'.'0543'.'0544'.'0545'.'0546'.'0547'.'0548'.'0561'.'0562'.'0566'.'0570'.'0571'.'0572'.'0573'.'0575'.'0577'.'0578'.'0591'.'0592'.'0593'];
        $areacode3=['070'.'071'.'072'.'073'.'074'.'075'.'076'.'077'.'078'.'079'.'010'.'013'.'015'.'020'.'023'.'024'.'026'.'030'.'033'.'035'.'036'.'038'.'040'.'043'.'045'.'046'.'050'.'053'.'055'.'058'];
        if(mb_strcut($_POST['phone'],0,2)=='06' || in_array(mb_strcut($_POST['phone'],0,3),$areacode3) || in_array(mb_strcut($_POST['phone'],0,4),$areacode4)){
            echo "<br> dutch number";
        }
        else{
            echo "<br> enter a dutch number starting with 06 or 0xxx or 0xx ";

            die;
        }
    }
//checks for 10 numbered phone numbers and adds +31 while removing the "0"
function convertphone()
{
    global $phone;
    $nubmlength= strlen($_POST['phone']);


    if ($nubmlength == 10 && (mb_strcut($_POST['phone'],0,1)=='0')){
        $phone=mb_substr($_POST['phone'],1,$nubmlength);
        $phone="+31".$phone;
        echo "<br>correct phone number";

    }

    else{
        echo "<br>please enter a proper phonenumber";
        echo $nubmlength;
        die;
    }
}

function noentry()
{
    if (isset($_POST['submit'])) {
        if ($_POST['initials'] == "" || $_POST['first_name'] == "" || $_POST['last_name'] == "" || $_POST['postal_code'] == "" || $_POST['home_number'] == "" || $_POST['email'] == ""|| $_POST['phone'] == ""|| $_POST['passw'] == "") {
            echo "<br>error: all fields are required";
            die;
        } else {
           return "<br>proceed...";
        }
    }}


function redirect($url, $permanent = false) {
    if($permanent) {
        header('HTTP/1.1 301 Moved Permanently');
    }
    header('Location: '.$url);
    exit();
}
