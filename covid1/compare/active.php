
<br />
<b>Warning</b>:  Undefined array key "name1" in <b>/var/www/majhi.dev0/covid1/compare/active.php</b> on line <b>6</b><br />
<br />
<b>Warning</b>:  Undefined array key "name2" in <b>/var/www/majhi.dev0/covid1/compare/active.php</b> on line <b>15</b><br />

<html>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
<meta name="description" content="Covid 19 tracker">
<meta name="keywords" content="covid 19, india, covid 19 india, corona virus">
<meta name="author" content="Parameshwar Majhi">
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
          <script src="https://www.gstatic.com/charts/loader.js"></script>

    <style type="text/css" media="screen">
      #flex_parent{
      display: flex;
      }
      #flex_pane1{
      flex: 2;
      }
      #flex_pane2{
      flex: 5;
      }
      #user_form p{
      background-color:#00ffff;
      border: none;
      color: black;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
      width: 100%;

      }
      body{
      background-color: #e0ffff;
      }
      #the_submit_button{
      background-color:#c0c0c0;

      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      
      }
      #header{
      text-align: center;
      }
    </style>
    <!--https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Selectors-->
  </head>
  <body>

    <div id="header">
      <h2>Compare Covid-19 active cases between two countries</h2>
    </div>


<style>
.parent_flex_box_navigation_bar{
display: flex;
justify-content: center;
padding-top: 10px;
padding-left:5px;
background-color:#b0c4de;
border: solid black 2px;
}

.parent_flex_box_navigation_bar .navi{
width: 40%;
background-color:#e0ffff;
color: black;
border: solid red 2px;
padding-top: 2%;
padding-bottom: 2%;
padding-left: 1%;
margin: 2%;
}

.navi:hover{
background-color: #afeeee;
cursor: pointer;
}

</style>

<div class="parent_flex_box_navigation_bar">
  <div class="navi" id="active"> active cases </div>
  <div class="navi" id="total"> total cases </div>
  <div class="navi" id="recovered"> recovered cases </div>
  <div class="navi" id="deaths"> deaths </div>
  <div class="navi" id="tests"> tests </div>
</div>
<script>
$(document).ready(function(){
$("#active").on("click", function(){
window.open('active.php');
});
});

$(document).ready(function(){
$("#total").on("click", function(){
window.open('total.php');
});
});

$(document).ready(function(){
$("#recovered").on("click", function(){
window.open('recovered.php');
});
});

$(document).ready(function(){
$("#deaths").on("click", function(){
window.open('deaths.php');
});
});

$(document).ready(function(){
$("#tests").on("click", function(){
window.open('tests.php');
});
});

</script>
    
    <div id="flex_parent">
      <div id="flex_pane1">

<div id="user_form" class="user_form" >
  <form method="post" id="form1" autocomplete="off" action="active.php" >
    <label for='cars'>  </label>
      <p>select country 1</p>
    <select id="city1" name="name1" size="5"  onchange="magic()">

	      
    </select>

    <label for='cars'>  </label>
      <p>select country 2</p>
    <select id="city2" name="name2" size="5"  onchange="magic1()">
      <br />
<b>Warning</b>:  Undefined variable $html_state_list2 in <b>/var/www/majhi.dev0/covid1/compare/active.php</b> on line <b>103</b><br />
    
    </select>

<hr>
     <input id="the_submit_button" type="submit" ; margin-right:150px;margin-top: 20px;margin-left: 10px;width: 200px;height: 40px;padding=10px; font-size: 2em; background-color: grey; " disabled>

     </form>
     </div>


<script>
  var country_list=[];
country_list['USA'] = 'USA' ;
country_list['India'] = 'India' ;
country_list['Brazil'] = 'Brazil' ;
country_list['Russia'] = 'Russia' ;
country_list['France'] = 'France' ;
country_list['Spain'] = 'Spain' ;
country_list['UK'] = 'UK' ;
country_list['Italy'] = 'Italy' ;
country_list['Argentina'] = 'Argentina' ;
country_list['Colombia'] = 'Colombia' ;
country_list['Mexico'] = 'Mexico' ;
country_list['Germany'] = 'Germany' ;
country_list['Poland'] = 'Poland' ;
country_list['Iran'] = 'Iran' ;
country_list['Peru'] = 'Peru' ;
country_list['South Africa'] = 'South_Africa'  ;
country_list['Ukraine'] = 'Ukraine' ;
country_list['Turkey'] = 'Turkey' ;
country_list['Belgium'] = 'Belgium' ;
country_list['Iraq'] = 'Iraq' ;
country_list['Indonesia'] = 'Indonesia' ;
country_list['Chile'] = 'Chile' ;
country_list['Netherlands'] = 'Netherlands' ;
country_list['Czechia'] = 'Czechia' ;
country_list['Romania'] = 'Romania' ;
country_list['Bangladesh'] = 'Bangladesh' ;
country_list['Philippines'] = 'Philippines' ;
country_list['Pakistan'] = 'Pakistan' ;
country_list['Canada'] = 'Canada' ;
country_list['Morocco'] = 'Morocco' ;
country_list['Saudi Arabia'] = 'Saudi_Arabia';
country_list['Israel'] = 'Israel' ;
country_list['Switzerland'] = 'Switzerland' ;
country_list['Portugal'] = 'Portugal' ;
country_list['Austria'] = 'Austria' ;
country_list['Sweden'] = 'Sweden' ;
country_list['Nepal'] = 'Nepal' ;
country_list['Hungary'] = 'Hungary' ;
country_list['Jordan'] = 'Jordan' ;
country_list['Serbia'] = 'Serbia' ;
country_list['Ecuador'] = 'Ecuador' ;
country_list['UAE'] = 'UAE' ;
country_list['Panama'] = 'Panama' ;
country_list['Bulgaria'] = 'Bulgaria' ;
country_list['Japan'] = 'Japan' ;
country_list['Georgia'] = 'Georgia' ;
country_list['Dominican Republic'] = 'Dominican_Republic' ;
country_list['Bolivia'] = 'Bolivia' ;
country_list['Kuwait'] = 'Kuwait' ;
country_list['Costa Rica'] = 'Costa_Rica' ;
country_list['Belarus'] = 'Belarus' ;
country_list['Qatar'] = 'Qatar' ;
country_list['Croatia'] = 'Croatia' ;
country_list['Armenia'] = 'Armenia' ;
country_list['Kazakhstan'] = 'Kazakhstan' ;
country_list['Azerbaijan'] = 'Azerbaijan' ;
country_list['Lebanon'] = 'Lebanon' ;
country_list['Oman'] = 'Oman' ;
country_list['Guatemala'] = 'Guatemala' ;
country_list['Egypt'] = 'Egypt' ;
country_list['Moldova'] = 'Moldova' ;
country_list['Ethiopia'] = 'Ethiopia' ;
country_list['Greece'] = 'Greece' ;
country_list['Slovakia'] = 'Slovakia' ;
country_list['Honduras'] = 'Honduras' ;
country_list['Venezuela'] = 'Venezuela' ;
country_list['Tunisia'] = 'Tunisia' ;
country_list['Myanmar'] = 'Myanmar' ;
country_list['Palestine'] = 'Palestine' ;
country_list['Bosnia and Herzegovina'] = 'Bosnia_and_Herzegovina' ;
country_list['Bahrain'] = 'Bahrain' ;
country_list['Kenya'] = 'Kenya' ;
country_list['Algeria'] = 'Algeria' ;
country_list['Paraguay'] = 'Paraguay' ;
country_list['Denmark'] = 'Denmark' ;
country_list['Libya'] = 'Libya' ;
country_list['Slovenia'] = 'Slovenia' ;
country_list['Kyrgyzstan'] = 'Kyrgyzstan' ;
country_list['Uzbekistan'] = 'Uzbekistan' ;
country_list['Ireland'] = 'Ireland' ;
country_list['Malaysia'] = 'Malaysia' ;
country_list['Nigeria'] = 'Nigeria' ;
country_list['Lithuania'] = 'Lithuania' ;
country_list['North Macedonia'] = 'North_Macedonia' ;
country_list['Singapore'] = 'Singapore' ;
country_list['Ghana'] = 'Ghana' ;
country_list['Afghanistan'] = 'Afghanistan' ;
country_list['Albania'] = 'Albania' ;
country_list['El Salvador'] = 'El_Salvador' ;
country_list['Norway'] = 'Norway' ;
country_list['Montenegro'] = 'Montenegro' ;
country_list['Luxembourg'] = 'Luxembourg' ;
country_list['S. Korea'] = 'S__Korea' ;
country_list['Australia'] = 'Australia' ;
country_list['Finland'] = 'Finland' ;
country_list['Sri Lanka'] = 'Sri_Lanka' ;
country_list['Cameroon'] = 'Cameroon' ;
country_list['Uganda'] = 'Uganda' ;
country_list['Ivory Coast'] = 'Ivory_Coast' ;
country_list['Latvia'] = 'Latvia' ;
country_list['Sudan'] = 'Sudan' ;
country_list['Zambia'] = 'Zambia' ;
country_list['Madagascar'] = 'Madagascar' ;
country_list['Senegal'] = 'Senegal' ;
country_list['Mozambique'] = 'Mozambique' ;
country_list['Angola'] = 'Angola' ;
country_list['French Polynesia'] = 'French_Polynesia' ;
country_list['Namibia'] = 'Namibia' ;
country_list['Estonia'] = 'Estonia' ;
country_list['Guinea'] = 'Guinea' ;
country_list['DRC'] = 'DRC' ;
country_list['Maldives'] = 'Maldives' ;
country_list['Tajikistan'] = 'Tajikistan' ;
country_list['Botswana'] = 'Botswana' ;
country_list['Cyprus'] = 'Cyprus' ;
country_list['French Guiana'] = 'French_Guiana' ;
country_list['Cabo Verde'] = 'Cabo_Verde' ;
country_list['Jamaica'] = 'Jamaica' ;
country_list['Zimbabwe'] = 'Zimbabwe' ;
country_list['Malta'] = 'Malta' ;
country_list['Haiti'] = 'Haiti' ;
country_list['Gabon'] = 'Gabon' ;
country_list['Mauritania'] = 'Mauritania' ;
country_list['Cuba'] = 'Cuba' ;
country_list['Guadeloupe'] = 'Guadeloupe' ;
country_list['Syria'] = 'Syria' ;
country_list['Réunion'] = 'Réunion' ;
country_list['Bahamas'] = 'Bahamas' ;
country_list['Belize'] = 'Belize' ;
country_list['Andorra'] = 'Andorra' ;
country_list['Trinidad and Tobago'] = 'Trinidad_and_Tobago' ;
country_list['Hong Kong'] = 'Hong_Kong' ;
country_list['Eswatini'] = 'Eswatini' ;
country_list['Uruguay'] = 'Uruguay' ;
country_list['Malawi'] = 'Malawi' ;
country_list['Rwanda'] = 'Rwanda' ;
country_list['Nicaragua'] = 'Nicaragua' ;
country_list['Congo'] = 'Congo' ;
country_list['Djibouti'] = 'Djibouti' ;
country_list['Guyana'] = 'Guyana' ;
country_list['Martinique'] = 'Martinique' ;
country_list['Iceland'] = 'Iceland' ;
country_list['Suriname'] = 'Suriname' ;
country_list['Mayotte'] = 'Mayotte' ;
country_list['Equatorial Guinea'] = 'Equatorial_Guinea' ;
country_list['Aruba'] = 'Aruba' ;
country_list['CAR'] = 'CAR' ;
country_list['Mali'] = 'Mali' ;
country_list['Somalia'] = 'Somalia' ;
country_list['Thailand'] = 'Thailand' ;
country_list['Gambia'] = 'Gambia' ;
country_list['South Sudan'] = 'South_Sudan' ;
country_list['Burkina Faso'] = 'Burkina_Faso' ;
country_list['Benin'] = 'Benin' ;
country_list['Togo'] = 'Togo' ;
country_list['Curaçao'] = 'Curaçao' ;
country_list['Guinea-Bissau'] = 'Guinea_Bissau' ;
country_list['Sierra Leone'] = 'Sierra_Leone' ;
country_list['Yemen'] = 'Yemen' ;
country_list['Lesotho'] = 'Lesotho' ;
country_list['New Zealand'] = 'New_Zealand' ;
country_list['San Marino'] = 'San_Marino' ;
country_list['Chad'] = 'Chad' ;
country_list['Liberia'] = 'Liberia' ;
country_list['Niger'] = 'Niger' ;
country_list['Channel Islands'] = 'Channel_Islands' ;
country_list['Vietnam'] = 'Vietnam' ;
country_list['Liechtenstein'] = 'Liechtenstein' ;
country_list['Sint Maarten'] = 'Sint_Maarten' ;
country_list['Gibraltar'] = 'Gibraltar' ;
country_list['Sao Tome and Principe'] = 'Sao_Tome_and_Principe' ;
country_list['Mongolia'] = 'Mongolia' ;
country_list['Turks and Caicos'] = 'Turks_and_Caicos' ;
country_list['Saint Martin'] = 'Saint_Martin' ;
country_list['Diamond Princess'] = 'Diamond_Princess' ;
country_list['Burundi'] = 'Burundi' ;
country_list['Taiwan'] = 'Taiwan' ;
country_list['Papua New Guinea'] = 'Papua_New_Guinea' ;
country_list['Monaco'] = 'Monaco' ;
country_list['Comoros'] = 'Comoros' ;
country_list['Eritrea'] = 'Eritrea' ;
country_list['Tanzania'] = 'Tanzania' ;
country_list['Mauritius'] = 'Mauritius' ;
country_list['Faeroe Islands'] = 'Faeroe_Islands' ;
country_list['Bhutan'] = 'Bhutan' ;
country_list['Isle of Man'] = 'Isle_of_Man' ;
country_list['Cambodia'] = 'Cambodia' ;
country_list['Cayman Islands'] = 'Cayman_Islands' ;
country_list['Barbados'] = 'Barbados' ;
country_list['Bermuda'] = 'Bermuda' ;
country_list['Saint Lucia'] = 'Saint_Lucia' ;
country_list['Seychelles'] = 'Seychelles' ;
country_list['Caribbean Netherlands'] = 'Caribbean_Netherlands' ;
country_list['Brunei '] = 'Brunei_' ;
country_list['St. Barth'] = 'St__Barth' ;
country_list['Antigua and Barbuda'] = 'Antigua_and_Barbuda' ;
country_list['St. Vincent Grenadines'] = 'St__Vincent_Grenadines' ;
country_list['Dominica'] = 'Dominica' ;
country_list['British Virgin Islands'] = 'British_Virgin_Islands' ;
country_list['Macao'] = 'Macao' ;
country_list['Fiji'] = 'Fiji' ;
country_list['Grenada'] = 'Grenada' ;
country_list['Laos'] = 'Laos' ;
country_list['New Caledonia'] = 'New_Caledonia' ;
country_list['Timor-Leste'] = 'Timor_Leste' ;
country_list['Vatican City'] = 'Vatican_City' ;
country_list['Saint Kitts and Nevis'] = 'Saint_Kitts_and_Nevis' ;
country_list['Greenland'] = 'Greenland' ;
country_list['Falkland Islands'] = 'Falkland_Islands' ;
country_list['Solomon Islands'] = 'Solomon_Islands' ;
country_list['Saint Pierre Miquelon'] = 'Saint_Pierre_Miquelon' ;
country_list['Montserrat'] = 'Montserrat' ;
country_list['Western Sahara'] = 'Western_Sahara' ;
country_list['MS Zaandam'] = 'MS_Zaandam' ;
country_list['Anguilla'] = 'Anguilla' ;
country_list['Marshall Islands'] = 'Marshall_Islands' ;
country_list['Wallis and Futuna'] = 'Wallis_and_Futuna' ;
country_list['Samoa'] = 'Samoa' ;
country_list['Vanuatu'] = 'Vanuatu' ;
country_list['China'] = 'China'            ;
country_list['Micronesia'] = 'Micronesia'            ;

  </script>



	

