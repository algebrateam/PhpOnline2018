<?php

/* 
 * @author PMrvic
 * @example
 * $myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
 * echo fread($myfile,filesize("webdictionary.txt"));
 * fclose($myfile);
 * 
 * Modes	Description
 * r	Open a file for read only. File pointer starts at the beginning of the file
 * w	Open a file for write only. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
 * a	Open a file for write only. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
 * x	Creates a new file for write only. Returns FALSE and an error if file already exists
 * r+	Open a file for read/write. File pointer starts at the beginning of the file
 * w+	Open a file for read/write. Erases the contents of the file or creates a new file if it doesn't exist. File pointer starts at the beginning of the file
 * a+	Open a file for read/write. The existing data in file is preserved. File pointer starts at the end of the file. Creates a new file if the file doesn't exist
 * x+	Creates a new file for read/write. Returns FALSE and an error if file already exists
 */

// Koraci:
// 1. pripremi $handle sa fopen()
// 2. prebaci sadržaj u čitljiv oblik -> string fread()
// 3. ispiši sa echo

// 'polaznici.txt';     --> direktan pristup u istom direktoriju
// './../obandic/polaznici.txt';   --> relativna putanja od trenutnog dir
// '/msvraka/polaznici.txt';  --> apsolutna putanja

$filename='./polaznici.txt';  // najispravnije
$mode='r';

$handle= fopen($filename, $mode);  //$handle je tipa 'Resource'

//echo $handle;  // ispisuje 'Resource id #3' -> beskorisno


// fread(<Resource>,<int>);  // int duljina u bajtovima
$contents=fread($handle, filesize($filename));
fclose($handle);  // obavezno zatvori stream 
echo $contents;




