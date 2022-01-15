# Zippy

## Description
We found this suspiciously named zip file, but it seems to be password protected. Can you get in?

## Solution
We are given a password-protected file that we can try a brute force or dictionary attack to find the correct password.
It is best to start off with a dictionary attack because it attempts to check if the password can be found from well know list of passwords or phrases which are contained in a wordlist (a predefined list of words).

Passwords are commonly stored as a hash that is composed of a combination of characters generated from a given input. There are different hashing algorithms that determine the length of a hash and the valid characters, but they all share the same property that any change in the input should generate a completely different output and a hash value can not be reversed to generate the input value. 

A common password cracking tool is John (John the Ripper). John comes with a suite of commands to find weak passwords. zip2john converts a zip file into a hash format so that John can potentially crack the password. Once the hash has been generated, you can use john with a commonly used wordlist like rockyou.txt to perform a dictionary attack against the zip file.

```
❯ zip2john secrets.zip > hash.txt
❯ john --wordlist=rockyou.txt hash.txt
❯ john --show hash.txt
secrets.zip/secrets/flag.txt:aggies08:secrets/flag.txt:secrets.zip:secrets.zip

1 password hash cracked, 0 left
```
The password for the zip file was found to be `aggies08`.
```
❯ 7z x -paggies08 secrets.zip
❯ cat secrets/flag.txt
❯ gigem{us3_b3tt3r_p4ssw0rd5}
```
Flag: `gigem{us3_b3tt3r_p4ssw0rd5}`