<script>

var countries=['USA',
'India', 
'Brazil', 
'Russia', 
'France', 
'Spain', 
'UK', 
'Italy', 
'Argentina', 
'Colombia', 
'Mexico', 
'Germany', 
'Poland', 
'Iran', 
'Peru', 
'South Africa', 
'Ukraine', 
'Turkey', 
'Belgium', 
'Iraq', 
'Indonesia', 
'Chile', 
'Netherlands', 
'Czechia', 
'Romania', 
'Bangladesh', 
'Philippines', 
'Pakistan', 
'Canada', 
'Morocco', 
'Saudi Arabia', 
'Israel', 
'Switzerland', 
'Portugal', 
'Austria', 
'Sweden', 
'Nepal', 
'Hungary', 
'Jordan', 
'Serbia', 
'Ecuador', 
'UAE', 
'Panama', 
'Bulgaria', 
'Japan', 
'Georgia', 
'Dominican Republic', 
'Bolivia', 
'Kuwait', 
'Costa Rica', 
'Belarus', 
'Qatar', 
'Croatia', 
'Armenia', 
'Kazakhstan', 
'Azerbaijan', 
'Lebanon', 
'Oman', 
'Guatemala', 
'Egypt', 
'Moldova', 
'Ethiopia', 
'Greece', 
'Slovakia', 
'Honduras', 
'Venezuela', 
'Tunisia', 
'Myanmar', 
'Palestine', 
'Bosnia and Herzegovina', 
'Bahrain', 
'Kenya', 
'Algeria', 
'Paraguay', 
'Denmark', 
'Libya', 
'Slovenia', 
'Kyrgyzstan', 
'Uzbekistan', 
'Ireland', 
'Malaysia', 
'Nigeria', 
'Lithuania', 
'North Macedonia', 
'Singapore', 
'Ghana', 
'Afghanistan', 
'Albania', 
'El Salvador', 
'Norway', 
'Montenegro', 
'Luxembourg', 
'S. Korea', 
'Australia', 
'Finland', 
'Sri Lanka', 
'Cameroon', 
'Uganda', 
'Ivory Coast', 
'Latvia', 
'Sudan', 
'Zambia', 
'Madagascar', 
'Senegal', 
'Mozambique', 
'Angola', 
'French Polynesia', 
'Namibia', 
'Estonia', 
'Guinea', 
'DRC', 
'Maldives', 
'Tajikistan', 
'Botswana',
'Cyprus', 
'French Guiana', 
'Cabo Verde', 
'Jamaica', 
'Zimbabwe', 
'Malta', 
'Haiti', 
'Gabon', 
'Mauritania', 
'Cuba', 
'Guadeloupe', 
'Syria', 
'Réunion', 
'Bahamas', 
'Belize', 
'Andorra', 
'Trinidad and Tobago', 
'Hong Kong', 
'Eswatini', 
'Uruguay', 
'Malawi', 
'Rwanda', 
'Nicaragua', 
'Congo', 
'Djibouti', 
'Guyana', 
'Martinique', 
'Iceland', 
'Suriname', 
'Mayotte', 
'Equatorial Guinea', 
'Aruba', 
'CAR', 
'Mali', 
'Somalia', 
'Thailand', 
'Gambia', 
'South Sudan', 
'Burkina Faso', 
'Benin', 
'Togo', 
'Curaçao', 
'Guinea-Bissau', 
'Sierra Leone', 
'Yemen', 
'Lesotho', 
'New Zealand', 
'San Marino', 
'Chad', 
'Liberia', 
'Niger', 
'Channel Islands', 
'Vietnam', 
'Liechtenstein', 
'Sint Maarten', 
'Gibraltar', 
'Sao Tome and Principe', 
'Mongolia', 
'Turks and Caicos', 
'Saint Martin', 
'Diamond Princess', 
'Burundi', 
'Taiwan', 
'Papua New Guinea', 
'Monaco', 
'Comoros', 
'Eritrea', 
'Tanzania', 
'Mauritius', 
'Faeroe Islands', 
'Bhutan', 
'Isle of Man', 
'Cambodia', 
'Cayman Islands', 
'Barbados', 
'Bermuda', 
'Saint Lucia', 
'Seychelles', 
'Caribbean Netherlands', 
'Brunei ', 
'St. Barth', 
'Antigua and Barbuda', 
'St. Vincent Grenadines', 
'Dominica', 
'British Virgin Islands', 
'Macao', 
'Fiji', 
'Grenada', 
'Laos', 
'New Caledonia', 
'Timor-Leste', 
'Vatican City', 
'Saint Kitts and Nevis', 
'Greenland', 
'Falkland Islands', 
'Solomon Islands', 
'Saint Pierre Miquelon', 
'Montserrat', 
'Western Sahara', 
'MS Zaandam', 
'Anguilla', 
'Marshall Islands', 
'Wallis and Futuna', 
'Samoa', 
'Vanuatu', 
'China',
'Micronesia']


  </script>






<script>
  // build form elements
var city1 = "";
var city2 = "";
countries.forEach(myFunction);
document.getElementById("city1").innerHTML = city1;
document.getElementById("city2").innerHTML = city2;

function myFunction(value, index, array) {
  city1 += "<option class='city1' value=' " + country_list[value] + "|"+ value+ "'>"+ value + "</option>";
  city2 += "<option class='city2' value=' " + country_list[value] +"|"+ value +"'>"+ value + "</option>";
}
  </script>




	
<script>

a=0;
b=0;
c=0;
d=0;

function magic(){
// var selected_city1 = document.getElementById("city1").innerText;
// selected_city1 = selected_city1.options[selected_city1.selectedIndex].text;
var selected_city1=$("#city1 :selected").text();
$("#city1").prev().css("background-color","#7cfc00");
$("#city1").prev().text("selected country: "+ selected_city1);
a=1;
d=a+b;
if (d == 2){
$("#the_submit_button").css("background-color","#ee82ee");
$("#the_submit_button").attr("disabled",false);
}

}

function magic1(){
// var selected_city2 = document.getElementById("city2").value;
var selected_city2=$("#city2 :selected").text();
$("#city2").prev().css("background-color","#7cfc00");
$("#city2").prev().text("selected country: "+ selected_city2);
b=1;
d=a+b;
if (d == 2){
$("#the_submit_button").css("background-color","#ee82ee");
$("#the_submit_button").attr("disabled",false);
}

}




</script>




    

    
    







<!-- piecharts  latest  piecharts  latest  piecharts  latest  piecharts  latest  piecharts  latest  piecharts  latest  piecharts  latest -->


<!-- piecharts  peak  piecharts  peak  piecharts  peak  piecharts  peak  piecharts  peak  piecharts  peak  piecharts  peak -->


<!-- google graphs  google graphs  google graphs  google graphs  google graphs  google graphs  google graphs  google graphs  google graphs -->

