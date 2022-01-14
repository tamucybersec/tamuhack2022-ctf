# Stegosaurus

## Description
Steghide the Stegosaurus is hiding something behind him with his strange aluring uwu face... Can you find it?

## Hint

The species name in all lower case is the key

## Solution

This is steganography challenge. Steganography is a method of hiding a message in something like a file. In this challenge, the hint implies a key is used for the challenge. Without knowledge of dinasours, google image search is your friend (https://www.google.com/imghp). After searching for "dinosaur with spikes on back", you can find a picture that matches the challenge image and the description indidcating the image contains a stegosaurus.

Steghide is a steganography tool that can extract embedded data with a provided passphrase.
Using `stegosaurus` as the passphrase, the flag can be extracted.

❯ steghide extract -sf stegosaurus.jpg
Enter passphrase:
wrote extracted data to "steganopayload180428.txt".
❯ cat steganopayload180428.txt
❯ gigem{C4N_YU0_S33_TH3_ST3GG0}

Flag: `gigem{C4N_YU0_S33_TH3_ST3GG0}`

Note:
You can also use an [online Stegographic tool](https://futureboy.us/stegano/decinput.html) and obtain the image with the password `stegosaurus` to find the key `gigem{C4N_YU0_S33_TH3_ST3GG0}`
