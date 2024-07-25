<?php
define("GREETING","Hello you! How are you today?");
echo constant("GREETING");
?>

define = const
GREETING = name der Constante
"Hello you! How are you today?"= value  der Constante 
const GREETING = HEllo you! // so wäre es in Javascript

normale variablen machen wir mit $
$x = 5
$y= "John"  // Also wie bei Jquery diese variablen sind wie let also kann man sie verändern


STRINGS

define("SAID",dalkilic)

```strlen(SAID) = 8    das ist .length von javascript 
strtoupper = .toUpperCase
strtolower = .toLowerCase


str_replace("d", "t",$SAID)
erste sagt was gewechselt werden soll
zweite sagt womit wir es wechseln
dritte sagt im welcher variable


NUMBERS 

$radius= 25 integer whole number
$pi= 3.14  Float

(B I D M A S) punkt vor strich rechnung auf englisch
floor($float) genau wie in Js mit .round oder .floor


ARRAYS

$peopleOne = ["said","ali","Dalkilic"]
$peopleOne[1] = ali

ANDERE WEG FÜR ARRAY MIT FUNC ER ERSTELLT SOZUSAGEN ARRAY FÜR UNS

$peopleTwo = array("said","ali")

beides ist am ende genau gleich

wenn du komplettes array zeigen willst musst du print_r(array) benutzen damit er alle schritte zeigen kann und 'must' das benutzen

wenns keine const ist kann man es ganz einfach verändern indem man es neu bennent mit $peopleTwo[0]='Mirell'
$peopleTwo[]='Mirell' wenns leer ist kannst du neue hinzufügen die kommen immer ans Ende

count($arrays) macht .length im array 

array_merge($arrayOne,$arrayTwo) wie der name schon sagt verbindet er beide lässt sie verschmelzen

associative arrays (key & value pairs)

$ninjasone = ['shaun' => 'black', 'said'=>'red']
echo $ninjasone['said'] //red  weil er den value vom key ausgibt

$ninjasone['peach']='pink'  es wird hinzugefügt man kann es auch updaten in dem man einfach ein neue value eingibt


GET nimmt alle Informationen aus dem Form aber schickt sie in url ab deswegen benuzen wir POST damit wir die daten nicht im url anzeigen aber es wird trotzdem an server geschickt

XSS ATTACKS

 htmlspecialchars() diese funktion beschützt deine Input felder von injections

 filter_var(const,FILTER_VALIDATE_EMAIL)  vorgefertigte filters von php zuerst kommt rein was gecheckt werden soll und dann welcher Filter benutzt werden soll in diesem Fall Email

preg_match_all — Führt eine vollständige Suche mit einem regulären Ausdruck durch

preg_match() wie der name schon sagt matcht er er guckt ob das eingegebene mit dem subject übereinstimmt du brauchst pattern und subject
pattern = Inhalt was man angegeben hat 
subject = das wonach gematcht werden soll  also wird pattern hier vergliechen
matches = falls es doppelte gibt also es wurde z.b zwei mal gefunden wonach du gesucht hast wirds als array wider gegeben asl Tabelle 
matches Array
(
    [0] => bar
    [1] => barsolut
)










