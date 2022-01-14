# Stegosaurus

## Description
Steghide the Stegosaurus is hiding something behind him with his strange aluring uwu face... Can you find it?

## Hint

The species name in all lower case is the key

## Solution

This is a steganography challenge. Steganography is a method of hiding a message in something like a file. In this challenge, the hint implies a key is used for the challenge. Without knowledge of different names and appearances of dinasours, [Google Images](https://www.google.com/imghp) search engine is your friend. After searching for "dinasours with spikes on the back", you can find a picture that matches the challenge image and a description indicating the image is a stegosaurus.

Steghide is a steganography tool that can extract embedded data with a provided passphrase.
The flag can be extracted by using `stegosaurus` as the passphrase.

```
❯ steghide extract -sf stegosaurus.jpg
Enter passphrase:
wrote extracted data to "steganopayload180428.txt".
❯ cat steganopayload180428.txt
❯ gigem{C4N_YU0_S33_TH3_ST3GG0}
```

Flag: `gigem{C4N_YU0_S33_TH3_ST3GG0}`

Note:
You can also use an [online stegographic tool](https://futureboy.us/stegano/decinput.html) and obtain the image with password `stegosaurus` to find the flag.