<script>

  google.charts.load('current', {
  callback: function () {
    var data = new google.visualization.DataTable({
      cols: [
        {label: 'Time Period', type: 'string'},
        {label: 'USA', type: 'number'},
        {label: 'India', type: 'number'}
      ],
  rows: [
  {c: [{v:'2020-12-13 15:28:51'},{v:6606764 },{v:354316 }]},
{c: [{v:'2020-12-14 10:06:04'},{v:6706369 },{v:353164 }]},
{c: [{v:'2020-12-15 10:06:04'},{v:6762974 },{v:340125 }]},
{c: [{v:'2020-12-16 10:06:05'},{v:6824913 },{v:332329 }]},
{c: [{v:'2020-12-17 10:06:05'},{v:6908897 },{v:317764 }]},
{c: [{v:'2020-12-18 10:06:04'},{v:7018015 },{v:313791 }]},
{c: [{v:'2020-12-19 10:06:04'},{v:7173222 },{v:309960 }]},
{c: [{v:'2020-12-20 10:06:05'},{v:7209160 },{v:305744 }]},
{c: [{v:'2020-12-21 10:06:04'},{v:7320628 },{v:304294 }]},
{c: [{v:'2020-12-22 10:06:04'},{v:7344448 },{v:292790 }]},
{c: [{v:'2020-12-23 10:06:05'},{v:7408707 },{v:289450 }]},
{c: [{v:'2020-12-24 10:06:05'},{v:7481068 },{v:283827 }]},
{c: [{v:'2020-12-25 10:06:05'},{v:7555137 },{v:282506 }]},
{c: [{v:'2020-12-26 10:06:05'},{v:7614192 },{v:282331 }]},
{c: [{v:'2020-12-27 10:06:04'},{v:7683425 },{v:279195 }]},
{c: [{v:'2020-12-28 10:06:04'},{v:7736834 },{v:278116 }]},
{c: [{v:'2020-12-29 10:06:04'},{v:7741717 },{v:269038 }]},
{c: [{v:'2020-12-30 10:06:04'},{v:7786653 },{v:262710 }]},
{c: [{v:'2020-12-31 10:06:05'},{v:7867419 },{v:258229 }]},
{c: [{v:'2021-01-01 10:06:04'},{v:7965633 },{v:254230 }]},
{c: [{v:'2021-01-02 10:06:05'},{v:8085060 },{v:250183 }]},
{c: [{v:'2021-01-03 10:06:05'},{v:8184632 },{v:247850 }]},
{c: [{v:'2021-01-04 10:06:04'},{v:8316492 },{v:244738 }]},
{c: [{v:'2021-01-05 10:06:04'},{v:8254416 },{v:231725 }]},
{c: [{v:'2021-01-06 10:06:05'},{v:8351761 },{v:228055 }]},
{c: [{v:'2021-01-07 10:06:05'},{v:8463484 },{v:228707 }]},
{c: [{v:'2021-01-08 10:06:04'},{v:8614604 },{v:226040 }]},
{c: [{v:'2021-01-09 10:06:04'},{v:8818804 },{v:225040 }]},
{c: [{v:'2021-01-10 10:06:05'},{v:8925380 },{v:224348 }]},
{c: [{v:'2021-01-11 10:06:04'},{v:9050569 },{v:223324 }]},
{c: [{v:'2021-01-18 10:06:04'},{v:9646497 },{v:208874 }]},
{c: [{v:'2021-01-19 10:06:05'},{v:9666132 },{v:201301 }]},
{c: [{v:'2021-01-20 10:06:04'},{v:9611435 },{v:197947 }]},
{c: [{v:'2021-01-21 10:06:04'},{v:9614365 },{v:193107 }]},
{c: [{v:'2021-01-22 10:06:05'},{v:9674810 },{v:189425 }]},
{c: [{v:'2021-01-23 10:06:04'},{v:9743146 },{v:186485 }]},
{c: [{v:'2021-01-24 10:06:04'},{v:9808205 },{v:185273 }]},
{c: [{v:'2021-01-25 10:06:05'},{v:9862996 },{v:185082 }]},
{c: [{v:'2021-01-26 10:06:05'},{v:9812845 },{v:178101 }]},
{c: [{v:'2021-01-27 10:06:04'},{v:9808357 },{v:177223 }]},
{c: [{v:'2021-01-28 10:06:05'},{v:9784075 },{v:174540 }]},
{c: [{v:'2021-01-29 10:06:05'},{v:9824711 },{v:172572 }]},
{c: [{v:'2021-01-30 10:06:05'},{v:9865162 },{v:170682 }]},
{c: [{v:'2021-01-31 10:06:04'},{v:9876409 },{v:169654 }]},
{c: [{v:'2021-02-01 10:06:05'},{v:9911107 },{v:169208 }]},
{c: [{v:'2021-02-02 10:06:04'},{v:9827632 },{v:164278 }]},
{c: [{v:'2021-02-03 10:06:05'},{v:9818915 },{v:161865 }]},
{c: [{v:'2021-02-04 10:06:05'},{v:9781749 },{v:155926 }]},
{c: [{v:'2021-02-05 10:06:05'},{v:9775273 },{v:152363 }]},
{c: [{v:'2021-02-06 10:06:05'},{v:9790450 },{v:150476 }]},
{c: [{v:'2021-02-07 10:06:04'},{v:9777591 },{v:149681 }]},
{c: [{v:'2021-02-08 10:06:04'},{v:9782082 },{v:150653 }]},
{c: [{v:'2021-02-09 10:06:04'},{v:9711640 },{v:145690 }]},
{c: [{v:'2021-02-10 10:06:04'},{v:9680957 },{v:143416 }]},
{c: [{v:'2021-02-12 10:06:04'},{v:9584499 },{v:135889 }]},
{c: [{v:'2021-02-13 10:06:04'},{v:9573871 },{v:138253 }]},
{c: [{v:'2021-02-14 10:06:04'},{v:9547775 },{v:137536 }]},
{c: [{v:'2021-02-15 10:06:04'},{v:9540008 },{v:139605 }]},
{c: [{v:'2021-02-16 10:06:04'},{v:9462875 },{v:136845 }]},
{c: [{v:'2021-02-17 10:06:03'},{v:9401811 },{v:136513 }]},
{c: [{v:'2021-02-18 10:06:04'},{v:9354485 },{v:137318 }]},
{c: [{v:'2021-02-19 10:06:04'},{v:9314794 },{v:139530 }]},
{c: [{v:'2021-02-20 10:06:04'},{v:9292344 },{v:143099 }]},
{c: [{v:'2021-02-21 10:06:04'},{v:9297326 },{v:145597 }]},
{c: [{v:'2021-02-22 10:06:04'},{v:9281100 },{v:150022 }]},
{c: [{v:'2021-02-23 10:06:04'},{v:9199577 },{v:147271 }]},
{c: [{v:'2021-02-24 10:06:04'},{v:9170205 },{v:146876 }]},
{c: [{v:'2021-02-25 10:06:04'},{v:9115931 },{v:151671 }]},
{c: [{v:'2021-02-26 10:06:04'},{v:9096024 },{v:155950 }]},
{c: [{v:'2021-02-27 10:06:04'},{v:9079762 },{v:159558 }]},
{c: [{v:'2021-02-28 10:06:04'},{v:9045632 },{v:164475 }]},
{c: [{v:'2021-03-01 10:06:04'},{v:9035262 },{v:168589 }]},
{c: [{v:'2021-03-02 10:06:04'},{v:8969496 },{v:168331 }]},
{c: [{v:'2021-03-03 10:06:04'},{v:8936169 },{v:170087 }]},
{c: [{v:'2021-03-04 10:06:04'},{v:8921400 },{v:173377 }]},
{c: [{v:'2021-03-05 10:06:04'},{v:8899008 },{v:176283 }]},
{c: [{v:'2021-03-06 10:06:04'},{v:8874812 },{v:180267 }]},
{c: [{v:'2021-03-07 10:06:04'},{v:8842857 },{v:184488 }]},
{c: [{v:'2021-03-08 10:06:03'},{v:8821756 },{v:188710 }]},
{c: [{v:'2021-03-09 10:06:04'},{v:8756390 },{v:187426 }]},
{c: [{v:'2021-03-10 10:06:04'},{v:8711254 },{v:184582 }]},
{c: [{v:'2021-03-11 10:06:04'},{v:8679663 },{v:189202 }]},
{c: [{v:'2021-03-12 10:06:04'},{v:8591627 },{v:197217 }]},
{c: [{v:'2021-03-13 10:06:04'},{v:7416659 },{v:201985 }]},
{c: [{v:'2021-03-14 10:06:04'},{v:7388461 },{v:210509 }]},
{c: [{v:'2021-03-15 10:06:04'},{v:7365186 },{v:219225 }]},
{c: [{v:'2021-03-16 10:06:04'},{v:7304022 },{v:223396 }]},
{c: [{v:'2021-03-17 10:06:04'},{v:7323714 },{v:234371 }]},
{c: [{v:'2021-03-18 10:06:04'},{v:7296874 },{v:252330 }]},
{c: [{v:'2021-03-19 10:06:05'},{v:7282611 },{v:271247 }]},
{c: [{v:'2021-03-20 10:06:04'},{v:7261358 },{v:288358 }]},
{c: [{v:'2021-03-21 10:06:04'},{v:7243639 },{v:309052 }]},
{c: [{v:'2021-03-22 10:06:04'},{v:7212208 },{v:334610 }]},
{c: [{v:'2021-03-23 10:06:04'},{v:7175014 },{v:345343 }]},
{c: [{v:'2021-03-24 10:06:04'},{v:7040066 },{v:368421 }]},
{c: [{v:'2021-03-25 10:06:04'},{v:7012991 },{v:395158 }]},
{c: [{v:'2021-03-26 10:06:04'},{v:7018080 },{v:421032 }]},
{c: [{v:'2021-03-27 10:06:04'},{v:7016622 },{v:452612 }]},
{c: [{v:'2021-03-28 10:06:04'},{v:7006619 },{v:486276 }]},
{c: [{v:'2021-03-29 10:06:04'},{v:6989393 },{v:521770 }]},
{c: [{v:'2021-03-30 10:06:04'},{v:6961375 },{v:540687 }]},
{c: [{v:'2021-03-31 10:06:04'},{v:6946220 },{v:552532 }]},
{c: [{v:'2021-04-01 10:06:04'},{v:6927626 },{v:584022 }]},
{c: [{v:'2021-04-02 10:06:04'},{v:6923637 },{v:614664 }]},
{c: [{v:'2021-04-03 10:06:04'},{v:6922462 },{v:658878 }]},
{c: [{v:'2021-04-04 10:06:03'},{v:6919981 },{v:691565 }]},
{c: [{v:'2021-04-05 10:06:04'},{v:6904851 },{v:741799 }]},
{c: [{v:'2021-04-06 10:06:04'},{v:6869132 },{v:788193 }]},
{c: [{v:'2021-04-07 10:06:04'},{v:6867957 },{v:843442 }]},
{c: [{v:'2021-04-08 10:06:04'},{v:6857855 },{v:910289 }]},
{c: [{v:'2021-04-09 10:06:04'},{v:6870679 },{v:979556 }]},
{c: [{v:'2021-04-10 10:06:04'},{v:6881166 },{v:1046600 }]},
{c: [{v:'2021-04-11 10:06:04'},{v:6870812 },{v:1108057 }]},
{c: [{v:'2021-04-12 10:06:04'},{v:6862250 },{v:1200979 }]},
{c: [{v:'2021-04-13 10:06:04'},{v:6852989 },{v:1264667 }]},
{c: [{v:'2021-04-14 10:06:04'},{v:6867195 },{v:1365674 }]},
{c: [{v:'2021-04-15 10:06:04'},{v:6874970 },{v:1475266 }]},
{c: [{v:'2021-04-16 10:06:04'},{v:6874166 },{v:1569716 }]},
{c: [{v:'2021-04-17 10:06:04'},{v:6889783 },{v:1679716 }]},
{c: [{v:'2021-04-18 10:06:04'},{v:6870754 },{v:1801298 }]},
{c: [{v:'2021-04-19 10:06:04'},{v:6862173 },{v:1929305 }]},
{c: [{v:'2021-04-20 10:06:04'},{v:6850038 },{v:2031957 }]},
{c: [{v:'2021-04-21 10:06:04'},{v:6848479 },{v:2157521 }]},
{c: [{v:'2021-04-22 10:06:04'},{v:6841287 },{v:2291413 }]},
{c: [{v:'2021-04-23 10:06:04'},{v:6848237 },{v:2428608 }]},
{c: [{v:'2021-04-24 10:06:03'},{v:6854582 },{v:2552935 }]},
{c: [{v:'2021-04-25 10:06:05'},{v:6863899 },{v:2682751 }]},
{c: [{v:'2021-04-29 10:06:04'},{v:6810611 },{v:3084814 }]},
{c: [{v:'2021-04-30 10:06:04'},{v:6813287 },{v:3170228 }]},
{c: [{v:'2021-05-01 10:06:04'},{v:6803777 },{v:3268710 }]},
{c: [{v:'2021-05-02 10:06:04'},{v:6777381 },{v:3349644 }]},
{c: [{v:'2021-05-03 10:06:04'},{v:6765579 },{v:3413642 }]},
{c: [{v:'2021-05-04 10:06:04'},{v:6730794 },{v:3447133 }]},
{c: [{v:'2021-05-05 10:06:04'},{v:6715861 },{v:3487229 }]},
{c: [{v:'2021-05-06 10:06:04'},{v:6692782 },{v:3566398 }]},
{c: [{v:'2021-05-07 10:06:04'},{v:6669775 },{v:3645164 }]},
{c: [{v:'2021-05-08 10:06:05'},{v:6499158 },{v:3723446 }]},
{c: [{v:'2021-05-09 10:06:04'},{v:6453122 },{v:3736612 }]},
{c: [{v:'2021-05-10 10:06:04'},{v:6441257 },{v:3745207 }]},
{c: [{v:'2021-05-11 10:06:06'},{v:6411702 },{v:3715188 }]},
{c: [{v:'2021-05-12 10:06:03'},{v:6395031 },{v:3704071 }]},
{c: [{v:'2021-05-13 10:06:04'},{v:6368122 },{v:3710491 }]},
{c: [{v:'2021-05-14 10:06:04'},{v:6360358 },{v:3704860 }]},
{c: [{v:'2021-05-15 10:06:05'},{v:6356796 },{v:3673780 }]},
{c: [{v:'2021-05-16 10:06:04'},{v:5997433 },{v:3618423 }]},
{c: [{v:'2021-05-17 10:06:04'},{v:5979784 },{v:3516976 }]},
{c: [{v:'2021-05-18 10:06:05'},{v:5944597 },{v:3353733 }]},
{c: [{v:'2021-05-19 10:06:04'},{v:5920288 },{v:3226691 }]},
{c: [{v:'2021-05-20 10:06:04'},{v:5901195 },{v:3129844 }]},
{c: [{v:'2021-05-21 10:06:04'},{v:5871914 },{v:3027891 }]},
{c: [{v:'2021-05-22 10:06:05'},{v:5859561 },{v:2923400 }]},
{c: [{v:'2021-05-23 10:06:04'},{v:5807215 },{v:2805369 }]},
{c: [{v:'2021-05-24 10:06:04'},{v:5790318 },{v:2720685 }]},
{c: [{v:'2021-05-25 10:06:03'},{v:5754591 },{v:2586764 }]},
{c: [{v:'2021-05-26 10:06:05'},{v:5735539 },{v:2495558 }]},
{c: [{v:'2021-05-27 10:06:04'},{v:5702760 },{v:2419879 }]},
{c: [{v:'2021-05-28 10:06:03'},{v:5690075 },{v:2343152 }]},
{c: [{v:'2021-05-29 10:06:03'},{v:5646656 },{v:2228724 }]},
{c: [{v:'2021-05-30 10:06:05'},{v:5606936 },{v:2114482 }]},
{c: [{v:'2021-05-31 10:06:04'},{v:5592640 },{v:2026065 }]},
{c: [{v:'2021-06-01 10:06:03'},{v:5639539 },{v:1895506 }]},
{c: [{v:'2021-06-02 10:06:05'},{v:5585384 },{v:1793633 }]},
{c: [{v:'2021-06-03 10:06:04'},{v:5556774 },{v:1713389 }]},
{c: [{v:'2021-06-04 10:06:04'},{v:5537566 },{v:1635976 }]},
{c: [{v:'2021-06-05 10:06:04'},{v:5524788 },{v:1555229 }]},
{c: [{v:'2021-06-06 10:06:04'},{v:5488680 },{v:1477774 }]},
{c: [{v:'2021-06-07 10:06:04'},{v:5475679 },{v:1401566 }]},
{c: [{v:'2021-06-08 10:06:04'},{v:5436877 },{v:1304143 }]},
{c: [{v:'2021-06-09 10:06:04'},{v:5408951 },{v:1231386 }]},
{c: [{v:'2021-06-10 10:06:04'},{v:5397142 },{v:1167933 }]},
{c: [{v:'2021-06-11 10:06:04'},{v:5383382 },{v:1121653 }]},
{c: [{v:'2021-06-12 10:06:04'},{v:5345384 },{v:1080674 }]},
{c: [{v:'2021-06-13 10:06:04'},{v:5319295 },{v:1026136 }]},
{c: [{v:'2021-06-14 10:06:05'},{v:5305973 },{v:973158 }]},
{c: [{v:'2021-06-15 10:06:04'},{v:5283026 },{v:913348 }]},
{c: [{v:'2021-06-16 10:06:04'},{v:5157767 },{v:865404 }]},
{c: [{v:'2021-06-17 10:06:04'},{v:5133340 },{v:826712 }]},
{c: [{v:'2021-06-18 10:06:04'},{v:5119713 },{v:798625 }]},
{c: [{v:'2021-06-19 10:06:04'},{v:5100420 },{v:759989 }]},
{c: [{v:'2021-06-20 10:06:04'},{v:5089786 },{v:729216 }]},
{c: [{v:'2021-06-21 10:06:04'},{v:5077520 },{v:702858 }]},
{c: [{v:'2021-06-22 10:06:04'},{v:5034868 },{v:662521 }]},
{c: [{v:'2021-06-23 10:06:05'},{v:4999794 },{v:643163 }]},
{c: [{v:'2021-06-24 10:06:04'},{v:4984406 },{v:627024 }]},
{c: [{v:'2021-06-25 10:06:03'},{v:4974357 },{v:612840 }]},
{c: [{v:'2021-06-26 10:06:03'},{v:4966060 },{v:595534 }]},
{c: [{v:'2021-06-27 10:06:04'},{v:4957885 },{v:586374 }]},
{c: [{v:'2021-06-28 10:06:04'},{v:4947918 },{v:572963 }]},
{c: [{v:'2021-06-29 10:06:03'},{v:4929192 },{v:552628 }]},
{c: [{v:'2021-06-30 10:06:04'},{v:4900140 },{v:537034 }]},
{c: [{v:'2021-07-01 10:06:04'},{v:4893908 },{v:523241 }]},
{c: [{v:'2021-07-02 10:06:04'},{v:4888671 },{v:509637 }]},
{c: [{v:'2021-07-03 10:06:04'},{v:4886156 },{v:495515 }]},
{c: [{v:'2021-07-04 10:06:04'},{v:4879500 },{v:485340 }]},
{c: [{v:'2021-07-05 10:06:04'},{v:4874268 },{v:482041 }]},
{c: [{v:'2021-07-06 10:06:04'},{v:4865446 },{v:464328 }]},
{c: [{v:'2021-07-07 10:06:04'},{v:4855844 },{v:459891 }]},
{c: [{v:'2021-07-08 10:06:04'},{v:4856524 },{v:460675 }]},
{c: [{v:'2021-07-09 10:06:04'},{v:4851375 },{v:458699 }]},
{c: [{v:'2021-07-10 10:06:04'},{v:4865736 },{v:455005 }]},
{c: [{v:'2021-07-11 10:06:04'},{v:4868360 },{v:454086 }]},
{c: [{v:'2021-07-12 10:06:06'},{v:4865805 },{v:450871 }]},
{c: [{v:'2021-07-13 10:06:04'},{v:4869026 },{v:434224 }]},
{c: [{v:'2021-07-14 10:06:04'},{v:4879927 },{v:429915 }]},
{c: [{v:'2021-07-15 10:06:04'},{v:4899930 },{v:432011 }]},
{c: [{v:'2021-07-16 10:06:05'},{v:4921028 },{v:430390 }]},
{c: [{v:'2021-07-17 10:06:04'},{v:4946719 },{v:423993 }]},
{c: [{v:'2021-07-18 10:06:05'},{v:4960041 },{v:422629 }]},
{c: [{v:'2021-07-19 10:06:04'},{v:4962571 },{v:421632 }]},
{c: [{v:'2021-07-20 10:06:04'},{v:4987415 },{v:406099 }]},
{c: [{v:'2021-07-21 10:06:04'},{v:5021185 },{v:407139 }]},
{c: [{v:'2021-07-22 10:06:04'},{v:5062265 },{v:409360 }]},
{c: [{v:'2021-07-23 10:06:04'},{v:5109249 },{v:405481 }]},
{c: [{v:'2021-07-24 10:06:03'},{v:5158542 },{v:408950 }]},
{c: [{v:'2021-07-25 10:06:04'},{v:5050835 },{v:408178 }]},
{c: [{v:'2021-07-26 10:06:04'},{v:5060794 },{v:411160 }]},
{c: [{v:'2021-07-27 10:06:04'},{v:5111762 },{v:398068 }]},
{c: [{v:'2021-07-28 10:06:04'},{v:5155138 },{v:399404 }]},
{c: [{v:'2021-07-29 10:06:04'},{v:5255434 },{v:403807 }]},
{c: [{v:'2021-07-30 10:06:05'},{v:5329026 },{v:405128 }]},
{c: [{v:'2021-07-31 10:06:04'},{v:5407404 },{v:408888 }]},
{c: [{v:'2021-08-01 10:06:04'},{v:5449592 },{v:410919 }]},
{c: [{v:'2021-08-02 10:06:03'},{v:5466254 },{v:413683 }]},
{c: [{v:'2021-08-03 10:06:04'},{v:5548581 },{v:404925 }]},
{c: [{v:'2021-08-04 10:06:04'},{v:5661932 },{v:410321 }]},
{c: [{v:'2021-08-05 10:06:03'},{v:5757856 },{v:411045 }]},
{c: [{v:'2021-08-06 10:06:05'},{v:5864272 },{v:414128 }]},
{c: [{v:'2021-08-07 10:06:04'},{v:5980010 },{v:412123 }]},
{c: [{v:'2021-08-08 10:06:04'},{v:6034158 },{v:406792 }]},
{c: [{v:'2021-08-09 10:06:04'},{v:6051160 },{v:402158 }]},
{c: [{v:'2021-08-10 10:06:03'},{v:6223361 },{v:388475 }]},
{c: [{v:'2021-08-11 10:06:03'},{v:6291232 },{v:386347 }]},
{c: [{v:'2021-08-12 10:06:04'},{v:6375171 },{v:387954 }]},
{c: [{v:'2021-08-13 10:06:05'},{v:6469453 },{v:385196 }]},
{c: [{v:'2021-08-14 10:06:03'},{v:6597447 },{v:387643 }]},
{c: [{v:'2021-08-15 10:06:04'},{v:6653787 },{v:385308 }]},
{c: [{v:'2021-08-16 10:06:04'},{v:6675581 },{v:381915 }]},
{c: [{v:'2021-08-17 10:06:04'},{v:6870886 },{v:369813 }]},
{c: [{v:'2021-08-18 10:06:04'},{v:6966500 },{v:374144 }]},
{c: [{v:'2021-08-19 10:06:04'},{v:7089424 },{v:371611 }]},
{c: [{v:'2021-08-20 10:06:04'},{v:7198006 },{v:363572 }]},
{c: [{v:'2021-08-21 10:06:04'},{v:7315076 },{v:361306 }]},
{c: [{v:'2021-08-22 10:06:04'},{v:7411398 },{v:353366 }]},
{c: [{v:'2021-08-23 10:06:04'},{v:7427282 },{v:333896 }]},
{c: [{v:'2021-08-24 10:06:04'},{v:7597700 },{v:319611 }]},
{c: [{v:'2021-08-25 10:06:04'},{v:7702120 },{v:322297 }]},
{c: [{v:'2021-09-04 10:06:04'},{v:8772892 },{v:405650 }]},
{c: [{v:'2021-09-05 10:06:04'},{v:8799574 },{v:410014 }]},
{c: [{v:'2021-09-06 10:06:04'},{v:8823289 },{v:404841 }]},
{c: [{v:'2021-09-07 10:06:04'},{v:8863957 },{v:392831 }]},
{c: [{v:'2021-09-08 10:06:04'},{v:9015387 },{v:391224 }]},
{c: [{v:'2021-09-09 10:06:03'},{v:9058897 },{v:393581 }]},
{c: [{v:'2021-09-10 10:06:03'},{v:9141650 },{v:399675 }]},
{c: [{v:'2021-09-11 10:06:04'},{v:9243682 },{v:391483 }]},
{c: [{v:'2021-09-12 10:06:04'},{v:9281054 },{v:384888 }]},
{c: [{v:'2021-09-13 10:06:04'},{v:9303506 },{v:374236 }]},
{c: [{v:'2021-09-14 10:06:04'},{v:9396924 },{v:362173 }]},
{c: [{v:'2021-09-15 10:06:04'},{v:9429080 },{v:351056 }]},
{c: [{v:'2021-09-16 10:06:03'},{v:9523673 },{v:342891 }]},
{c: [{v:'2021-09-17 10:06:04'},{v:9597842 },{v:339026 }]},
{c: [{v:'2021-09-18 10:06:04'},{v:9675027 },{v:340605 }]},
{c: [{v:'2021-09-19 10:06:04'},{v:9692017 },{v:332127 }]},
{c: [{v:'2021-09-20 10:06:03'},{v:9705031 },{v:318149 }]},
{c: [{v:'2021-09-21 10:06:04'},{v:9737027 },{v:309544 }]},
{c: [{v:'2021-09-22 10:06:05'},{v:9715410 },{v:301956 }]},
{c: [{v:'2021-09-23 10:06:04'},{v:9757275 },{v:301610 }]},
{c: [{v:'2021-09-24 10:06:03'},{v:9795803 },{v:300131 }]},
{c: [{v:'2021-09-25 10:06:05'},{v:9850394 },{v:301410 }]},
{c: [{v:'2021-09-26 10:06:04'},{v:9857502 },{v:303446 }]},
{c: [{v:'2021-09-27 10:06:04'},{v:9858405 },{v:299589 }]},
{c: [{v:'2021-09-28 10:06:04'},{v:9838383 },{v:292173 }]},
{c: [{v:'2021-09-29 10:06:03'},{v:9822645 },{v:282490 }]},
{c: [{v:'2021-09-30 10:06:04'},{v:9850841 },{v:276992 }]},
{c: [{v:'2021-10-01 10:06:07'},{v:9875879 },{v:275191 }]},
{c: [{v:'2021-10-02 10:06:04'},{v:9907927 },{v:273857 }]},
{c: [{v:'2021-10-03 10:06:04'},{v:9853264 },{v:270528 }]},
{c: [{v:'2021-10-04 10:06:04'},{v:9860357 },{v:264426 }]},
{c: [{v:'2021-10-05 10:06:04'},{v:9805790 },{v:252879 }]},
{c: [{v:'2021-10-06 10:06:04'},{v:9774351 },{v:246657 }]},
{c: [{v:'2021-10-07 10:06:04'},{v:9798529 },{v:244171 }]},
{c: [{v:'2021-10-08 10:06:04'},{v:9811930 },{v:240188 }]},
{c: [{v:'2021-10-09 10:06:04'},{v:9825627 },{v:236610 }]},
{c: [{v:'2021-10-10 10:06:04'},{v:9815497 },{v:230939 }]},
{c: [{v:'2021-10-11 10:06:04'},{v:9805835 },{v:227315 }]},
{c: [{v:'2021-10-12 10:06:04'},{v:9781577 },{v:214872 }]},
{c: [{v:'2021-10-13 10:06:04'},{v:9695610 },{v:207622 }]},
{c: [{v:'2021-10-14 10:06:04'},{v:9700690 },{v:206552 }]},
{c: [{v:'2021-10-15 10:06:04'},{v:9691861 },{v:203645 }]},
{c: [{v:'2021-10-16 10:06:04'},{v:9690608 },{v:201602 }]},
{c: [{v:'2021-10-17 10:06:04'},{v:9677447 },{v:195814 }]},
{c: [{v:'2021-10-18 10:06:04'},{v:9673391 },{v:189663 }]},
{c: [{v:'2021-10-19 10:06:04'},{v:9588193 },{v:183087 }]},
{c: [{v:'2021-10-20 10:06:04'},{v:9537524 },{v:178065 }]},
{c: [{v:'2021-10-21 10:06:04'},{v:9526225 },{v:178798 }]},
{c: [{v:'2021-10-22 10:06:03'},{v:9522759 },{v:175711 }]},
{c: [{v:'2021-10-23 10:06:04'},{v:9508054 },{v:173694 }]},
{c: [{v:'2021-10-24 10:06:04'},{v:9504119 },{v:172562 }]},
{c: [{v:'2021-10-25 10:06:04'},{v:9503806 },{v:167664 }]},
{c: [{v:'2021-10-26 10:06:03'},{v:9388349 },{v:163784 }]},
{c: [{v:'2021-10-27 10:06:04'},{v:9362598 },{v:162630 }]},
{c: [{v:'2021-10-28 10:06:03'},{v:9358391 },{v:160957 }]},
{c: [{v:'2021-10-29 10:06:04'},{v:9355413 },{v:161304 }]},
{c: [{v:'2021-10-30 10:06:04'},{v:9359357 },{v:161522 }]},
{c: [{v:'2021-10-31 10:06:04'},{v:9341589 },{v:159239 }]},
{c: [{v:'2021-11-01 10:06:04'},{v:9342326 },{v:158784 }]},
{c: [{v:'2021-11-02 10:06:04'},{v:9282012 },{v:158784 }]},
{c: [{v:'2021-11-03 10:06:03'},{v:9220934 },{v:151197 }]},
{c: [{v:'2021-11-04 10:06:04'},{v:9218010 },{v:156116 }]},
{c: [{v:'2021-11-05 10:06:04'},{v:9220830 },{v:156810 }]},
{c: [{v:'2021-11-06 10:06:04'},{v:9236267 },{v:154896 }]},
{c: [{v:'2021-11-21 10:06:05'},{v:9326838 },{v:122714 }]},
{c: [{v:'2021-11-22 10:06:05'},{v:9336118 },{v:118443 }]},
{c: [{v:'2021-11-23 10:06:04'},{v:9319803 },{v:113584 }]},
{c: [{v:'2021-11-24 10:06:03'},{v:9329193 },{v:111481 }]},
{c: [{v:'2021-11-25 10:06:04'},{v:9386611 },{v:109940 }]},
{c: [{v:'2021-11-26 10:06:04'},{v:9401200 },{v:110133 }]},
{c: [{v:'2021-11-27 10:06:05'},{v:9411096 },{v:107019 }]},
{c: [{v:'2021-11-28 10:06:04'},{v:9416669 },{v:105691 }]},
{c: [{v:'2021-11-29 10:06:04'},{v:9420095 },{v:103859 }]},
{c: [{v:'2021-11-30 10:06:04'},{v:9467489 },{v:100543 }]},
{c: [{v:'2021-12-01 10:06:04'},{v:9419966 },{v:99023 }]},
{c: [{v:'2021-12-02 10:06:04'},{v:9449555 },{v:99763 }]},
{c: [{v:'2021-12-03 10:06:04'},{v:9520781 },{v:99976 }]},
{c: [{v:'2021-12-04 10:06:04'},{v:9606688 },{v:99974 }]},
{c: [{v:'2021-12-05 10:06:04'},{v:9628072 },{v:101861 }]},
{c: [{v:'2021-12-06 10:06:04'},{v:9637520 },{v:98416 }]},
{c: [{v:'2021-12-07 10:06:04'},{v:9666336 },{v:95014 }]},
{c: [{v:'2021-12-08 10:06:05'},{v:9715064 },{v:93733 }]},
{c: [{v:'2021-12-09 10:06:04'},{v:9792640 },{v:94742 }]},
{c: [{v:'2021-12-10 10:06:04'},{v:9841074 },{v:94943 }]},
{c: [{v:'2021-12-11 10:06:04'},{v:9936238 },{v:93277 }]},
{c: [{v:'2021-12-12 10:06:04'},{v:9958399 },{v:92281 }]},
{c: [{v:'2021-12-13 10:06:04'},{v:9979825 },{v:91456 }]},
{c: [{v:'2021-12-14 10:06:04'},{v:10044267 },{v:88993 }]},
{c: [{v:'2021-12-15 10:06:03'},{v:10075594 },{v:87564 }]},
{c: [{v:'2021-12-16 10:06:04'},{v:10124028 },{v:87312 }]},
{c: [{v:'2021-12-17 10:06:04'},{v:10204336 },{v:86415 }]},
{c: [{v:'2021-12-18 10:06:05'},{v:10309216 },{v:84565 }]},
{c: [{v:'2021-12-19 10:06:04'},{v:10353854 },{v:83913 }]},
{c: [{v:'2021-12-20 10:06:05'},{v:10398516 },{v:82267 }]},
{c: [{v:'2021-12-21 10:06:04'},{v:10511784 },{v:79097 }]},
{c: [{v:'2021-12-22 10:06:04'},{v:10621626 },{v:78190 }]},
{c: [{v:'2021-12-23 10:06:04'},{v:10769803 },{v:78291 }]},
{c: [{v:'2021-12-24 10:06:04'},{v:10989003 },{v:77547 }]},
{c: [{v:'2021-12-25 10:06:04'},{v:11154386 },{v:77032 }]},
{c: [{v:'2021-12-26 10:06:06'},{v:11187802 },{v:76766 }]},
{c: [{v:'2022-01-05 11:49:16'},{v:15288098 },{v:214004 }]},
{c: [{v:'2022-01-06 16:06:50'},{v:15951678 },{v:284155 }]},
{c: [{v:'2022-01-07 14:46:47'},{v:16619075 },{v:371363 }]},
{c: [{v:'2022-01-08 15:50:08'},{v:17433829 },{v:472169 }]},
{c: [{v:'2022-01-09 15:32:15'},{v:17873809 },{v:590611 }]},
{c: [{v:'2022-01-11 14:52:13'},{v:19294562 },{v:821446 }]},
{c: [{v:'2022-01-12 15:07:45'},{v:19885128 },{v:955319 }]},
{c: [{v:'2022-01-13 13:37:34'},{v:20687428 },{v:1117531 }]},
{c: [{v:'2022-01-14 13:51:18'},{v:21455773 },{v:1272073 }]},
{c: [{v:'2022-01-15 15:05:39'},{v:22317525 },{v:1417792 }]},
{c: [{v:'2022-01-16 17:15:07'},{v:22732045 },{v:1550349 }]},
{c: [{v:'2022-01-17 15:17:35'},{v:23031325 },{v:1656310 }]},
{c: [{v:'2022-01-18 16:02:58'},{v:23591203 },{v:1736605 }]},
{c: [{v:'2022-01-19 16:48:57'},{v:24361654 },{v:1830976 }]},
{c: [{v:'2022-01-20 16:45:23'},{v:25035097 },{v:1924025 }]},
{c: [{v:'2022-01-21 19:51:40'},{v:25613160 },{v:2018799 }]},
{c: [{v:'2022-01-22 21:47:35'},{v:26315424 },{v:2113338 }]},
{c: [{v:'2022-01-23 16:09:17'},{v:26510734 },{v:2187192 }]},
{c: [{v:'2022-01-24 15:35:33'},{v:26671065 },{v:2249287 }]},
{c: [{v:'2022-01-25 21:41:07'},{v:27238138 },{v:2236842 }]},
{c: [{v:'2022-01-26 21:44:31'},{v:27434325 },{v:2222991 }]},
{c: [{v:'2022-01-27 18:34:58'},{v:27856405 },{v:2202443 }]},
{c: [{v:'2022-01-28 16:01:39'},{v:28178981 },{v:2105582 }]},
{c: [{v:'2022-01-29 17:20:49'},{v:28559353 },{v:2004313 }]},
{c: [{v:'2022-01-31 19:32:12'},{v:28732901 },{v:1831268 }]},
{c: [{v:'2022-02-02 20:25:06'},{v:28955249 },{v:1621582 }]},
{c: [{v:'2022-02-04 20:19:46'},{v:28915847 },{v:1435537 }]},
{c: [{v:'2022-02-05 16:32:52'},{v:28998744 },{v:1331619 }]},
{c: [{v:'2022-02-06 17:00:31'},{v:29140784 },{v:1224982 }]},
{c: [{v:'2022-02-07 18:21:26'},{v:29093003 },{v:1108907 }]},
{c: [{v:'2022-02-09 16:57:30'},{v:28795422 },{v:892799 }]},
{c: [{v:'2022-02-10 19:14:15'},{v:28671117 },{v:790760 }]},
{c: [{v:'2022-02-11 15:54:51'},{v:28677716 },{v:697771 }]},
{c: [{v:'2022-02-15 21:35:58'},{v:28364757 },{v:423097 }]},
{c: [{v:'2022-02-16 16:13:13'},{v:28125618 },{v:370209 }]},
{c: [{v:'2022-02-17 18:42:55'},{v:28035020 },{v:332890 }]},
{c: [{v:'2022-02-18 17:27:13'},{v:27940922 },{v:292060 }]},
{c: [{v:'2022-02-19 14:20:31'},{v:27649488 },{v:253707 }]},
{c: [{v:'2022-02-20 15:47:42'},{v:27568580 },{v:224155 }]},
{c: [{v:'2022-02-23 14:14:25'},{v:27107363 },{v:164492 }]},
{c: [{v:'2022-02-26 13:19:10'},{v:26693857 },{v:121850 }]},
{c: [{v:'2022-03-02 18:12:39'},{v:25989717 },{v:85680 }]},
{c: [{v:'2022-03-03 18:44:43'},{v:25845090 },{v:77121 }]},
{c: [{v:'2022-03-05 15:16:11'},{v:25567231 },{v:63848 }]},
{c: [{v:'2022-03-07 16:09:41'},{v:25180321 },{v:54087 }]},
{c: [{v:'2022-03-09 19:02:47'},{v:24809670 },{v:46931 }]},
{c: [{v:'2022-03-13 13:13:04'},{v:24260703 },{v:38069 }]},
{c: [{v:'2022-03-14 18:45:32'},{v:24109763 },{v:36138 }]},
{c: [{v:'2022-03-16 18:26:44'},{v:23796184 },{v:32780 }]},
{c: [{v:'2022-03-20 13:16:40'},{v:23283227 },{v:26209 }]},
{c: [{v:'2022-03-21 14:51:43'},{v:17405406 },{v:25100 }]},
{c: [{v:'2022-03-22 12:39:24'},{v:17194644 },{v:23882 }]},
{c: [{v:'2022-03-27 13:18:36'},{v:16344535 },{v:16157 }]},
{c: [{v:'2022-04-02 11:33:46'},{v:15422535 },{v:13416 }]},
{c: [{v:'2022-04-04 13:23:13'},{v:15147900 },{v:12567 }]},
{c: [{v:'2022-04-05 12:16:03'},{v:15018006 },{v:12024 }]},
{c: [{v:'2022-04-06 13:53:52'},{v:14922155 },{v:11840 }]},
{c: [{v:'2022-04-07 13:27:29'},{v:14851559 },{v:11609 }]},
{c: [{v:'2022-04-09 14:20:51'},{v:14711180 },{v:11335 }]},
{c: [{v:'2022-04-10 12:47:08'},{v:5389430 },{v:11122 }]},
{c: [{v:'2022-04-11 13:21:53'},{v:1142318 },{v:11027 }]},
{c: [{v:'2022-04-14 13:59:17'},{v:1126705 },{v:11028 }]},
{c: [{v:'2022-04-16 11:57:39'},{v:1151037 },{v:11337 }]},
{c: [{v:'2022-04-18 11:31:07'},{v:1098583 },{v:11542 }]},
{c: [{v:'2022-04-19 12:27:44'},{v:1117273 },{v:11830 }]},
{c: [{v:'2022-04-20 12:31:46'},{v:1124331 },{v:12340 }]},
{c: [{v:'2022-04-21 14:36:17'},{v:1161620 },{v:13433 }]},
{c: [{v:'2022-04-22 13:14:35'},{v:1180060 },{v:14241 }]},
{c: [{v:'2022-04-23 11:18:53'},{v:1207534 },{v:15079 }]},
{c: [{v:'2022-04-25 12:15:23'},{v:1179062 },{v:16522 }]},
{c: [{v:'2022-04-26 12:25:35'},{v:1208345 },{v:16563 }]},
{c: [{v:'2022-04-29 11:20:20'},{v:1311176 },{v:18111 }]},
{c: [{v:'2022-04-30 12:31:08'},{v:1360714 },{v:18684 }]},
{c: [{v:'2022-05-03 15:57:12'},{v:1391894 },{v:19390 }]},
{c: [{v:'2022-05-04 12:25:24'},{v:1423104 },{v:19792 }]},
{c: [{v:'2022-05-05 12:37:32'},{v:1496559 },{v:19719 }]},
{c: [{v:'2022-05-06 12:02:46'},{v:1541128 },{v:22874 }]},
{c: [{v:'2022-05-07 11:58:50'},{v:1599165 },{v:20303 }]},
{c: [{v:'2022-05-08 13:24:50'},{v:1613096 },{v:20949 }]},
{c: [{v:'2022-05-09 11:43:57'},{v:1612312 },{v:20403 }]},
{c: [{v:'2022-05-10 11:42:32'},{v:1643666 },{v:19637 }]},
{c: [{v:'2022-05-12 14:52:32'},{v:1820311 },{v:19067 }]},
{c: [{v:'2022-05-13 12:18:59'},{v:1876581 },{v:18950 }]},
{c: [{v:'2022-05-16 13:32:23'},{v:1921195 },{v:17317 }]},
{c: [{v:'2022-05-17 11:27:25'},{v:2003577 },{v:16400 }]},
{c: [{v:'2022-05-18 11:11:21'},{v:2065387 },{v:15647 }]},
{c: [{v:'2022-05-19 14:21:33'},{v:2226589 },{v:15419 }]},
{c: [{v:'2022-05-20 12:33:09'},{v:2279421 },{v:15044 }]},
{c: [{v:'2022-05-21 12:22:18'},{v:2361355 },{v:15183 }]},
{c: [{v:'2022-05-22 12:02:58'},{v:2369308 },{v:14955 }]},
{c: [{v:'2022-05-24 12:11:52'},{v:2383317 },{v:14841 }]},
{c: [{v:'2022-05-25 10:45:41'},{v:2446581 },{v:14971 }]},
{c: [{v:'2022-05-26 10:56:38'},{v:2558520 },{v:15414 }]},
{c: [{v:'2022-05-27 11:11:48'},{v:2602574 },{v:15814 }]},
{c: [{v:'2022-05-28 11:59:40'},{v:2670406 },{v:16308 }]},
{c: [{v:'2022-05-29 10:48:28'},{v:2674880 },{v:17087 }]},
{c: [{v:'2022-05-30 14:04:39'},{v:2576589 },{v:17698 }]},
{c: [{v:'2022-05-31 12:18:14'},{v:2547480 },{v:18378 }]},
{c: [{v:'2022-06-01 12:11:06'},{v:2630577 },{v:18920 }]},
{c: [{v:'2022-06-02 11:54:00'},{v:2811455 },{v:20703 }]},
{c: [{v:'2022-06-04 15:45:13'},{v:2953728 },{v:24464 }]},
{c: [{v:'2022-06-05 14:27:49'},{v:2941697 },{v:25315 }]},
{c: [{v:'2022-06-06 11:14:59'},{v:2904439 },{v:25782 }]},
{c: [{v:'2022-06-07 10:54:44'},{v:2932133 },{v:26976 }]},
{c: [{v:'2022-06-08 11:44:48'},{v:2993712 },{v:28857 }]},
{c: [{v:'2022-06-09 11:41:19'},{v:3127641 },{v:32498 }]},
{c: [{v:'2022-06-10 12:46:46'},{v:3144178 },{v:38426 }]},
{c: [{v:'2022-06-11 10:56:47'},{v:3196116 },{v:40370 }]},
{c: [{v:'2022-06-12 13:35:36'},{v:3189364 },{v:44513 }]},
{c: [{v:'2022-06-13 13:12:58'},{v:3126064 },{v:49898 }]},
{c: [{v:'2022-06-14 15:15:51'},{v:3142964 },{v:50548 }]},
{c: [{v:'2022-06-15 12:04:41'},{v:3173400 },{v:53637 }]},
{c: [{v:'2022-06-16 10:58:56'},{v:3216405 },{v:60092 }]},
{c: [{v:'2022-06-17 16:13:50'},{v:3211591 },{v:63063 }]},
{c: [{v:'2022-06-18 14:05:36'},{v:3233539 },{v:68108 }]},
{c: [{v:'2022-06-19 12:07:26'},{v:3178157 },{v:72474 }]},
{c: [{v:'2022-06-20 12:23:57'},{v:3096234 },{v:78276 }]},
{c: [{v:'2022-06-21 14:41:39'},{v:3068119 },{v:80762 }]},
{c: [{v:'2022-06-22 14:37:36'},{v:3165493 },{v:84699 }]},
{c: [{v:'2022-06-23 11:07:32'},{v:3250248 },{v:86629 }]},
{c: [{v:'2022-06-24 11:23:20'},{v:3268812 },{v:91006 }]},
{c: [{v:'2022-06-25 13:10:34'},{v:3315635 },{v:94609 }]},
{c: [{v:'2022-06-26 18:09:58'},{v:3305977 },{v:93934 }]},
{c: [{v:'2022-06-27 11:07:02'},{v:3239866 },{v:94420 }]},
{c: [{v:'2022-06-28 13:06:06'},{v:3265006 },{v:98469 }]},
{c: [{v:'2022-06-29 11:19:20'},{v:3280774 },{v:114294 }]},
{c: [{v:'2022-06-30 12:19:34'},{v:3383604 },{v:104555 }]},
{c: [{v:'2022-07-01 11:11:13'},{v:3401011 },{v:109237 }]},
{c: [{v:'2022-07-02 12:53:40'},{v:3466659 },{v:111761 }]},
{c: [{v:'2022-07-03 15:31:42'},{v:3468679 },{v:111711 }]},
{c: [{v:'2022-07-04 12:14:16'},{v:3317653 },{v:113864 }]},
{c: [{v:'2022-07-05 13:13:22'},{v:3237848 },{v:115613 }]},
{c: [{v:'2022-07-06 11:49:11'},{v:3298050 },{v:115212 }]},
{c: [{v:'2022-07-07 11:52:07'},{v:3376945 },{v:121602 }]},
{c: [{v:'2022-07-08 11:40:57'},{v:3395103 },{v:124083 }]},
{c: [{v:'2022-07-09 11:47:43'},{v:3511324 },{v:125028 }]},
{c: [{v:'2022-07-12 14:52:33'},{v:3419287 },{v:131043 }]},
{c: [{v:'2022-07-13 14:57:37'},{v:3499064 },{v:134762 }]},
{c: [{v:'2022-07-14 15:10:04'},{v:3611641 },{v:136076 }]},
{c: [{v:'2022-07-15 12:43:33'},{v:3640052 },{v:139073 }]},
{c: [{v:'2022-07-16 14:14:16'},{v:3653860 },{v:140760 }]},
{c: [{v:'2022-07-17 12:56:35'},{v:3639796 },{v:143449 }]},
{c: [{v:'2022-07-18 12:08:13'},{v:3580086 },{v:144264 }]},
{c: [{v:'2022-07-19 15:48:53'},{v:3627566 },{v:143654 }]},
{c: [{v:'2022-07-20 13:27:33'},{v:3618240 },{v:145654 }]},
{c: [{v:'2022-07-21 12:00:44'},{v:3743320 },{v:148881 }]},
{c: [{v:'2022-07-25 13:40:14'},{v:3710712 },{v:150877 }]},
{c: [{v:'2022-07-26 11:11:15'},{v:3737843 },{v:147512 }]},
{c: [{v:'2022-07-27 13:36:07'},{v:3792245 },{v:145026 }]},
{c: [{v:'2022-07-28 13:05:27'},{v:3935732 },{v:146323 }]},
{c: [{v:'2022-07-29 11:53:31'},{v:3955187 },{v:143988 }]},
{c: [{v:'2022-07-31 12:16:58'},{v:3913363 },{v:143676 }]},
{c: [{v:'2022-08-02 11:30:31'},{v:3845966 },{v:139792 }]},
{c: [{v:'2022-08-03 11:44:40'},{v:3831950 },{v:137057 }]},
{c: [{v:'2022-08-04 11:41:16'},{v:3967832 },{v:136478 }]},
{c: [{v:'2022-08-05 12:55:45'},{v:3980886 },{v:135364 }]},
{c: [{v:'2022-08-06 13:00:14'},{v:3984708 },{v:134793 }]},
{c: [{v:'2022-08-08 11:33:08'},{v:3811527 },{v:135510 }]},
{c: [{v:'2022-08-09 11:23:40'},{v:3796314 },{v:131807 }]},
{c: [{v:'2022-08-12 12:28:30'},{v:3872282 },{v:123535 }]},
{c: [{v:'2022-08-13 12:08:02'},{v:3898569 },{v:119264 }]},
{c: [{v:'2022-08-14 11:38:33'},{v:3817464 },{v:116861 }]},
{c: [{v:'2022-08-15 12:03:19'},{v:3718240 },{v:117508 }]},
{c: [{v:'2022-08-16 11:56:49'},{v:3689780 },{v:111252 }]},
{c: [{v:'2022-08-17 13:05:50'},{v:3648779 },{v:105058 }]},
{c: [{v:'2022-08-18 11:25:18'},{v:3748879 },{v:101343 }]},
{c: [{v:'2022-08-19 13:13:36'},{v:3710650 },{v:101830 }]},
{c: [{v:'2022-08-20 11:01:43'},{v:3704053 },{v:101166 }]},
{c: [{v:'2022-08-22 11:36:19'},{v:3498281 },{v:97648 }]},
{c: [{v:'2022-08-25 12:27:57'},{v:3523746 },{v:94047 }]},
{c: [{v:'2022-08-29 11:16:42'},{v:3314152 },{v:84931 }]},
{c: [{v:'2022-08-30 12:16:57'},{v:3262944 },{v:66818 }]},
{c: [{v:'2022-08-31 11:13:45'},{v:3206099 },{v:65532 }]},
{c: [{v:'2022-09-01 12:08:42'},{v:3252810 },{v:62748 }]},
{c: [{v:'2022-09-03 11:55:54'},{v:3220326 },{v:56745 }]},
{c: [{v:'2022-09-04 11:43:56'},{v:3154008 },{v:55114 }]},
{c: [{v:'2022-09-06 12:02:22'},{v:2967219 },{v:52336 }]},
{c: [{v:'2022-09-07 12:53:19'},{v:2937150 },{v:50594 }]},
{c: [{v:'2022-09-09 11:47:26'},{v:2933254 },{v:49636 }]},
{c: [{v:'2022-09-14 13:22:01'},{v:2664192 },{v:45749 }]},
{c: [{v:'2022-09-16 13:03:55'},{v:2647114 },{v:46748 }]},
{c: [{v:'2022-09-20 11:26:47'},{v:2420137 },{v:47379 }]},

      ]
    });

    var container = document.getElementById('chart');
    var chart = new google.visualization.LineChart(container);
    chart.draw(data, {
      width: 600,
  height: 300,
  vAxes: {
     0: {
         viewWindow: {
             min: 0,
             max: 29140784         }
     },
     1: {
         viewWindow: {
             min: 0,
             max: 29140784         }
     }
 },
      series: {
        1: {
          targetAxisIndex: 1,
        }
      },
      theme: 'material',
    });
  },
  packages: ['corechart']
  });


  
  </script>


    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {


// piecharts for the two countries (today) 
        var country1_latest_piechart = google.visualization.arrayToDataTable([
          ['state', 'Total Covid-19 cases'],
    	   ['Recovered Cases',94055480],['Deaths',1078938],['Active cases',2420137]
        ]);
        var country2_latest_piechart = google.visualization.arrayToDataTable([
          ['state', 'Total Covid-19 cases'],
    	   ['Recovered Cases',43967340],['Deaths',528370],['Active cases',47379]
        ]);
      
      
        var options_country1_latest_piechart = {
          title: 'Covid-19 cases in USA today',
      legend: 'legend',
};
        var options_country2_latest_piechart = {
          title: 'Covid-19 cases in India today',
      legend: 'legend',
};


       var chart_country1_latest_piechart = new google.visualization.PieChart(document.getElementById('country1_latest_piechart'));
       var chart_country2_latest_piechart = new google.visualization.PieChart(document.getElementById('country2_latest_piechart'));
        chart_country1_latest_piechart.draw(country1_latest_piechart, options_country1_latest_piechart);
        chart_country2_latest_piechart.draw(country2_latest_piechart, options_country2_latest_piechart);

// piecharts for the two countries for peak covid 19 dates


// piecharts for the two countries (peak) 
        var country1_peak_piechart = google.visualization.arrayToDataTable([
          ['state', 'Total Covid-19 cases'],
    	   ['Recovered Cases',47900252],['Deaths',925655],['Active cases',29140784]
        ]);
        var country2_peak_piechart = google.visualization.arrayToDataTable([
          ['state', 'Total Covid-19 cases'],
    	   ['Recovered Cases',18671222],['Deaths',246146],['Active cases',3745207]
        ]);
      
      
        var options_country1_peak_piechart = {
          title: 'Covid-19 cases in USA at peak on 06/02/2022',
      legend: 'legend',
};
        var options_country2_peak_piechart = {
          title: 'Covid-19 cases in India at peak on 10/05/2021',
      legend: 'legend',
};


       var chart_country1_peak_piechart = new google.visualization.PieChart(document.getElementById('country1_peak_piechart'));
       var chart_country2_peak_piechart = new google.visualization.PieChart(document.getElementById('country2_peak_piechart'));
        chart_country1_peak_piechart.draw(country1_peak_piechart, options_country1_peak_piechart);
        chart_country2_peak_piechart.draw(country2_peak_piechart, options_country2_peak_piechart);



}
</script>

      </div>
      <div id="flex_pane2">
	<div id="chart"></div>

      </div>

