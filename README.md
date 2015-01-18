# Tester
A web based language tester for Japanese (could be extended to Chinese quite easily). Written in php and javascript

Purpose is to provide a tester for vocabulary in Japanese.
Reads from datafiles which are triplets of Kanji, Hiragana and English and 
presents them in a random order to the user. 
When a test case is marked as correct it is 
removed from the list. List loops until all test cases are correct.
The full set of test cases are downloaded on initial file open so that can 
be run without constant access to the web server.

I wrote this for my own use but if anyone finds it useful and wants to add 
features please let me know.
