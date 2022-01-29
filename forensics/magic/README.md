# Magic

## Description
I have a PDF of the flag, but it seems to be corrupted. Can you figure out the flag for me?

## Solution
In general, file extensions and magic bytes (a sequence of numbers at the beginning of a file) are just suggestions to the operating system -- the file could lie and contain something completely different. In this case, the file has a PDF extension and starts with the correct magic bytes, but the content after the magic bytes is just ASCII plaintext. If you examine the file in a hex editor (a program that shows the raw bytes of a file), you can see the exact values of each byte, regardless of the extension/magic bytes. In this case, you can also cheese the challenge with `strings` since the flag is just sitting in the file.
```
$ strings flag.pdf
%PDF-4.2gigem{m4g1c_byt35_g0_brrr}
```