</div>



<style type="text/css" media="screen">
  #explanation{
  border: 3px solid black;
  font-size: 1.5em;
  margin: 3px;
  padding: 8px;
  }
  @media (max-width: 500px){

  #explanation{
  padding: 5px;
  font-size: 1em;
  }
  
  }
      
    </style>
    <div id="explanation">
      <h2>Explanation of labels</h2>
    <p>
      Total Cases = Active Cases + Recovered Cases + Deaths
    </p>
    <p>
      Total Cases, Recovered Cases and Deaths are all cumulative.
    </p>
    <p>
      Active Cases show a daily snapshot of Covid-19 cases and is not cumulative.
    </p>
  </div>



        <div id="country1_latest_piechart" style="width:100%; height:80%"> </div>
        <div id="country2_latest_piechart" style="width:100%; height:80%"> </div>

        <div id="country1_peak_piechart" style="width:100%; height:80%"> </div>
        <div id="country2_peak_piechart" style="width:100%; height:80%"> </div>


    <style type="text/css" media="screen">
      /* footer code */
      .stark_black_footer_flex_container{
      display: flex;
      min-height: 400px;
      border: solid black 3px;
      padding: 20px;
      background-color: black;
      }
      .stark_black_footer_left{
      width: 50%;
      border: solid black 3px;
      }
      .stark_black_footer_right{
      width: 45%;
      border: solid black 3px;
      }
      .stark_black_footer_right_top{
      min-height: 50%;
      border: solid black 3px;
      }
      .stark_black_footer_right_bottom{
      border: solid black 3px;
      min-height: 45%;
      }
      .card{
      width: 80%;
      height: auto;
      border: 1px solid white;
      box-shadow: 5px 5px 8px white, 10px 10px 8px grey, 15px 15px 8px green;
      background-color: black;
      color: white;
      padding: 20px;
      }
      .stark_black_filler{
      min-height: 200px;
      background-color: black;
      }
      .card a{
      color: #f8f8ff;
      text-decoration: none;
       }
      .card a:hover{
      color: #adff2f;
      text-decoration: underline;
      }
      ul li{
      line-height: 1.5;
      }
      .card h2{
background-color: black;
color: white;
      }
    </style>


        <style>
      @media (max-width:500px) {
      /* smartphones, iPhone, portrait 480x320 phones */
      
      .stark_black_footer_flex_container{
      padding: 1px;
      flex-direction: column;
      width: 95%;
      }
      .stark_black_footer_left{
      width: 100%;
      border: solid black 3px;
      }
      .stark_black_footer_right{
      width: 100%;
      border: solid black 3px;
      }
      .stark_black_footer_right_top{
      border: solid black 3px;
      }
      .stark_black_footer_right_bottom{
      border: solid black 3px;
      }
      .card{
      height: auto;
      }
      
      }

    </style>
	<style>
     @media (max-width:1000px) {
      .card{
      height: auto;
      }
      
      }

	  </style>
    
    <div class="stark_black_footer_flex_container">
      <div class="stark_black_footer_left">

 <div class="card">
   <h2>Source of data:</h2>
   <p></p>
      <a href="https://www.worldometers.info/coronavirus/" target="_blank">www.worldometers.info</a> 
   <h2>Tools used</h2>
   <ul>
     <li>php for server side scripting</li>
     <li>BeautifulSoup library of python for data scrapping from websites</li>
     <li>Mariadb server, an open source relational database (a fork of mysql)</li>
     <li>Graphs are being generated clientside with google-graphs javascript library</li>
   </ul>


 </div>
      </div>
      <div class="stark_black_footer_right">
 <div class="stark_black_footer_right_top">

   <div class="card">
     <h2>Other links</h2>
     <ul>
       <li><a href="/covid1/daily_covid19_data.php" target="_blank">Covid-19 statistics of the world</a> </li>
       <li><a href="/covid2/covid_india_tracker.html" target="_blank">Covid-19 statistics of India</a></li>
       <li><a href="/covid1/compare/active.php" target="_blank">Compare Covid-19 statistics between two countries</a> </li>
       <li><a href="/covid2/compare_two_states.php" target="_blank">Compare Covid-19 statistics across Indian states</a> </li>
       <li><a href="/covid2/states_table.php" target="_blank">Covid-19 statistics of different Indian states</a></li>
       <li><a href="/covid2/covid_distribution.php" target="_blank">Covid-19 pie-chart visualization for India</a></li>
       <li><a href="/covid1/covid_distribution_top_ten.html" target="_blank">Covid-19 pie-chart visualization for the World</a></li>
       <li><a href="/covid2/india/last_week.php" target="_blank">Change in Covid-19 cases in India in the last week</a></li>
       <li><a href="/covid1/world/change_in_covid_cases_last_week.php" target="_blank">Change in Covid-19 cases in different countries in the last week</a></li>
       <li><a href="/covid1/world_a/7.php" target="_blank">Number of active Covid-19 cases in different countries in the last week</a></li>
       <li><a href="/covid2/india_a/7.php" target="_blank">Number of active Covid-19 cases in different Indian states in the last week</a></li>

     </ul>
   </div>
 </div>
 <div class="stark_black_footer_right_bottom">

   <div class="card">
     <h2>About Me</h2>
     <p>My name is Parameshwar Majhi</p>

     <a href="https://majhi.co.in/bash/" target="_blank">https://majhi.co.in/bash/</a> 

   </div>
 </div>
      </div>
    </div>
    <div class="stark_black_filler">
