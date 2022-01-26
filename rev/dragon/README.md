# Dragon
## Description
A [dragon](https://ghidra-sre.org/) gave me this mysterious box, but I don't know what to do with it. I wonder if there's a flag inside?

## Solution
Open the binary in Ghidra, and analyze it. The disassembled main function looks like this:
```
undefined8 main(int param_1,long param_2)

{
  char *pcVar1;

  if (((((((param_1 == 2) && (pcVar1 = *(char **)(param_2 + 8), *pcVar1 == 'g')) &&
         (pcVar1[1] == 'i')) && ((pcVar1[2] == 'g' && (pcVar1[3] == 'e')))) && (pcVar1[4] == 'm'))
      && (((((pcVar1[5] == '{' && (pcVar1[6] == 'd')) &&
            ((pcVar1[7] == '3' &&
             (((pcVar1[8] == 'c' && (pcVar1[9] == '0')) && (pcVar1[10] == 'm')))))) &&
           ((pcVar1[0xb] == 'p' && (pcVar1[0xc] == '1')))) && (pcVar1[0xd] == 'l')))) &&
     ((((pcVar1[0xe] == '4' && (pcVar1[0xf] == 't')) &&
       ((pcVar1[0x10] == '1' &&
        (((pcVar1[0x11] == '0' && (pcVar1[0x12] == 'n')) && (pcVar1[0x13] == '_')))))) &&
      (((pcVar1[0x14] == 'g' && (pcVar1[0x15] == '0')) &&
       ((pcVar1[0x16] == '_' &&
        (((pcVar1[0x17] == 'b' && (pcVar1[0x18] == 'r')) &&
         ((pcVar1[0x19] == 'r' && (pcVar1[0x1a] == '}')))))))))))) {
    puts("that\'s the flag! :D");
  }
  else {
    puts("that\'s not the flag D:");
  }
  return 0;
```
The if statement is just checking each individual character of the flag, reassemble the flag in order:

`gigem{d3c0mp1l4t10n_g0_brr}`
