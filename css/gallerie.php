<?php
header('content-type: text/css');

if (isset($_GET['type'])) {
    $type = $_GET['type'];
}
?>
#gallerie img {
width: 300px;
height: 300px;
float:left;
margin:10px;
border:3px solid black;
margin-top:-20px;
}

#gallerie p {
width:100%;
display: flex;
justify-content: center;
align-items: center;
}

header ul {
display: flex; /* Ce conteneur est "flexible" */
flex-direction: row; /* Les éléments sont mis côte à côte */
justify-content: space-between; /* Les éléments sont répartis équitablement */
//background-color: lightblue; /* Couleur du fond */
}

header ul:nth-child(5) {
border-top:5px solid red;
margin-bottom:0;
}

header ul:last-child {
border-bottom:5px solid red;
}

header ul li {
display: flex; /* Ce conteneur est "flexible" */
justify-content: center; /* Les éléments portés sont centrés à l'horizontal */
list-style-type: none; /* Cette liste n'a pas de puce */
font-size: x-large; /* Le texte est grossi en XL */
flex-grow: 1; /* L'espace occupé est élargie */
}

header ul li a {
padding: 10px; /* Marge intérieure */
color: black; /* Couleur du texte */
}
header ul li:hover {
background-color: CornflowerBlue; /* Couleur du fond au passage de la souris */
}

#container {
display:block;
}

#container input {
display: none;
}

body{
<?php
switch ($type) {
    case 1;
        echo 'background-color: #E0CDA9';
        break;
    case 2;
        echo 'background-color: #BFBFBF;';
        break;
    case 3:
        echo 'background-color: Thistle;';
        break;
}
?>
}

<?php
if ($type == 1) {
    ?>
    header div:first-child {
    background-image: url('../images/lycee.jpg');
    background-repeat:no-repeat;
    background-size:cover;
    }
    <?php
}
?>

@media screen and (max-width:576px)
{
#gallerie img {
float:none;
width:100%;
margin-left:0;
margin-right:0;
}
#gallerie p {
display:block;

}
#carousel {
display:none;
}

#container input {
width: 100%;
height: 30px;
display: block;
position: absolute;
opacity: 0;
z-index: 2;
}

header span {
display: block;
width: 30px;
height: 5px;
margin-bottom: 5px;
position: relative;
background: black;
border-radius: 3px;
z-index: 1; /* En dessous de l'input défini avant */
transition: transform 0.5s ease, background 0.5s ease;
}

header ul {
display: none;
flex-direction: column;
align-items: flex-start;
background: black;
list-style-type: none;
width: 100%;
clear: both;
}
header ul li a {
color:white;
}

header ul li {
display: list-item;
padding: 10px 0;
width: 100%;
}

header input:checked ~ span {
background: white;
}

header input:checked ~ span:nth-child(2) {
transform: rotate(45deg) translate(7px, 7px);
}

header input:checked ~ span:nth-child(4) {
transform: rotate(-45deg) translate(7px, -7px);
}

header input:checked ~ span:nth-child(3) {
opacity: 0;
}

header input:checked ~ ul {
display: block;
}
}



#carousel {
position: relative;
height: 400px;
top: 50%;
transform: translateY(-50%);
overflow: hidden;
margin-top: 200px;
}
#carousel div {
position: absolute;
transition: transform 1s, left 1s, opacity 1s, z-index 0s;
opacity: 1;
}
#carousel div img {
width: 400px;
transition: width 1s;
}
#carousel div.hideLeft {
left: 0%;
opacity: 0;
transform: translateY(50%) translateX(-50%);
}
#carousel div.hideLeft img {
width: 200px;
}
#carousel div.hideRight {
left: 100%;
opacity: 0;
transform: translateY(50%) translateX(-50%);
}
#carousel div.hideRight img {
width: 200px;
}
#carousel div.prev {
z-index: 5;
left: 30%;
transform: translateY(50px) translateX(-50%);
}
#carousel div.prev img {
width: 300px;
}
#carousel div.prevLeftSecond {
z-index: 4;
left: 15%;
transform: translateY(50%) translateX(-50%);
opacity: 0.7;
}
#carousel div.prevLeftSecond img {
width: 200px;
}
#carousel div.selected {
z-index: 10;
left: 50%;
transform: translateY(0px) translateX(-50%);
}
#carousel div.next {
z-index: 5;
left: 70%;
transform: translateY(50px) translateX(-50%);
}
#carousel div.next img {
width: 300px;
}
#carousel div.nextRightSecond {
z-index: 4;
left: 85%;
transform: translateY(50%) translateX(-50%);
opacity: 0.7;
}
#carousel div.nextRightSecond img {
width: 200px;
}

.buttons {
position: fixed;
left: 50%;
transform: translateX(-50%);
bottom: 10px;
}
#tout {
position: relative;
top=100px
padding-top=100px;
}

.selected {
margin-top:70px;
}