</div>
<html>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <head>
    <style type="text/css" media="screen">
      #crypto_container{}
      #crypto_visible_box_outer{
      margin: 5px;
      padding: 2px;
      background-color: #f5f5dc;
      }
      #crypto_visible_box_inner{
      margin: 2px;
      padding: 1px;
      background-color: #e0ffff ;
      }
      #donate_box{
      background-color: white;
      font-size: 0.7em;
      }
      .coin{
      margin: 20px 1px 20px 1px;
      padding: 5px 0 5px 0;
      text-align: center;
      line-height: 2;
      word-wrap: break-word;
      background-color: #e6e6fa ;
      box-shadow: 3px 2px 5px black;
      }
      .coin:hover{background-color: #f0f8ff }
      .coin>a:link{color: black}
      .coin>a:hover{color: red}
      a{text-decoration: none;}
      a.crypto_site{font-size: 1.8em; padding: 0}
      @media (min-width: 500px){
      .coin br{display: none}
      }
      a#crypto_address{
      padding: 20px;
      }
      .crypto_qr{
      display: none;
      }
      #crypto_donor_banner{
      text-align: center;
      }
    </style>
  </head>
  <body>
    <div id="crypto_donor_banner">
      <h3>Show your appreciation <p>(Donate some crypto coins)</h3>
      
    </div>
    <div id="crypto_container">
      <div id="crypto_visible_box_outer">
	<div id="crypto_visible_box_inner">
	  <div id="donate_box">
	    <div class="coin" id="btc">
	      <a class="crypto_site" href="https://bitcoin.org" target="_NEW">BTC</a><br> <a  id="crypto_address" href="bitcoin:bc1qj328xknrkqhcmlekd9eye5nmwt87hj9ld7nps4">bc1qj328xknrkqhcmlekd9eye5nmwt87hj9ld7nps4</a><p>
