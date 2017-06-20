<?php

/*
Deoxyribonucleic acid (DNA) is a chemical found in the nucleus of cells and carries the "instructions" for the development and functioning of living organisms.

If you want to know more http://en.wikipedia.org/wiki/DNA

In DNA strings, symbols "A" and "T" are complements of each other, as "C" and "G". You have function with one side of the DNA (string); you need to get the other complementary side. DNA strand is never empty or there is no DNA at all.

DNA_strand("ATTGC") // returns: "TAACG"
DNA_strand("GTAT") // returns: "CATA"
 */

function DNA_strand($dna) {
	$conversion = ["A"=>"T","T"=>"A","G"=>"C", "C"=>"G"];
	$dna = str_split($dna);
	$res = "";
	foreach($dna as $el){
		$res .= $conversion[$el]; 
	}
	return $res;
}

?>