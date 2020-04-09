<h1>Use the <code>!empty()</code> function rather than  <code>isset()</code></h1>
<p>
<strong>Le langage PHP est un langage typé !</strong> Certe faiblement, puisque le typage n'intervient que pour des tâches de bas niveau.<br>
La fonction <code>isset()</code> est toujours vraie sauf pour <code>NULL</code>, elle ne sert donc à rien !<br>
En revanche, <code>!empty()</code> réagit de la même manière qu'une condition ordinaire et permet de ne pas avoir d'erreur :
</p>

<?php

function br() {
	echo "<br />";
}

function vrai() {
	return "true";
}

function faux() {
	return "false";
}

function testCondition ($truc) {
	echo '<strong>',
	($truc) ? vrai() : faux(),
	"</strong>";
	br();
}


function testEmpty ($truc) {
	echo '<strong style="color: green;">',
	(!empty($truc)) ? vrai() : faux(),
	"</strong>";
	br();
}


function testIsset ($truc) {
	echo '<strong style="color: red;">',
	(isset($truc)) ? vrai() : faux(),
	"</strong>";
	br();
}

function test($truc) {
	var_dump($truc);
	br();
	echo "Condition ordinaire : ";
	testCondition($truc);
	echo "!empty : ";
	testEmpty($truc);
	echo "isset : ";
	testIsset($truc);
	br();
}

test(0);
test('0');
test(false);
test("false");
test(1);
test('1');
test(true);
test("true");
test(NULL);
test("NULL");