<img class="crypto_qr" src="data:image/jpeg;base64, iVBORw0KGgoAAAANSUhEUgAAAJEAAACRCAYAAADD2FojAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAD
e0lEQVR4nO3dy5LbIBRF0TiV///lzigTDZrgDUhO1pq29WjXqetbCNDr6+vr6wcEP+++AT6fEJEJ
EZkQkQkRmRCRCRGZEJEJEZkQkQkRmRCRCRHZr3cPfL1eK+9j6DrZ4Hr90WSEer/1/LOTJe7+fmeo
RGRCRCZEZG/3RFerJ0jO9hi1J5ntsZ52/lkrey6ViEyIyISIbFlPdDX7m1t/82d7pNn7qz3Naqe/
3++oRGRCRCZEZNt6orvVHqD2VHf3TCepRGRCRCZEZP9MTzQax1k9zlPP97Rxp0IlIhMiMiEi29YT
nf6Nn+2B6rOn1fOZZj2ph1KJyISITIjIlvVEp9dJrR5nqfORVh8/+vyTqERkQkQmRGSvT91Rv/Yk
u5+tXf1Lz8quVCIyISITIrJt+xPt7lHqs7B6/aunzVc6eX6ViEyIyISIbNk40epnQavn/8xef9bu
+UWn92uaoRKRCRGZEJFt27Ox9jCr92Ccvd7qv4/c/X0VKhGZEJEJEdmxtfij3/DVc5ZHTvcws9eb
/b5mjx99foZKRCZEZEJEtm3dWR03Wv0ujNPzjU6PO925Lk0lIhMiMiEie3s+0d1zmldbvY6tXr8y
TsRHESIyISI7Np+oPit68jjJ31jdQ47Of/L7UInIhIhMiMi2rTubtfrdGKvnaJ9+V8jI6jnmhUpE
JkRkQkS2bZxoZPU7Vnf3QLPnG1k9DrZ6PtcMlYhMiMiEiGzbfKL/fX+h1f/v6Px37outEpEJEZkQ
kW1bi796v506bnO6h9j9/rMn7ZOtEpEJEZkQkW3riXaPe6x+d8js5+9ep3Zlz0Y+mhCRCRHZbeNE
u+c473529bR1cnWPx0IlIhMiMiEie7snWj3ucHo+zO51Yrufhe3u+WaoRGRCRCZEZG/3RKf3A7r+
pj99n+yn3d9OKhGZEJEJEdlta/FHdvdcd78rZPZ6T6YSkQkRmRCRPXbd2ez5dz8LG41TVbt7rJ3r
7lQiMiEiEyKybT3RaXUdWV1nNrJ7Xdro/nbuw60SkQkRmRCRfWxPdPe7LZ621n738d9RiciEiEyI
yB6zP9GsOs5x97qt1XsRrD5+hkpEJkRkQkS2rCe6+730q9+f9vTjd+/7PUMlIhMiMiEie/t9Z/CH
SkQmRGRCRCZEZEJEJkRkQkQmRGRCRCZEZEJEJkRkQkQmRGS/Aa/VLT9JnjzWAAAAAElFTkSuQmCC
"/>
	    </div>

	    
	    <div class="coin"  id="litecoin">
	      <br /><a class="crypto_site" href="https://litecoin.org" target="_NEW">LTC</a><br> <a  id="crypto_address" href="litecoin:ltc1q5m6dtu0hqf8xq4up8x2t65zxcz2dzjtxnmeggr">ltc1q5m6dtu0hqf8xq4up8x2t65zxcz2dzjtxnmeggr</a><p>
<img class="crypto_qr" src="data:image/jpeg;base64,iVBORw0KGgoAAAANSUhEUgAAAJEAAACRCAYAAADD2FojAAAACXBIWXMAAA7EAAAOxAGVKw4bAAAD
dUlEQVR4nO3dS27bQBBF0SjI/rfsTA0OTLRuf6jknGlsig4eSoX+vr6+vr5+QfD79Avw+YSITIjI
hIhMiMiEiEyIyISITIjIhIhMiMiEiEyIyP68+4uv12vme9y6W2xwfZ/RxQl3f8/1ead/fraymEMl
IhMiMiEie7snupq9QPKuJxjtGUZ7krvfX92jXe3+/x2hEpEJEZkQkU3ria5Gv3NHv/PvxlVqD3Rn
ds9TP//OyvdTiciEiEyIyJb1RKvNnouq4yb1+Z+8EVklIhMiMiEi+9ieqM5dffpc2pOoRGRCRCZE
ZMt6otXf+bXHmD33tnsc6Ek9lUpEJkRkQkQ2rSfavU+qGh1Hqv8++vl3P/8kKhGZEJEJEdnrfz1R
f/Vc1r88V3alEpEJEZkQkT3mfKLV5/PUcZjV64vuPm/1uFahEpEJEZkQkb09TjT7O331548+b3cP
VK3+e3+iEpEJEZkQkb09TjS7B1jdM5xeM13HwUbXhBsn4qMIEZkQkW2bO6s9xJ3VZzbuHodZvU/N
OBGPIkRkQkR27Hyi1Wccrj6z8fR6p9PneH+nEpEJEZkQkR2bO1u9nmj3XNLqucT6/qNzbSNUIjIh
IhMisml78Wevj6l2r+GuPUY97+hq595/lYhMiMiEiOwxc2dP27t+52l740/eLaISkQkRmRCRPeZ8
otrzrL7DdfR9Vjt9t8h3KhGZEJEJEdm0caLZ62lG11CPft7subXVd9LePe9q57iRSkQmRGRCRLZs
7mz33NLsfWV3Zp9PVOfuRpk741GEiEyIyLatJ1p9p+rsuaTV95XtnnuznohHEyIyISJb1hOdHteZ
fT7R7Lm/3ffFObORRxMiMiEim7YXf7fZa6JXry9afT9bpSfiKCEiEyKyx+w7uzP73OrV5//M3gd3
+m6Qn6hEZEJEJkRk2/adjVrd08yeW5q9Pujp97F9pxKRCRGZEJFt23d25/S5z6f3wu8+X2kmlYhM
iMiEiOzYOdaz1XGdu+fNNntN9OwecYRKRCZEZEJE9s/0RFe7963t7mF2r+n+iUpEJkRkQkR2bC/+
abvXLNe9/qN3mxgn4qMIEZkQkU3riU6uZ3nH6rs5do8brT5r4CcqEZkQkQkR2ceeT8RzqERkQkQm
RGRCRCZEZEJEJkRkQkQmRGRCRCZEZEJEJkRkQkT2F6LDGnxnf+itAAAAAElFTkSuQmCC
" />		

	    </div>
	    <div class="coin" id="dogecoin">
	      <br/><a class="crypto_site" href="https://dogecoin.com/" target="_NEW">DOGECOIN</a><br> <a id="crypto_address" href="dogecoin:D6uvg77GUthoo8akc8tXh9X7zp4EL77VZo">D6uvg77GUthoo8akc8tXh9X7zp4EL77VZo</a><p>
<img class="crypto_qr" src="data:image/jpeg;base64,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
cf/gdPjw4R49ejQdMRYvXuz+yVkplZ6efs8991x//fVKKV9f32HDhun2gQMH/vHHH2VlZWvXrn3q
qafcd0lLS1v/r1mzZjX3EJRSmzZtuuWWW7p27XrWlm7dunl5eZ04cWLDhg0hISGubZxOZ0JCQlpa
mmvHLVu2hIaGduvWTSl1zz33FBcXt3BST7NQCPft2zdgwICGhoaqqirdYrfb9bsO/W2K5nA4lFIx
MTG5ubnr168PDQ1VSp06deriiy/WG5SXl7veXqanpzf9E3G1DB48ePv27fq2zWZ77733Fi1aNGDA
gP79+/fp0+fw4cPuO+7Zs+fGG29s2u0777xT3+jevXtVVVV1dbXry6R//vmne/fup06dcn/vdObM
GZvNtm7duvDw8GHDhl188cUJCQl5eXkVFRX6TalSqr6+Xt/46aefQkJC7Hb7jz/+qJSqqKjo06dP
ow589NFHSUlJ/v7+48aNKykpOeu13b9//8qVKwsKCnx9fdeuXdtc55VSCQkJq1atSktLa2hoCAoK
0ve++eabF1xwQWFhYU5OjvspysrKSktLXW9ulVKbN2+urKyMiIho2ofq6mqbzfbpp596e3tHR0fP
nz//gw8+cH3KOEeZmZmPP/54Cy0PPPDAunXr3n333UmTJrkak5OTp06dOmDAAPfOuJ6mhoYG1x+M
CEuEsKGhYdmyZf369bvkkksCAwPfe+893b5mzZrbb79dKdWzZ8/S0lKl1N9//33kyBGlVN++fU+c
OLFmzZrw8HCl1F133fXBBx8opU6ePJmfn6+vqd7YPTmNWmw222233bZ8+XL9z+rq6sTERP2VoFJq
yJAhBQUF+vaRI0dKS0vdn0UXH5///4bZ19fX4XDcfffd+sOPw+F49dVXJ06ceMUVVxw7duz06dNK
qR07dvTu3dvb27t79+6ukO/evbtfv369evU6cODAqVOnlFL79+/Xdw0cOHDEiBGvvfba7Nmzy8vL
e/Xq9euvv+ptKioq9DeBhmHU1NTox67P0siff/753HPPrV692tfXd968efn5+a7PzI06r2+XlZWF
h4cvXbpUvx/ZunXr1q1b58yZ4+Pjs2rVqsTERFdyFi1a5P4ad/jw4ZycHP0R3UUf9uTJk7/99ttl
l10WFRWVn5//xhtvJCUlTZgwwfXSeS7y8/PvuOOOLl26tNASEhKSnZ2t33HolnfeeefKK690vdxo
t9xyy6ZNm/TtZcuWnfVVo91IligGDBigP/MYhhESErJs2TKl1M033/zNN9/oixIUFKTfzMTGxj7z
zDP9+vXz8/Pr27ev3n3KlClbtmyx2WxKqdDQ0KSkpClTphiGMXz48E6dOiml1qxZ8+yzz7qfsWnL
zJkzV65cOXr0aJvN5u3tnZKS4kranDlzZs6c+fbbb3fq1MkwjMzMTNderhdRm82mO6CU8vHx6dq1
6/jx4+fOnRsfH//PP/9Mmzatf//+SqmFCxdOnz7d39/fz89v8eLFSqmxY8e+9NJLEyZMUEpdc801
+rU8OTl59OjRXl5e1113Xe/evZVS+iuQLl26LFmyJCUlJTMzc+HChY899pjD4aiqqlqwYIHu5yOP
POLv73/69Om5c+fqznTq1MnVsVmzZmVlZV100UVKKS8vr+zs7MjIyA8//LBp55VS5eXlERERixcv
1i9Vdrs9IyPDNXj26NEjPT09NTV18eLFdXV1ZWVlI0eOdF2W2NhYh8Ohn7tu3brl5ubqz2adOnXy
9/efN2+e+5W32Ww6PDabbfbs2e5f9qSmpg4dOrSkpOSBBx7QLYMHD05LS1u3bl1GRob7QZq2dO7c
eejQoXFxcfqfVVVVCQkJN954o+sLGz8/v7y8vD59+gQHB0dFRRmGMXjw4IkTJyo5Xsa/3791DE6n
8/7779+4cWPTrzfR/sLCwj788EPpXlid5Ehoovr6+unTp+v3Y0899RQJtIhWvdv8z+poIyFw3rHE
FzPAfxkhBIQRQkAYIQSEEUJAGCEEhBFCQBghBIT9H3tq6MBPyECFAAAAAElFTkSuQmCC"/>

		
</div>
	    
	    <div class="coin"  id="monero">
	      <br /><a class="crypto_site" href="https://getmonero.org" target="_NEW">XMR</a><br> <a id="crypto_address" href="monero:44yBqx3HTfAMPi435RDWHuSK2Uhqkoe4Z7uY2wSvHHftP98uFipYwK47wYWTq2WrxB44TsRj4w2CM9mrYoFdoadaLzwga8Z">44yBqx3HTfAMPi435RDWHuSK2Uhqkoe4Z7uY2wSvHHftP98uFipYwK47wYWTq2WrxB44TsRj4w2CM9mrYoFdoadaLzwga8Z</a><p>
<img class="crypto_qr" src="data:image/jpeg;base64,iVBORw0KGgoAAAANSUhEUgAAAPAAAADwAQMAAAAEm3vRAAAABlBMVEUAAAD///+l2Z/dAAAACXBI
		WXMAAA7EAAAOxAGVKw4bAAAdG0lEQVRYCQEQHe/iAP//////////////////////////////////
		/////wD///////////////////////////////////////8A////////////////////////////
		////////////AP///////////////////////////////////////wD/////////////////////
		//////////////////8A////////////////////////////////////////AP//////////////
		/////////////////////////wD///////////////////////////////////////8A////////
		////////////////////////////////AP///////////////////////////////////////wD/
		//////////////////////////////////////8A////////////////////////////////////
		////AP///////////////////////////////////////wD/////////////////////////////
		//////////8A////////////////////////////////////////AP//////////////////////
		/////////////////wD///////////////////////////////////////8A////////////////
		////////////////////////AP///////////////////////////////////////wD/////////
		//////////////////////////////8A///wAAAAA+AH/AAAP/+D///8HwAB/wfAAAAAD///AP//
		8AAAAAPgB/wAAD//g////B8AAf8HwAAAAA///wD///AAAAAD4Af8AAA//4P///wfAAH/B8AAAAAP
		//8A///wAAAAA+AH/AAAP/+D///8HwAB/wfAAAAAD///AP//8P///4P/B///AAHwA8APgB//weAH
		wf///w///wD///D///+D/wf//wAB8APAD4Af/8HgB8H///8P//8A///w////g/8H//8AAfADwA+A
		H//B4AfB////D///AP//8P///4P/B///AAHwA8APgB//weAHwf///w///wD///D///+D/wf//wAB
		8APAD4Af/8HgB8H///8P//8A///w+AAPg//4AB/4PgADwfB//wfAHwfB8AAfD///AP//8PgAD4P/
		+AAf+D4AA8Hwf/8HwB8HwfAAHw///wD///D4AA+D//gAH/g+AAPB8H//B8AfB8HwAB8P//8A///w
		+AAPg//4AB/4PgADwfB//wfAHwfB8AAfD///AP//8PgAD4P/+AAf+D4AA8Hwf/8HwB8HwfAAHw//
		/wD///D4AA+D4P+D///+D/w//4AAB8Af/8HwAB8P//8A///w+AAPg+D/g////g/8P/+AAAfAH//B
		8AAfD///AP//8PgAD4Pg/4P///4P/D//gAAHwB//wfAAHw///wD///D4AA+D4P+D///+D/w//4AA
		B8Af/8HwAB8P//8A///w+AAPg+D/g////g/8P/+AAAfAH//B8AAfD///AP//8PgAD4Pg/4P/AAH/
		/8H//AAH/h//wfAAHw///wD///D4AA+D4P+D/wAB///B//wAB/4f/8HwAB8P//8A///w+AAPg+D/
		g/8AAf//wf/8AAf+H//B8AAfD///AP//8PgAD4Pg/4P/AAH//8H//AAH/h//wfAAHw///wD///D4
		AA+D4P+D/wAB///B//wAB/4f/8HwAB8P//8A///w////g+AHgB/4P/+APg//4P//4P/B////D///
		AP//8P///4PgB4Af+D//gD4P/+D//+D/wf///w///wD///D///+D4AeAH/g//4A+D//g///g/8H/
		//8P//8A///w////g+AHgB/4P/+APg//4P//4P/B////D///AP//8P///4PgB4Af+D//gD4P/+D/
		/+D/wf///w///wD///AAAAAD4Ph8HwfB8Hw+D4Pg+D4fB8AAAAAP//8A///wAAAAA+D4fB8HwfB8
		Pg+D4Pg+HwfAAAAAD///AP//8AAAAAPg+HwfB8HwfD4Pg+D4Ph8HwAAAAA///wD///AAAAAD4Ph8
		HwfB8Hw+D4Pg+D4fB8AAAAAP//8A///wAAAAA+D4fB8HwfB8Pg+D4Pg+HwfAAAAAD///AP//////
		///g///g+AAAAAH/g+D4Af///////////wD/////////4P//4PgAAAAB/4Pg+AH///////////8A
		/////////+D//+D4AAAAAf+D4PgB////////////AP/////////g///g+AAAAAH/g+D4Af//////
		/////wD/////////4P//4PgAAAAB/4Pg+AH///////////8A///w//4PgAD/g+AHwf+D/g+AHwAB
		4PgAAAP/D///AP//8P/+D4AA/4PgB8H/g/4PgB8AAeD4AAAD/w///wD///D//g+AAP+D4AfB/4P+
		D4AfAAHg+AAAA/8P//8A///w//4PgAD/g+AHwf+D/g+AHwAB4PgAAAP/D///AP//8P/+D4AA/4Pg
		B8H/g/4PgB8AAeD4AAAD/w///wD///AHwAB/4PgAHwfB//w+D/wAB8H/AD4Af+AP//8A///wB8AA
		f+D4AB8Hwf/8Pg/8AAfB/wA+AH/gD///AP//8AfAAH/g+AAfB8H//D4P/AAHwf8APgB/4A///wD/
		//AHwAB/4PgAHwfB//w+D/wAB8H/AD4Af+AP//8A///wB8AAf+D4AB8Hwf/8Pg/8AAfB/wA+AH/g
		D///AP//8AAB8AAfB4AA+D4AfD4AAAAAP//4Pg+D4A///wD///AAAfAAHweAAPg+AHw+AAAAAD//
		+D4Pg+AP//8A///wAAHwAB8HgAD4PgB8PgAAAAA///g+D4PgD///AP//8AAB8AAfB4AA+D4AfD4A
		AAAAP//4Pg+D4A///wD//////g//4P///wfAD4PB8H/gAAAfB8APg/////8A//////4P/+D///8H
		wA+DwfB/4AAAHwfAD4P/////AP/////+D//g////B8APg8Hwf+AAAB8HwA+D/////wD//////g//
		4P///wfAD4PB8H/gAAAfB8APg/////8A//////4P/+D///8HwA+DwfB/4AAAHwfAD4P/////AP//
		8AAB8AAf//wA////gAAPg/8HweAAPg+D4P///wD///AAAfAAH//8AP///4AAD4P/B8HgAD4Pg+D/
		//8A///wAAHwAB///AD///+AAA+D/wfB4AA+D4Pg////AP//8AAB8AAf//wA////gAAPg/8HweAA
		Pg+D4P///wD///AAAfAAH//8AP///4AAD4P/B8HgAD4Pg+D///8A////+AH/////gAD4P/+D/gB8
		HwA+H//B8APgD///AP////gB/////4AA+D//g/4AfB8APh//wfAD4A///wD////4Af////+AAPg/
		/4P+AHwfAD4f/8HwA+AP//8A////+AH/////gAD4P/+D/gB8HwA+H//B8APgD///AP////gB////
		/4AA+D//g/4AfB8APh//wfAD4A///wD///AAAA+D4PgAAAfB/4P+AAP/B/4fAAHwf/8P//8A///w
		AAAPg+D4AAAHwf+D/gAD/wf+HwAB8H//D///AP//8AAAD4Pg+AAAB8H/g/4AA/8H/h8AAfB//w//
		/wD///AAAA+D4PgAAAfB/4P+AAP/B/4fAAHwf/8P//8A///wAAAPg+D4AAAHwf+D/gAD/wf+HwAB
		8H//D///AP//8AA+AHwf//wf+D4PgAAPg+AAAB/4PgAD4A///wD///AAPgB8H//8H/g+D4AAD4Pg
		AAAf+D4AA+AP//8A///wAD4AfB///B/4Pg+AAA+D4AAAH/g+AAPgD///AP//8AA+AHwf//wf+D4P
		gAAPg+AAAB/4PgAD4A///wD///AAPgB8H//8H/g+D4AAD4PgAAAf+D4AA+AP//8A///w//4Pg///
		/AD4Pg//wf//4PgB//g+D///D///AP//8P/+D4P///wA+D4P/8H//+D4Af/4Pg///w///wD///D/
		/g+D///8APg+D//B///g+AH/+D4P//8P//8A///w//4Pg////AD4Pg//wf//4PgB//g+D///D///
		AP//8P/+D4P///wA+D4P/8H//+D4Af/4Pg///w///wD///D//g/8H/h/4AfAAH/+AHwf+D//B8AA
		fB////8A///w//4P/B/4f+AHwAB//gB8H/g//wfAAHwf////AP//8P/+D/wf+H/gB8AAf/4AfB/4
		P/8HwAB8H////wD///D//g/8H/h/4AfAAH/+AHwf+D//B8AAfB////8A///w//4P/B/4f+AHwAB/
		/gB8H/g//wfAAHwf////AP//8AAAD4P/+AAAB8Hwf8AAf/8H/h8AAf+D/w///wD///AAAA+D//gA
		AAfB8H/AAH//B/4fAAH/g/8P//8A///wAAAPg//4AAAHwfB/wAB//wf+HwAB/4P/D///AP//8AAA
		D4P/+AAAB8Hwf8AAf/8H/h8AAf+D/w///wD///AAAA+D//gAAAfB8H/AAH//B/4fAAH/g/8P//8A
		///w+D4P//8Hg///wf/8Af//4P/B4Pg//4P/////AP//8Pg+D///B4P//8H//AH//+D/weD4P/+D
		/////wD///D4Pg///weD///B//wB///g/8Hg+D//g/////8A///w+D4P//8Hg///wf/8Af//4P/B
		4Pg//4P/////AP//8Pg+D///B4P//8H//AH//+D/weD4P/+D/////wD///8H/g+AAPgAH//B/4AB
		//wf+AH/+D4PgAD///8A////B/4PgAD4AB//wf+AAf/8H/gB//g+D4AA////AP///wf+D4AA+AAf
		/8H/gAH//B/4Af/4Pg+AAP///wD///8H/g+AAPgAH//B/4AB//wf+AH/+D4PgAD///8A////B//w
		f+AH//8AAfB//gB/4PgAH/g/8AAfD///AP///wf/8H/gB///AAHwf/4Af+D4AB/4P/AAHw///wD/
		//8H//B/4Af//wAB8H/+AH/g+AAf+D/wAB8P//8A////B//wf+AH//8AAfB//gB/4PgAH/g/8AAf
		D///AP///wf/8H/gB///AAHwf/4Af+D4AB/4P/AAHw///wD///D4AA+D4P+AH//B///AAH//AAH/
		+D///B8P//8A///w+AAPg+D/gB//wf//wAB//wAB//g///wfD///AP//8PgAD4Pg/4Af/8H//8AA
		f/8AAf/4P//8Hw///wD///D4AA+D4P+AH//B///AAH//AAH/+D///B8P//8A///w+AAPg+D/gB//
		wf//wAB//wAB//g///wfD///AP//8P/B8H/g/4P/AAAP/8AP//8HwB//wfAD4P///wD///D/wfB/
		4P+D/wAAD//AD///B8Af/8HwA+D///8A///w/8Hwf+D/g/8AAA//wA///wfAH//B8APg////AP//
		8P/B8H/g/4P/AAAP/8AP//8HwB//wfAD4P///wD///D/wfB/4P+D/wAAD//AD///B8Af/8HwA+D/
		//8A///w//4PgAD4A+D/wf//wA+AH/g///g+D4AA////AP//8P/+D4AA+APg/8H//8APgB/4P//4
		Pg+AAP///wD///D//g+AAPgD4P/B///AD4Af+D//+D4PgAD///8A///w//4PgAD4A+D/wf//wA+A
		H/g///g+D4AA////AP//8P/+D4AA+APg/8H//8APgB/4P//4Pg+AAP///wD///8HwA/8AAAD4AfB
		8Hw///wfAAAfAAAAf+AP//8A////B8AP/AAAA+AHwfB8P//8HwAAHwAAAH/gD///AP///wfAD/wA
		AAPgB8HwfD///B8AAB8AAAB/4A///wD///8HwA/8AAAD4AfB8Hw///wfAAAfAAAAf+AP//8A////
		B8AP/AAAA+AHwfB8P//8HwAAHwAAAH/gD///AP///wAAAAP//4Af+AAP///wf+AH/h////+AHw//
		/wD///8AAAAD//+AH/gAD///8H/gB/4f////gB8P//8A////AAAAA///gB/4AA////B/4Af+H///
		/4AfD///AP///wAAAAP//4Af+AAP///wf+AH/h////+AHw///wD///8AAAAD//+AH/gAD///8H/g
		B/4f////gB8P//8A////AAH//AAAA///wA/8AA+D4AAAAP/AAAPgD///AP///wAB//wAAAP//8AP
		/AAPg+AAAAD/wAAD4A///wD///8AAf/8AAAD///AD/wAD4PgAAAA/8AAA+AP//8A////AAH//AAA
		A///wA/8AA+D4AAAAP/AAAPgD///AP///wAB//wAAAP//8AP/AAPg+AAAAD/wAAD4A///wD///8A
		AA+AH/+AAAAAAAA+D/wf/8H/+D/wA+D///8A////AAAPgB//gAAAAAAAPg/8H//B//g/8APg////
		AP///wAAD4Af/4AAAAAAAD4P/B//wf/4P/AD4P///wD///8AAA+AH/+AAAAAAAA+D/wf/8H/+D/w
		A+D///8A////AAAPgB//gAAAAAAAPg/8H//B//g/8APg////AP//8PgB8H//+H//+AAPgD/wfB8A
		PgD4AAB8AA///wD///D4AfB///h///gAD4A/8HwfAD4A+AAAfAAP//8A///w+AHwf//4f//4AA+A
		P/B8HwA+APgAAHwAD///AP//8PgB8H//+H//+AAPgD/wfB8APgD4AAB8AA///wD///D4AfB///h/
		//gAD4A/8HwfAD4A+AAAfAAP//8A//////4AA+AAA///wf//wfB8Hwf+H///8APgD///AP/////+
		AAPgAAP//8H//8HwfB8H/h////AD4A///wD//////gAD4AAD///B///B8HwfB/4f///wA+AP//8A
		//////4AA+AAA///wf//wfB8Hwf+H///8APgD///AP/////B////+APgB8APg8AP////wAD//g+D
		/w///wD/////wf////gD4AfAD4PAD////8AA//4Pg/8P//8A/////8H////4A+AHwA+DwA/////A
		AP/+D4P/D///AP/////B////+APgB8APg8AP////wAD//g+D/w///wD/////wf////gD4AfAD4PA
		D////8AA//4Pg/8P//8A///wB8APg+AAAAD//gB/wfB8HwA/4AAAAHwfD///AP//8AfAD4PgAAAA
		//4Af8HwfB8AP+AAAAB8Hw///wD///AHwA+D4AAAAP/+AH/B8HwfAD/gAAAAfB8P//8A///wB8AP
		g+AAAAD//gB/wfB8HwA/4AAAAHwfD///AP//8AfAD4PgAAAA//4Af8HwfB8AP+AAAAB8Hw///wD/
		////////4Af8AAA//4PAAH//+D/gB//wfAD///8A/////////+AH/AAAP/+DwAB///g/4Af/8HwA
		////AP/////////gB/wAAD//g8AAf//4P+AH//B8AP///wD/////////4Af8AAA//4PAAH//+D/g
		B//wfAD///8A/////////+AH/AAAP/+DwAB///g/4Af/8HwA////AP//8AAAAAPg+AP/+AAP/8AA
		A+AHwB8HwfB8Hw///wD///AAAAAD4PgD//gAD//AAAPgB8AfB8HwfB8P//8A///wAAAAA+D4A//4
		AA//wAAD4AfAHwfB8HwfD///AP//8AAAAAPg+AP/+AAP/8AAA+AHwB8HwfB8Hw///wD///AAAAAD
		4PgD//gAD//AAAPgB8AfB8HwfB8P//8A///w////g///g////gB8AA+D/wAB4Af/8APgD///AP//
		8P///4P//4P///4AfAAPg/8AAeAH//AD4A///wD///D///+D//+D///+AHwAD4P/AAHgB//wA+AP
		//8A///w////g///g////gB8AA+D/wAB4Af/8APgD///AP//8P///4P//4P///4AfAAPg/8AAeAH
		//AD4A///wD///D4AA+D4AAAAAA/8AA+D///AAHgAAAAA+D///8A///w+AAPg+AAAAAAP/AAPg//
		/wAB4AAAAAPg////AP//8PgAD4PgAAAAAD/wAD4P//8AAeAAAAAD4P///wD///D4AA+D4AAAAAA/
		8AA+D///AAHgAAAAA+D///8A///w+AAPg+AAAAAAP/AAPg///wAB4AAAAAPg////AP//8PgAD4P/
		B4Pg////g8AAAB8H/h////+AHw///wD///D4AA+D/weD4P///4PAAAAfB/4f////gB8P//8A///w
		+AAPg/8Hg+D///+DwAAAHwf+H////4AfD///AP//8PgAD4P/B4Pg////g8AAAB8H/h////+AHw//
		/wD///D4AA+D/weD4P///4PAAAAfB/4f////gB8P//8A///w+AAPg/8H/AAHwAB/wAAD4Af/4P//
		/4AfD///AP//8PgAD4P/B/wAB8AAf8AAA+AH/+D///+AHw///wD///D4AA+D/wf8AAfAAH/AAAPg
		B//g////gB8P//8A///w+AAPg/8H/AAHwAB/wAAD4Af/4P///4AfD///AP//8PgAD4P/B/wAB8AA
		f8AAA+AH/+D///+AHw///wD///D///+D//h8APg+D//B8H//B8H/B8AAA+AP//8A///w////g//4
		fAD4Pg//wfB//wfB/wfAAAPgD///AP//8P///4P/+HwA+D4P/8Hwf/8Hwf8HwAAD4A///wD///D/
		//+D//h8APg+D//B8H//B8H/B8AAA+AP//8A///w////g//4fAD4Pg//wfB//wfB/wfAAAPgD///
		AP//8AAAAAPg//wfB8AP/8HwA//4Af8APg+AAP///wD///AAAAAD4P/8HwfAD//B8AP/+AH/AD4P
		gAD///8A///wAAAAA+D//B8HwA//wfAD//gB/wA+D4AA////AP//8AAAAAPg//wfB8AP/8HwA//4
		Af8APg+AAP///wD///////////////////////////////////////8A////////////////////
		////////////////////AP///////////////////////////////////////wD/////////////
		//////////////////////////8A////////////////////////////////////////AP//////
		/////////////////////////////////wD///////////////////////////////////////8A
		////////////////////////////////////////AP//////////////////////////////////
		/////wD///////////////////////////////////////8A////////////////////////////
		////////////AP///////////////////////////////////////wD/////////////////////
		//////////////////8A////////////////////////////////////////AP//////////////
		/////////////////////////wD///////////////////////////////////////8A////////
		////////////////////////////////AP///////////////////////////////////////wD/
		//////////////////////////////////////8A////////////////////////////////////
		/////21ydWg8IxQAAAAASUVORK5CYII="/>

		

	    </div>

	  </div>
	</div>
      </div>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
      $(document).ready(function(){
      $(".coin").on("click", function(){
    $(this).find("img").toggleClass("crypto_qr");
  });
});

</script>




  </body>
  
</html>

    

<html>
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery.min.js"></script>

    <style type="text/css" media="screen">
      .flexbox_container_link_list_links{
      display: flex;
      justify-content: space-between;
      margin-right: 100px;
      padding-right: 50px;
      background-color: #556b2f;
      }
      
      .box{

      }
      li{
      cursor: pointer;
      }
      /* for the linklist */
      div#majhi_awesome_list .link_list_links{
      font-family: "Courier New", Courier, monospace; 
      width: 100%;
      font-size: 20px;
      line-height: 0.9;
      letter-spacing: 0.045em;
      font-weight: 500;
      margin: 5px;
      padding: 10px;
      }
      /* styling for lists */
      div#majhi_awesome_list ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      }
      li a{
      color: white;
      text-decoration: none;
      }
      li:hover a{
      color: black;
      }
      div#majhi_awesome_list li {
      padding: 8px;
      margin-bottom: 7px;
      background-color: #008080;
      color: #ffffff;
      box-shadow: 0 1px 6px #ffd700, 0 1px 2px #7fff00;
      }
      div#majhi_awesome_list li:hover {
      background-color: #add8e6;
      color: black;
      }

      /* for mobile phones */
      /* Responsive layout 800px */
      @media (max-width: 800px) {
      .flexbox_container_link_list_links{
      margin-right: 10px;
      }
      div#majhi_awesome_list .link_list_links{
      font-size: 10px;
      
      }
      .flexbox_container_link_list_links{
      display: block;
      }
      }


      
    </style>
  </head>
  <body>


<!--https://css-tricks.com/snippets/jquery/make-entire-div-clickable/-->

    <div id="majhi_awesome_list" class="flexbox_container_link_list_links">
      <div class="box">
	<div class="link_list_links">
	  <ul>
	    <li><a href="/covid1/index.html">World Covid-19 tracker </a></li>
	    <li><a href="/covid1/compare/active.php">Compare two different country</a></li>
	    <li><a href="/covid1/daily_covid19_data.php">Covid-19 statistics, World (Today)</a></li>
	    <li><a href="/covid1/calendar.php">Covid-19 older records, World</a></li>
	    <li><a href="/covid1/active_piechart_table.php">Countries ranked by active cases</a></li>
	    <li><a href="/covid1/total_piechart_table.php">Countries ranked by total cases</a></li>
	    <li><a href="/covid1/cfr_piechart_table.php">Countries ranked by CFR</a></li>
	    <li><a href="/covid1/deaths_piechart_table.php">Counteries ranked by death cases</a></li>
	    <li><a href="/covid1/recovered_piechart_table.php">Counteries ranked by recovery cases</a></li>
	    <li><a href="/covid1/cases_per_million_piechart_table.php">Counteries ranked by cases per million</a></li>
	    <li><a href="/covid1/covid_distribution_top_ten.html">Top ten affected countries</a></li>    
	    <li><a href="/covid1/covid_distribution_top_ten.html">Covid-19 pie charts, World</a></li>
	    <li><a href="/covid1/world/change_in_covid_cases_last_week.php" target="_blank">Change in Covid-19 cases in different countries in the last week</a></li>
	    <li><a href="/covid1/world_a/7.php" target="_blank">Change in number of active Covid-19 cases in different countries in the last week</a></li>
	    <li><a href="/covid1/world_a/7.php" target="_blank">Number of active Covid-19 cases in different countries in the last week</a></li>
	  </ul>
	</div>
      </div>
      <div class="box">
	<div class="link_list_links">
	  <ul>
	    <li><a href="/covid2/covid_india_tracker.html"  >India Covid-19 tracker</a></li>
	    <li><a href="/covid2/compare_two_states.php"  >Compare two Indian states</a></li>
	    <li><a href="/covid2/states_table.php"  >Covid-19 statistics, India (Today)</a></li>
            <li><a href="/covid2/calendar.php"  >Access older records, Covid-19 India</a></li>
    	    <li><a href="/covid2/india_cfr_placeholder.php"  >CFR across Indian states</a></li>
            <li><a href="/covid2/pan_india.php"  >Pan India Covid-19 data</a></li>
            <li><a href="/covid2/top_ten_states.php"  >Top ten affected Indian states</a></li>
            <li><a href="/covid2/india_deaths_placeholder.php"  >Covid-19 deaths in India</a></li>
	    <li><a href="/covid2/india_recovered_placeholder.php"  >Covid-19 recovery cases in India</a></li>
	    <li><a href="/covid2/india_active_placeholder.php"  >Covid-19 active cases in India</a></li>
	    <li><a href="/covid2/covid_distribution.php"  >Covid-19 pie charts, India</a></li>
	    <li><a href="/covid2/india/last_week.php" target="_blank">Change in Covid-19 cases in India in the last week</a></li>
	    <li><a href="/covid2/india_a/7.php" target="_blank">Change in number of active Covid-19 cases in India in the last week</a></li>
	    <li><a href="/covid2/india_a/7.php" target="_blank">Number of active Covid-19 cases in different Indian states in the last week</a></li>
	    <li><a href="/calculator/index.html"  >Online calculators</a></li>    

	  </ul>
	</div>
      </div>
    </div>

    <script>
$("div.link_list_links ul li").click(function() {
  window.location = $(this).find("a").attr("href"); 
  return false;
});


    </script>


  </body>
  
</html>




  </body>
  
</html>


